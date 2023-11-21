<?php

namespace CloudCastle\CryptoProPhpApi;

use CloudCastle\CryptoProPhpApi\Abstracts\Bin;
use CloudCastle\CryptoProPhpApi\Bin\CertMgr\CertMgr;
use CloudCastle\CryptoProPhpApi\Bin\CpConfig\CpConfig;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\CryptCp;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\CspTest;
use CloudCastle\CryptoProPhpApi\Bin\CspTestF\CspTestF;
use CloudCastle\CryptoProPhpApi\Bin\Curl\Curl;

final class CryptoProManager
{
    private ?CertMgr $certmgr = null;

    private ?CryptCp $cryptcp = null;

    private ?CpConfig $cpconfig = null;

    private ?CspTest $cspTest = null;

    private ?CspTestF $cspTestF = null;

    private ?Bin $command = null;

    private ?string $user = null;

    private ?Curl $curl = null;

    public function __construct()
    {
        $this->certmgr = new CertMgr();
        $this->cryptcp = new CryptCp();
        $this->cpconfig = new CpConfig();
        $this->cspTest = new CspTest();
        $this->cspTestF = new CspTestF();
        $this->curl = new Curl();
    }

    /**
     * Выполнить команду от имени пользователя $userName
     * Для того, чтобы выполнить команду от имени другого пользователя,
     * необходимо добавить текущего пользователя в группу sudo.
     * Так же у пользователя $userName должна быть активная лицензия Крипто-про
     *
     * @return $this
     */
    public function user(string $userName): self
    {
        $this->user = "sudo --user={$userName} -Ss";

        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    /**
     * Утилита командной строки для управления сертификатами, списками отзыва сертификатов (CRL) и хранилищами.
     */
    public function certMgr(): CertMgr
    {
        $this->command = $this->certmgr;

        return $this->command;
    }

    public function cspTest(): CspTest
    {
        $this->command = $this->cspTest;

        return $this->command;
    }

    public function cspTestF(): CspTestF
    {
        $this->command = $this->cspTestF;

        return $this->command;
    }

    /**
     * Подпись и шифрование файлов
     */
    public function cryptCp(): CryptCp
    {
        $this->command = $this->cryptcp;

        return $this->command;
    }

    /**
     * Настройка СКЗИ
     */
    public function cpConfig(): CpConfig
    {
        $this->command = $this->cpconfig;

        return $this->command;
    }

    /**
     * Выполнить команду и вернуть результат
     */
    public function exec(string $msg = null): array
    {
        $command = $this->command;
        if ($this->user) {
            $command = $this->user.' '.$this->command;
        }
        if (! $msg) {
            exec($command, $output, $code);
        } else {
            extract($this->proc($command, $msg));
        }

        return compact('output', 'code', 'command');
    }

    private function proc(string $command, string $msg): array
    {
        $pipes = [];
        $errorFile = __DIR__.DIRECTORY_SEPARATOR.'error.txt';
        $desc = [
            ['pipe', 'r'],
            ['pipe', 'w'],
            ['file', $errorFile, 'a'],
        ];
        $output = [];
        $code = 255;
        $process = proc_open($command, $desc, $pipes);

        if (is_resource($process)) {
            fwrite($pipes[0], $msg);
            fclose($pipes[0]);
            $output = explode("\n", stream_get_contents($pipes[1]));
            fclose($pipes[1]);
            $code = proc_close($process);
        }

        if (! $output && file_exists($errorFile) && ($errors = explode("\n", file_get_contents($errorFile)))) {
            $output = $errors;
        }

        return compact('output', 'code', 'command');
    }

    final public function __toString(): string
    {
        $command = $this->command;

        if ($this->user) {
            $command = $this->user.' '.$this->command;
        }

        return $command;
    }

    public function curl(): Curl
    {
        $this->command = $this->curl;

        return $this->command;
    }
}

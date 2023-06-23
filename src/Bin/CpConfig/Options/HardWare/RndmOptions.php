<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\HardWare;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\Traits\AddTrait;
use CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\Traits\LevelTrait;
use CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\Traits\NameTrait;
use CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\Traits\StringTrait;
use CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\Traits\ViewTrait;

final class RndmOptions extends Options
{

    use ViewTrait, AddTrait, LevelTrait, NameTrait, StringTrait;

    public function __construct()
    {
        $this->setOptions('rndm');
    }

    /**
     * @return $this
     */
    public function bioTui(): self
    {
        $this->setOptions('bio_tui');
        return $this;
    }

    /**
     * @return $this
     */
    public function configure(): self
    {
        $this->setOptions('-configure');
        return $this;
    }

    /**
     * @return $this
     */
    public function cpsd(): self
    {
        $this->setOptions('cpsd');
        return $this;
    }
}
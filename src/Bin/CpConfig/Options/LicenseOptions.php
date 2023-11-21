<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;

final class LicenseOptions extends Options
{
    /**
     * Установка лицензии
     *
     * @return $this
     */
    public function set(string $license): self
    {
        $license = preg_replace(
            [
                '~(\W+)~iu',
                '~^(\w{5})(\w{5})(\w{5})(\w{5})(\w{5})$~'],
            [
                '',
                '$1-$2-$3-$4-$5',
            ],
            mb_strtoupper(trim($license))
        );
        $this->setOptions('-setlocal '.$license);

        return $this;
    }

    /**
     * @return $this
     */
    public function view(): self
    {
        $this->setOptions('-view ');

        return $this;
    }
}

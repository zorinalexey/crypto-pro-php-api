<?php

namespace CloudCastle\CryptoProPhpApi\Bin;

use CloudCastle\CryptoProPhpApi\Abstracts\Bin as AbstractBin;
use CloudCastle\CryptoProPhpApi\Abstracts\Options;

abstract class Bin extends AbstractBin
{
    private ?string $command = null;

    private ?Options $options = null;

    final public function __toString(): string
    {
        return sprintf('%s%s', $this->getCommand(), $this->getOptions());
    }

    final protected function getCommand(): ?string
    {
        return $this->command;
    }

    final protected function setCommand(string $command): void
    {
        $this->command .= $command.' ';
    }

    final protected function getOptions(): Options
    {
        return $this->options;
    }

    final protected function setOptions(?Options $options): void
    {
        $this->options = $options;
    }
}

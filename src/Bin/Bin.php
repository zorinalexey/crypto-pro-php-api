<?php

namespace CloudCastle\CryptoProPhpApi\Bin;

use CloudCastle\CryptoProPhpApi\Abstracts\Bin as AbstractBin;
use CloudCastle\CryptoProPhpApi\Abstracts\Options;

abstract class Bin extends AbstractBin
{
    private string|null $command = null;
    private Options|null $options = null;

    final public function __toString(): string
    {
        return sprintf("%s%s", $this->getCommand(), $this->getOptions());
    }

    /**
     * @return string|null
     */
    final protected function getCommand(): string|null
    {
        return $this->command;
    }

    /**
     * @param string $command
     */
    final protected function setCommand(string $command): void
    {
        $this->command .= $command . ' ';
    }

    /**
     * @return Options
     */
    final protected function getOptions(): Options
    {
        return $this->options;
    }

    /**
     * @param Options|null $options
     */
    final protected function setOptions(Options|null $options): void
    {
        $this->options = $options;
    }
}
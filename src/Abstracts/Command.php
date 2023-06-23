<?php

namespace CloudCastle\CryptoProPhpApi\Abstracts;

abstract class Command
{
    private string|null $command = null;

    private Options|null $options = null;

    final public function __toString(): string
    {
        return $this->getCommand() . ' ' . (string)$this->options;
    }

    /**
     * @return string|null
     */
    final public function getCommand(): string|null
    {
        return $this->command;
    }

    /**
     * @param string|null $command
     */
    final public function setCommand(string|null $command): void
    {
        $this->command = $command;
    }

}
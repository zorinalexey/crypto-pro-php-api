<?php

namespace CloudCastle\CryptoProPhpApi\Abstracts;

abstract class Command
{
    private ?string $command = null;

    private ?Options $options = null;

    final public function __toString(): string
    {
        return $this->getCommand().' '.(string) $this->options;
    }

    final public function getCommand(): ?string
    {
        return $this->command;
    }

    final public function setCommand(?string $command): void
    {
        $this->command = $command;
    }
}

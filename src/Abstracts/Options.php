<?php

namespace CloudCastle\CryptoProPhpApi\Abstracts;

abstract class Options
{
    private array $options = [];

    final public function __toString(): string
    {
        return implode(' ', $this->getOptions());
    }

    final protected function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param  string|Options  $options Значение опции
     * @param  string|null  $key Ключ индекса для добавления или изменения значения
     * @param  string|null  $separator Разделитель значений опции
     */
    final protected function setOptions(string|self $options, string $key = null, string $separator = null): bool
    {
        if ($options instanceof self) {
            $this->options[] = $options;

            return true;
        }
        if (! $key) {
            $this->options[] = $options;

            return true;
        }
        if ($separator === null || ! isset($this->options[$key])) {
            $this->options[$key] = $key.' '.$options;

            return true;
        }
        if (isset($this->options[$key]) && $separator) {
            $this->options[$key] .= $separator.$options;

            return true;
        }

        return false;
    }

    final public function setOption(string $paramName, string $paramValue): static
    {
        $this->setOptions($paramName, $paramValue);

        return $this;
    }
}

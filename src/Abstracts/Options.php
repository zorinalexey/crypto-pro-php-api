<?php

namespace CloudCastle\CryptoProPhpApi\Abstracts;

abstract class Options
{
    private array $options = [];

    final public function __toString(): string
    {
        return implode(' ', $this->getOptions());
    }

    /**
     * @return array
     */
    final protected function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param string|Options $options Значение опции
     * @param string|null $key Ключ индекса для добавления или изменения значения
     * @param string|null $separator Разделитель значений опции
     * @return bool
     */
    final protected function setOptions(string|self $options, string|null $key = null, string|null $separator = null): bool
    {
        if ($options instanceof self) {
            $this->options[] = $options;
            return true;
        }
        if (!$key) {
            $this->options[] = $options;
            return true;
        }
        if ($separator === null || !isset($this->options[$key])) {
            $this->options[$key] = $key . ' ' . $options;
            return true;
        }
        if (isset($this->options[$key]) && $separator) {
            $this->options[$key] .= $separator . $options;
            return true;
        }
        return false;
    }

}
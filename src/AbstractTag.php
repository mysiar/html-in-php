<?php
declare(strict_types=1);

namespace Mysiar\Html;

abstract class AbstractTag
{
    protected const TAG = '';

    abstract public function string(): string;

    /**
     * @param string[] $attr
     */
    public function attrParse(array $attr): string
    {
        $parsed = '';

        /**
         * @var string $key
         * @var string $val
         */
        foreach ($attr as $key => $val) {
            $parsed .= sprintf('%s="%s" ', $key, $val);
        }

        return rtrim($parsed);
    }
}

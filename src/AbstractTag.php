<?php
declare(strict_types=1);

namespace Mysiar\Html;

abstract class AbstractTag
{
    protected const TAG = '';

    /**
     * @var string[]
     */
    protected $attr;

    /**
     * @param string[] $attr
     */
    public function __construct(array $attr = [])
    {
        $this->attr = $attr;
    }

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

    abstract public function __toString(): string;
}

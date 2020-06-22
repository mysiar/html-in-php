<?php
declare(strict_types=1);

namespace Mysiar\Html;

abstract class AbstractSimpleTag extends AbstractTag
{
    /**
     * @var string
     */
    protected $value;

    /**
     * @var string[]
     */
    protected $attr;

    /**
     * @param string[] $attr
     */
    public function __construct(string $value, array $attr = [])
    {
        $this->value = $value;
        $this->attr = $attr;
    }

    protected function toString(string $tag): string
    {
        return sprintf(
            '<%s %s>%s</%s>',
            $tag,
            $this->attrParse($this->attr),
            $this->value,
            $tag
        );
    }
}

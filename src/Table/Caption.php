<?php
declare(strict_types=1);

namespace Mysiar\Html\Table;

use Mysiar\Html\AbstractTag;

class Caption extends AbstractTag
{
    protected const TAG = 'caption';

    /** @var string */
    private $value;

    /** @var array */
    private $attr;

    public function __construct(string $value, array $attr = [])
    {
        $this->value = $value;
        $this->attr = $attr;
    }

    public function getString(): string
    {
        return sprintf(
            '<%s %s>%s</%s>',
            self::TAG,
            $this->attrParse($this->attr),
            $this->value,
            self::TAG
        );
    }
}

<?php
declare(strict_types=1);

namespace Mysiar\Html\Table;

use Mysiar\Html\AbstractTag;

class Table extends AbstractTag
{
    protected const TAG = 'table';

    /**
     * @var Caption|null
     */
    private $caption = null;

    /**
     * @var Tbody|null
     */
    private $tbody = null;

    /**
     * @var Tfoot|null
     */
    private $tfoot = null;

    /**
     * @var Thead|null
     */
    private $thead = null;

    /** @var string[]  */
    private $attr;

    /**
     * @param string[] $attr
     */
    public function __construct(array $attr = [])
    {
        $this->attr = $attr;
    }

    /**
     */
    public function setCaption(?Caption $caption = null): Table
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     */
    public function setTbody(?Tbody $tbody): Table
    {
        $this->tbody = $tbody;
        return $this;
    }

    /**
     */
    public function setTfoot(?Tfoot $tfoot): Table
    {
        $this->tfoot = $tfoot;
        return $this;
    }

    /**
     */
    public function setThead(?Thead $thead): Table
    {
        $this->thead = $thead;
        return $this;
    }

    public function string(): string
    {
        return sprintf(
            '<%s %s>%s%s%s%s</%s>',
            self::TAG,
            $this->attrParse($this->attr),
            $this->caption ? $this->caption->string() : '',
            $this->thead ? $this->thead->string() : '',
            $this->tfoot ? $this->tfoot->string() : '',
            $this->tbody ? $this->tbody->string() : '',
            self::TAG
        );
    }
}

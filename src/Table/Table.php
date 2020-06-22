<?php
declare(strict_types=1);

namespace Mysiar\Html\Table;

use Mysiar\Html\AbstractTag;

class Table extends AbstractTag
{
    protected const TAG = 'table';

    /** @var Caption|null */
    private $caption = null;

    /** @var Tbody|null */
    private $tbody = null;

    /** @var Tfoot|null */
    private $tfoot = null;

    /** @var Thead|null */
    private $thead = null;

    private $attr;

    public function __construct(array $attr = [])
    {
        $this->attr = $attr;
    }

    /**
     * @param Caption|null $caption
     * @return Table
     */
    public function setCaption(?Caption $caption = null): Table
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param Tbody|null $tbody
     * @return Table
     */
    public function setTbody(?Tbody $tbody): Table
    {
        $this->tbody = $tbody;
        return $this;
    }

    /**
     * @param Tfoot|null $tfoot
     * @return Table
     */
    public function setTfoot(?Tfoot $tfoot): Table
    {
        $this->tfoot = $tfoot;
        return $this;
    }

    /**
     * @param Thead|null $thead
     * @return Table
     */
    public function setThead(?Thead $thead): Table
    {
        $this->thead = $thead;
        return $this;
    }

    public function getString(): string
    {
        return sprintf(
            '<%s %s>%s%s%s%s</%s>',
            self::TAG,
            $this->attrParse($this->attr),
            $this->caption ? $this->caption->getString() : '',
            $this->thead ? $this->thead->getString() : '',
            $this->tfoot ? $this->tfoot->getString() : '',
            $this->tbody ? $this->tbody->getString() : '',
            self::TAG
        );
    }
}

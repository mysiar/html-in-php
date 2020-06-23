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

    public function setCaption(?Caption $caption = null): Table
    {
        $this->caption = $caption;
        return $this;
    }

    public function setTbody(?Tbody $tbody): Table
    {
        $this->tbody = $tbody;
        return $this;
    }

    public function setTfoot(?Tfoot $tfoot): Table
    {
        $this->tfoot = $tfoot;
        return $this;
    }

    public function setThead(?Thead $thead): Table
    {
        $this->thead = $thead;
        return $this;
    }

    public function getCaption(): ?Caption
    {
        return $this->caption;
    }

    public function getTbody(): ?Tbody
    {
        return $this->tbody;
    }

    public function getTfoot(): ?Tfoot
    {
        return $this->tfoot;
    }

    public function getThead(): ?Thead
    {
        return $this->thead;
    }

    public function __toString(): string
    {
        return sprintf(
            '<%s %s>%s%s%s%s</%s>',
            self::TAG,
            $this->attrParse($this->attr),
            $this->caption ? $this->caption->__toString() : '',
            $this->thead ? $this->thead->__toString() : '',
            $this->tfoot ? $this->tfoot->__toString() : '',
            $this->tbody ? $this->tbody->__toString() : '',
            self::TAG
        );
    }
}

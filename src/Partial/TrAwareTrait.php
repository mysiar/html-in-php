<?php
declare(strict_types=1);

namespace Mysiar\Html\Partial;

use Mysiar\Html\Table\Tr;

trait TrAwareTrait
{
    /**
     * @var Tr[]
     */
    private $trs = [];

    public function addTr(Tr $tr): void
    {
        $this->trs[] = $tr;
    }

    /**
     * @return Tr[]
     */
    public function getTrs(): array
    {
        return $this->trs;
    }

    /**
     * @param  Tr[] $trs
     * @return $this
     */
    public function setTrs(array $trs)
    {
        $this->trs = $trs;
        return $this;
    }

    public function __toString(): string
    {
        /** @var string $trs */
        $trs = '';

        foreach ($this->trs as $tr) {
            $trs .= $tr->__toString();
        }

        return sprintf(
            '<%s %s>%s</%s>',
            self::TAG,
            $this->attrParse($this->attr),
            $trs,
            self::TAG
        );
    }
}

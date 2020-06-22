<?php
declare(strict_types=1);

namespace Mysiar\Html\Table;

use Mysiar\Html\AbstractTag;

class Thead extends AbstractTag
{
    protected const TAG = 'thead';

    /** @var Tr[] */
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
     * @param Tr[] $trs
     * @return Thead
     */
    public function setTrs(array $trs): Thead
    {
        $this->trs = $trs;
        return $this;
    }
}

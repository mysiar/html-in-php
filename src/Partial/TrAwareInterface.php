<?php
declare(strict_types=1);

namespace Mysiar\Html\Partial;

use Mysiar\Html\Table\Tr;

interface TrAwareInterface
{
    public function addTr(Tr $tr): void;

    /**
     * @return Tr[]
     */
    public function getTrs(): array;

    /**
     * @param  Tr[] $trs
     * @return $this
     */
    public function setTrs(array $trs);
}

<?php
declare(strict_types=1);

namespace Mysiar\Html\Table;

use Mysiar\Html\AbstractTag;

class Tr extends AbstractTag
{
    protected const TAG = 'tr';

    /**
     * @var Td[]
     */
    private $tds = [];

    public function addTd(Td $td): void
    {
        $this->tds[] = $td;
    }

    /**
     * @return Td[]
     */
    public function getTds(): array
    {
        return $this->tds;
    }

    /**
     * @param  Td[] $tds
     */
    public function setTds(array $tds): Tr
    {
        $this->tds = $tds;
        return $this;
    }

    public function string(): string
    {
        return '';
    }
}

<?php
declare(strict_types=1);

namespace Mysiar\Html\Table;

use Mysiar\Html\AbstractTag;

class Tbody extends AbstractTag
{
    protected const TAG = 'tbody';

    /**
     * @var Tr[]
     */
    private $trs = [];

    public function string(): string
    {
        return '';
    }
}

<?php
declare(strict_types=1);

namespace Mysiar\Html\Table;

use Mysiar\Html\AbstractTag;

class Tfoot extends AbstractTag
{
    protected const TAG = 'tfoot';

    /**
     * @var Tr[]
     */
    private $trs = [];

    public function string(): string
    {
        return '';
    }
}

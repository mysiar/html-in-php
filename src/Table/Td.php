<?php
declare(strict_types=1);

namespace Mysiar\Html\Table;

use Mysiar\Html\AbstractSimpleTag;

class Td extends AbstractSimpleTag
{
    protected const TAG = 'td';

    public function string(): string
    {
        return $this->toString(self::TAG);
    }
}

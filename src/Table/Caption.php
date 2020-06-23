<?php
declare(strict_types=1);

namespace Mysiar\Html\Table;

use Mysiar\Html\AbstractSimpleTag;

class Caption extends AbstractSimpleTag
{
    protected const TAG = 'caption';

    public function __toString(): string
    {
        return $this->toString(self::TAG);
    }
}

<?php
declare(strict_types=1);

namespace Mysiar\Html\Table;

use Mysiar\Html\AbstractSimpleTag;

class Caption extends AbstractSimpleTag
{
    protected const TAG = 'caption';

    public function string(): string
    {
        return $this->toString(self::TAG);
    }
}

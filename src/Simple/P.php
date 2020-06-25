<?php
declare(strict_types=1);

namespace Mysiar\Html\Simple;

use Mysiar\Html\AbstractSimpleTag;

class P extends AbstractSimpleTag
{
    protected const TAG = 'p';

    public function __toString(): string
    {
        return $this->toString(self::TAG);
    }
}

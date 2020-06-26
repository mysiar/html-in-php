<?php
declare(strict_types=1);

namespace Mysiar\Html\Simple;

use Mysiar\Html\AbstractSimpleTag;

class A extends AbstractSimpleTag
{
    protected const TAG = 'a';

    public function __toString(): string
    {
        return $this->toString(self::TAG);
    }
}

<?php
declare(strict_types=1);

namespace Mysiar\Html\Simple;

use Mysiar\Html\AbstractSimpleTag;

class Span extends AbstractSimpleTag
{
    protected const TAG = 'span';

    public function __toString(): string
    {
        return $this->toString(self::TAG);
    }
}

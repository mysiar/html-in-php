<?php
declare(strict_types=1);

namespace Mysiar\Html\Simple;

use Mysiar\Html\AbstractSimpleTag;

class Div extends AbstractSimpleTag
{
    protected const TAG = 'div';

    public function string(): string
    {
        return $this->toString(self::TAG);
    }
}

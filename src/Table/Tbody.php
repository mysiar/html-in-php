<?php
declare(strict_types=1);

namespace Mysiar\Html\Table;

use Mysiar\Html\AbstractTag;
use Mysiar\Html\Partial\TrAwareInterface;
use Mysiar\Html\Partial\TrAwareTrait;

class Tbody extends AbstractTag implements TrAwareInterface
{
    use TrAwareTrait;

    protected const TAG = 'tbody';
}

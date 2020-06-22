<?php
declare(strict_types=1);

namespace Mysiar\Html\Tests\Table;

use Mysiar\Html\Table\Table;
use PHPUnit\Framework\TestCase;

class TableTest extends TestCase
{
    public function testEmpty(): void
    {
        $t = new Table();
        $string = $t->getString();

        $this->assertEquals('<table ></table>', $string);
    }
}

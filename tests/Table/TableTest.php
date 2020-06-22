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
        $string = $t->string();

        $this->assertEquals('<table ></table>', $string);
    }
}

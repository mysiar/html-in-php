<?php
declare(strict_types=1);

namespace Mysiar\Html\Tests\Simple;

use Mysiar\Html\Simple\Div;
use PHPUnit\Framework\TestCase;

class DivTest extends TestCase
{
    public function test(): void
    {
        $attr = [
            'class' => 'table-bordered',
            'style' => 'border-collapse: collapse;',
        ];

        $value = 'value';

        $tag = new Div($value, $attr);

        $this->assertEquals(
            '<div class="table-bordered" style="border-collapse: collapse;">value</div>',
            $tag->__toString()
        );
    }
}

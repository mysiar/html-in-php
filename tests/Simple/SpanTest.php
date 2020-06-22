<?php
declare(strict_types=1);

namespace Mysiar\Html\Tests\Simple;

use Mysiar\Html\Simple\Span;
use PHPUnit\Framework\TestCase;

class SpanTest extends TestCase
{
    public function test(): void
    {
        $attr = [
            'class' => 'table-bordered',
            'style' => 'border-collapse: collapse;',
        ];

        $value = 'value';

        $tag = new Span($value, $attr);

        $this->assertEquals(
            '<span class="table-bordered" style="border-collapse: collapse;">value</span>',
            $tag->string()
        );
    }
}

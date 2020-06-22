<?php
declare(strict_types=1);

namespace Mysiar\Html\Tests\Table;

use Mysiar\Html\Table\Caption;
use PHPUnit\Framework\TestCase;

class CaptionTest extends TestCase
{
    public function test(): void
    {
        $attr = [
            'class' => 'table-bordered',
            'style' => 'border-collapse: collapse;',
        ];

        $value = 'caption value';

        $td = new Caption($value, $attr);

        $string = $td->getString();

        $this->assertEquals(
            '<caption class="table-bordered" style="border-collapse: collapse;">caption value</caption>',
            $string
        );
    }
}

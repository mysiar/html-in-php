<?php
declare(strict_types=1);

namespace Mysiar\Html\Tests\Table;

use Mysiar\Html\Table\Td;
use PHPUnit\Framework\TestCase;

class TdTest extends TestCase
{
    public function test(): void
    {
        $attr = [
            'class' => 'table-bordered',
            'style' => 'border-collapse: collapse;',
        ];

        $value = 'td cell value';

        $td = new Td($value, $attr);

        $string = $td->getString();

        $this->assertEquals(
            '<td class="table-bordered" style="border-collapse: collapse;">td cell value</td>',
            $string
        );
    }
}

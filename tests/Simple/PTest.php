<?php
declare(strict_types=1);

namespace Mysiar\Html\Tests\Simple;

use Mysiar\Html\Simple\P;
use PHPUnit\Framework\TestCase;

class PTest extends TestCase
{
    public function test(): void
    {
        $attr = [
            'class' => 'danger',
        ];

        $value = 'Symfony';

        $tag = new P($value, $attr);

        $this->assertEquals(
            '<p class="danger">Symfony</p>',
            $tag->__toString()
        );
    }
}

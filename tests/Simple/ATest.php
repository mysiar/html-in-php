<?php
declare(strict_types=1);

namespace Mysiar\Html\Tests\Simple;

use Mysiar\Html\Simple\A;
use PHPUnit\Framework\TestCase;

class ATest extends TestCase
{
    public function test(): void
    {
        $attr = [
            'href' => 'https://symfony.com',
            'target' => '__blank',
        ];

        $value = 'Symfony';

        $tag = new A($value, $attr);

        $this->assertEquals(
            '<a href="https://symfony.com" target="__blank">Symfony</a>',
            $tag->__toString()
        );
    }
}

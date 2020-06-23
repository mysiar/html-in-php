<?php
declare(strict_types=1);

namespace Mysiar\Html\Tests\Table;

use Mysiar\Html\Table\Td;
use Mysiar\Html\Table\Tr;
use PHPUnit\Framework\TestCase;

class TrTest extends TestCase
{
    public function testEmpty(): void
    {
        $tag = new Tr();

        $this->assertEquals('<tr ></tr>', $tag);
    }

    public function test(): void
    {
        $tr = new Tr();

        $td1 = new Td('td1');
        $td2 = new Td('td2');
        $td3 = new Td('td3');

        $tr->addTd($td1);
        $tr->addTd($td2);
        $tr->addTd($td3);

        $this->assertEquals(
            '<tr ><td >td1</td><td >td2</td><td >td3</td></tr>',
            (string)$tr
        );

        $tds = $tr->getTds();
        $this->assertInstanceOf(Td::class, $tds[0]);
        $this->assertEquals($td1, $tds[0]);

        $tr->setTds([$td1, $td2]);
        $this->assertEquals(
            '<tr ><td >td1</td><td >td2</td></tr>',
            (string)$tr
        );

        $tds = $tr->getTds();
        $this->assertInstanceOf(Td::class, $tds[1]);
        $this->assertEquals($td2, $tds[1]);
    }
}

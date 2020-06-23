<?php
declare(strict_types=1);

namespace Mysiar\Html\Tests\Table;

use Mysiar\Html\Table\Tbody;
use Mysiar\Html\Table\Td;
use Mysiar\Html\Table\Tr;
use PHPUnit\Framework\TestCase;

class TbodyTest extends TestCase
{
    public function testEmpty(): void
    {
        $tag = new Tbody();

        $this->assertEquals('<tbody ></tbody>', (string)$tag);
    }

    public function test(): void
    {
        $tr1 = new Tr();
        $tr2 = new Tr();

        $td11 = new Td('tr1 td1');
        $td12 = new Td('tr1 td2');
        $td13 = new Td('tr1 td3');

        $td21 = new Td('tr2 td1');
        $td22 = new Td('tr2 td2');
        $td23 = new Td('tr2 td3');

        $tr1->addTd($td11);
        $tr1->addTd($td12);
        $tr1->addTd($td13);

        $tr2->addTd($td21);
        $tr2->addTd($td22);
        $tr2->addTd($td23);

        $tbody = new Tbody();

        $tbody->addTr($tr1);
        $tbody->addTr($tr2);

        $this->assertEquals($this->getTbody(), (string)$tbody);

        $trs = $tbody->getTrs();
        $this->assertInstanceOf(Tr::class, $trs[0]);

        $tbody->setTrs([$tr2]);
        $trs = $tbody->getTrs();
        $this->assertInstanceOf(Tr::class, $trs[0]);
        $this->assertEquals($tr2, $trs[0]);
    }

    // phpcs:disable
    private function getTbody(): string
    {
        return <<< EOL
<tbody ><tr ><td >tr1 td1</td><td >tr1 td2</td><td >tr1 td3</td></tr><tr ><td >tr2 td1</td><td >tr2 td2</td><td >tr2 td3</td></tr></tbody>
EOL;
    }
}

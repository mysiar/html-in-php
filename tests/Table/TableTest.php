<?php
declare(strict_types=1);

namespace Mysiar\Html\Tests\Table;

use Mysiar\Html\Table\Caption;
use Mysiar\Html\Table\Table;
use Mysiar\Html\Table\Tbody;
use Mysiar\Html\Table\Tfoot;
use Mysiar\Html\Table\Thead;
use PHPUnit\Framework\TestCase;

class TableTest extends TestCase
{
    public function testEmpty(): void
    {
        $tag = new Table();

        $this->assertEquals('<table ></table>', (string)$tag);
        $this->assertNull($tag->getCaption());
        $this->assertNull($tag->getTbody());
        $this->assertNull($tag->getTfoot());
        $this->assertNull($tag->getThead());
    }

    public function test(): void
    {
        $caption = new Caption('caption');
        $tbody = new Tbody();
        $thead = new Thead();
        $tfoot = new Tfoot();

        $table = new Table();
        $table->setCaption($caption);
        $table->setTbody($tbody);
        $table->setThead($thead);
        $table->setTfoot($tfoot);


        $this->assertEquals(
            '<table ><caption >caption</caption><thead ></thead><tfoot ></tfoot><tbody ></tbody></table>',
            (string)$table
        );
    }
}

<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Mysiar\Html\Table\Caption;
use Mysiar\Html\Simple\Div;
use Mysiar\Html\Table\Table;
use Mysiar\Html\Table\Tbody;
use Mysiar\Html\Table\Td;
use Mysiar\Html\Table\Tfoot;
use Mysiar\Html\Table\Thead;
use Mysiar\Html\Table\Tr;

$table = new Table(['class' => 'table table-striped table-bordered table-hover']);
$caption = new Caption('Symfony end of support');
$table->setCaption($caption);

$thead = new Thead();
$tbody = new Tbody();
$tfoot = new Tfoot();

$tr = new Tr(['class' => 'info']);
$td1 = new Td('Release');
$td2 = new Td('End of support');
$tr->setTds([$td1, $td2]);
$thead->addTr($tr);
$tfoot->addTr($tr);

$tr = new Tr(['class' => 'danger']);
$td1 = new Td('Symfony 2.8');
$td2 = new Td('November 2019');
$tr->setTds([$td1, $td2]);
$tbody->addTr($tr);

$tr = new Tr(['class' => 'success']);
$td1 = new Td('Symfony 3.4');
$td2 = new Td('November 2021');
$tr->setTds([$td1, $td2]);
$tbody->addTr($tr);

$tr = new Tr(['class' => 'success']);
$td1 = new Td('Symfony 4.4');
$td2 = new Td('November 2023');
$tr->setTds([$td1, $td2]);
$tbody->addTr($tr);

$tr = new Tr(['class' => 'warning']);
$td1 = new Td('Symfony 5.0');
$td2 = new Td('July 2020');
$tr->setTds([$td1, $td2]);
$tbody->addTr($tr);

$table->setThead($thead);
$table->setTbody($tbody);
$table->setTfoot($tfoot);

$div = new Div((string)$table, ['class' => 'col-md-6 col-md-offset-3']);
$divRow = new Div((string)$div, ['class' => 'row']);
$divContainer = new Div((string)$divRow, ['class' => 'container']);


print_r((string)$divContainer);

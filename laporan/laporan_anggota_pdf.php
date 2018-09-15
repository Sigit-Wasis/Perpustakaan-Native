<?php
use Dompdf\Dompdf;
require_once 'dompdf/autoload.inc.php';
$dompdf = new Dompdf();
$dompdf->loadHtml('<h1>hello world</h1>');
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream();
?>

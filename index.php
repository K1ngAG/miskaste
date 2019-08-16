<?php
ini_set('display_errors', 1);

//readfile('index.html');


// Composer's auto-loading functionality
require "vendor/autoload.php";

use Dompdf\Dompdf;

//generate some PDFs!
$dompdf = new DOMPDF();  //if you use namespaces you may use new \DOMPDF()
$html = file_get_contents("index.html");
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("sample.pdf", array("Attachment"=>0));

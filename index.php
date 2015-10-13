<?php

require 'pdfwatermarker/pdfwatermark.php';

$watermark = 'files/whatermark.png';    // Изображение водного знака
$pdf = 'files/1.pdf';                   // оригинальный PDF
$savePdf = 'files/2.pdf';               // PDF с водным знаком

try {
    $watermark = new PDFWatermark($watermark);
    $watermark->setPosition('topright');
    $watermarker = new PDFWatermarker($pdf, $savePdf, $watermark);
    $watermarker->savePdf();
} catch(Exception $e){
    var_dump($e);
}
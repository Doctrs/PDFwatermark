# PDF watermark
Example

    require 'pdfwatermarker/pdfwatermark.php';
    
    $watermark = 'files/whatermark.png';    // watermark
    $pdf = 'files/1.pdf';                   // input pdf
    $savePdf = 'files/2.pdf';               // output pdf

    try {
        $watermark = new PDFWatermark($watermark);
        $watermark->setPosition('topright');
        $watermarker = new PDFWatermarker($pdf, $savePdf, $watermark);
        $watermarker->savePdf();
    } catch(Exception $e){
        var_dump($e);
    }

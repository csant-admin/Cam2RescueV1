<?php 

    require_once __DIR__ . '/vendor/autoload.php';

    class Pdf {

        public function createPdf($html) {
            $mpdf = new \Mpdf\Mpdf();
            $mpdf->WriteHTML($html);
            $mpdf->Output();
        }

    }

?>
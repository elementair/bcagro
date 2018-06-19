<?php
    //-----------------------------------------------------------------------------------
    //    Ejemplo básico de utilización de fPDF
    //-----------------------------------------------------------------------------------
    require_once ('./sistema/clases/fpdf/fpdf.php');

    $pdf=new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',26);
    $pdf->Image("./img/aviso_de_privacidad.jpg",10,10,190,220);
    $pdf->Output();
 ?>
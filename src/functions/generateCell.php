<?php

function generateCell(TCPDF $pdf, string $msg, $xy, $wh, string $pos){
    $pdf->SetXY($xy[0], $xy[1]);
    $pdf->Cell($wh[0],$wh[1],$msg,0,0,$pos);
}
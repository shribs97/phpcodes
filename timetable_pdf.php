<?php
    require("fpdf/fpdf.php");
    $pdf=new FPDF();
    $pdf->AddPage();
  
    

    $pdf->SetFont("Arial","B",10);
    $pdf->Cell(0,20,"CO6I Timetable",1,1,"C");
    $pdf->Cell(20,10,"Day/Time",1,0,'C');
    $pdf->Cell(20,10,"10:15/11:15",1,0,'C');
    $pdf->Cell(20,10,"11:15/12:15",1,0,'C');
    $pdf->Cell(20,10,"12:15/1:15",1,0,'C');
    $pdf->Cell(18,10,"1:15/1:40",1,0,'C');
    $pdf->Cell(18,10,"1:40/2:40",1,0,'C');
    $pdf->Cell(18,10,"2:40/3:40",1,0,'C');
    $pdf->Cell(18,10,"3:40/3:50",1,0,'C');
    $pdf->Cell(19,10,"3:50/4:50",1,0,'C');
    $pdf->Cell(19,10,"3:50/4:50",1,1,'C');

    $pdf->Cell(20,10,"Mon",1,0,'C');
    $pdf->Cell(20,10,"ETI(IJM)",1,0,'C');
    $pdf->Cell(20,10,"MGT(VSM)",1,0,'C');
    $pdf->Cell(20,10,"PWP(BPM)",1,0,'C');
    $pdf->Cell(18,10,"Break",1,0,'C');
    $pdf->Cell(18,10,"WBP(PVT)",1,0,'C');
    $pdf->Cell(18,10,"WBP(PVT)",1,0,'C');
    $pdf->Cell(18,10,"Break",1,0,'C');
    $pdf->Cell(38,10,"CO1-EDE(RSR)-201",1,1,'C');

    $pdf->Cell(20,10,"TUE",1,0,'C');
    $pdf->Cell(20,10,"WBP(PVT)",1,0,'C');
    $pdf->Cell(40,10,"CO1-CPE(PVT)",1,0,'C');
    $pdf->Cell(18,10,"Break",1,0,'C');
    $pdf->Cell(18,10,"PWP(BPM)",1,0,'C');
    $pdf->Cell(18,10,"MGT(VSM)",1,0,'C');
    $pdf->Cell(18,10,"Break",1,0,'C');
    $pdf->Cell(19,10,"ETI(IJM)",1,0,'C');
    $pdf->Cell(19,10,"ETI(IJM)",1,1,'C');


    $pdf->Cell(20,10,"WED",1,0,'C');
    $pdf->Cell(20,10,"MAD(SBS)",1,0,'C');
    $pdf->Cell(20,10,"MGT(VSM)",1,0,'C');
    $pdf->Cell(20,10,"PWP(BPM)",1,0,'C');
    $pdf->Cell(18,10,"Break",1,0,'C');
    $pdf->Cell(36,10,"CO1-MAD(SBS)",1,0,'C');
    $pdf->Cell(18,10,"Break",1,0,'C');
    $pdf->Cell(38,10,"CO1-CPE(PVT)",1,1,'C');

    $pdf->Cell(20,10,"THU",1,0,'C');
    $pdf->Cell(20,10,"MAD(SBS)",1,0,'C');
    $pdf->Cell(40,10,"CO1-WBP(PVT)",1,0,'C');
    $pdf->Cell(18,10,"Break",1,0,'C');
    $pdf->Cell(36,10,"CO1-PWP(BPM)",1,0,'C');
    $pdf->Cell(18,10,"Break",1,0,'C');
    $pdf->Cell(38,10,"CO1-MAD(SBS)",1,1,'C');

    $pdf->Cell(20,10,"FRI",1,0,'C');
   
    $pdf->Cell(40,10,"CO1-CPE(PVT)",1,0,'C');
    $pdf->Cell(20,10,"MAD(SBS)",1,0,'C');
    $pdf->Cell(18,10,"Break",1,0,'C');
    $pdf->Cell(18,10,"EDE(RSR)",1,0,'C');
    $pdf->Cell(18,10,"EDE(RSR)",1,0,'C');
    $pdf->Cell(18,10,"Break",1,0,'C');
    $pdf->Cell(38,10,"CO1-CPE(PVT)",1,1,'C');


    $pdf->output();
?>
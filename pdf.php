<?php
require_once'connect.php';
require_once 'tfpdf/tfpdf.php';
$pdf = new tFPDF();
$pdf->AddPage();
$pdf->AddFont('PDFFont','','arial.ttf',true);
$pdf->SetFont('PDFFont','',14);


$res = mysqli_query($mysql,"SELECT rasp.date_ex, rasp.aud,
groupa.name_group as name_group,
groupa.faculty_group as faculty_group
FROM rasp
LEFT JOIN groupa ON rasp.id_group=groupa.id_group");
$w = array(10,30,40,);
$h = 7;
$pdf->SetFillColor(255,255,255);
$pdf->Cell($w[0],$h,'п/п','LRTB','0','C',true);
$pdf->Cell($w[2],$h,'Дата экзамена','LRTB','0','C',true);
$pdf->Cell($w[2],$h,'Аудитория','LRTB','0','C',true);
$pdf->Cell($w[2],$h,'Факультет','LRTB','0','C',true);
$pdf->Cell($w[1],$h,'Группа','LRTB','0','C',true);
$pdf->Ln();

if ($res){
$c = 1;
while ($row = $res->fetch_array()){
$date_ex = $row['date_ex'];
$aud = $row['aud'];
$faculty_group = $row['faculty_group'];
$name_group = $row['name_group'];
$date_ex = date('d.m.Y', strtotime($date_ex));
$pdf->Cell($w[0],$h,$c,'LRTB','0','C');
$pdf->Cell($w[2],$h,$date_ex,'RTB','0','C');
$pdf->Cell($w[2],$h,$aud,'RTB','0','C');
$pdf->Cell($w[2],$h,$faculty_group,'RTB','0','C');
$pdf->Cell($w[1],$h,$name_group,'RTB','0','C');
$pdf->Ln();
$c++;
}
}

$pdf->Output("D",'Raspisanie.pdf',true);
?>

<?php

require_once __DIR__ . '/vendor/autoload.php';
include '../../Frontend/assets/header.php';
$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . '/tmp',
    ]),
    'fontdata' => $fontData + [
        'sarabun' => [
            'R' => 'THSarabunNew.ttf',
            'I' => 'THSarabunNew Italic.ttf',
            'B' => 'THSarabunNew Bold.ttf',
            'BI'=> 'THSarabunNew BoldItalic.ttf'
        ]
    ],
    'default_font' => 'sarabun'
]);

ob_start();
?>


<div>
  <img src="../upload/krut.png" alt="" width="64">
  <center>บันทึกความ</center>

  <div>
  </div>
</div>


<?php
    $html=ob_get_contents();
    $mpdf->WriteHTML($html);
    $mpdf->Output("MyReport.pdf");
    ob_end_flush();
?>
<a href="MyReport.pdf" class="btn btn-primary">โหลดผลการเรียน (pdf)</a>
 </div>
</body>
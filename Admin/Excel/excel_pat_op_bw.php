<?php
include 'excel_controller.php';
$clinic = new DBController();
$productResult = $clinic->runQuery("select patientname,opnumber from tblopbooking o inner join tblpatient p on p.patientid=o.patientid where opnumber between 1001 and 1020  ");

  
    $filename = "Export_pat_op_bw.xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $isPrintHeader = false;
    if (! empty($productResult)) {
        foreach ($productResult as $row) {
            if (! $isPrintHeader) {
                echo implode("\t", array_keys($row)) . "\n";
                $isPrintHeader = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    }
    exit();

?>

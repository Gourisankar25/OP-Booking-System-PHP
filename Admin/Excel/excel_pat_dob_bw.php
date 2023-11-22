<?php
include 'excel_controller.php';
$clinic = new DBController();
$productResult = $clinic->runQuery("select patientname, dob, pat_description from tblopdetails o inner join tblpatient p on p.patientid=o.patientid where dob between '1950-10-10' and '2000-10-10'  ");

  
    $filename = "Export_pat_dob_bw.xls";
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

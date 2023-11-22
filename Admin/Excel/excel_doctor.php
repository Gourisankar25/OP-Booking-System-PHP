<?php
include 'excel_controller.php';
$clinic = new DBController();
$productResult = $clinic->runQuery("select name,deptname,joindate from tbldoctor d inner join tbldepartment de on d.deptid=de.deptid order by deptname ");

  
    $filename = "Export_doctor_joindate.xls";
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

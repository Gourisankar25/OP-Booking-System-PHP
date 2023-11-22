<?php
include 'excel_controller.php';
$clinic = new DBController();
$productResult = $clinic->runQuery("select deptname,count(patientid) from tblopdetails o inner join tbldepartment d on d.deptid=o.departmentid group by deptname");

  
    $filename = "Export_patientreg_department.xls";
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

<?php
include 'excel_controller.php';
$clinic = new DBController();
$productResult = $clinic->runQuery("SELECT deptname,count(*) as bookingcount FROM tblopdetails op inner join tbldepartment d on op.departmentid=d.deptid  group by deptname  ");

  
    $filename = "Export_bookingcount_dept.xls";
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

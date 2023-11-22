<?php
include 'excel_controller.php';
$clinic = new DBController();
$productResult = $clinic->runQuery("select de.department_name,d.doctor_name,d.qualification,d.phone,d.email,d.designation from tbl_doctor d inner join tbl_department de on d.department_id=de.department_id");

  
    $filename = "Export_doctorexcel.xls";
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

<?php
include 'excel_controller.php';
$clinic = new DBController();
$productResult = $clinic->runQuery("select deptname,count(CASE WHEN gender='Male' THEN 1 END)AS Total_male,count(CASE WHEN gender='Female' THEN 1 END)AS Total_female from tblopdetails o inner join tblpatient p on p.patientid=o.patientid inner join tbldepartment d on d.deptid=o.departmentid group by deptname");

  
    $filename = "Export_m_f_patientsreg_dept.xls";
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

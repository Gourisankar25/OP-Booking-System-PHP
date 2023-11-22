<?php
session_start();
include 'excel_controller.php';
$db_handle = new DBController();
$fromdate=$_SESSION['fdate'];
$todate=$_SESSION['tdate'];
$productResult = $db_handle->runQuery("SELECT count(*) as count,doctor_name,department_name FROM tbl_department de 
inner join tbl_doctor d on de.department_id=d.department_id 
inner join tbl_booking b on d.doctor_id=b.doctorid where
b.bookingdate >='$fromdate' 
and b.bookingdate <='$todate' group by b.doctorid");

  
    $filename = "Booking_excel.xls";
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

<?php
include 'excel_controller.php';
$clinic = new DBController();
$productResult = $clinic->runQuery("SELECT name,count(*) as bookingcount FROM tblopdetails op inner join tbldoctor d on op.doctorid=d.doctorid  group by name");

  
    $filename = "Export_bookingcount_doc.xls";
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

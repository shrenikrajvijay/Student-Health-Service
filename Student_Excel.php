<?php
mysql_connect("localhost","root","");
mysql_select_db("healthcenter");
// Create your database query
$query = "SELECT * FROM studentmaster";  
include 'PHPExcel.php';
// Execute the database query
$result = mysql_query($query) or die(mysql_error());

// Instantiate a new PHPExcel object
$objPHPExcel = new PHPExcel(); 
// Set the active Excel worksheet to sheet 0
$objPHPExcel->setActiveSheetIndex(0); 
// Initialise the Excel row number
$rowCount = 1; 
// Iterate through each result from the SQL query in turn
// We fetch each database result row into $row in turn
while($row = mysql_fetch_array($result)){ 
    // Set cell An to the "name" column from the database (assuming you have a column called name)
    //    where n is the Excel row number (ie cell A1 in the first row)
    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $row['StudentID']); 
    // Set cell Bn to the "age" column from the database (assuming you have a column called age)
    //    where n is the Excel row number (ie cell A1 in the first row)
    $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $row['StudentName']); 
	$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, $row['StudentDOB']); 
	$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $row['StudentEmail']); 
	$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $row['StudentPhone']); 
	$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $row['StudentAdd1']);
$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $row['StudentAdd2']); 	
$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $row['StudentCity']); 	
    // Increment the Excel row counter
    $rowCount++; 
} 

// Instantiate a Writer to create an OfficeOpenXML Excel .xlsx file
$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); 
// Write the Excel file to filename some_excel_file.xlsx in the current directory
$objWriter->save('Student Names.xlsx'); 

?>
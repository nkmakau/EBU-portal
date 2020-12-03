<?php
//db con

$con = new PDO(`mysql:host=mysql;dbname=eaintranet;charset=utf8`, `root`, `root`);

//get post records
$monthSelected = @$_POST["month"];
$yearSelected = @$_POST["year"];
 
$SRDate = @$_POST["SRDate"];
$AssessmentDate = @$_POST["AssessmentDate"];
$SRNo = @$_POST["SRNo"];
$EmployeeName = @$_POST["EmployeeName"];
$Segment = @$_POST["Segment"];
 
 
$Assign = @$_POST["Assign"];
$OrderCreation = @$_POST["OrderCreation"];
$SRClose = @$_POST["SRClose"];
$KYC = @$_POST["KYC"];
$Quality = @$_POST["Quality"];
 
$Comments = @$_POST["Comments"];
 
//db insert SQL code
$esdinsert = INSERT INTO `Tbl_EsdAssessment2019`(`ID`, `monthSelected`, `yearSelected`, `SRDate`, `AssessmentDate`, `SRNo`, `EmployeeName`, `Segment`, `Assign`, `OrderCreation`, `SRCLose`, `KYC`, `Quality`, `Comments`, `Assessor`) values (`$monthSelected`, `$yearSelected`, `$SRDate`, `$AssessmentDate`, `$SRNo`, `$EmployeeName`, `$Segment`, `$Assign`, `$OrderCreation`, `$SRClose`, `$KYC`, `$Quality`, `$Comments`, `$SmallUser`)

?>
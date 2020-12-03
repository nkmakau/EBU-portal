<?php

include "cond.php";

 
//***********Get User Logon**********************
$LOGON_USER=$_SERVER["LOGON_USER"];
  
if ($LOGON_USER!="") {
    $temp = split($LOGON_USER,"\");  
    $domain =$temp[0];
    SubmitterUserName = $temp[1];
   
	$SmallUser=strtolower(SubmitterUserName);
   
} else {
 
	Response.$Status = "401 - Aaccess Denied";
	Response.End;
	
}
 
//***********End Get User************************
 
if (($SmallUser=="nkmakau")) {
	//SmallUser = "fitebete"'
}
 
 
$esdtitle = "ESD Analyst Quality Assessment";
	 
 
//$https_EditPath = "https://svqoaintranet02/ebu/ebu_channel/assessments/lepamassessment/editor.asp";
 
$https_esdPath = "../ESD/Esd_Analyst_Assessment.html";
	 
$https_esdePath = "../ESD/editor.html";
 
// https_inlifesPath = "https://svqoaintranet02/ebu/ebu_channel/assessments/inlifesassessments/inlifesassessment.asp";
 
// https_inlifesePath = "https://svqoaintranet02/ebu/ebu_channel/assessments/InlifesAssessments/editor.asp";
   
// https_inlifeqPath = "https://svqoaintranet02/ebu/ebu_channel/assessments/inlifeqassessments/inlifeqassessment.asp";   
   
// https_inlifeqePath = "https://svqoaintranet02/ebu/ebu_channel/assessments/InlifeqAssessments/editor.asp";
   
// $https_dpPath = "https://svqoaintranet02/ebu/ebu_channel/assessments/deploymentpartnersassessments/dpassessment.asp";
	 
// $https_dpePath = "https://svqoaintranet02/ebu/ebu_channel/assessments/deploymentpartnersassessments/editor.asp";
   
// $https_dpmPath = "https://svqoaintranet02/ebu/ebu_channel/assessments/deploymentpmassessments/dpmAssessment.asp"; 
 
// $https_dpmePath = "https://svqoaintranet02/ebu/ebu_channel/assessments/deploymentpmassessments/editor.asp";
	 
// $https_essPath = "https://svqoaintranet02/ebu/ebu_channel/assessments/ESSAssessments/essassessment.asp";
 
// $https_essePath = "https://svqoaintranet02/ebu/ebu_channel/assessments/ESSAssessments/editor.asp";
	 
// $https_etqPath = "https://svqoaintranet02/ebu/ebu_channel/assessments/EtqualityAssessments/etqassessment.asp";
 
// $https_etqePath = "https://svqoaintranet02/ebu/ebu_channel/assessments/EtqualityAssessments/editor.asp";
   
// $https_etsPath = "https://svqoaintranet02/ebu/ebu_channel/assessments/EtsurveyAssessments/etsassessment.asp";
 
// $https_etsePath = "https://svqoaintranet02/ebu/ebu_channel/assessments/EtsurveyAssessments/editor.asp";
	 
// $https_mobPath = "https://svqoaintranet02/ebu/ebu_channel/assessments/MerchantobAssessments/mobassessment.asp";
 
// $https_mobePath = "https://svqoaintranet02/ebu/ebu_channel/assessments/MerchantobAssessments/editor.asp";
	 
// $https_mobrPath = "https://svqoaintranet02/ebu/ebu_channel/assessments/MerchantobrAssessments/mobrassessment.asp";
 
// $https_mobrePath = "https://svqoaintranet02/ebu/ebu_channel/assessments/MerchantobrAssessments/editor.asp";
 
// $https_smesPath = "https://svqoaintranet02/ebu/ebu_channel/assessments/SMESAssessments/smesassessment.asp";
 
// $https_smesePath = "https://svqoaintranet02/ebu/ebu_channel/assessments/SMESAssessments/editor.asp";
 
// https_smetmsaPath = "https://svqoaintranet02/ebu/ebu_channel/assessments/SMETMSaAssessments/smetmsaAssessment.asp";
	 
// https_smetmsaePath = "https://svqoaintranet02/ebu/ebu_channel/assessments/SMETMsaAssessments/editor.asp";
 
// https_smetmsrPath = "https://svqoaintranet02/ebu/ebu_channel/assessments/SMETMSrAssessments/smetmsrAssessment.asp";
	 
// https_smetmsarPath = "https://svqoaintranet02/ebu/ebu_channel/assessments/SMETMsrAssessments/editor.asp";
 
// $https_sohoPath = "https://svqoaintranet02/ebu/ebu_channel/assessments/SOHOAssessments/sohoassessment.asp";
   
// $https_sohoePath = "https://svqoaintranet02/ebu/ebu_channel/assessments/SOHOAssessments/editor.asp";
	 
// $https_mosqPath = "https://svqoaintranet02/ebu/ebu_channel/assessments/MasokoQAssessments/masokoqassessment.asp";
  
// $https_mosqePath = "https://svqoaintranet02/ebu/ebu_channel/assessments/MasokoQAssessments/editor.asp";
	 
// $https_mossPath = "https://svqoaintranet02/ebu/ebu_channel/assessments/MasokoSAssessments/masokosassessment.asp";
  
// $https_mossePath = "https://svqoaintranet02/ebu/ebu_channel/assessments/MasokoSAssessments/editor.asp";
 
// $https_dmPath = "https://svqoaintranet02/ebu/ebu_channel/assessments/DealerManagerAssessments/dealermanagerassessment.asp";
  
// $https_dmePath = "https://svqoaintranet02/ebu/ebu_channel/assessments/DealerManagerAssessments/editor.asp";
 
// $https_trePath = "https://svqoaintranet02/ebu/ebu_channel/assessments/TRENPSAssessments/trenpsassessment.asp";
  
// $https_treePath = "https://svqoaintranet02/ebu/ebu_channel/assessments/TRENPSAssessments/editor.asp";
	 
	 
const $tbl_users = "Tbl_EBUCxEmployees";
 
Const tbl_LepamAssessment2019 = "Tbl_LepamAssessment2019";
Const tbl_EsdAssessment2019 = "Tbl_EsdAssessment2019";
Const tbl_InlifesAssessment2019 = "Tbl_InlifesAssessment2019";
Const tbl_InlifeqAssessment2019 = "Tbl_InlifeqAssessment2019";
Const tbl_DpAssessment2019 = "Tbl_DpAssessment2019";
Const tbl_DpmAssessment2019 = "Tbl_DpmAssessment2019";
 
Const tbl_EssAssessment2019 = "Tbl_EssAssessment2019";
Const tbl_EtqAssessment2019 = "Tbl_EtqAssessment2019";
Const tbl_EtsAssessment2019 = "Tbl_EtsAssessment2019";
Const tbl_SMEsAssessment2019 = "Tbl_SMEsAssessment2019";
Const tbl_SMETMsaAssessment2019 = "Tbl_SMETMsaAssessment2019";
Const tbl_SMETMsrAssessment2019 = "Tbl_SMETMsrAssessment2019";
Const tbl_SOHOAssessment2019 = "Tbl_SOHOAssessment2019";
   
Const tbl_MobAssessment2019 = "Tbl_MobAssessment2019";
Const tbl_MobrAssessment2019 = "Tbl_MobrAssessment2019";   
Const tbl_MosqAssessment2019 = "Tbl_MosqAssessment2019";  
Const tbl_MossAssessment2019 = "Tbl_MossAssessment2019"; 
	 
Const tbl_DmAssessment2019 = "Tbl_DmAssessment2019"; 
Const tbl_TRENPSAssessment2019 = "Tbl_TRENPSAssessment2019"; 
   
$sqlAccess = "select count(*) as qaCount from ".$tbl_users." where Username = '".$SmallUser."' and Status = 'Active'and (Team IN ('Experience Assurance', 'Ebu Experience Assurance' )) ";
 
set $esQa = $eConn.execute($sqlAccess);
 
if ($esQa.$eof || $esQa.$bof) {
	$qaCount = 0;
} else {
	$qaCount = $esQa["qaCount"];
}
 
if (($qaCount == 1) || $SmallUser=="fitebete" || $SmallUser=="jnzomo" || $SmallUser == "snkiarie") {
	$CXXAccess = 1;
	$actClasss = "active";
} else {
	$CXXAccess = 0;
	$actClasss = "";
}
 
if ($SmallUser=="fitebete" || $SmallUser == "smmuiruri" || $SmallUser=="fmutua") {
	$InvAccess = 1;
	$actClass = "active";
} else {
	$InvAccess = 0;
	$actClass = "";
}
 
if (($qaCount == 1) || $SmallUser=="fmutua" || $SmallUser=="nkmakau") {
	$adminView = 1;
} else {
	$adminView = 0;
}
 
$sqlTls = "select count(*) as tlCount from ".$tbl_users." where Username = '".$SmallUser."' and Role = 'Manager' ";
 
set $rsTls = $eConn.execute($sqlTls);
 
if ($rsTls.$bof || $rsTls.$eof) {
	$tlCount = "";
} else {
	$tlCount = $rsTls["tlCount"];
}
 
if ($tlCount == 1) {
	$tlView = 1;
} else {
	$tlView = 0;
}
 
echo $tlView; 

 
function roundOff($score) {
 
	if ($score == floor($score)) {
	} else {
		$score = Round($score,1);
	}
	
	return  $score;
 
}
 
 
function getEmpName($Username) {
 
	$sqlEmpname = "select EmployeeName from ".$tbl_Users." where Username = '".$Username."' ";
 
	set $rsEmpname = $eConn.execute($sqlEmpname);
 
	if ($rsEmpname.$eof || $rsEmpname.$bof) {
		return  "";
	} else {
		return  $rsEmpname["EmployeeName"];
	}
 
}
?>

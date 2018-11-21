<?php
$strTableName="Spend Per Customer";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="renewals";

$gstrOrderBy="ORDER BY `Spend \$` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Spend Per Customer");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Spend Per Customer"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
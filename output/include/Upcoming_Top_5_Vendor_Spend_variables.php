<?php
$strTableName="Upcoming Top 5 Vendor Spend";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="renewals";

$gstrOrderBy="ORDER BY `Total Spend \$` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Upcoming Top 5 Vendor Spend");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Upcoming Top 5 Vendor Spend"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
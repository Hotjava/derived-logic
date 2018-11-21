<?php
require_once(getabspath("classes/cipherer.php"));



$tdataDashboard = array();
$tdataDashboard[".ShortName"] = "Dashboard";

//	field labels
$fieldLabelsDashboard = array();
$pageTitlesDashboard = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDashboard["English"] = array();
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDashboard[""] = array();
}

//	search fields
$tdataDashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"Renewals Due 90 Days", "field"=>"order_description" );
$tdataDashboard[".searchFields"]["Renewals_Due_90_Days_order_description"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Renewals Due 90 Days", "field"=>"alert_id" );
$tdataDashboard[".searchFields"]["Renewals_Due_90_Days_alert_id"] = $dashField;

// all search fields
$tdataDashboard[".allSearchFields"] = array();
$tdataDashboard[".allSearchFields"][] = "Renewals_Due_90_Days_order_description";
$tdataDashboard[".allSearchFields"][] = "Renewals_Due_90_Days_alert_id";

// good like search fields
$tdataDashboard[".googleLikeFields"] = array();
$tdataDashboard[".googleLikeFields"][] = "Renewals_Due_90_Days_order_description";
$tdataDashboard[".googleLikeFields"][] = "Renewals_Due_90_Days_alert_id";

$tdataDashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "Renewals_Due_90_Days_report", "table" => "Renewals Due 90 Days", "type" => 2);
	$dbelement["cellName"] = "cell_0_0";

			$dbelement["width"] = 500;
		$dbelement["height"] = 315;


	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Upcoming_Top_5_Vendor_Spend_report", "table" => "Upcoming Top 5 Vendor Spend", "type" => 2);
	$dbelement["cellName"] = "cell_1_0";

			$dbelement["width"] = 500;
		$dbelement["height"] = 315;


	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Spend_Per_Customer_report", "table" => "Spend Per Customer", "type" => 2);
	$dbelement["cellName"] = "cell_0_1";

			$dbelement["width"] = 500;
		$dbelement["height"] = 315;


	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "license_keys_list", "table" => "license_keys", "type" => 0);
	$dbelement["cellName"] = "cell_1_1";

			$dbelement["width"] = 500;
		$dbelement["height"] = 315;
		$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;
	
	$dbelement["updateSelected"] = 0 > 0;


	$tdataDashboard[".dashElements"][] = $dbelement;

$tdataDashboard[".shortTableName"] = "Dashboard";
$tdataDashboard[".entityType"] = 4;



$tableEvents["Dashboard"] = new eventsBase;
$tdataDashboard[".hasEvents"] = false;


$tdataDashboard[".tableType"] = "dashboard";



$tdataDashboard[".addPageEvents"] = false;

$tables_data["Dashboard"]=&$tdataDashboard;
$field_labels["Dashboard"] = &$fieldLabelsDashboard;
$page_titles["Dashboard"] = &$pageTitlesDashboard;

?>
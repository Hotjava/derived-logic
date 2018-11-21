<?php
require_once(getabspath("classes/cipherer.php"));




$tdatarenewals = array();
	$tdatarenewals[".truncateText"] = true;
	$tdatarenewals[".NumberOfChars"] = 80;
	$tdatarenewals[".ShortName"] = "renewals";
	$tdatarenewals[".OwnerID"] = "";
	$tdatarenewals[".OriginalTable"] = "renewals";

//	field labels
$fieldLabelsrenewals = array();
$fieldToolTipsrenewals = array();
$pageTitlesrenewals = array();
$placeHoldersrenewals = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsrenewals["English"] = array();
	$fieldToolTipsrenewals["English"] = array();
	$placeHoldersrenewals["English"] = array();
	$pageTitlesrenewals["English"] = array();
	$fieldLabelsrenewals["English"]["order_description"] = "Order Description";
	$fieldToolTipsrenewals["English"]["order_description"] = "";
	$placeHoldersrenewals["English"]["order_description"] = "";
	$fieldLabelsrenewals["English"]["support_end_date"] = "Support End Date";
	$fieldToolTipsrenewals["English"]["support_end_date"] = "";
	$placeHoldersrenewals["English"]["support_end_date"] = "";
	$fieldLabelsrenewals["English"]["id"] = "Id";
	$fieldToolTipsrenewals["English"]["id"] = "";
	$placeHoldersrenewals["English"]["id"] = "";
	$fieldLabelsrenewals["English"]["vendor_id"] = "Vendor";
	$fieldToolTipsrenewals["English"]["vendor_id"] = "";
	$placeHoldersrenewals["English"]["vendor_id"] = "";
	$fieldLabelsrenewals["English"]["sold_to_id"] = "Sold To";
	$fieldToolTipsrenewals["English"]["sold_to_id"] = "";
	$placeHoldersrenewals["English"]["sold_to_id"] = "";
	$fieldLabelsrenewals["English"]["ops_contact_id"] = "Ops Contact";
	$fieldToolTipsrenewals["English"]["ops_contact_id"] = "";
	$placeHoldersrenewals["English"]["ops_contact_id"] = "";
	$fieldLabelsrenewals["English"]["sourcing_contact_id"] = "Sourcing Contact";
	$fieldToolTipsrenewals["English"]["sourcing_contact_id"] = "";
	$placeHoldersrenewals["English"]["sourcing_contact_id"] = "";
	$fieldLabelsrenewals["English"]["previous_po"] = "Previous PO";
	$fieldToolTipsrenewals["English"]["previous_po"] = "";
	$placeHoldersrenewals["English"]["previous_po"] = "";
	$fieldLabelsrenewals["English"]["previous_lbg_pp"] = "Previous Price";
	$fieldToolTipsrenewals["English"]["previous_lbg_pp"] = "";
	$placeHoldersrenewals["English"]["previous_lbg_pp"] = "";
	$fieldLabelsrenewals["English"]["impacted_by_dollar"] = "Impacted By Dollar";
	$fieldToolTipsrenewals["English"]["impacted_by_dollar"] = "";
	$placeHoldersrenewals["English"]["impacted_by_dollar"] = "";
	$fieldLabelsrenewals["English"]["improvement_last_year"] = "Improvement Last Year";
	$fieldToolTipsrenewals["English"]["improvement_last_year"] = "";
	$placeHoldersrenewals["English"]["improvement_last_year"] = "";
	$fieldLabelsrenewals["English"]["improvement_comments"] = "Improvement Comments";
	$fieldToolTipsrenewals["English"]["improvement_comments"] = "";
	$placeHoldersrenewals["English"]["improvement_comments"] = "";
	$fieldLabelsrenewals["English"]["percent_product_sales"] = "Percent Product Sales";
	$fieldToolTipsrenewals["English"]["percent_product_sales"] = "";
	$placeHoldersrenewals["English"]["percent_product_sales"] = "";
	$fieldLabelsrenewals["English"]["service_type_id"] = "Service Type";
	$fieldToolTipsrenewals["English"]["service_type_id"] = "";
	$placeHoldersrenewals["English"]["service_type_id"] = "";
	$fieldLabelsrenewals["English"]["term_id"] = "Term";
	$fieldToolTipsrenewals["English"]["term_id"] = "";
	$placeHoldersrenewals["English"]["term_id"] = "";
	$fieldLabelsrenewals["English"]["support_start_date"] = "Support Start Date";
	$fieldToolTipsrenewals["English"]["support_start_date"] = "";
	$placeHoldersrenewals["English"]["support_start_date"] = "";
	$fieldLabelsrenewals["English"]["comment_actions"] = "Comment Actions";
	$fieldToolTipsrenewals["English"]["comment_actions"] = "";
	$placeHoldersrenewals["English"]["comment_actions"] = "";
	$fieldLabelsrenewals["English"]["last_update"] = "Last Update";
	$fieldToolTipsrenewals["English"]["last_update"] = "";
	$placeHoldersrenewals["English"]["last_update"] = "";
	$fieldLabelsrenewals["English"]["alert_id"] = "Alert ID";
	$fieldToolTipsrenewals["English"]["alert_id"] = "";
	$placeHoldersrenewals["English"]["alert_id"] = "";
	$fieldLabelsrenewals["English"]["vendor_contact_id"] = "Vendor Contact";
	$fieldToolTipsrenewals["English"]["vendor_contact_id"] = "";
	$placeHoldersrenewals["English"]["vendor_contact_id"] = "";
	$fieldLabelsrenewals["English"]["erf"] = "PO Reference";
	$fieldToolTipsrenewals["English"]["erf"] = "";
	$placeHoldersrenewals["English"]["erf"] = "";
	$fieldLabelsrenewals["English"]["guid"] = "Guid";
	$fieldToolTipsrenewals["English"]["guid"] = "";
	$placeHoldersrenewals["English"]["guid"] = "";
	$fieldLabelsrenewals["English"]["documents"] = "Documents";
	$fieldToolTipsrenewals["English"]["documents"] = "";
	$placeHoldersrenewals["English"]["documents"] = "";
	$fieldLabelsrenewals["English"]["status_id"] = "Status";
	$fieldToolTipsrenewals["English"]["status_id"] = "";
	$placeHoldersrenewals["English"]["status_id"] = "";
	$fieldLabelsrenewals["English"]["cost"] = "Cost";
	$fieldToolTipsrenewals["English"]["cost"] = "";
	$placeHoldersrenewals["English"]["cost"] = "";
	$fieldLabelsrenewals["English"]["request_date"] = "Request Date";
	$fieldToolTipsrenewals["English"]["request_date"] = "";
	$placeHoldersrenewals["English"]["request_date"] = "";
	$fieldLabelsrenewals["English"]["quote_ref"] = "Quote Ref";
	$fieldToolTipsrenewals["English"]["quote_ref"] = "";
	$placeHoldersrenewals["English"]["quote_ref"] = "";
	$fieldLabelsrenewals["English"]["po"] = "PO Number";
	$fieldToolTipsrenewals["English"]["po"] = "";
	$placeHoldersrenewals["English"]["po"] = "";
	$fieldLabelsrenewals["English"]["cc_so"] = "CC SO";
	$fieldToolTipsrenewals["English"]["cc_so"] = "";
	$placeHoldersrenewals["English"]["cc_so"] = "";
	$fieldLabelsrenewals["English"]["supplier_ref"] = "Supplier PO Ref";
	$fieldToolTipsrenewals["English"]["supplier_ref"] = "";
	$placeHoldersrenewals["English"]["supplier_ref"] = "";
	$fieldLabelsrenewals["English"]["supplier_order_ref"] = "Supplier Quote Ref";
	$fieldToolTipsrenewals["English"]["supplier_order_ref"] = "";
	$placeHoldersrenewals["English"]["supplier_order_ref"] = "";
	$fieldLabelsrenewals["English"]["pod"] = "POD";
	$fieldToolTipsrenewals["English"]["pod"] = "";
	$placeHoldersrenewals["English"]["pod"] = "";
	$fieldLabelsrenewals["English"]["task_number"] = "Task Number";
	$fieldToolTipsrenewals["English"]["task_number"] = "";
	$placeHoldersrenewals["English"]["task_number"] = "";
	$fieldLabelsrenewals["English"]["tracking_ref"] = "Tracking Ref";
	$fieldToolTipsrenewals["English"]["tracking_ref"] = "";
	$placeHoldersrenewals["English"]["tracking_ref"] = "";
	$fieldLabelsrenewals["English"]["delivery_code"] = "Delivery Code";
	$fieldToolTipsrenewals["English"]["delivery_code"] = "";
	$placeHoldersrenewals["English"]["delivery_code"] = "";
	$fieldLabelsrenewals["English"]["pulse_id"] = "Pulse ID";
	$fieldToolTipsrenewals["English"]["pulse_id"] = "";
	$placeHoldersrenewals["English"]["pulse_id"] = "";
	$fieldLabelsrenewals["English"]["date_billed"] = "Date Billed";
	$fieldToolTipsrenewals["English"]["date_billed"] = "";
	$placeHoldersrenewals["English"]["date_billed"] = "";
	$fieldLabelsrenewals["English"]["product_id"] = "Product";
	$fieldToolTipsrenewals["English"]["product_id"] = "";
	$placeHoldersrenewals["English"]["product_id"] = "";
	$fieldLabelsrenewals["English"]["renewal_date"] = "Renewal Date";
	$fieldToolTipsrenewals["English"]["renewal_date"] = "";
	$placeHoldersrenewals["English"]["renewal_date"] = "";
	$fieldLabelsrenewals["English"]["recurrence"] = "Recurrence";
	$fieldToolTipsrenewals["English"]["recurrence"] = "";
	$placeHoldersrenewals["English"]["recurrence"] = "";
	if (count($fieldToolTipsrenewals["English"]))
		$tdatarenewals[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsrenewals[""] = array();
	$fieldToolTipsrenewals[""] = array();
	$placeHoldersrenewals[""] = array();
	$pageTitlesrenewals[""] = array();
	if (count($fieldToolTipsrenewals[""]))
		$tdatarenewals[".isUseToolTips"] = true;
}


	$tdatarenewals[".NCSearch"] = true;



$tdatarenewals[".shortTableName"] = "renewals";
$tdatarenewals[".nSecOptions"] = 0;
$tdatarenewals[".recsPerRowPrint"] = 1;
$tdatarenewals[".mainTableOwnerID"] = "";
$tdatarenewals[".moveNext"] = 1;
$tdatarenewals[".entityType"] = 0;

$tdatarenewals[".strOriginalTableName"] = "renewals";

	



$tdatarenewals[".showAddInPopup"] = false;

$tdatarenewals[".showEditInPopup"] = false;

$tdatarenewals[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarenewals[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarenewals[".fieldsForRegister"] = array();

$tdatarenewals[".listAjax"] = false;

	$tdatarenewals[".audit"] = false;

	$tdatarenewals[".locking"] = false;

$tdatarenewals[".edit"] = true;
$tdatarenewals[".afterEditAction"] = 1;
$tdatarenewals[".closePopupAfterEdit"] = 1;
$tdatarenewals[".afterEditActionDetTable"] = "";

$tdatarenewals[".add"] = true;
$tdatarenewals[".afterAddAction"] = 1;
$tdatarenewals[".closePopupAfterAdd"] = 1;
$tdatarenewals[".afterAddActionDetTable"] = "";

$tdatarenewals[".list"] = true;



$tdatarenewals[".reorderRecordsByHeader"] = true;


$tdatarenewals[".exportFormatting"] = 2;
$tdatarenewals[".exportDelimiter"] = ",";
		
$tdatarenewals[".view"] = true;

$tdatarenewals[".import"] = true;

$tdatarenewals[".exportTo"] = true;

$tdatarenewals[".printFriendly"] = true;


$tdatarenewals[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatarenewals[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatarenewals[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatarenewals[".searchSaving"] = false;
//

$tdatarenewals[".showSearchPanel"] = true;
		$tdatarenewals[".flexibleSearch"] = true;

$tdatarenewals[".isUseAjaxSuggest"] = true;

$tdatarenewals[".rowHighlite"] = true;





$tdatarenewals[".ajaxCodeSnippetAdded"] = false;

$tdatarenewals[".buttonsAdded"] = false;

$tdatarenewals[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarenewals[".isUseTimeForSearch"] = false;



$tdatarenewals[".badgeColor"] = "b22222";


$tdatarenewals[".allSearchFields"] = array();
$tdatarenewals[".filterFields"] = array();
$tdatarenewals[".requiredSearchFields"] = array();

$tdatarenewals[".allSearchFields"][] = "request_date";
	$tdatarenewals[".allSearchFields"][] = "quote_ref";
	$tdatarenewals[".allSearchFields"][] = "po";
	$tdatarenewals[".allSearchFields"][] = "cc_so";
	$tdatarenewals[".allSearchFields"][] = "supplier_ref";
	$tdatarenewals[".allSearchFields"][] = "supplier_order_ref";
	$tdatarenewals[".allSearchFields"][] = "pod";
	$tdatarenewals[".allSearchFields"][] = "task_number";
	$tdatarenewals[".allSearchFields"][] = "tracking_ref";
	$tdatarenewals[".allSearchFields"][] = "delivery_code";
	$tdatarenewals[".allSearchFields"][] = "pulse_id";
	$tdatarenewals[".allSearchFields"][] = "date_billed";
	$tdatarenewals[".allSearchFields"][] = "product_id";
	$tdatarenewals[".allSearchFields"][] = "recurrence";
	$tdatarenewals[".allSearchFields"][] = "status_id";
	$tdatarenewals[".allSearchFields"][] = "cost";
	$tdatarenewals[".allSearchFields"][] = "vendor_id";
	$tdatarenewals[".allSearchFields"][] = "sold_to_id";
	$tdatarenewals[".allSearchFields"][] = "sourcing_contact_id";
	$tdatarenewals[".allSearchFields"][] = "percent_product_sales";
	$tdatarenewals[".allSearchFields"][] = "alert_id";
	$tdatarenewals[".allSearchFields"][] = "ops_contact_id";
	$tdatarenewals[".allSearchFields"][] = "previous_po";
	$tdatarenewals[".allSearchFields"][] = "comment_actions";
	$tdatarenewals[".allSearchFields"][] = "previous_lbg_pp";
	$tdatarenewals[".allSearchFields"][] = "erf";
	$tdatarenewals[".allSearchFields"][] = "order_description";
	$tdatarenewals[".allSearchFields"][] = "impacted_by_dollar";
	$tdatarenewals[".allSearchFields"][] = "improvement_last_year";
	$tdatarenewals[".allSearchFields"][] = "renewal_date";
	$tdatarenewals[".allSearchFields"][] = "improvement_comments";
	$tdatarenewals[".allSearchFields"][] = "support_end_date";
	$tdatarenewals[".allSearchFields"][] = "documents";
	$tdatarenewals[".allSearchFields"][] = "service_type_id";
	$tdatarenewals[".allSearchFields"][] = "term_id";
	$tdatarenewals[".allSearchFields"][] = "support_start_date";
	$tdatarenewals[".allSearchFields"][] = "last_update";
	$tdatarenewals[".allSearchFields"][] = "vendor_contact_id";
	

$tdatarenewals[".googleLikeFields"] = array();
$tdatarenewals[".googleLikeFields"][] = "id";
$tdatarenewals[".googleLikeFields"][] = "vendor_id";
$tdatarenewals[".googleLikeFields"][] = "order_description";
$tdatarenewals[".googleLikeFields"][] = "sold_to_id";
$tdatarenewals[".googleLikeFields"][] = "ops_contact_id";
$tdatarenewals[".googleLikeFields"][] = "sourcing_contact_id";
$tdatarenewals[".googleLikeFields"][] = "previous_po";
$tdatarenewals[".googleLikeFields"][] = "previous_lbg_pp";
$tdatarenewals[".googleLikeFields"][] = "impacted_by_dollar";
$tdatarenewals[".googleLikeFields"][] = "improvement_last_year";
$tdatarenewals[".googleLikeFields"][] = "improvement_comments";
$tdatarenewals[".googleLikeFields"][] = "percent_product_sales";
$tdatarenewals[".googleLikeFields"][] = "service_type_id";
$tdatarenewals[".googleLikeFields"][] = "term_id";
$tdatarenewals[".googleLikeFields"][] = "support_start_date";
$tdatarenewals[".googleLikeFields"][] = "support_end_date";
$tdatarenewals[".googleLikeFields"][] = "comment_actions";
$tdatarenewals[".googleLikeFields"][] = "last_update";
$tdatarenewals[".googleLikeFields"][] = "alert_id";
$tdatarenewals[".googleLikeFields"][] = "vendor_contact_id";
$tdatarenewals[".googleLikeFields"][] = "erf";
$tdatarenewals[".googleLikeFields"][] = "guid";
$tdatarenewals[".googleLikeFields"][] = "documents";
$tdatarenewals[".googleLikeFields"][] = "status_id";
$tdatarenewals[".googleLikeFields"][] = "cost";
$tdatarenewals[".googleLikeFields"][] = "request_date";
$tdatarenewals[".googleLikeFields"][] = "quote_ref";
$tdatarenewals[".googleLikeFields"][] = "po";
$tdatarenewals[".googleLikeFields"][] = "cc_so";
$tdatarenewals[".googleLikeFields"][] = "supplier_ref";
$tdatarenewals[".googleLikeFields"][] = "supplier_order_ref";
$tdatarenewals[".googleLikeFields"][] = "pod";
$tdatarenewals[".googleLikeFields"][] = "task_number";
$tdatarenewals[".googleLikeFields"][] = "tracking_ref";
$tdatarenewals[".googleLikeFields"][] = "delivery_code";
$tdatarenewals[".googleLikeFields"][] = "pulse_id";
$tdatarenewals[".googleLikeFields"][] = "date_billed";
$tdatarenewals[".googleLikeFields"][] = "product_id";
$tdatarenewals[".googleLikeFields"][] = "renewal_date";
$tdatarenewals[".googleLikeFields"][] = "recurrence";


$tdatarenewals[".advSearchFields"] = array();
$tdatarenewals[".advSearchFields"][] = "request_date";
$tdatarenewals[".advSearchFields"][] = "quote_ref";
$tdatarenewals[".advSearchFields"][] = "po";
$tdatarenewals[".advSearchFields"][] = "cc_so";
$tdatarenewals[".advSearchFields"][] = "supplier_ref";
$tdatarenewals[".advSearchFields"][] = "supplier_order_ref";
$tdatarenewals[".advSearchFields"][] = "pod";
$tdatarenewals[".advSearchFields"][] = "task_number";
$tdatarenewals[".advSearchFields"][] = "tracking_ref";
$tdatarenewals[".advSearchFields"][] = "delivery_code";
$tdatarenewals[".advSearchFields"][] = "pulse_id";
$tdatarenewals[".advSearchFields"][] = "date_billed";
$tdatarenewals[".advSearchFields"][] = "product_id";
$tdatarenewals[".advSearchFields"][] = "recurrence";
$tdatarenewals[".advSearchFields"][] = "status_id";
$tdatarenewals[".advSearchFields"][] = "cost";
$tdatarenewals[".advSearchFields"][] = "vendor_id";
$tdatarenewals[".advSearchFields"][] = "sold_to_id";
$tdatarenewals[".advSearchFields"][] = "sourcing_contact_id";
$tdatarenewals[".advSearchFields"][] = "percent_product_sales";
$tdatarenewals[".advSearchFields"][] = "alert_id";
$tdatarenewals[".advSearchFields"][] = "ops_contact_id";
$tdatarenewals[".advSearchFields"][] = "previous_po";
$tdatarenewals[".advSearchFields"][] = "comment_actions";
$tdatarenewals[".advSearchFields"][] = "previous_lbg_pp";
$tdatarenewals[".advSearchFields"][] = "erf";
$tdatarenewals[".advSearchFields"][] = "order_description";
$tdatarenewals[".advSearchFields"][] = "impacted_by_dollar";
$tdatarenewals[".advSearchFields"][] = "improvement_last_year";
$tdatarenewals[".advSearchFields"][] = "renewal_date";
$tdatarenewals[".advSearchFields"][] = "improvement_comments";
$tdatarenewals[".advSearchFields"][] = "support_end_date";
$tdatarenewals[".advSearchFields"][] = "documents";
$tdatarenewals[".advSearchFields"][] = "service_type_id";
$tdatarenewals[".advSearchFields"][] = "term_id";
$tdatarenewals[".advSearchFields"][] = "support_start_date";
$tdatarenewals[".advSearchFields"][] = "last_update";
$tdatarenewals[".advSearchFields"][] = "vendor_contact_id";

$tdatarenewals[".tableType"] = "list";

$tdatarenewals[".printerPageOrientation"] = 0;
$tdatarenewals[".nPrinterPageScale"] = 100;

$tdatarenewals[".nPrinterSplitRecords"] = 40;

$tdatarenewals[".nPrinterPDFSplitRecords"] = 40;



$tdatarenewals[".geocodingEnabled"] = false;





$tdatarenewals[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatarenewals[".pageSize"] = 20;

$tdatarenewals[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarenewals[".strOrderBy"] = $tstrOrderBy;

$tdatarenewals[".orderindexes"] = array();

$tdatarenewals[".sqlHead"] = "SELECT id,  	vendor_id,  	order_description,  	sold_to_id,  	ops_contact_id,  	sourcing_contact_id,  	previous_po,  	previous_lbg_pp,  	impacted_by_dollar,  	improvement_last_year,  	improvement_comments,  	percent_product_sales,  	service_type_id,  	term_id,  	support_start_date,  	support_end_date,  	comment_actions,  	last_update,  	alert_id,  	vendor_contact_id,  	erf,  	guid,  	documents,  	status_id,  	cost,  	request_date,  	quote_ref,  	po,  	cc_so,  	supplier_ref,  	supplier_order_ref,  	pod,  	task_number,  	tracking_ref,  	delivery_code,  	pulse_id,  	date_billed,  	product_id,  	renewal_date,  	recurrence";
$tdatarenewals[".sqlFrom"] = "FROM renewals";
$tdatarenewals[".sqlWhereExpr"] = "";
$tdatarenewals[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",	
	'showRowCount' => 0,
	'hideEmpty' => 0,	
);				  
$tdatarenewals[".arrGridTabs"] = $arrGridTabs;











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarenewals[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarenewals[".arrGroupsPerPage"] = $arrGPP;

$tdatarenewals[".highlightSearchResults"] = true;

$tableKeysrenewals = array();
$tableKeysrenewals[] = "id";
$tdatarenewals[".Keys"] = $tableKeysrenewals;

$tdatarenewals[".listFields"] = array();
$tdatarenewals[".listFields"][] = "recurrence";
$tdatarenewals[".listFields"][] = "status_id";
$tdatarenewals[".listFields"][] = "cost";
$tdatarenewals[".listFields"][] = "vendor_id";
$tdatarenewals[".listFields"][] = "sold_to_id";
$tdatarenewals[".listFields"][] = "ops_contact_id";
$tdatarenewals[".listFields"][] = "erf";
$tdatarenewals[".listFields"][] = "order_description";
$tdatarenewals[".listFields"][] = "renewal_date";
$tdatarenewals[".listFields"][] = "support_end_date";
$tdatarenewals[".listFields"][] = "documents";

$tdatarenewals[".hideMobileList"] = array();


$tdatarenewals[".viewFields"] = array();
$tdatarenewals[".viewFields"][] = "id";
$tdatarenewals[".viewFields"][] = "request_date";
$tdatarenewals[".viewFields"][] = "quote_ref";
$tdatarenewals[".viewFields"][] = "po";
$tdatarenewals[".viewFields"][] = "cc_so";
$tdatarenewals[".viewFields"][] = "supplier_ref";
$tdatarenewals[".viewFields"][] = "supplier_order_ref";
$tdatarenewals[".viewFields"][] = "pod";
$tdatarenewals[".viewFields"][] = "task_number";
$tdatarenewals[".viewFields"][] = "tracking_ref";
$tdatarenewals[".viewFields"][] = "delivery_code";
$tdatarenewals[".viewFields"][] = "pulse_id";
$tdatarenewals[".viewFields"][] = "date_billed";
$tdatarenewals[".viewFields"][] = "product_id";
$tdatarenewals[".viewFields"][] = "recurrence";
$tdatarenewals[".viewFields"][] = "status_id";
$tdatarenewals[".viewFields"][] = "cost";
$tdatarenewals[".viewFields"][] = "vendor_id";
$tdatarenewals[".viewFields"][] = "sold_to_id";
$tdatarenewals[".viewFields"][] = "sourcing_contact_id";
$tdatarenewals[".viewFields"][] = "alert_id";
$tdatarenewals[".viewFields"][] = "ops_contact_id";
$tdatarenewals[".viewFields"][] = "previous_po";
$tdatarenewals[".viewFields"][] = "previous_lbg_pp";
$tdatarenewals[".viewFields"][] = "erf";
$tdatarenewals[".viewFields"][] = "order_description";
$tdatarenewals[".viewFields"][] = "impacted_by_dollar";
$tdatarenewals[".viewFields"][] = "improvement_last_year";
$tdatarenewals[".viewFields"][] = "renewal_date";
$tdatarenewals[".viewFields"][] = "improvement_comments";
$tdatarenewals[".viewFields"][] = "support_end_date";
$tdatarenewals[".viewFields"][] = "documents";
$tdatarenewals[".viewFields"][] = "service_type_id";
$tdatarenewals[".viewFields"][] = "term_id";
$tdatarenewals[".viewFields"][] = "support_start_date";
$tdatarenewals[".viewFields"][] = "last_update";
$tdatarenewals[".viewFields"][] = "vendor_contact_id";
$tdatarenewals[".viewFields"][] = "guid";

$tdatarenewals[".addFields"] = array();
$tdatarenewals[".addFields"][] = "request_date";
$tdatarenewals[".addFields"][] = "quote_ref";
$tdatarenewals[".addFields"][] = "po";
$tdatarenewals[".addFields"][] = "cc_so";
$tdatarenewals[".addFields"][] = "supplier_ref";
$tdatarenewals[".addFields"][] = "supplier_order_ref";
$tdatarenewals[".addFields"][] = "pod";
$tdatarenewals[".addFields"][] = "task_number";
$tdatarenewals[".addFields"][] = "tracking_ref";
$tdatarenewals[".addFields"][] = "delivery_code";
$tdatarenewals[".addFields"][] = "pulse_id";
$tdatarenewals[".addFields"][] = "date_billed";
$tdatarenewals[".addFields"][] = "product_id";
$tdatarenewals[".addFields"][] = "recurrence";
$tdatarenewals[".addFields"][] = "status_id";
$tdatarenewals[".addFields"][] = "cost";
$tdatarenewals[".addFields"][] = "vendor_id";
$tdatarenewals[".addFields"][] = "sold_to_id";
$tdatarenewals[".addFields"][] = "sourcing_contact_id";
$tdatarenewals[".addFields"][] = "percent_product_sales";
$tdatarenewals[".addFields"][] = "alert_id";
$tdatarenewals[".addFields"][] = "ops_contact_id";
$tdatarenewals[".addFields"][] = "previous_po";
$tdatarenewals[".addFields"][] = "comment_actions";
$tdatarenewals[".addFields"][] = "previous_lbg_pp";
$tdatarenewals[".addFields"][] = "erf";
$tdatarenewals[".addFields"][] = "order_description";
$tdatarenewals[".addFields"][] = "impacted_by_dollar";
$tdatarenewals[".addFields"][] = "improvement_last_year";
$tdatarenewals[".addFields"][] = "renewal_date";
$tdatarenewals[".addFields"][] = "improvement_comments";
$tdatarenewals[".addFields"][] = "support_end_date";
$tdatarenewals[".addFields"][] = "documents";
$tdatarenewals[".addFields"][] = "service_type_id";
$tdatarenewals[".addFields"][] = "term_id";
$tdatarenewals[".addFields"][] = "support_start_date";
$tdatarenewals[".addFields"][] = "last_update";
$tdatarenewals[".addFields"][] = "vendor_contact_id";

$tdatarenewals[".masterListFields"] = array();
$tdatarenewals[".masterListFields"][] = "id";
$tdatarenewals[".masterListFields"][] = "request_date";
$tdatarenewals[".masterListFields"][] = "quote_ref";
$tdatarenewals[".masterListFields"][] = "po";
$tdatarenewals[".masterListFields"][] = "cc_so";
$tdatarenewals[".masterListFields"][] = "supplier_ref";
$tdatarenewals[".masterListFields"][] = "supplier_order_ref";
$tdatarenewals[".masterListFields"][] = "pod";
$tdatarenewals[".masterListFields"][] = "task_number";
$tdatarenewals[".masterListFields"][] = "tracking_ref";
$tdatarenewals[".masterListFields"][] = "delivery_code";
$tdatarenewals[".masterListFields"][] = "pulse_id";
$tdatarenewals[".masterListFields"][] = "date_billed";
$tdatarenewals[".masterListFields"][] = "product_id";
$tdatarenewals[".masterListFields"][] = "recurrence";
$tdatarenewals[".masterListFields"][] = "status_id";
$tdatarenewals[".masterListFields"][] = "cost";
$tdatarenewals[".masterListFields"][] = "vendor_id";
$tdatarenewals[".masterListFields"][] = "sold_to_id";
$tdatarenewals[".masterListFields"][] = "sourcing_contact_id";
$tdatarenewals[".masterListFields"][] = "percent_product_sales";
$tdatarenewals[".masterListFields"][] = "alert_id";
$tdatarenewals[".masterListFields"][] = "ops_contact_id";
$tdatarenewals[".masterListFields"][] = "previous_po";
$tdatarenewals[".masterListFields"][] = "comment_actions";
$tdatarenewals[".masterListFields"][] = "previous_lbg_pp";
$tdatarenewals[".masterListFields"][] = "erf";
$tdatarenewals[".masterListFields"][] = "order_description";
$tdatarenewals[".masterListFields"][] = "impacted_by_dollar";
$tdatarenewals[".masterListFields"][] = "improvement_last_year";
$tdatarenewals[".masterListFields"][] = "renewal_date";
$tdatarenewals[".masterListFields"][] = "improvement_comments";
$tdatarenewals[".masterListFields"][] = "support_end_date";
$tdatarenewals[".masterListFields"][] = "documents";
$tdatarenewals[".masterListFields"][] = "service_type_id";
$tdatarenewals[".masterListFields"][] = "term_id";
$tdatarenewals[".masterListFields"][] = "support_start_date";
$tdatarenewals[".masterListFields"][] = "last_update";
$tdatarenewals[".masterListFields"][] = "vendor_contact_id";
$tdatarenewals[".masterListFields"][] = "guid";

$tdatarenewals[".inlineAddFields"] = array();
$tdatarenewals[".inlineAddFields"][] = "recurrence";

$tdatarenewals[".editFields"] = array();
$tdatarenewals[".editFields"][] = "request_date";
$tdatarenewals[".editFields"][] = "quote_ref";
$tdatarenewals[".editFields"][] = "po";
$tdatarenewals[".editFields"][] = "cc_so";
$tdatarenewals[".editFields"][] = "supplier_ref";
$tdatarenewals[".editFields"][] = "supplier_order_ref";
$tdatarenewals[".editFields"][] = "pod";
$tdatarenewals[".editFields"][] = "task_number";
$tdatarenewals[".editFields"][] = "tracking_ref";
$tdatarenewals[".editFields"][] = "delivery_code";
$tdatarenewals[".editFields"][] = "pulse_id";
$tdatarenewals[".editFields"][] = "date_billed";
$tdatarenewals[".editFields"][] = "product_id";
$tdatarenewals[".editFields"][] = "recurrence";
$tdatarenewals[".editFields"][] = "status_id";
$tdatarenewals[".editFields"][] = "cost";
$tdatarenewals[".editFields"][] = "vendor_id";
$tdatarenewals[".editFields"][] = "sold_to_id";
$tdatarenewals[".editFields"][] = "sourcing_contact_id";
$tdatarenewals[".editFields"][] = "percent_product_sales";
$tdatarenewals[".editFields"][] = "alert_id";
$tdatarenewals[".editFields"][] = "ops_contact_id";
$tdatarenewals[".editFields"][] = "previous_po";
$tdatarenewals[".editFields"][] = "comment_actions";
$tdatarenewals[".editFields"][] = "previous_lbg_pp";
$tdatarenewals[".editFields"][] = "erf";
$tdatarenewals[".editFields"][] = "order_description";
$tdatarenewals[".editFields"][] = "impacted_by_dollar";
$tdatarenewals[".editFields"][] = "improvement_last_year";
$tdatarenewals[".editFields"][] = "renewal_date";
$tdatarenewals[".editFields"][] = "improvement_comments";
$tdatarenewals[".editFields"][] = "support_end_date";
$tdatarenewals[".editFields"][] = "documents";
$tdatarenewals[".editFields"][] = "service_type_id";
$tdatarenewals[".editFields"][] = "term_id";
$tdatarenewals[".editFields"][] = "support_start_date";
$tdatarenewals[".editFields"][] = "last_update";
$tdatarenewals[".editFields"][] = "vendor_contact_id";

$tdatarenewals[".inlineEditFields"] = array();
$tdatarenewals[".inlineEditFields"][] = "recurrence";

$tdatarenewals[".updateSelectedFields"] = array();
$tdatarenewals[".updateSelectedFields"][] = "request_date";
$tdatarenewals[".updateSelectedFields"][] = "quote_ref";
$tdatarenewals[".updateSelectedFields"][] = "po";
$tdatarenewals[".updateSelectedFields"][] = "cc_so";
$tdatarenewals[".updateSelectedFields"][] = "supplier_ref";
$tdatarenewals[".updateSelectedFields"][] = "supplier_order_ref";
$tdatarenewals[".updateSelectedFields"][] = "pod";
$tdatarenewals[".updateSelectedFields"][] = "task_number";
$tdatarenewals[".updateSelectedFields"][] = "tracking_ref";
$tdatarenewals[".updateSelectedFields"][] = "delivery_code";
$tdatarenewals[".updateSelectedFields"][] = "pulse_id";
$tdatarenewals[".updateSelectedFields"][] = "date_billed";
$tdatarenewals[".updateSelectedFields"][] = "product_id";
$tdatarenewals[".updateSelectedFields"][] = "recurrence";
$tdatarenewals[".updateSelectedFields"][] = "status_id";
$tdatarenewals[".updateSelectedFields"][] = "cost";
$tdatarenewals[".updateSelectedFields"][] = "vendor_id";
$tdatarenewals[".updateSelectedFields"][] = "sold_to_id";
$tdatarenewals[".updateSelectedFields"][] = "sourcing_contact_id";
$tdatarenewals[".updateSelectedFields"][] = "percent_product_sales";
$tdatarenewals[".updateSelectedFields"][] = "alert_id";
$tdatarenewals[".updateSelectedFields"][] = "ops_contact_id";
$tdatarenewals[".updateSelectedFields"][] = "previous_po";
$tdatarenewals[".updateSelectedFields"][] = "comment_actions";
$tdatarenewals[".updateSelectedFields"][] = "previous_lbg_pp";
$tdatarenewals[".updateSelectedFields"][] = "erf";
$tdatarenewals[".updateSelectedFields"][] = "order_description";
$tdatarenewals[".updateSelectedFields"][] = "impacted_by_dollar";
$tdatarenewals[".updateSelectedFields"][] = "improvement_last_year";
$tdatarenewals[".updateSelectedFields"][] = "renewal_date";
$tdatarenewals[".updateSelectedFields"][] = "improvement_comments";
$tdatarenewals[".updateSelectedFields"][] = "support_end_date";
$tdatarenewals[".updateSelectedFields"][] = "documents";
$tdatarenewals[".updateSelectedFields"][] = "service_type_id";
$tdatarenewals[".updateSelectedFields"][] = "term_id";
$tdatarenewals[".updateSelectedFields"][] = "support_start_date";
$tdatarenewals[".updateSelectedFields"][] = "last_update";
$tdatarenewals[".updateSelectedFields"][] = "vendor_contact_id";


$tdatarenewals[".exportFields"] = array();
$tdatarenewals[".exportFields"][] = "id";
$tdatarenewals[".exportFields"][] = "request_date";
$tdatarenewals[".exportFields"][] = "quote_ref";
$tdatarenewals[".exportFields"][] = "po";
$tdatarenewals[".exportFields"][] = "cc_so";
$tdatarenewals[".exportFields"][] = "supplier_ref";
$tdatarenewals[".exportFields"][] = "supplier_order_ref";
$tdatarenewals[".exportFields"][] = "pod";
$tdatarenewals[".exportFields"][] = "task_number";
$tdatarenewals[".exportFields"][] = "tracking_ref";
$tdatarenewals[".exportFields"][] = "delivery_code";
$tdatarenewals[".exportFields"][] = "pulse_id";
$tdatarenewals[".exportFields"][] = "date_billed";
$tdatarenewals[".exportFields"][] = "product_id";
$tdatarenewals[".exportFields"][] = "recurrence";
$tdatarenewals[".exportFields"][] = "status_id";
$tdatarenewals[".exportFields"][] = "cost";
$tdatarenewals[".exportFields"][] = "vendor_id";
$tdatarenewals[".exportFields"][] = "sold_to_id";
$tdatarenewals[".exportFields"][] = "sourcing_contact_id";
$tdatarenewals[".exportFields"][] = "percent_product_sales";
$tdatarenewals[".exportFields"][] = "alert_id";
$tdatarenewals[".exportFields"][] = "ops_contact_id";
$tdatarenewals[".exportFields"][] = "previous_po";
$tdatarenewals[".exportFields"][] = "comment_actions";
$tdatarenewals[".exportFields"][] = "previous_lbg_pp";
$tdatarenewals[".exportFields"][] = "erf";
$tdatarenewals[".exportFields"][] = "order_description";
$tdatarenewals[".exportFields"][] = "impacted_by_dollar";
$tdatarenewals[".exportFields"][] = "improvement_last_year";
$tdatarenewals[".exportFields"][] = "renewal_date";
$tdatarenewals[".exportFields"][] = "improvement_comments";
$tdatarenewals[".exportFields"][] = "support_end_date";
$tdatarenewals[".exportFields"][] = "documents";
$tdatarenewals[".exportFields"][] = "service_type_id";
$tdatarenewals[".exportFields"][] = "term_id";
$tdatarenewals[".exportFields"][] = "support_start_date";
$tdatarenewals[".exportFields"][] = "last_update";
$tdatarenewals[".exportFields"][] = "vendor_contact_id";
$tdatarenewals[".exportFields"][] = "guid";

$tdatarenewals[".importFields"] = array();
$tdatarenewals[".importFields"][] = "vendor_id";
$tdatarenewals[".importFields"][] = "order_description";
$tdatarenewals[".importFields"][] = "sold_to_id";
$tdatarenewals[".importFields"][] = "ops_contact_id";
$tdatarenewals[".importFields"][] = "sourcing_contact_id";
$tdatarenewals[".importFields"][] = "previous_po";
$tdatarenewals[".importFields"][] = "previous_lbg_pp";
$tdatarenewals[".importFields"][] = "impacted_by_dollar";
$tdatarenewals[".importFields"][] = "improvement_last_year";
$tdatarenewals[".importFields"][] = "improvement_comments";
$tdatarenewals[".importFields"][] = "percent_product_sales";
$tdatarenewals[".importFields"][] = "service_type_id";
$tdatarenewals[".importFields"][] = "term_id";
$tdatarenewals[".importFields"][] = "support_start_date";
$tdatarenewals[".importFields"][] = "support_end_date";
$tdatarenewals[".importFields"][] = "comment_actions";
$tdatarenewals[".importFields"][] = "last_update";
$tdatarenewals[".importFields"][] = "alert_id";
$tdatarenewals[".importFields"][] = "vendor_contact_id";
$tdatarenewals[".importFields"][] = "erf";
$tdatarenewals[".importFields"][] = "status_id";
$tdatarenewals[".importFields"][] = "cost";
$tdatarenewals[".importFields"][] = "request_date";
$tdatarenewals[".importFields"][] = "quote_ref";
$tdatarenewals[".importFields"][] = "po";
$tdatarenewals[".importFields"][] = "cc_so";
$tdatarenewals[".importFields"][] = "supplier_ref";
$tdatarenewals[".importFields"][] = "supplier_order_ref";
$tdatarenewals[".importFields"][] = "pod";
$tdatarenewals[".importFields"][] = "task_number";
$tdatarenewals[".importFields"][] = "tracking_ref";
$tdatarenewals[".importFields"][] = "delivery_code";
$tdatarenewals[".importFields"][] = "pulse_id";
$tdatarenewals[".importFields"][] = "date_billed";
$tdatarenewals[".importFields"][] = "product_id";
$tdatarenewals[".importFields"][] = "renewal_date";
$tdatarenewals[".importFields"][] = "recurrence";

$tdatarenewals[".printFields"] = array();
$tdatarenewals[".printFields"][] = "id";
$tdatarenewals[".printFields"][] = "request_date";
$tdatarenewals[".printFields"][] = "quote_ref";
$tdatarenewals[".printFields"][] = "po";
$tdatarenewals[".printFields"][] = "cc_so";
$tdatarenewals[".printFields"][] = "supplier_ref";
$tdatarenewals[".printFields"][] = "supplier_order_ref";
$tdatarenewals[".printFields"][] = "pod";
$tdatarenewals[".printFields"][] = "task_number";
$tdatarenewals[".printFields"][] = "tracking_ref";
$tdatarenewals[".printFields"][] = "delivery_code";
$tdatarenewals[".printFields"][] = "pulse_id";
$tdatarenewals[".printFields"][] = "date_billed";
$tdatarenewals[".printFields"][] = "product_id";
$tdatarenewals[".printFields"][] = "recurrence";
$tdatarenewals[".printFields"][] = "status_id";
$tdatarenewals[".printFields"][] = "cost";
$tdatarenewals[".printFields"][] = "vendor_id";
$tdatarenewals[".printFields"][] = "sold_to_id";
$tdatarenewals[".printFields"][] = "sourcing_contact_id";
$tdatarenewals[".printFields"][] = "percent_product_sales";
$tdatarenewals[".printFields"][] = "alert_id";
$tdatarenewals[".printFields"][] = "ops_contact_id";
$tdatarenewals[".printFields"][] = "previous_po";
$tdatarenewals[".printFields"][] = "comment_actions";
$tdatarenewals[".printFields"][] = "previous_lbg_pp";
$tdatarenewals[".printFields"][] = "erf";
$tdatarenewals[".printFields"][] = "order_description";
$tdatarenewals[".printFields"][] = "impacted_by_dollar";
$tdatarenewals[".printFields"][] = "improvement_last_year";
$tdatarenewals[".printFields"][] = "renewal_date";
$tdatarenewals[".printFields"][] = "improvement_comments";
$tdatarenewals[".printFields"][] = "support_end_date";
$tdatarenewals[".printFields"][] = "documents";
$tdatarenewals[".printFields"][] = "service_type_id";
$tdatarenewals[".printFields"][] = "term_id";
$tdatarenewals[".printFields"][] = "support_start_date";
$tdatarenewals[".printFields"][] = "last_update";
$tdatarenewals[".printFields"][] = "vendor_contact_id";
$tdatarenewals[".printFields"][] = "guid";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatarenewals["id"] = $fdata;
//	vendor_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "vendor_id";
	$fdata["GoodName"] = "vendor_id";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","vendor_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "vendor_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vendor_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "vendors";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "vendor_name";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "vendor_contact_id";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "product_id";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["vendor_id"] = $fdata;
//	order_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "order_description";
	$fdata["GoodName"] = "order_description";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","order_description");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "order_description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "order_description";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["order_description"] = $fdata;
//	sold_to_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sold_to_id";
	$fdata["GoodName"] = "sold_to_id";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","sold_to_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sold_to_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sold_to_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "customers";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "customer_name";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["sold_to_id"] = $fdata;
//	ops_contact_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ops_contact_id";
	$fdata["GoodName"] = "ops_contact_id";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","ops_contact_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ops_contact_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ops_contact_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ops_contacts";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "contact_name";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["ops_contact_id"] = $fdata;
//	sourcing_contact_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sourcing_contact_id";
	$fdata["GoodName"] = "sourcing_contact_id";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","sourcing_contact_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sourcing_contact_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sourcing_contact_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "sourcing_contacts";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "contact_name";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["sourcing_contact_id"] = $fdata;
//	previous_po
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "previous_po";
	$fdata["GoodName"] = "previous_po";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","previous_po");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "previous_po";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "previous_po";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["previous_po"] = $fdata;
//	previous_lbg_pp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "previous_lbg_pp";
	$fdata["GoodName"] = "previous_lbg_pp";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","previous_lbg_pp");
	$fdata["FieldType"] = 14;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "previous_lbg_pp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "previous_lbg_pp";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["previous_lbg_pp"] = $fdata;
//	impacted_by_dollar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "impacted_by_dollar";
	$fdata["GoodName"] = "impacted_by_dollar";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","impacted_by_dollar");
	$fdata["FieldType"] = 16;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "impacted_by_dollar";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "impacted_by_dollar";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["impacted_by_dollar"] = $fdata;
//	improvement_last_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "improvement_last_year";
	$fdata["GoodName"] = "improvement_last_year";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","improvement_last_year");
	$fdata["FieldType"] = 14;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "improvement_last_year";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "improvement_last_year";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["improvement_last_year"] = $fdata;
//	improvement_comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "improvement_comments";
	$fdata["GoodName"] = "improvement_comments";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","improvement_comments");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "improvement_comments";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "improvement_comments";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["improvement_comments"] = $fdata;
//	percent_product_sales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "percent_product_sales";
	$fdata["GoodName"] = "percent_product_sales";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","percent_product_sales");
	$fdata["FieldType"] = 5;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "percent_product_sales";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "percent_product_sales";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["percent_product_sales"] = $fdata;
//	service_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "service_type_id";
	$fdata["GoodName"] = "service_type_id";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","service_type_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "service_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "service_type_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "renewal_types";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "renewal_type";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["service_type_id"] = $fdata;
//	term_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "term_id";
	$fdata["GoodName"] = "term_id";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","term_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "term_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "term_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "terms";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "term_description";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["term_id"] = $fdata;
//	support_start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "support_start_date";
	$fdata["GoodName"] = "support_start_date";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","support_start_date");
	$fdata["FieldType"] = 7;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "support_start_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "support_start_date";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatarenewals["support_start_date"] = $fdata;
//	support_end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "support_end_date";
	$fdata["GoodName"] = "support_end_date";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","support_end_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "support_end_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "support_end_date";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatarenewals["support_end_date"] = $fdata;
//	comment_actions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "comment_actions";
	$fdata["GoodName"] = "comment_actions";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","comment_actions");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "comment_actions";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comment_actions";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["comment_actions"] = $fdata;
//	last_update
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "last_update";
	$fdata["GoodName"] = "last_update";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","last_update");
	$fdata["FieldType"] = 7;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "last_update";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_update";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatarenewals["last_update"] = $fdata;
//	alert_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "alert_id";
	$fdata["GoodName"] = "alert_id";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","alert_id");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "alert_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alert_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["alert_id"] = $fdata;
//	vendor_contact_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "vendor_contact_id";
	$fdata["GoodName"] = "vendor_contact_id";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","vendor_contact_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "vendor_contact_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vendor_contact_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "vendor_contacts";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "contact_name";
	
	

	
	$edata["LookupOrderBy"] = "contact_name";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "vendor_id", "lookup" => "vendor_id" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["vendor_contact_id"] = $fdata;
//	erf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "erf";
	$fdata["GoodName"] = "erf";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","erf");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "erf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "erf";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["erf"] = $fdata;
//	guid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "guid";
	$fdata["GoodName"] = "guid";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","guid");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "guid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "guid";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatarenewals["guid"] = $fdata;
//	documents
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "documents";
	$fdata["GoodName"] = "documents";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","documents");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "documents";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documents";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["documents"] = $fdata;
//	status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "status_id";
	$fdata["GoodName"] = "status_id";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","status_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "status";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "status";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["status_id"] = $fdata;
//	cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "cost";
	$fdata["GoodName"] = "cost";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","cost");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cost";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["cost"] = $fdata;
//	request_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "request_date";
	$fdata["GoodName"] = "request_date";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","request_date");
	$fdata["FieldType"] = 7;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "request_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "request_date";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatarenewals["request_date"] = $fdata;
//	quote_ref
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "quote_ref";
	$fdata["GoodName"] = "quote_ref";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","quote_ref");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "quote_ref";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "quote_ref";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["quote_ref"] = $fdata;
//	po
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "po";
	$fdata["GoodName"] = "po";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","po");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "po";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "po";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["po"] = $fdata;
//	cc_so
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "cc_so";
	$fdata["GoodName"] = "cc_so";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","cc_so");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cc_so";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cc_so";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["cc_so"] = $fdata;
//	supplier_ref
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "supplier_ref";
	$fdata["GoodName"] = "supplier_ref";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","supplier_ref");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "supplier_ref";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "supplier_ref";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["supplier_ref"] = $fdata;
//	supplier_order_ref
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "supplier_order_ref";
	$fdata["GoodName"] = "supplier_order_ref";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","supplier_order_ref");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "supplier_order_ref";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "supplier_order_ref";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["supplier_order_ref"] = $fdata;
//	pod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "pod";
	$fdata["GoodName"] = "pod";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","pod");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "pod";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pod";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["pod"] = $fdata;
//	task_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "task_number";
	$fdata["GoodName"] = "task_number";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","task_number");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "task_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "task_number";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["task_number"] = $fdata;
//	tracking_ref
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "tracking_ref";
	$fdata["GoodName"] = "tracking_ref";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","tracking_ref");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tracking_ref";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tracking_ref";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["tracking_ref"] = $fdata;
//	delivery_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "delivery_code";
	$fdata["GoodName"] = "delivery_code";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","delivery_code");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "delivery_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delivery_code";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["delivery_code"] = $fdata;
//	pulse_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "pulse_id";
	$fdata["GoodName"] = "pulse_id";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","pulse_id");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "pulse_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pulse_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["pulse_id"] = $fdata;
//	date_billed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "date_billed";
	$fdata["GoodName"] = "date_billed";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","date_billed");
	$fdata["FieldType"] = 7;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "date_billed";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_billed";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatarenewals["date_billed"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","product_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "product_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "products";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "product_name";
	
	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "vendor_id", "lookup" => "vendor_id" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["product_id"] = $fdata;
//	renewal_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "renewal_date";
	$fdata["GoodName"] = "renewal_date";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","renewal_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "renewal_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "renewal_date";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatarenewals["renewal_date"] = $fdata;
//	recurrence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "recurrence";
	$fdata["GoodName"] = "recurrence";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("renewals","recurrence");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "recurrence";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "recurrence";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewals["recurrence"] = $fdata;


$tables_data["renewals"]=&$tdatarenewals;
$field_labels["renewals"] = &$fieldLabelsrenewals;
$fieldToolTips["renewals"] = &$fieldToolTipsrenewals;
$placeHolders["renewals"] = &$placeHoldersrenewals;
$page_titles["renewals"] = &$pageTitlesrenewals;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["renewals"] = array();
//	license_keys
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="license_keys";
		$detailsParam["dOriginalTable"] = "license_keys";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "license_keys";
	$detailsParam["dCaptionTable"] = GetTableCaption("license_keys");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["renewals"][$dIndex] = $detailsParam;

	
		$detailsTablesData["renewals"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["renewals"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["renewals"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["renewals"][$dIndex]["detailKeys"][]="renewal_id";
//	Renewals Due 90 Days
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Renewals Due 90 Days";
		$detailsParam["dOriginalTable"] = "renewals";
		$detailsParam["proceedLink"] = true;
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "Renewals_Due_90_Days";
	$detailsParam["dCaptionTable"] = GetTableCaption("Renewals_Due_90_Days");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["renewals"][$dIndex] = $detailsParam;

	
		$detailsTablesData["renewals"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["renewals"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["renewals"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["renewals"][$dIndex]["detailKeys"][]="id";

// tables which are master tables for current table (detail)
$masterTablesData["renewals"] = array();


	
				$strOriginalDetailsTable="vendors";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="vendors";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vendors";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["renewals"][0] = $masterParams;
				$masterTablesData["renewals"][0]["masterKeys"] = array();
	$masterTablesData["renewals"][0]["masterKeys"][]="id";
				$masterTablesData["renewals"][0]["detailKeys"] = array();
	$masterTablesData["renewals"][0]["detailKeys"][]="vendor_id";
		
	
				$strOriginalDetailsTable="vendor_contacts";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="vendor_contacts";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vendor_contacts";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["renewals"][1] = $masterParams;
				$masterTablesData["renewals"][1]["masterKeys"] = array();
	$masterTablesData["renewals"][1]["masterKeys"][]="id";
				$masterTablesData["renewals"][1]["detailKeys"] = array();
	$masterTablesData["renewals"][1]["detailKeys"][]="vendor_contact_id";
		
	
				$strOriginalDetailsTable="sourcing_contacts";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="sourcing_contacts";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "sourcing_contacts";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["renewals"][2] = $masterParams;
				$masterTablesData["renewals"][2]["masterKeys"] = array();
	$masterTablesData["renewals"][2]["masterKeys"][]="id";
				$masterTablesData["renewals"][2]["detailKeys"] = array();
	$masterTablesData["renewals"][2]["detailKeys"][]="sourcing_contact_id";
		
	
				$strOriginalDetailsTable="ops_contacts";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="ops_contacts";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ops_contacts";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["renewals"][3] = $masterParams;
				$masterTablesData["renewals"][3]["masterKeys"] = array();
	$masterTablesData["renewals"][3]["masterKeys"][]="id";
				$masterTablesData["renewals"][3]["detailKeys"] = array();
	$masterTablesData["renewals"][3]["detailKeys"][]="ops_contact_id";
		
	
				$strOriginalDetailsTable="renewal_types";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="renewal_types";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "renewal_types";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["renewals"][4] = $masterParams;
				$masterTablesData["renewals"][4]["masterKeys"] = array();
	$masterTablesData["renewals"][4]["masterKeys"][]="id";
				$masterTablesData["renewals"][4]["detailKeys"] = array();
	$masterTablesData["renewals"][4]["detailKeys"][]="service_type_id";
		
	
				$strOriginalDetailsTable="customers";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="customers";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "customers";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["renewals"][5] = $masterParams;
				$masterTablesData["renewals"][5]["masterKeys"] = array();
	$masterTablesData["renewals"][5]["masterKeys"][]="id";
				$masterTablesData["renewals"][5]["detailKeys"] = array();
	$masterTablesData["renewals"][5]["detailKeys"][]="sold_to_id";
		
	
				$strOriginalDetailsTable="terms";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="terms";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "terms";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["renewals"][6] = $masterParams;
				$masterTablesData["renewals"][6]["masterKeys"] = array();
	$masterTablesData["renewals"][6]["masterKeys"][]="id";
				$masterTablesData["renewals"][6]["detailKeys"] = array();
	$masterTablesData["renewals"][6]["detailKeys"][]="term_id";
		
	
				$strOriginalDetailsTable="status";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="status";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "status";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["renewals"][7] = $masterParams;
				$masterTablesData["renewals"][7]["masterKeys"] = array();
	$masterTablesData["renewals"][7]["masterKeys"][]="id";
				$masterTablesData["renewals"][7]["detailKeys"] = array();
	$masterTablesData["renewals"][7]["detailKeys"][]="status_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_renewals()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	vendor_id,  	order_description,  	sold_to_id,  	ops_contact_id,  	sourcing_contact_id,  	previous_po,  	previous_lbg_pp,  	impacted_by_dollar,  	improvement_last_year,  	improvement_comments,  	percent_product_sales,  	service_type_id,  	term_id,  	support_start_date,  	support_end_date,  	comment_actions,  	last_update,  	alert_id,  	vendor_contact_id,  	erf,  	guid,  	documents,  	status_id,  	cost,  	request_date,  	quote_ref,  	po,  	cc_so,  	supplier_ref,  	supplier_order_ref,  	pod,  	task_number,  	tracking_ref,  	delivery_code,  	pulse_id,  	date_billed,  	product_id,  	renewal_date,  	recurrence";
$proto0["m_strFrom"] = "FROM renewals";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "renewals";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "vendor_id",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto8["m_sql"] = "vendor_id";
$proto8["m_srcTableName"] = "renewals";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "order_description",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto10["m_sql"] = "order_description";
$proto10["m_srcTableName"] = "renewals";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sold_to_id",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto12["m_sql"] = "sold_to_id";
$proto12["m_srcTableName"] = "renewals";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ops_contact_id",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto14["m_sql"] = "ops_contact_id";
$proto14["m_srcTableName"] = "renewals";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sourcing_contact_id",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto16["m_sql"] = "sourcing_contact_id";
$proto16["m_srcTableName"] = "renewals";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "previous_po",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto18["m_sql"] = "previous_po";
$proto18["m_srcTableName"] = "renewals";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "previous_lbg_pp",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto20["m_sql"] = "previous_lbg_pp";
$proto20["m_srcTableName"] = "renewals";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "impacted_by_dollar",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto22["m_sql"] = "impacted_by_dollar";
$proto22["m_srcTableName"] = "renewals";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "improvement_last_year",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto24["m_sql"] = "improvement_last_year";
$proto24["m_srcTableName"] = "renewals";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "improvement_comments",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto26["m_sql"] = "improvement_comments";
$proto26["m_srcTableName"] = "renewals";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "percent_product_sales",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto28["m_sql"] = "percent_product_sales";
$proto28["m_srcTableName"] = "renewals";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "service_type_id",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto30["m_sql"] = "service_type_id";
$proto30["m_srcTableName"] = "renewals";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto32["m_sql"] = "term_id";
$proto32["m_srcTableName"] = "renewals";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "support_start_date",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto34["m_sql"] = "support_start_date";
$proto34["m_srcTableName"] = "renewals";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "support_end_date",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto36["m_sql"] = "support_end_date";
$proto36["m_srcTableName"] = "renewals";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "comment_actions",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto38["m_sql"] = "comment_actions";
$proto38["m_srcTableName"] = "renewals";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto40["m_sql"] = "last_update";
$proto40["m_srcTableName"] = "renewals";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "alert_id",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto42["m_sql"] = "alert_id";
$proto42["m_srcTableName"] = "renewals";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "vendor_contact_id",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto44["m_sql"] = "vendor_contact_id";
$proto44["m_srcTableName"] = "renewals";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "erf",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto46["m_sql"] = "erf";
$proto46["m_srcTableName"] = "renewals";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "guid",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto48["m_sql"] = "guid";
$proto48["m_srcTableName"] = "renewals";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "documents",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto50["m_sql"] = "documents";
$proto50["m_srcTableName"] = "renewals";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "status_id",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto52["m_sql"] = "status_id";
$proto52["m_srcTableName"] = "renewals";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "cost",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto54["m_sql"] = "cost";
$proto54["m_srcTableName"] = "renewals";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "request_date",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto56["m_sql"] = "request_date";
$proto56["m_srcTableName"] = "renewals";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "quote_ref",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto58["m_sql"] = "quote_ref";
$proto58["m_srcTableName"] = "renewals";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "po",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto60["m_sql"] = "po";
$proto60["m_srcTableName"] = "renewals";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "cc_so",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto62["m_sql"] = "cc_so";
$proto62["m_srcTableName"] = "renewals";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "supplier_ref",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto64["m_sql"] = "supplier_ref";
$proto64["m_srcTableName"] = "renewals";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "supplier_order_ref",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto66["m_sql"] = "supplier_order_ref";
$proto66["m_srcTableName"] = "renewals";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "pod",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto68["m_sql"] = "pod";
$proto68["m_srcTableName"] = "renewals";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "task_number",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto70["m_sql"] = "task_number";
$proto70["m_srcTableName"] = "renewals";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "tracking_ref",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto72["m_sql"] = "tracking_ref";
$proto72["m_srcTableName"] = "renewals";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "delivery_code",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto74["m_sql"] = "delivery_code";
$proto74["m_srcTableName"] = "renewals";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "pulse_id",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto76["m_sql"] = "pulse_id";
$proto76["m_srcTableName"] = "renewals";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "date_billed",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto78["m_sql"] = "date_billed";
$proto78["m_srcTableName"] = "renewals";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto80["m_sql"] = "product_id";
$proto80["m_srcTableName"] = "renewals";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "renewal_date",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto82["m_sql"] = "renewal_date";
$proto82["m_srcTableName"] = "renewals";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "recurrence",
	"m_strTable" => "renewals",
	"m_srcTableName" => "renewals"
));

$proto84["m_sql"] = "recurrence";
$proto84["m_srcTableName"] = "renewals";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto86=array();
$proto86["m_link"] = "SQLL_MAIN";
			$proto87=array();
$proto87["m_strName"] = "renewals";
$proto87["m_srcTableName"] = "renewals";
$proto87["m_columns"] = array();
$proto87["m_columns"][] = "id";
$proto87["m_columns"][] = "vendor_id";
$proto87["m_columns"][] = "order_description";
$proto87["m_columns"][] = "sold_to_id";
$proto87["m_columns"][] = "ops_contact_id";
$proto87["m_columns"][] = "sourcing_contact_id";
$proto87["m_columns"][] = "previous_po";
$proto87["m_columns"][] = "previous_lbg_pp";
$proto87["m_columns"][] = "impacted_by_dollar";
$proto87["m_columns"][] = "improvement_last_year";
$proto87["m_columns"][] = "improvement_comments";
$proto87["m_columns"][] = "percent_product_sales";
$proto87["m_columns"][] = "service_type_id";
$proto87["m_columns"][] = "term_id";
$proto87["m_columns"][] = "support_start_date";
$proto87["m_columns"][] = "support_end_date";
$proto87["m_columns"][] = "comment_actions";
$proto87["m_columns"][] = "last_update";
$proto87["m_columns"][] = "alert_id";
$proto87["m_columns"][] = "vendor_contact_id";
$proto87["m_columns"][] = "erf";
$proto87["m_columns"][] = "guid";
$proto87["m_columns"][] = "documents";
$proto87["m_columns"][] = "status_id";
$proto87["m_columns"][] = "cost";
$proto87["m_columns"][] = "request_date";
$proto87["m_columns"][] = "quote_ref";
$proto87["m_columns"][] = "po";
$proto87["m_columns"][] = "cc_so";
$proto87["m_columns"][] = "supplier_ref";
$proto87["m_columns"][] = "supplier_order_ref";
$proto87["m_columns"][] = "pod";
$proto87["m_columns"][] = "task_number";
$proto87["m_columns"][] = "tracking_ref";
$proto87["m_columns"][] = "delivery_code";
$proto87["m_columns"][] = "pulse_id";
$proto87["m_columns"][] = "date_billed";
$proto87["m_columns"][] = "product_id";
$proto87["m_columns"][] = "renewal_date";
$proto87["m_columns"][] = "recurrence";
$obj = new SQLTable($proto87);

$proto86["m_table"] = $obj;
$proto86["m_sql"] = "renewals";
$proto86["m_alias"] = "";
$proto86["m_srcTableName"] = "renewals";
$proto88=array();
$proto88["m_sql"] = "";
$proto88["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto88["m_column"]=$obj;
$proto88["m_contained"] = array();
$proto88["m_strCase"] = "";
$proto88["m_havingmode"] = false;
$proto88["m_inBrackets"] = false;
$proto88["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto88);

$proto86["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto86);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="renewals";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_renewals = createSqlQuery_renewals();


	
		;

																																								

$tdatarenewals[".sqlquery"] = $queryData_renewals;

include_once(getabspath("include/renewals_events.php"));
$tableEvents["renewals"] = new eventclass_renewals;
$tdatarenewals[".hasEvents"] = true;

?>
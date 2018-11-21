<?php
require_once(getabspath("classes/cipherer.php"));




$tdataUpcoming_Top_5_Vendor_Spend = array();
	$tdataUpcoming_Top_5_Vendor_Spend[".truncateText"] = true;
	$tdataUpcoming_Top_5_Vendor_Spend[".NumberOfChars"] = 80;
	$tdataUpcoming_Top_5_Vendor_Spend[".ShortName"] = "Upcoming_Top_5_Vendor_Spend";
	$tdataUpcoming_Top_5_Vendor_Spend[".OwnerID"] = "";
	$tdataUpcoming_Top_5_Vendor_Spend[".OriginalTable"] = "renewals";

//	field labels
$fieldLabelsUpcoming_Top_5_Vendor_Spend = array();
$fieldToolTipsUpcoming_Top_5_Vendor_Spend = array();
$pageTitlesUpcoming_Top_5_Vendor_Spend = array();
$placeHoldersUpcoming_Top_5_Vendor_Spend = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsUpcoming_Top_5_Vendor_Spend["English"] = array();
	$fieldToolTipsUpcoming_Top_5_Vendor_Spend["English"] = array();
	$placeHoldersUpcoming_Top_5_Vendor_Spend["English"] = array();
	$pageTitlesUpcoming_Top_5_Vendor_Spend["English"] = array();
	$fieldLabelsUpcoming_Top_5_Vendor_Spend["English"]["Vendor"] = "Vendor";
	$fieldToolTipsUpcoming_Top_5_Vendor_Spend["English"]["Vendor"] = "";
	$placeHoldersUpcoming_Top_5_Vendor_Spend["English"]["Vendor"] = "";
	$fieldLabelsUpcoming_Top_5_Vendor_Spend["English"]["Total_Spend__"] = "Total Spend \$";
	$fieldToolTipsUpcoming_Top_5_Vendor_Spend["English"]["Total_Spend__"] = "";
	$placeHoldersUpcoming_Top_5_Vendor_Spend["English"]["Total_Spend__"] = "";
	if (count($fieldToolTipsUpcoming_Top_5_Vendor_Spend["English"]))
		$tdataUpcoming_Top_5_Vendor_Spend[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsUpcoming_Top_5_Vendor_Spend[""] = array();
	$fieldToolTipsUpcoming_Top_5_Vendor_Spend[""] = array();
	$placeHoldersUpcoming_Top_5_Vendor_Spend[""] = array();
	$pageTitlesUpcoming_Top_5_Vendor_Spend[""] = array();
	if (count($fieldToolTipsUpcoming_Top_5_Vendor_Spend[""]))
		$tdataUpcoming_Top_5_Vendor_Spend[".isUseToolTips"] = true;
}


	$tdataUpcoming_Top_5_Vendor_Spend[".NCSearch"] = true;



$tdataUpcoming_Top_5_Vendor_Spend[".shortTableName"] = "Upcoming_Top_5_Vendor_Spend";
$tdataUpcoming_Top_5_Vendor_Spend[".nSecOptions"] = 0;
$tdataUpcoming_Top_5_Vendor_Spend[".recsPerRowPrint"] = 1;
$tdataUpcoming_Top_5_Vendor_Spend[".recsLimit"] = 5;
$tdataUpcoming_Top_5_Vendor_Spend[".mainTableOwnerID"] = "";
$tdataUpcoming_Top_5_Vendor_Spend[".moveNext"] = 1;
$tdataUpcoming_Top_5_Vendor_Spend[".entityType"] = 2;

$tdataUpcoming_Top_5_Vendor_Spend[".strOriginalTableName"] = "renewals";

	



$tdataUpcoming_Top_5_Vendor_Spend[".showAddInPopup"] = false;

$tdataUpcoming_Top_5_Vendor_Spend[".showEditInPopup"] = false;

$tdataUpcoming_Top_5_Vendor_Spend[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataUpcoming_Top_5_Vendor_Spend[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataUpcoming_Top_5_Vendor_Spend[".fieldsForRegister"] = array();

$tdataUpcoming_Top_5_Vendor_Spend[".listAjax"] = false;

	$tdataUpcoming_Top_5_Vendor_Spend[".audit"] = false;

	$tdataUpcoming_Top_5_Vendor_Spend[".locking"] = false;


$tdataUpcoming_Top_5_Vendor_Spend[".add"] = true;
$tdataUpcoming_Top_5_Vendor_Spend[".afterAddAction"] = 1;
$tdataUpcoming_Top_5_Vendor_Spend[".closePopupAfterAdd"] = 1;
$tdataUpcoming_Top_5_Vendor_Spend[".afterAddActionDetTable"] = "";

$tdataUpcoming_Top_5_Vendor_Spend[".list"] = true;



$tdataUpcoming_Top_5_Vendor_Spend[".reorderRecordsByHeader"] = true;


$tdataUpcoming_Top_5_Vendor_Spend[".exportFormatting"] = 2;
$tdataUpcoming_Top_5_Vendor_Spend[".exportDelimiter"] = ",";
		


$tdataUpcoming_Top_5_Vendor_Spend[".exportTo"] = true;

$tdataUpcoming_Top_5_Vendor_Spend[".printFriendly"] = true;


$tdataUpcoming_Top_5_Vendor_Spend[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataUpcoming_Top_5_Vendor_Spend[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataUpcoming_Top_5_Vendor_Spend[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataUpcoming_Top_5_Vendor_Spend[".searchSaving"] = false;
//

$tdataUpcoming_Top_5_Vendor_Spend[".showSearchPanel"] = true;
		$tdataUpcoming_Top_5_Vendor_Spend[".flexibleSearch"] = true;

$tdataUpcoming_Top_5_Vendor_Spend[".isUseAjaxSuggest"] = true;






$tdataUpcoming_Top_5_Vendor_Spend[".ajaxCodeSnippetAdded"] = false;

$tdataUpcoming_Top_5_Vendor_Spend[".buttonsAdded"] = false;

$tdataUpcoming_Top_5_Vendor_Spend[".addPageEvents"] = false;

// use timepicker for search panel
$tdataUpcoming_Top_5_Vendor_Spend[".isUseTimeForSearch"] = false;



$tdataUpcoming_Top_5_Vendor_Spend[".badgeColor"] = "e8926f";


$tdataUpcoming_Top_5_Vendor_Spend[".allSearchFields"] = array();
$tdataUpcoming_Top_5_Vendor_Spend[".filterFields"] = array();
$tdataUpcoming_Top_5_Vendor_Spend[".requiredSearchFields"] = array();

$tdataUpcoming_Top_5_Vendor_Spend[".allSearchFields"][] = "Vendor";
	$tdataUpcoming_Top_5_Vendor_Spend[".allSearchFields"][] = "Total Spend \$";
	

$tdataUpcoming_Top_5_Vendor_Spend[".googleLikeFields"] = array();
$tdataUpcoming_Top_5_Vendor_Spend[".googleLikeFields"][] = "Vendor";
$tdataUpcoming_Top_5_Vendor_Spend[".googleLikeFields"][] = "Total Spend \$";


$tdataUpcoming_Top_5_Vendor_Spend[".advSearchFields"] = array();
$tdataUpcoming_Top_5_Vendor_Spend[".advSearchFields"][] = "Vendor";
$tdataUpcoming_Top_5_Vendor_Spend[".advSearchFields"][] = "Total Spend \$";

$tdataUpcoming_Top_5_Vendor_Spend[".tableType"] = "report";

$tdataUpcoming_Top_5_Vendor_Spend[".printerPageOrientation"] = 0;
$tdataUpcoming_Top_5_Vendor_Spend[".nPrinterPageScale"] = 100;

$tdataUpcoming_Top_5_Vendor_Spend[".nPrinterSplitRecords"] = 40;

$tdataUpcoming_Top_5_Vendor_Spend[".nPrinterPDFSplitRecords"] = 40;



$tdataUpcoming_Top_5_Vendor_Spend[".geocodingEnabled"] = false;

//report settings
$tdataUpcoming_Top_5_Vendor_Spend[".printReportLayout"] = 6;

$tdataUpcoming_Top_5_Vendor_Spend[".reportPrintPartitionType"] = 1;
$tdataUpcoming_Top_5_Vendor_Spend[".reportPrintGroupsPerPage"] = 40;
$tdataUpcoming_Top_5_Vendor_Spend[".reportPrintPDFGroupsPerPage"] = 40;
$tdataUpcoming_Top_5_Vendor_Spend[".lowGroup"] = 0;



$tdataUpcoming_Top_5_Vendor_Spend[".pageSize"] = 20;






$tdataUpcoming_Top_5_Vendor_Spend[".repShowDet"] = true;

$tdataUpcoming_Top_5_Vendor_Spend[".reportLayout"] = 6;

//end of report settings




$tdataUpcoming_Top_5_Vendor_Spend[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY `Total Spend \$` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataUpcoming_Top_5_Vendor_Spend[".strOrderBy"] = $tstrOrderBy;

$tdataUpcoming_Top_5_Vendor_Spend[".orderindexes"] = array();
	$tdataUpcoming_Top_5_Vendor_Spend[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "SUM(renewals.cost)");


$tdataUpcoming_Top_5_Vendor_Spend[".sqlHead"] = "SELECT vendors.vendor_name AS `Vendor`,  SUM(renewals.cost) AS `Total Spend \$`";
$tdataUpcoming_Top_5_Vendor_Spend[".sqlFrom"] = "FROM renewals  INNER JOIN vendors ON renewals.vendor_id = vendors.id";
$tdataUpcoming_Top_5_Vendor_Spend[".sqlWhereExpr"] = "";
$tdataUpcoming_Top_5_Vendor_Spend[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "support_end_date between date_add(now(), interval 30 day) and date_add(now(), interval 1825 day)",	
	'showRowCount' => 0,
	'hideEmpty' => 0,	
);				  
$tdataUpcoming_Top_5_Vendor_Spend[".arrGridTabs"] = $arrGridTabs;











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataUpcoming_Top_5_Vendor_Spend[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataUpcoming_Top_5_Vendor_Spend[".arrGroupsPerPage"] = $arrGPP;

$tdataUpcoming_Top_5_Vendor_Spend[".highlightSearchResults"] = true;

$tableKeysUpcoming_Top_5_Vendor_Spend = array();
$tdataUpcoming_Top_5_Vendor_Spend[".Keys"] = $tableKeysUpcoming_Top_5_Vendor_Spend;

$tdataUpcoming_Top_5_Vendor_Spend[".listFields"] = array();
$tdataUpcoming_Top_5_Vendor_Spend[".listFields"][] = "Vendor";
$tdataUpcoming_Top_5_Vendor_Spend[".listFields"][] = "Total Spend \$";

$tdataUpcoming_Top_5_Vendor_Spend[".hideMobileList"] = array();


$tdataUpcoming_Top_5_Vendor_Spend[".viewFields"] = array();
$tdataUpcoming_Top_5_Vendor_Spend[".viewFields"][] = "Vendor";
$tdataUpcoming_Top_5_Vendor_Spend[".viewFields"][] = "Total Spend \$";

$tdataUpcoming_Top_5_Vendor_Spend[".addFields"] = array();

$tdataUpcoming_Top_5_Vendor_Spend[".masterListFields"] = array();
$tdataUpcoming_Top_5_Vendor_Spend[".masterListFields"][] = "Vendor";
$tdataUpcoming_Top_5_Vendor_Spend[".masterListFields"][] = "Total Spend \$";

$tdataUpcoming_Top_5_Vendor_Spend[".inlineAddFields"] = array();

$tdataUpcoming_Top_5_Vendor_Spend[".editFields"] = array();

$tdataUpcoming_Top_5_Vendor_Spend[".inlineEditFields"] = array();

$tdataUpcoming_Top_5_Vendor_Spend[".updateSelectedFields"] = array();


$tdataUpcoming_Top_5_Vendor_Spend[".exportFields"] = array();
$tdataUpcoming_Top_5_Vendor_Spend[".exportFields"][] = "Vendor";
$tdataUpcoming_Top_5_Vendor_Spend[".exportFields"][] = "Total Spend \$";

$tdataUpcoming_Top_5_Vendor_Spend[".importFields"] = array();
$tdataUpcoming_Top_5_Vendor_Spend[".importFields"][] = "Vendor";
$tdataUpcoming_Top_5_Vendor_Spend[".importFields"][] = "Total Spend \$";

$tdataUpcoming_Top_5_Vendor_Spend[".printFields"] = array();
$tdataUpcoming_Top_5_Vendor_Spend[".printFields"][] = "Vendor";
$tdataUpcoming_Top_5_Vendor_Spend[".printFields"][] = "Total Spend \$";


//	Vendor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Vendor";
	$fdata["GoodName"] = "Vendor";
	$fdata["ownerTable"] = "vendors";
	$fdata["Label"] = GetFieldLabel("Upcoming_Top_5_Vendor_Spend","Vendor");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "vendor_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vendors.vendor_name";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataUpcoming_Top_5_Vendor_Spend["Vendor"] = $fdata;
//	Total Spend $
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Total Spend \$";
	$fdata["GoodName"] = "Total_Spend__";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Upcoming_Top_5_Vendor_Spend","Total_Spend__");
	$fdata["FieldType"] = 14;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Total Spend \$";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(renewals.cost)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataUpcoming_Top_5_Vendor_Spend["Total Spend \$"] = $fdata;


$tables_data["Upcoming Top 5 Vendor Spend"]=&$tdataUpcoming_Top_5_Vendor_Spend;
$field_labels["Upcoming_Top_5_Vendor_Spend"] = &$fieldLabelsUpcoming_Top_5_Vendor_Spend;
$fieldToolTips["Upcoming_Top_5_Vendor_Spend"] = &$fieldToolTipsUpcoming_Top_5_Vendor_Spend;
$placeHolders["Upcoming_Top_5_Vendor_Spend"] = &$placeHoldersUpcoming_Top_5_Vendor_Spend;
$page_titles["Upcoming_Top_5_Vendor_Spend"] = &$pageTitlesUpcoming_Top_5_Vendor_Spend;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Upcoming Top 5 Vendor Spend"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Upcoming Top 5 Vendor Spend"] = array();


	
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
					$masterTablesData["Upcoming Top 5 Vendor Spend"][0] = $masterParams;
				$masterTablesData["Upcoming Top 5 Vendor Spend"][0]["masterKeys"] = array();
	$masterTablesData["Upcoming Top 5 Vendor Spend"][0]["masterKeys"][]="id";
				$masterTablesData["Upcoming Top 5 Vendor Spend"][0]["detailKeys"] = array();
	$masterTablesData["Upcoming Top 5 Vendor Spend"][0]["detailKeys"][]="vendor_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Upcoming_Top_5_Vendor_Spend()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vendors.vendor_name AS `Vendor`,  SUM(renewals.cost) AS `Total Spend \$`";
$proto0["m_strFrom"] = "FROM renewals  INNER JOIN vendors ON renewals.vendor_id = vendors.id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `Total Spend \$` DESC";
	
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
	"m_strName" => "vendor_name",
	"m_strTable" => "vendors",
	"m_srcTableName" => "Upcoming Top 5 Vendor Spend"
));

$proto6["m_sql"] = "vendors.vendor_name";
$proto6["m_srcTableName"] = "Upcoming Top 5 Vendor Spend";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "Vendor";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_SUM";
$proto9["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "cost",
	"m_strTable" => "renewals",
	"m_srcTableName" => "Upcoming Top 5 Vendor Spend"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "SUM(renewals.cost)";
$proto8["m_srcTableName"] = "Upcoming Top 5 Vendor Spend";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Total Spend \$";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "renewals";
$proto12["m_srcTableName"] = "Upcoming Top 5 Vendor Spend";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "vendor_id";
$proto12["m_columns"][] = "order_description";
$proto12["m_columns"][] = "sold_to_id";
$proto12["m_columns"][] = "ops_contact_id";
$proto12["m_columns"][] = "sourcing_contact_id";
$proto12["m_columns"][] = "previous_po";
$proto12["m_columns"][] = "previous_lbg_pp";
$proto12["m_columns"][] = "impacted_by_dollar";
$proto12["m_columns"][] = "improvement_last_year";
$proto12["m_columns"][] = "improvement_comments";
$proto12["m_columns"][] = "percent_product_sales";
$proto12["m_columns"][] = "service_type_id";
$proto12["m_columns"][] = "term_id";
$proto12["m_columns"][] = "support_start_date";
$proto12["m_columns"][] = "support_end_date";
$proto12["m_columns"][] = "comment_actions";
$proto12["m_columns"][] = "last_update";
$proto12["m_columns"][] = "alert_id";
$proto12["m_columns"][] = "vendor_contact_id";
$proto12["m_columns"][] = "erf";
$proto12["m_columns"][] = "guid";
$proto12["m_columns"][] = "documents";
$proto12["m_columns"][] = "status_id";
$proto12["m_columns"][] = "cost";
$proto12["m_columns"][] = "request_date";
$proto12["m_columns"][] = "quote_ref";
$proto12["m_columns"][] = "po";
$proto12["m_columns"][] = "cc_so";
$proto12["m_columns"][] = "supplier_ref";
$proto12["m_columns"][] = "supplier_order_ref";
$proto12["m_columns"][] = "pod";
$proto12["m_columns"][] = "task_number";
$proto12["m_columns"][] = "tracking_ref";
$proto12["m_columns"][] = "delivery_code";
$proto12["m_columns"][] = "pulse_id";
$proto12["m_columns"][] = "date_billed";
$proto12["m_columns"][] = "product_id";
$proto12["m_columns"][] = "renewal_date";
$proto12["m_columns"][] = "recurrence";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "renewals";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "Upcoming Top 5 Vendor Spend";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
												$proto15=array();
$proto15["m_link"] = "SQLL_INNERJOIN";
			$proto16=array();
$proto16["m_strName"] = "vendors";
$proto16["m_srcTableName"] = "Upcoming Top 5 Vendor Spend";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "id";
$proto16["m_columns"][] = "vendor_name";
$proto16["m_columns"][] = "website";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "INNER JOIN vendors ON renewals.vendor_id = vendors.id";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "Upcoming Top 5 Vendor Spend";
$proto17=array();
$proto17["m_sql"] = "renewals.vendor_id = vendors.id";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vendor_id",
	"m_strTable" => "renewals",
	"m_srcTableName" => "Upcoming Top 5 Vendor Spend"
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "= vendors.id";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "vendor_name",
	"m_strTable" => "vendors",
	"m_srcTableName" => "Upcoming Top 5 Vendor Spend"
));

$proto19["m_column"]=$obj;
$obj = new SQLGroupByItem($proto19);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto21=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`Total Spend \$`"
));

$proto21["m_column"]=$obj;
$proto21["m_bAsc"] = 0;
$proto21["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto21);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Upcoming Top 5 Vendor Spend";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Upcoming_Top_5_Vendor_Spend = createSqlQuery_Upcoming_Top_5_Vendor_Spend();


	
		;

		

$tdataUpcoming_Top_5_Vendor_Spend[".sqlquery"] = $queryData_Upcoming_Top_5_Vendor_Spend;

$tableEvents["Upcoming Top 5 Vendor Spend"] = new eventsBase;
$tdataUpcoming_Top_5_Vendor_Spend[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRenewals_Due_90_Days = array();
	$tdataRenewals_Due_90_Days[".truncateText"] = true;
	$tdataRenewals_Due_90_Days[".NumberOfChars"] = 80;
	$tdataRenewals_Due_90_Days[".ShortName"] = "Renewals_Due_90_Days";
	$tdataRenewals_Due_90_Days[".OwnerID"] = "";
	$tdataRenewals_Due_90_Days[".OriginalTable"] = "renewals";

//	field labels
$fieldLabelsRenewals_Due_90_Days = array();
$fieldToolTipsRenewals_Due_90_Days = array();
$pageTitlesRenewals_Due_90_Days = array();
$placeHoldersRenewals_Due_90_Days = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRenewals_Due_90_Days["English"] = array();
	$fieldToolTipsRenewals_Due_90_Days["English"] = array();
	$placeHoldersRenewals_Due_90_Days["English"] = array();
	$pageTitlesRenewals_Due_90_Days["English"] = array();
	$fieldLabelsRenewals_Due_90_Days["English"]["order_description"] = "Order Description";
	$fieldToolTipsRenewals_Due_90_Days["English"]["order_description"] = "";
	$placeHoldersRenewals_Due_90_Days["English"]["order_description"] = "";
	$fieldLabelsRenewals_Due_90_Days["English"]["alert_id"] = "Alert ID";
	$fieldToolTipsRenewals_Due_90_Days["English"]["alert_id"] = "";
	$placeHoldersRenewals_Due_90_Days["English"]["alert_id"] = "";
	$fieldLabelsRenewals_Due_90_Days["English"]["renewal_date"] = "Renewal Date";
	$fieldToolTipsRenewals_Due_90_Days["English"]["renewal_date"] = "";
	$placeHoldersRenewals_Due_90_Days["English"]["renewal_date"] = "";
	if (count($fieldToolTipsRenewals_Due_90_Days["English"]))
		$tdataRenewals_Due_90_Days[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRenewals_Due_90_Days[""] = array();
	$fieldToolTipsRenewals_Due_90_Days[""] = array();
	$placeHoldersRenewals_Due_90_Days[""] = array();
	$pageTitlesRenewals_Due_90_Days[""] = array();
	if (count($fieldToolTipsRenewals_Due_90_Days[""]))
		$tdataRenewals_Due_90_Days[".isUseToolTips"] = true;
}


	$tdataRenewals_Due_90_Days[".NCSearch"] = true;



$tdataRenewals_Due_90_Days[".shortTableName"] = "Renewals_Due_90_Days";
$tdataRenewals_Due_90_Days[".nSecOptions"] = 0;
$tdataRenewals_Due_90_Days[".recsPerRowPrint"] = 1;
$tdataRenewals_Due_90_Days[".mainTableOwnerID"] = "";
$tdataRenewals_Due_90_Days[".moveNext"] = 1;
$tdataRenewals_Due_90_Days[".entityType"] = 2;

$tdataRenewals_Due_90_Days[".strOriginalTableName"] = "renewals";

	



$tdataRenewals_Due_90_Days[".showAddInPopup"] = false;

$tdataRenewals_Due_90_Days[".showEditInPopup"] = false;

$tdataRenewals_Due_90_Days[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRenewals_Due_90_Days[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRenewals_Due_90_Days[".fieldsForRegister"] = array();

$tdataRenewals_Due_90_Days[".listAjax"] = false;

	$tdataRenewals_Due_90_Days[".audit"] = false;

	$tdataRenewals_Due_90_Days[".locking"] = false;


$tdataRenewals_Due_90_Days[".add"] = true;
$tdataRenewals_Due_90_Days[".afterAddAction"] = 1;
$tdataRenewals_Due_90_Days[".closePopupAfterAdd"] = 1;
$tdataRenewals_Due_90_Days[".afterAddActionDetTable"] = "";

$tdataRenewals_Due_90_Days[".list"] = true;



$tdataRenewals_Due_90_Days[".reorderRecordsByHeader"] = true;


$tdataRenewals_Due_90_Days[".exportFormatting"] = 2;
$tdataRenewals_Due_90_Days[".exportDelimiter"] = ",";
		


$tdataRenewals_Due_90_Days[".exportTo"] = true;

$tdataRenewals_Due_90_Days[".printFriendly"] = true;


$tdataRenewals_Due_90_Days[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataRenewals_Due_90_Days[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataRenewals_Due_90_Days[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataRenewals_Due_90_Days[".searchSaving"] = false;
//

$tdataRenewals_Due_90_Days[".showSearchPanel"] = true;
		$tdataRenewals_Due_90_Days[".flexibleSearch"] = true;

$tdataRenewals_Due_90_Days[".isUseAjaxSuggest"] = true;






$tdataRenewals_Due_90_Days[".ajaxCodeSnippetAdded"] = false;

$tdataRenewals_Due_90_Days[".buttonsAdded"] = false;

$tdataRenewals_Due_90_Days[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRenewals_Due_90_Days[".isUseTimeForSearch"] = false;



$tdataRenewals_Due_90_Days[".badgeColor"] = "b22222";


$tdataRenewals_Due_90_Days[".allSearchFields"] = array();
$tdataRenewals_Due_90_Days[".filterFields"] = array();
$tdataRenewals_Due_90_Days[".requiredSearchFields"] = array();

$tdataRenewals_Due_90_Days[".allSearchFields"][] = "order_description";
	$tdataRenewals_Due_90_Days[".allSearchFields"][] = "renewal_date";
	$tdataRenewals_Due_90_Days[".allSearchFields"][] = "alert_id";
	

$tdataRenewals_Due_90_Days[".googleLikeFields"] = array();
$tdataRenewals_Due_90_Days[".googleLikeFields"][] = "order_description";
$tdataRenewals_Due_90_Days[".googleLikeFields"][] = "renewal_date";
$tdataRenewals_Due_90_Days[".googleLikeFields"][] = "alert_id";


$tdataRenewals_Due_90_Days[".advSearchFields"] = array();
$tdataRenewals_Due_90_Days[".advSearchFields"][] = "order_description";
$tdataRenewals_Due_90_Days[".advSearchFields"][] = "renewal_date";
$tdataRenewals_Due_90_Days[".advSearchFields"][] = "alert_id";

$tdataRenewals_Due_90_Days[".tableType"] = "report";

$tdataRenewals_Due_90_Days[".printerPageOrientation"] = 0;
$tdataRenewals_Due_90_Days[".nPrinterPageScale"] = 100;

$tdataRenewals_Due_90_Days[".nPrinterSplitRecords"] = 40;

$tdataRenewals_Due_90_Days[".nPrinterPDFSplitRecords"] = 40;



$tdataRenewals_Due_90_Days[".geocodingEnabled"] = false;

//report settings
$tdataRenewals_Due_90_Days[".printReportLayout"] = 6;

$tdataRenewals_Due_90_Days[".reportPrintPartitionType"] = 1;
$tdataRenewals_Due_90_Days[".reportPrintGroupsPerPage"] = 40;
$tdataRenewals_Due_90_Days[".reportPrintPDFGroupsPerPage"] = 40;
$tdataRenewals_Due_90_Days[".lowGroup"] = 0;



$tdataRenewals_Due_90_Days[".pageSize"] = 20;






$tdataRenewals_Due_90_Days[".repShowDet"] = true;

$tdataRenewals_Due_90_Days[".reportLayout"] = 6;

//end of report settings




$tdataRenewals_Due_90_Days[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRenewals_Due_90_Days[".strOrderBy"] = $tstrOrderBy;

$tdataRenewals_Due_90_Days[".orderindexes"] = array();

$tdataRenewals_Due_90_Days[".sqlHead"] = "SELECT  distinct order_description,  renewal_date,  alert_id";
$tdataRenewals_Due_90_Days[".sqlFrom"] = "FROM renewals";
$tdataRenewals_Due_90_Days[".sqlWhereExpr"] = "";
$tdataRenewals_Due_90_Days[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "renewal_date between date_add(now(), interval 30 day) and date_add(now(), interval 90 day)",	
	'showRowCount' => 0,
	'hideEmpty' => 0,	
);				  
$tdataRenewals_Due_90_Days[".arrGridTabs"] = $arrGridTabs;











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRenewals_Due_90_Days[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRenewals_Due_90_Days[".arrGroupsPerPage"] = $arrGPP;

$tdataRenewals_Due_90_Days[".highlightSearchResults"] = true;

$tableKeysRenewals_Due_90_Days = array();
$tdataRenewals_Due_90_Days[".Keys"] = $tableKeysRenewals_Due_90_Days;

$tdataRenewals_Due_90_Days[".listFields"] = array();
$tdataRenewals_Due_90_Days[".listFields"][] = "order_description";
$tdataRenewals_Due_90_Days[".listFields"][] = "renewal_date";
$tdataRenewals_Due_90_Days[".listFields"][] = "alert_id";

$tdataRenewals_Due_90_Days[".hideMobileList"] = array();


$tdataRenewals_Due_90_Days[".viewFields"] = array();
$tdataRenewals_Due_90_Days[".viewFields"][] = "order_description";
$tdataRenewals_Due_90_Days[".viewFields"][] = "renewal_date";
$tdataRenewals_Due_90_Days[".viewFields"][] = "alert_id";

$tdataRenewals_Due_90_Days[".addFields"] = array();
$tdataRenewals_Due_90_Days[".addFields"][] = "order_description";
$tdataRenewals_Due_90_Days[".addFields"][] = "renewal_date";
$tdataRenewals_Due_90_Days[".addFields"][] = "alert_id";

$tdataRenewals_Due_90_Days[".masterListFields"] = array();
$tdataRenewals_Due_90_Days[".masterListFields"][] = "order_description";
$tdataRenewals_Due_90_Days[".masterListFields"][] = "renewal_date";
$tdataRenewals_Due_90_Days[".masterListFields"][] = "alert_id";

$tdataRenewals_Due_90_Days[".inlineAddFields"] = array();
$tdataRenewals_Due_90_Days[".inlineAddFields"][] = "order_description";
$tdataRenewals_Due_90_Days[".inlineAddFields"][] = "renewal_date";
$tdataRenewals_Due_90_Days[".inlineAddFields"][] = "alert_id";

$tdataRenewals_Due_90_Days[".editFields"] = array();
$tdataRenewals_Due_90_Days[".editFields"][] = "order_description";
$tdataRenewals_Due_90_Days[".editFields"][] = "renewal_date";
$tdataRenewals_Due_90_Days[".editFields"][] = "alert_id";

$tdataRenewals_Due_90_Days[".inlineEditFields"] = array();
$tdataRenewals_Due_90_Days[".inlineEditFields"][] = "order_description";
$tdataRenewals_Due_90_Days[".inlineEditFields"][] = "renewal_date";
$tdataRenewals_Due_90_Days[".inlineEditFields"][] = "alert_id";

$tdataRenewals_Due_90_Days[".updateSelectedFields"] = array();
$tdataRenewals_Due_90_Days[".updateSelectedFields"][] = "order_description";
$tdataRenewals_Due_90_Days[".updateSelectedFields"][] = "renewal_date";
$tdataRenewals_Due_90_Days[".updateSelectedFields"][] = "alert_id";


$tdataRenewals_Due_90_Days[".exportFields"] = array();
$tdataRenewals_Due_90_Days[".exportFields"][] = "order_description";
$tdataRenewals_Due_90_Days[".exportFields"][] = "renewal_date";
$tdataRenewals_Due_90_Days[".exportFields"][] = "alert_id";

$tdataRenewals_Due_90_Days[".importFields"] = array();
$tdataRenewals_Due_90_Days[".importFields"][] = "order_description";
$tdataRenewals_Due_90_Days[".importFields"][] = "renewal_date";
$tdataRenewals_Due_90_Days[".importFields"][] = "alert_id";

$tdataRenewals_Due_90_Days[".printFields"] = array();
$tdataRenewals_Due_90_Days[".printFields"][] = "order_description";
$tdataRenewals_Due_90_Days[".printFields"][] = "renewal_date";
$tdataRenewals_Due_90_Days[".printFields"][] = "alert_id";


//	order_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "order_description";
	$fdata["GoodName"] = "order_description";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("Renewals_Due_90_Days","order_description");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
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

		$fdata["strField"] = "order_description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "order_description";

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataRenewals_Due_90_Days["order_description"] = $fdata;
//	renewal_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "renewal_date";
	$fdata["GoodName"] = "renewal_date";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("Renewals_Due_90_Days","renewal_date");
	$fdata["FieldType"] = 7;

		// report field settings
					// end of report field settings

	
	
			
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

		$fdata["strField"] = "renewal_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "renewal_date";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataRenewals_Due_90_Days["renewal_date"] = $fdata;
//	alert_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "alert_id";
	$fdata["GoodName"] = "alert_id";
	$fdata["ownerTable"] = "renewals";
	$fdata["Label"] = GetFieldLabel("Renewals_Due_90_Days","alert_id");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
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

		$fdata["strField"] = "alert_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alert_id";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdataRenewals_Due_90_Days["alert_id"] = $fdata;


$tables_data["Renewals Due 90 Days"]=&$tdataRenewals_Due_90_Days;
$field_labels["Renewals_Due_90_Days"] = &$fieldLabelsRenewals_Due_90_Days;
$fieldToolTips["Renewals_Due_90_Days"] = &$fieldToolTipsRenewals_Due_90_Days;
$placeHolders["Renewals_Due_90_Days"] = &$placeHoldersRenewals_Due_90_Days;
$page_titles["Renewals_Due_90_Days"] = &$pageTitlesRenewals_Due_90_Days;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Renewals Due 90 Days"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Renewals Due 90 Days"] = array();


	
				$strOriginalDetailsTable="renewals";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="renewals";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "renewals";
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
					$masterTablesData["Renewals Due 90 Days"][0] = $masterParams;
				$masterTablesData["Renewals Due 90 Days"][0]["masterKeys"] = array();
	$masterTablesData["Renewals Due 90 Days"][0]["masterKeys"][]="id";
				$masterTablesData["Renewals Due 90 Days"][0]["detailKeys"] = array();
	$masterTablesData["Renewals Due 90 Days"][0]["detailKeys"][]="id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Renewals_Due_90_Days()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  distinct";
$proto0["m_strFieldList"] = "order_description,  renewal_date,  alert_id";
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
	"m_strName" => "order_description",
	"m_strTable" => "renewals",
	"m_srcTableName" => "Renewals Due 90 Days"
));

$proto6["m_sql"] = "order_description";
$proto6["m_srcTableName"] = "Renewals Due 90 Days";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "renewal_date",
	"m_strTable" => "renewals",
	"m_srcTableName" => "Renewals Due 90 Days"
));

$proto8["m_sql"] = "renewal_date";
$proto8["m_srcTableName"] = "Renewals Due 90 Days";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "alert_id",
	"m_strTable" => "renewals",
	"m_srcTableName" => "Renewals Due 90 Days"
));

$proto10["m_sql"] = "alert_id";
$proto10["m_srcTableName"] = "Renewals Due 90 Days";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "renewals";
$proto13["m_srcTableName"] = "Renewals Due 90 Days";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "vendor_id";
$proto13["m_columns"][] = "order_description";
$proto13["m_columns"][] = "sold_to_id";
$proto13["m_columns"][] = "ops_contact_id";
$proto13["m_columns"][] = "sourcing_contact_id";
$proto13["m_columns"][] = "previous_po";
$proto13["m_columns"][] = "previous_lbg_pp";
$proto13["m_columns"][] = "impacted_by_dollar";
$proto13["m_columns"][] = "improvement_last_year";
$proto13["m_columns"][] = "improvement_comments";
$proto13["m_columns"][] = "percent_product_sales";
$proto13["m_columns"][] = "service_type_id";
$proto13["m_columns"][] = "term_id";
$proto13["m_columns"][] = "support_start_date";
$proto13["m_columns"][] = "support_end_date";
$proto13["m_columns"][] = "comment_actions";
$proto13["m_columns"][] = "last_update";
$proto13["m_columns"][] = "alert_id";
$proto13["m_columns"][] = "vendor_contact_id";
$proto13["m_columns"][] = "erf";
$proto13["m_columns"][] = "guid";
$proto13["m_columns"][] = "documents";
$proto13["m_columns"][] = "status_id";
$proto13["m_columns"][] = "cost";
$proto13["m_columns"][] = "request_date";
$proto13["m_columns"][] = "quote_ref";
$proto13["m_columns"][] = "po";
$proto13["m_columns"][] = "cc_so";
$proto13["m_columns"][] = "supplier_ref";
$proto13["m_columns"][] = "supplier_order_ref";
$proto13["m_columns"][] = "pod";
$proto13["m_columns"][] = "task_number";
$proto13["m_columns"][] = "tracking_ref";
$proto13["m_columns"][] = "delivery_code";
$proto13["m_columns"][] = "pulse_id";
$proto13["m_columns"][] = "date_billed";
$proto13["m_columns"][] = "product_id";
$proto13["m_columns"][] = "renewal_date";
$proto13["m_columns"][] = "recurrence";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "renewals";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "Renewals Due 90 Days";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Renewals Due 90 Days";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Renewals_Due_90_Days = createSqlQuery_Renewals_Due_90_Days();


	
		;

			

$tdataRenewals_Due_90_Days[".sqlquery"] = $queryData_Renewals_Due_90_Days;

$tableEvents["Renewals Due 90 Days"] = new eventsBase;
$tdataRenewals_Due_90_Days[".hasEvents"] = false;

?>
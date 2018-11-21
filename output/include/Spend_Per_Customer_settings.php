<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSpend_Per_Customer = array();
	$tdataSpend_Per_Customer[".truncateText"] = true;
	$tdataSpend_Per_Customer[".NumberOfChars"] = 80;
	$tdataSpend_Per_Customer[".ShortName"] = "Spend_Per_Customer";
	$tdataSpend_Per_Customer[".OwnerID"] = "";
	$tdataSpend_Per_Customer[".OriginalTable"] = "renewals";

//	field labels
$fieldLabelsSpend_Per_Customer = array();
$fieldToolTipsSpend_Per_Customer = array();
$pageTitlesSpend_Per_Customer = array();
$placeHoldersSpend_Per_Customer = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSpend_Per_Customer["English"] = array();
	$fieldToolTipsSpend_Per_Customer["English"] = array();
	$placeHoldersSpend_Per_Customer["English"] = array();
	$pageTitlesSpend_Per_Customer["English"] = array();
	$fieldLabelsSpend_Per_Customer["English"]["Customer"] = "Customer";
	$fieldToolTipsSpend_Per_Customer["English"]["Customer"] = "";
	$placeHoldersSpend_Per_Customer["English"]["Customer"] = "";
	$fieldLabelsSpend_Per_Customer["English"]["Spend__"] = "Spend \$";
	$fieldToolTipsSpend_Per_Customer["English"]["Spend__"] = "";
	$placeHoldersSpend_Per_Customer["English"]["Spend__"] = "";
	if (count($fieldToolTipsSpend_Per_Customer["English"]))
		$tdataSpend_Per_Customer[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSpend_Per_Customer[""] = array();
	$fieldToolTipsSpend_Per_Customer[""] = array();
	$placeHoldersSpend_Per_Customer[""] = array();
	$pageTitlesSpend_Per_Customer[""] = array();
	if (count($fieldToolTipsSpend_Per_Customer[""]))
		$tdataSpend_Per_Customer[".isUseToolTips"] = true;
}


	$tdataSpend_Per_Customer[".NCSearch"] = true;



$tdataSpend_Per_Customer[".shortTableName"] = "Spend_Per_Customer";
$tdataSpend_Per_Customer[".nSecOptions"] = 0;
$tdataSpend_Per_Customer[".recsPerRowPrint"] = 1;
$tdataSpend_Per_Customer[".mainTableOwnerID"] = "";
$tdataSpend_Per_Customer[".moveNext"] = 1;
$tdataSpend_Per_Customer[".entityType"] = 2;

$tdataSpend_Per_Customer[".strOriginalTableName"] = "renewals";

	



$tdataSpend_Per_Customer[".showAddInPopup"] = false;

$tdataSpend_Per_Customer[".showEditInPopup"] = false;

$tdataSpend_Per_Customer[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSpend_Per_Customer[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSpend_Per_Customer[".fieldsForRegister"] = array();

$tdataSpend_Per_Customer[".listAjax"] = false;

	$tdataSpend_Per_Customer[".audit"] = false;

	$tdataSpend_Per_Customer[".locking"] = false;


$tdataSpend_Per_Customer[".add"] = true;
$tdataSpend_Per_Customer[".afterAddAction"] = 1;
$tdataSpend_Per_Customer[".closePopupAfterAdd"] = 1;
$tdataSpend_Per_Customer[".afterAddActionDetTable"] = "";

$tdataSpend_Per_Customer[".list"] = true;



$tdataSpend_Per_Customer[".reorderRecordsByHeader"] = true;


$tdataSpend_Per_Customer[".exportFormatting"] = 2;
$tdataSpend_Per_Customer[".exportDelimiter"] = ",";
		


$tdataSpend_Per_Customer[".exportTo"] = true;

$tdataSpend_Per_Customer[".printFriendly"] = true;


$tdataSpend_Per_Customer[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataSpend_Per_Customer[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataSpend_Per_Customer[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataSpend_Per_Customer[".searchSaving"] = false;
//

$tdataSpend_Per_Customer[".showSearchPanel"] = true;
		$tdataSpend_Per_Customer[".flexibleSearch"] = true;

$tdataSpend_Per_Customer[".isUseAjaxSuggest"] = true;






$tdataSpend_Per_Customer[".ajaxCodeSnippetAdded"] = false;

$tdataSpend_Per_Customer[".buttonsAdded"] = false;

$tdataSpend_Per_Customer[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSpend_Per_Customer[".isUseTimeForSearch"] = false;





$tdataSpend_Per_Customer[".allSearchFields"] = array();
$tdataSpend_Per_Customer[".filterFields"] = array();
$tdataSpend_Per_Customer[".requiredSearchFields"] = array();

$tdataSpend_Per_Customer[".allSearchFields"][] = "Customer";
	$tdataSpend_Per_Customer[".allSearchFields"][] = "Spend \$";
	

$tdataSpend_Per_Customer[".googleLikeFields"] = array();
$tdataSpend_Per_Customer[".googleLikeFields"][] = "Customer";
$tdataSpend_Per_Customer[".googleLikeFields"][] = "Spend \$";


$tdataSpend_Per_Customer[".advSearchFields"] = array();
$tdataSpend_Per_Customer[".advSearchFields"][] = "Customer";
$tdataSpend_Per_Customer[".advSearchFields"][] = "Spend \$";

$tdataSpend_Per_Customer[".tableType"] = "report";

$tdataSpend_Per_Customer[".printerPageOrientation"] = 0;
$tdataSpend_Per_Customer[".nPrinterPageScale"] = 100;

$tdataSpend_Per_Customer[".nPrinterSplitRecords"] = 40;

$tdataSpend_Per_Customer[".nPrinterPDFSplitRecords"] = 40;



$tdataSpend_Per_Customer[".geocodingEnabled"] = false;

//report settings
$tdataSpend_Per_Customer[".printReportLayout"] = 6;

$tdataSpend_Per_Customer[".reportPrintPartitionType"] = 1;
$tdataSpend_Per_Customer[".reportPrintGroupsPerPage"] = 40;
$tdataSpend_Per_Customer[".reportPrintPDFGroupsPerPage"] = 40;
$tdataSpend_Per_Customer[".lowGroup"] = 0;



$tdataSpend_Per_Customer[".pageSize"] = 20;






$tdataSpend_Per_Customer[".repShowDet"] = true;

$tdataSpend_Per_Customer[".reportLayout"] = 6;

//end of report settings




$tdataSpend_Per_Customer[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY `Spend \$` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSpend_Per_Customer[".strOrderBy"] = $tstrOrderBy;

$tdataSpend_Per_Customer[".orderindexes"] = array();
	$tdataSpend_Per_Customer[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "SUM(renewals.cost)");


$tdataSpend_Per_Customer[".sqlHead"] = "SELECT customers.customer_name AS `Customer`,  SUM(renewals.cost) AS `Spend \$`";
$tdataSpend_Per_Customer[".sqlFrom"] = "FROM renewals  INNER JOIN customers ON renewals.sold_to_id = customers.id";
$tdataSpend_Per_Customer[".sqlWhereExpr"] = "";
$tdataSpend_Per_Customer[".sqlTail"] = "";

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
$tdataSpend_Per_Customer[".arrGridTabs"] = $arrGridTabs;











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSpend_Per_Customer[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSpend_Per_Customer[".arrGroupsPerPage"] = $arrGPP;

$tdataSpend_Per_Customer[".highlightSearchResults"] = true;

$tableKeysSpend_Per_Customer = array();
$tdataSpend_Per_Customer[".Keys"] = $tableKeysSpend_Per_Customer;

$tdataSpend_Per_Customer[".listFields"] = array();
$tdataSpend_Per_Customer[".listFields"][] = "Customer";
$tdataSpend_Per_Customer[".listFields"][] = "Spend \$";

$tdataSpend_Per_Customer[".hideMobileList"] = array();


$tdataSpend_Per_Customer[".viewFields"] = array();
$tdataSpend_Per_Customer[".viewFields"][] = "Customer";
$tdataSpend_Per_Customer[".viewFields"][] = "Spend \$";

$tdataSpend_Per_Customer[".addFields"] = array();

$tdataSpend_Per_Customer[".masterListFields"] = array();
$tdataSpend_Per_Customer[".masterListFields"][] = "Customer";
$tdataSpend_Per_Customer[".masterListFields"][] = "Spend \$";

$tdataSpend_Per_Customer[".inlineAddFields"] = array();

$tdataSpend_Per_Customer[".editFields"] = array();

$tdataSpend_Per_Customer[".inlineEditFields"] = array();

$tdataSpend_Per_Customer[".updateSelectedFields"] = array();


$tdataSpend_Per_Customer[".exportFields"] = array();
$tdataSpend_Per_Customer[".exportFields"][] = "Customer";
$tdataSpend_Per_Customer[".exportFields"][] = "Spend \$";

$tdataSpend_Per_Customer[".importFields"] = array();
$tdataSpend_Per_Customer[".importFields"][] = "Customer";
$tdataSpend_Per_Customer[".importFields"][] = "Spend \$";

$tdataSpend_Per_Customer[".printFields"] = array();
$tdataSpend_Per_Customer[".printFields"][] = "Customer";
$tdataSpend_Per_Customer[".printFields"][] = "Spend \$";


//	Customer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Customer";
	$fdata["GoodName"] = "Customer";
	$fdata["ownerTable"] = "customers";
	$fdata["Label"] = GetFieldLabel("Spend_Per_Customer","Customer");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "customer_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "customers.customer_name";

	
	
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




	$tdataSpend_Per_Customer["Customer"] = $fdata;
//	Spend $
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Spend \$";
	$fdata["GoodName"] = "Spend__";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Spend_Per_Customer","Spend__");
	$fdata["FieldType"] = 14;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Spend \$";

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




	$tdataSpend_Per_Customer["Spend \$"] = $fdata;


$tables_data["Spend Per Customer"]=&$tdataSpend_Per_Customer;
$field_labels["Spend_Per_Customer"] = &$fieldLabelsSpend_Per_Customer;
$fieldToolTips["Spend_Per_Customer"] = &$fieldToolTipsSpend_Per_Customer;
$placeHolders["Spend_Per_Customer"] = &$placeHoldersSpend_Per_Customer;
$page_titles["Spend_Per_Customer"] = &$pageTitlesSpend_Per_Customer;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Spend Per Customer"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Spend Per Customer"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Spend_Per_Customer()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "customers.customer_name AS `Customer`,  SUM(renewals.cost) AS `Spend \$`";
$proto0["m_strFrom"] = "FROM renewals  INNER JOIN customers ON renewals.sold_to_id = customers.id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `Spend \$` DESC";
	
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
	"m_strName" => "customer_name",
	"m_strTable" => "customers",
	"m_srcTableName" => "Spend Per Customer"
));

$proto6["m_sql"] = "customers.customer_name";
$proto6["m_srcTableName"] = "Spend Per Customer";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "Customer";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_SUM";
$proto9["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "cost",
	"m_strTable" => "renewals",
	"m_srcTableName" => "Spend Per Customer"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "SUM(renewals.cost)";
$proto8["m_srcTableName"] = "Spend Per Customer";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Spend \$";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "renewals";
$proto12["m_srcTableName"] = "Spend Per Customer";
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
$proto11["m_srcTableName"] = "Spend Per Customer";
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
$proto16["m_strName"] = "customers";
$proto16["m_srcTableName"] = "Spend Per Customer";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "id";
$proto16["m_columns"][] = "customer";
$proto16["m_columns"][] = "customer_name";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "INNER JOIN customers ON renewals.sold_to_id = customers.id";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "Spend Per Customer";
$proto17=array();
$proto17["m_sql"] = "renewals.sold_to_id = customers.id";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sold_to_id",
	"m_strTable" => "renewals",
	"m_srcTableName" => "Spend Per Customer"
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "= customers.id";
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
	"m_strName" => "customer_name",
	"m_strTable" => "customers",
	"m_srcTableName" => "Spend Per Customer"
));

$proto19["m_column"]=$obj;
$obj = new SQLGroupByItem($proto19);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto21=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`Spend \$`"
));

$proto21["m_column"]=$obj;
$proto21["m_bAsc"] = 0;
$proto21["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto21);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Spend Per Customer";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Spend_Per_Customer = createSqlQuery_Spend_Per_Customer();


	
		;

		

$tdataSpend_Per_Customer[".sqlquery"] = $queryData_Spend_Per_Customer;

$tableEvents["Spend Per Customer"] = new eventsBase;
$tdataSpend_Per_Customer[".hasEvents"] = false;

?>
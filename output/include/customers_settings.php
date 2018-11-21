<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacustomers = array();
	$tdatacustomers[".truncateText"] = true;
	$tdatacustomers[".NumberOfChars"] = 80;
	$tdatacustomers[".ShortName"] = "customers";
	$tdatacustomers[".OwnerID"] = "";
	$tdatacustomers[".OriginalTable"] = "customers";

//	field labels
$fieldLabelscustomers = array();
$fieldToolTipscustomers = array();
$pageTitlescustomers = array();
$placeHolderscustomers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustomers["English"] = array();
	$fieldToolTipscustomers["English"] = array();
	$placeHolderscustomers["English"] = array();
	$pageTitlescustomers["English"] = array();
	$fieldLabelscustomers["English"]["id"] = "Id";
	$fieldToolTipscustomers["English"]["id"] = "";
	$placeHolderscustomers["English"]["id"] = "";
	$fieldLabelscustomers["English"]["customer"] = "Customer";
	$fieldToolTipscustomers["English"]["customer"] = "";
	$placeHolderscustomers["English"]["customer"] = "";
	$fieldLabelscustomers["English"]["customer_name"] = "Customer Name";
	$fieldToolTipscustomers["English"]["customer_name"] = "";
	$placeHolderscustomers["English"]["customer_name"] = "";
	if (count($fieldToolTipscustomers["English"]))
		$tdatacustomers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscustomers[""] = array();
	$fieldToolTipscustomers[""] = array();
	$placeHolderscustomers[""] = array();
	$pageTitlescustomers[""] = array();
	if (count($fieldToolTipscustomers[""]))
		$tdatacustomers[".isUseToolTips"] = true;
}


	$tdatacustomers[".NCSearch"] = true;



$tdatacustomers[".shortTableName"] = "customers";
$tdatacustomers[".nSecOptions"] = 0;
$tdatacustomers[".recsPerRowPrint"] = 1;
$tdatacustomers[".mainTableOwnerID"] = "";
$tdatacustomers[".moveNext"] = 1;
$tdatacustomers[".entityType"] = 0;

$tdatacustomers[".strOriginalTableName"] = "customers";

	



$tdatacustomers[".showAddInPopup"] = false;

$tdatacustomers[".showEditInPopup"] = false;

$tdatacustomers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacustomers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacustomers[".fieldsForRegister"] = array();

$tdatacustomers[".listAjax"] = false;

	$tdatacustomers[".audit"] = false;

	$tdatacustomers[".locking"] = false;

$tdatacustomers[".edit"] = true;
$tdatacustomers[".afterEditAction"] = 1;
$tdatacustomers[".closePopupAfterEdit"] = 1;
$tdatacustomers[".afterEditActionDetTable"] = "";

$tdatacustomers[".add"] = true;
$tdatacustomers[".afterAddAction"] = 1;
$tdatacustomers[".closePopupAfterAdd"] = 1;
$tdatacustomers[".afterAddActionDetTable"] = "";

$tdatacustomers[".list"] = true;



$tdatacustomers[".reorderRecordsByHeader"] = true;


$tdatacustomers[".exportFormatting"] = 2;
$tdatacustomers[".exportDelimiter"] = ",";
		
$tdatacustomers[".view"] = true;

$tdatacustomers[".import"] = true;

$tdatacustomers[".exportTo"] = true;

$tdatacustomers[".printFriendly"] = true;

$tdatacustomers[".delete"] = true;

$tdatacustomers[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacustomers[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacustomers[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacustomers[".searchSaving"] = false;
//

$tdatacustomers[".showSearchPanel"] = true;
		$tdatacustomers[".flexibleSearch"] = true;

$tdatacustomers[".isUseAjaxSuggest"] = true;

$tdatacustomers[".rowHighlite"] = true;





$tdatacustomers[".ajaxCodeSnippetAdded"] = false;

$tdatacustomers[".buttonsAdded"] = false;

$tdatacustomers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustomers[".isUseTimeForSearch"] = false;





$tdatacustomers[".allSearchFields"] = array();
$tdatacustomers[".filterFields"] = array();
$tdatacustomers[".requiredSearchFields"] = array();

$tdatacustomers[".allSearchFields"][] = "customer";
	$tdatacustomers[".allSearchFields"][] = "customer_name";
	

$tdatacustomers[".googleLikeFields"] = array();
$tdatacustomers[".googleLikeFields"][] = "id";
$tdatacustomers[".googleLikeFields"][] = "customer";
$tdatacustomers[".googleLikeFields"][] = "customer_name";


$tdatacustomers[".advSearchFields"] = array();
$tdatacustomers[".advSearchFields"][] = "customer";
$tdatacustomers[".advSearchFields"][] = "customer_name";

$tdatacustomers[".tableType"] = "list";

$tdatacustomers[".printerPageOrientation"] = 0;
$tdatacustomers[".nPrinterPageScale"] = 100;

$tdatacustomers[".nPrinterSplitRecords"] = 40;

$tdatacustomers[".nPrinterPDFSplitRecords"] = 40;



$tdatacustomers[".geocodingEnabled"] = false;





$tdatacustomers[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatacustomers[".pageSize"] = 20;

$tdatacustomers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacustomers[".strOrderBy"] = $tstrOrderBy;

$tdatacustomers[".orderindexes"] = array();

$tdatacustomers[".sqlHead"] = "SELECT id,  	customer,  	customer_name";
$tdatacustomers[".sqlFrom"] = "FROM customers";
$tdatacustomers[".sqlWhereExpr"] = "";
$tdatacustomers[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustomers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustomers[".arrGroupsPerPage"] = $arrGPP;

$tdatacustomers[".highlightSearchResults"] = true;

$tableKeyscustomers = array();
$tableKeyscustomers[] = "id";
$tdatacustomers[".Keys"] = $tableKeyscustomers;

$tdatacustomers[".listFields"] = array();
$tdatacustomers[".listFields"][] = "customer";
$tdatacustomers[".listFields"][] = "customer_name";

$tdatacustomers[".hideMobileList"] = array();


$tdatacustomers[".viewFields"] = array();
$tdatacustomers[".viewFields"][] = "customer";
$tdatacustomers[".viewFields"][] = "customer_name";

$tdatacustomers[".addFields"] = array();
$tdatacustomers[".addFields"][] = "customer";
$tdatacustomers[".addFields"][] = "customer_name";

$tdatacustomers[".masterListFields"] = array();
$tdatacustomers[".masterListFields"][] = "id";
$tdatacustomers[".masterListFields"][] = "customer";
$tdatacustomers[".masterListFields"][] = "customer_name";

$tdatacustomers[".inlineAddFields"] = array();

$tdatacustomers[".editFields"] = array();
$tdatacustomers[".editFields"][] = "customer";
$tdatacustomers[".editFields"][] = "customer_name";

$tdatacustomers[".inlineEditFields"] = array();

$tdatacustomers[".updateSelectedFields"] = array();
$tdatacustomers[".updateSelectedFields"][] = "customer";
$tdatacustomers[".updateSelectedFields"][] = "customer_name";


$tdatacustomers[".exportFields"] = array();
$tdatacustomers[".exportFields"][] = "id";
$tdatacustomers[".exportFields"][] = "customer";
$tdatacustomers[".exportFields"][] = "customer_name";

$tdatacustomers[".importFields"] = array();
$tdatacustomers[".importFields"][] = "customer";
$tdatacustomers[".importFields"][] = "customer_name";

$tdatacustomers[".printFields"] = array();
$tdatacustomers[".printFields"][] = "customer";
$tdatacustomers[".printFields"][] = "customer_name";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "customers";
	$fdata["Label"] = GetFieldLabel("customers","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
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








	$tdatacustomers["id"] = $fdata;
//	customer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "customer";
	$fdata["GoodName"] = "customer";
	$fdata["ownerTable"] = "customers";
	$fdata["Label"] = GetFieldLabel("customers","customer");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "customer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "customer";

	
	
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacustomers["customer"] = $fdata;
//	customer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "customer_name";
	$fdata["GoodName"] = "customer_name";
	$fdata["ownerTable"] = "customers";
	$fdata["Label"] = GetFieldLabel("customers","customer_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "customer_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "customer_name";

	
	
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacustomers["customer_name"] = $fdata;


$tables_data["customers"]=&$tdatacustomers;
$field_labels["customers"] = &$fieldLabelscustomers;
$fieldToolTips["customers"] = &$fieldToolTipscustomers;
$placeHolders["customers"] = &$placeHolderscustomers;
$page_titles["customers"] = &$pageTitlescustomers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["customers"] = array();
//	renewals
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="renewals";
		$detailsParam["dOriginalTable"] = "renewals";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "renewals";
	$detailsParam["dCaptionTable"] = GetTableCaption("renewals");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["customers"][$dIndex] = $detailsParam;

	
		$detailsTablesData["customers"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["customers"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["customers"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["customers"][$dIndex]["detailKeys"][]="sold_to_id";

// tables which are master tables for current table (detail)
$masterTablesData["customers"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_customers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	customer,  	customer_name";
$proto0["m_strFrom"] = "FROM customers";
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
	"m_strTable" => "customers",
	"m_srcTableName" => "customers"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "customers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "customer",
	"m_strTable" => "customers",
	"m_srcTableName" => "customers"
));

$proto8["m_sql"] = "customer";
$proto8["m_srcTableName"] = "customers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "customer_name",
	"m_strTable" => "customers",
	"m_srcTableName" => "customers"
));

$proto10["m_sql"] = "customer_name";
$proto10["m_srcTableName"] = "customers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "customers";
$proto13["m_srcTableName"] = "customers";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "customer";
$proto13["m_columns"][] = "customer_name";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "customers";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "customers";
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
$proto0["m_srcTableName"]="customers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_customers = createSqlQuery_customers();


	
		;

			

$tdatacustomers[".sqlquery"] = $queryData_customers;

include_once(getabspath("include/customers_events.php"));
$tableEvents["customers"] = new eventclass_customers;
$tdatacustomers[".hasEvents"] = true;

?>
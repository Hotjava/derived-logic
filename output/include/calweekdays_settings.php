<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacalweekdays = array();
	$tdatacalweekdays[".truncateText"] = true;
	$tdatacalweekdays[".NumberOfChars"] = 80;
	$tdatacalweekdays[".ShortName"] = "calweekdays";
	$tdatacalweekdays[".OwnerID"] = "";
	$tdatacalweekdays[".OriginalTable"] = "calweekdays";

//	field labels
$fieldLabelscalweekdays = array();
$fieldToolTipscalweekdays = array();
$pageTitlescalweekdays = array();
$placeHolderscalweekdays = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscalweekdays["English"] = array();
	$fieldToolTipscalweekdays["English"] = array();
	$placeHolderscalweekdays["English"] = array();
	$pageTitlescalweekdays["English"] = array();
	$fieldLabelscalweekdays["English"]["id"] = "Id";
	$fieldToolTipscalweekdays["English"]["id"] = "";
	$placeHolderscalweekdays["English"]["id"] = "";
	$fieldLabelscalweekdays["English"]["daynum"] = "Daynum";
	$fieldToolTipscalweekdays["English"]["daynum"] = "";
	$placeHolderscalweekdays["English"]["daynum"] = "";
	$fieldLabelscalweekdays["English"]["dayname"] = "Dayname";
	$fieldToolTipscalweekdays["English"]["dayname"] = "";
	$placeHolderscalweekdays["English"]["dayname"] = "";
	if (count($fieldToolTipscalweekdays["English"]))
		$tdatacalweekdays[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscalweekdays[""] = array();
	$fieldToolTipscalweekdays[""] = array();
	$placeHolderscalweekdays[""] = array();
	$pageTitlescalweekdays[""] = array();
	if (count($fieldToolTipscalweekdays[""]))
		$tdatacalweekdays[".isUseToolTips"] = true;
}


	$tdatacalweekdays[".NCSearch"] = true;



$tdatacalweekdays[".shortTableName"] = "calweekdays";
$tdatacalweekdays[".nSecOptions"] = 0;
$tdatacalweekdays[".recsPerRowPrint"] = 1;
$tdatacalweekdays[".mainTableOwnerID"] = "";
$tdatacalweekdays[".moveNext"] = 1;
$tdatacalweekdays[".entityType"] = 1;

$tdatacalweekdays[".strOriginalTableName"] = "calweekdays";

	



$tdatacalweekdays[".showAddInPopup"] = false;

$tdatacalweekdays[".showEditInPopup"] = false;

$tdatacalweekdays[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacalweekdays[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacalweekdays[".fieldsForRegister"] = array();

$tdatacalweekdays[".listAjax"] = false;

	$tdatacalweekdays[".audit"] = false;

	$tdatacalweekdays[".locking"] = false;

$tdatacalweekdays[".edit"] = true;
$tdatacalweekdays[".afterEditAction"] = 1;
$tdatacalweekdays[".closePopupAfterEdit"] = 1;
$tdatacalweekdays[".afterEditActionDetTable"] = "";

$tdatacalweekdays[".add"] = true;
$tdatacalweekdays[".afterAddAction"] = 1;
$tdatacalweekdays[".closePopupAfterAdd"] = 1;
$tdatacalweekdays[".afterAddActionDetTable"] = "";

$tdatacalweekdays[".list"] = true;

$tdatacalweekdays[".inlineEdit"] = true;




$tdatacalweekdays[".exportFormatting"] = 2;
$tdatacalweekdays[".exportDelimiter"] = ",";
		
$tdatacalweekdays[".inlineAdd"] = true;
$tdatacalweekdays[".view"] = true;

$tdatacalweekdays[".import"] = true;

$tdatacalweekdays[".exportTo"] = true;

$tdatacalweekdays[".printFriendly"] = true;

$tdatacalweekdays[".delete"] = true;

$tdatacalweekdays[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacalweekdays[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacalweekdays[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacalweekdays[".searchSaving"] = false;
//

$tdatacalweekdays[".showSearchPanel"] = true;
		$tdatacalweekdays[".flexibleSearch"] = true;

$tdatacalweekdays[".isUseAjaxSuggest"] = true;

$tdatacalweekdays[".rowHighlite"] = true;





$tdatacalweekdays[".ajaxCodeSnippetAdded"] = false;

$tdatacalweekdays[".buttonsAdded"] = false;

$tdatacalweekdays[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacalweekdays[".isUseTimeForSearch"] = false;





$tdatacalweekdays[".allSearchFields"] = array();
$tdatacalweekdays[".filterFields"] = array();
$tdatacalweekdays[".requiredSearchFields"] = array();

$tdatacalweekdays[".allSearchFields"][] = "id";
	$tdatacalweekdays[".allSearchFields"][] = "daynum";
	$tdatacalweekdays[".allSearchFields"][] = "dayname";
	

$tdatacalweekdays[".googleLikeFields"] = array();
$tdatacalweekdays[".googleLikeFields"][] = "id";
$tdatacalweekdays[".googleLikeFields"][] = "daynum";
$tdatacalweekdays[".googleLikeFields"][] = "dayname";


$tdatacalweekdays[".advSearchFields"] = array();
$tdatacalweekdays[".advSearchFields"][] = "id";
$tdatacalweekdays[".advSearchFields"][] = "daynum";
$tdatacalweekdays[".advSearchFields"][] = "dayname";

$tdatacalweekdays[".tableType"] = "list";

$tdatacalweekdays[".printerPageOrientation"] = 0;
$tdatacalweekdays[".nPrinterPageScale"] = 100;

$tdatacalweekdays[".nPrinterSplitRecords"] = 40;

$tdatacalweekdays[".nPrinterPDFSplitRecords"] = 40;



$tdatacalweekdays[".geocodingEnabled"] = false;





$tdatacalweekdays[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatacalweekdays[".pageSize"] = 20;

$tdatacalweekdays[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacalweekdays[".strOrderBy"] = $tstrOrderBy;

$tdatacalweekdays[".orderindexes"] = array();

$tdatacalweekdays[".sqlHead"] = "SELECT id,  	daynum,  	dayname";
$tdatacalweekdays[".sqlFrom"] = "FROM calweekdays";
$tdatacalweekdays[".sqlWhereExpr"] = "";
$tdatacalweekdays[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalweekdays[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalweekdays[".arrGroupsPerPage"] = $arrGPP;

$tdatacalweekdays[".highlightSearchResults"] = true;

$tableKeyscalweekdays = array();
$tableKeyscalweekdays[] = "id";
$tdatacalweekdays[".Keys"] = $tableKeyscalweekdays;

$tdatacalweekdays[".listFields"] = array();
$tdatacalweekdays[".listFields"][] = "id";
$tdatacalweekdays[".listFields"][] = "daynum";
$tdatacalweekdays[".listFields"][] = "dayname";

$tdatacalweekdays[".hideMobileList"] = array();


$tdatacalweekdays[".viewFields"] = array();
$tdatacalweekdays[".viewFields"][] = "id";
$tdatacalweekdays[".viewFields"][] = "daynum";
$tdatacalweekdays[".viewFields"][] = "dayname";

$tdatacalweekdays[".addFields"] = array();
$tdatacalweekdays[".addFields"][] = "daynum";
$tdatacalweekdays[".addFields"][] = "dayname";

$tdatacalweekdays[".masterListFields"] = array();
$tdatacalweekdays[".masterListFields"][] = "id";
$tdatacalweekdays[".masterListFields"][] = "daynum";
$tdatacalweekdays[".masterListFields"][] = "dayname";

$tdatacalweekdays[".inlineAddFields"] = array();
$tdatacalweekdays[".inlineAddFields"][] = "daynum";
$tdatacalweekdays[".inlineAddFields"][] = "dayname";

$tdatacalweekdays[".editFields"] = array();
$tdatacalweekdays[".editFields"][] = "daynum";
$tdatacalweekdays[".editFields"][] = "dayname";

$tdatacalweekdays[".inlineEditFields"] = array();
$tdatacalweekdays[".inlineEditFields"][] = "daynum";
$tdatacalweekdays[".inlineEditFields"][] = "dayname";

$tdatacalweekdays[".updateSelectedFields"] = array();
$tdatacalweekdays[".updateSelectedFields"][] = "daynum";
$tdatacalweekdays[".updateSelectedFields"][] = "dayname";


$tdatacalweekdays[".exportFields"] = array();
$tdatacalweekdays[".exportFields"][] = "id";
$tdatacalweekdays[".exportFields"][] = "daynum";
$tdatacalweekdays[".exportFields"][] = "dayname";

$tdatacalweekdays[".importFields"] = array();
$tdatacalweekdays[".importFields"][] = "id";
$tdatacalweekdays[".importFields"][] = "daynum";
$tdatacalweekdays[".importFields"][] = "dayname";

$tdatacalweekdays[".printFields"] = array();
$tdatacalweekdays[".printFields"][] = "id";
$tdatacalweekdays[".printFields"][] = "daynum";
$tdatacalweekdays[".printFields"][] = "dayname";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "calweekdays";
	$fdata["Label"] = GetFieldLabel("calweekdays","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalweekdays["id"] = $fdata;
//	daynum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "daynum";
	$fdata["GoodName"] = "daynum";
	$fdata["ownerTable"] = "calweekdays";
	$fdata["Label"] = GetFieldLabel("calweekdays","daynum");
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

		$fdata["strField"] = "daynum";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "daynum";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalweekdays["daynum"] = $fdata;
//	dayname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dayname";
	$fdata["GoodName"] = "dayname";
	$fdata["ownerTable"] = "calweekdays";
	$fdata["Label"] = GetFieldLabel("calweekdays","dayname");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "dayname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dayname";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalweekdays["dayname"] = $fdata;


$tables_data["calweekdays"]=&$tdatacalweekdays;
$field_labels["calweekdays"] = &$fieldLabelscalweekdays;
$fieldToolTips["calweekdays"] = &$fieldToolTipscalweekdays;
$placeHolders["calweekdays"] = &$placeHolderscalweekdays;
$page_titles["calweekdays"] = &$pageTitlescalweekdays;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["calweekdays"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["calweekdays"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_calweekdays()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	daynum,  	dayname";
$proto0["m_strFrom"] = "FROM calweekdays";
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
	"m_strTable" => "calweekdays",
	"m_srcTableName" => "calweekdays"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "calweekdays";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "daynum",
	"m_strTable" => "calweekdays",
	"m_srcTableName" => "calweekdays"
));

$proto8["m_sql"] = "daynum";
$proto8["m_srcTableName"] = "calweekdays";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "dayname",
	"m_strTable" => "calweekdays",
	"m_srcTableName" => "calweekdays"
));

$proto10["m_sql"] = "dayname";
$proto10["m_srcTableName"] = "calweekdays";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "calweekdays";
$proto13["m_srcTableName"] = "calweekdays";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "daynum";
$proto13["m_columns"][] = "dayname";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "calweekdays";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "calweekdays";
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
$proto0["m_srcTableName"]="calweekdays";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_calweekdays = createSqlQuery_calweekdays();


	
		;

			

$tdatacalweekdays[".sqlquery"] = $queryData_calweekdays;

$tableEvents["calweekdays"] = new eventsBase;
$tdatacalweekdays[".hasEvents"] = false;

?>
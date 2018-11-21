<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacalholidays = array();
	$tdatacalholidays[".truncateText"] = true;
	$tdatacalholidays[".NumberOfChars"] = 80;
	$tdatacalholidays[".ShortName"] = "calholidays";
	$tdatacalholidays[".OwnerID"] = "";
	$tdatacalholidays[".OriginalTable"] = "calholidays";

//	field labels
$fieldLabelscalholidays = array();
$fieldToolTipscalholidays = array();
$pageTitlescalholidays = array();
$placeHolderscalholidays = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscalholidays["English"] = array();
	$fieldToolTipscalholidays["English"] = array();
	$placeHolderscalholidays["English"] = array();
	$pageTitlescalholidays["English"] = array();
	$fieldLabelscalholidays["English"]["id"] = "Id";
	$fieldToolTipscalholidays["English"]["id"] = "";
	$placeHolderscalholidays["English"]["id"] = "";
	$fieldLabelscalholidays["English"]["name"] = "Name";
	$fieldToolTipscalholidays["English"]["name"] = "";
	$placeHolderscalholidays["English"]["name"] = "";
	$fieldLabelscalholidays["English"]["date"] = "Date";
	$fieldToolTipscalholidays["English"]["date"] = "";
	$placeHolderscalholidays["English"]["date"] = "";
	if (count($fieldToolTipscalholidays["English"]))
		$tdatacalholidays[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscalholidays[""] = array();
	$fieldToolTipscalholidays[""] = array();
	$placeHolderscalholidays[""] = array();
	$pageTitlescalholidays[""] = array();
	if (count($fieldToolTipscalholidays[""]))
		$tdatacalholidays[".isUseToolTips"] = true;
}


	$tdatacalholidays[".NCSearch"] = true;



$tdatacalholidays[".shortTableName"] = "calholidays";
$tdatacalholidays[".nSecOptions"] = 0;
$tdatacalholidays[".recsPerRowPrint"] = 1;
$tdatacalholidays[".mainTableOwnerID"] = "";
$tdatacalholidays[".moveNext"] = 1;
$tdatacalholidays[".entityType"] = 1;

$tdatacalholidays[".strOriginalTableName"] = "calholidays";

	



$tdatacalholidays[".showAddInPopup"] = false;

$tdatacalholidays[".showEditInPopup"] = false;

$tdatacalholidays[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacalholidays[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacalholidays[".fieldsForRegister"] = array();

$tdatacalholidays[".listAjax"] = false;

	$tdatacalholidays[".audit"] = false;

	$tdatacalholidays[".locking"] = false;

$tdatacalholidays[".edit"] = true;
$tdatacalholidays[".afterEditAction"] = 1;
$tdatacalholidays[".closePopupAfterEdit"] = 1;
$tdatacalholidays[".afterEditActionDetTable"] = "";

$tdatacalholidays[".add"] = true;
$tdatacalholidays[".afterAddAction"] = 1;
$tdatacalholidays[".closePopupAfterAdd"] = 1;
$tdatacalholidays[".afterAddActionDetTable"] = "";

$tdatacalholidays[".list"] = true;

$tdatacalholidays[".inlineEdit"] = true;




$tdatacalholidays[".exportFormatting"] = 2;
$tdatacalholidays[".exportDelimiter"] = ",";
		
$tdatacalholidays[".inlineAdd"] = true;
$tdatacalholidays[".view"] = true;

$tdatacalholidays[".import"] = true;

$tdatacalholidays[".exportTo"] = true;

$tdatacalholidays[".printFriendly"] = true;

$tdatacalholidays[".delete"] = true;

$tdatacalholidays[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacalholidays[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacalholidays[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacalholidays[".searchSaving"] = false;
//

$tdatacalholidays[".showSearchPanel"] = true;
		$tdatacalholidays[".flexibleSearch"] = true;

$tdatacalholidays[".isUseAjaxSuggest"] = true;

$tdatacalholidays[".rowHighlite"] = true;





$tdatacalholidays[".ajaxCodeSnippetAdded"] = false;

$tdatacalholidays[".buttonsAdded"] = false;

$tdatacalholidays[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacalholidays[".isUseTimeForSearch"] = false;





$tdatacalholidays[".allSearchFields"] = array();
$tdatacalholidays[".filterFields"] = array();
$tdatacalholidays[".requiredSearchFields"] = array();

$tdatacalholidays[".allSearchFields"][] = "name";
	$tdatacalholidays[".allSearchFields"][] = "date";
	

$tdatacalholidays[".googleLikeFields"] = array();
$tdatacalholidays[".googleLikeFields"][] = "id";
$tdatacalholidays[".googleLikeFields"][] = "name";
$tdatacalholidays[".googleLikeFields"][] = "date";


$tdatacalholidays[".advSearchFields"] = array();
$tdatacalholidays[".advSearchFields"][] = "name";
$tdatacalholidays[".advSearchFields"][] = "date";

$tdatacalholidays[".tableType"] = "list";

$tdatacalholidays[".printerPageOrientation"] = 0;
$tdatacalholidays[".nPrinterPageScale"] = 100;

$tdatacalholidays[".nPrinterSplitRecords"] = 40;

$tdatacalholidays[".nPrinterPDFSplitRecords"] = 40;



$tdatacalholidays[".geocodingEnabled"] = false;





$tdatacalholidays[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatacalholidays[".pageSize"] = 20;

$tdatacalholidays[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacalholidays[".strOrderBy"] = $tstrOrderBy;

$tdatacalholidays[".orderindexes"] = array();

$tdatacalholidays[".sqlHead"] = "SELECT id,  	name,  	`date`";
$tdatacalholidays[".sqlFrom"] = "FROM calholidays";
$tdatacalholidays[".sqlWhereExpr"] = "";
$tdatacalholidays[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalholidays[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalholidays[".arrGroupsPerPage"] = $arrGPP;

$tdatacalholidays[".highlightSearchResults"] = true;

$tableKeyscalholidays = array();
$tableKeyscalholidays[] = "id";
$tdatacalholidays[".Keys"] = $tableKeyscalholidays;

$tdatacalholidays[".listFields"] = array();
$tdatacalholidays[".listFields"][] = "name";
$tdatacalholidays[".listFields"][] = "date";

$tdatacalholidays[".hideMobileList"] = array();


$tdatacalholidays[".viewFields"] = array();
$tdatacalholidays[".viewFields"][] = "name";
$tdatacalholidays[".viewFields"][] = "date";

$tdatacalholidays[".addFields"] = array();
$tdatacalholidays[".addFields"][] = "name";
$tdatacalholidays[".addFields"][] = "date";

$tdatacalholidays[".masterListFields"] = array();
$tdatacalholidays[".masterListFields"][] = "id";
$tdatacalholidays[".masterListFields"][] = "name";
$tdatacalholidays[".masterListFields"][] = "date";

$tdatacalholidays[".inlineAddFields"] = array();
$tdatacalholidays[".inlineAddFields"][] = "name";
$tdatacalholidays[".inlineAddFields"][] = "date";

$tdatacalholidays[".editFields"] = array();
$tdatacalholidays[".editFields"][] = "name";
$tdatacalholidays[".editFields"][] = "date";

$tdatacalholidays[".inlineEditFields"] = array();
$tdatacalholidays[".inlineEditFields"][] = "name";
$tdatacalholidays[".inlineEditFields"][] = "date";

$tdatacalholidays[".updateSelectedFields"] = array();
$tdatacalholidays[".updateSelectedFields"][] = "name";
$tdatacalholidays[".updateSelectedFields"][] = "date";


$tdatacalholidays[".exportFields"] = array();
$tdatacalholidays[".exportFields"][] = "name";
$tdatacalholidays[".exportFields"][] = "date";

$tdatacalholidays[".importFields"] = array();
$tdatacalholidays[".importFields"][] = "id";
$tdatacalholidays[".importFields"][] = "name";
$tdatacalholidays[".importFields"][] = "date";

$tdatacalholidays[".printFields"] = array();
$tdatacalholidays[".printFields"][] = "name";
$tdatacalholidays[".printFields"][] = "date";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "calholidays";
	$fdata["Label"] = GetFieldLabel("calholidays","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
			
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








	$tdatacalholidays["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "calholidays";
	$fdata["Label"] = GetFieldLabel("calholidays","name");
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

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdatacalholidays["name"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "calholidays";
	$fdata["Label"] = GetFieldLabel("calholidays","date");
	$fdata["FieldType"] = 7;

	
	
	
			
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

		$fdata["strField"] = "date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Long Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatacalholidays["date"] = $fdata;


$tables_data["calholidays"]=&$tdatacalholidays;
$field_labels["calholidays"] = &$fieldLabelscalholidays;
$fieldToolTips["calholidays"] = &$fieldToolTipscalholidays;
$placeHolders["calholidays"] = &$placeHolderscalholidays;
$page_titles["calholidays"] = &$pageTitlescalholidays;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["calholidays"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["calholidays"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_calholidays()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	`date`";
$proto0["m_strFrom"] = "FROM calholidays";
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
	"m_strTable" => "calholidays",
	"m_srcTableName" => "calholidays"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "calholidays";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "calholidays",
	"m_srcTableName" => "calholidays"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "calholidays";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "calholidays",
	"m_srcTableName" => "calholidays"
));

$proto10["m_sql"] = "`date`";
$proto10["m_srcTableName"] = "calholidays";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "calholidays";
$proto13["m_srcTableName"] = "calholidays";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "name";
$proto13["m_columns"][] = "date";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "calholidays";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "calholidays";
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
$proto0["m_srcTableName"]="calholidays";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_calholidays = createSqlQuery_calholidays();


	
		;

			

$tdatacalholidays[".sqlquery"] = $queryData_calholidays;

include_once(getabspath("include/calholidays_events.php"));
$tableEvents["calholidays"] = new eventclass_calholidays;
$tdatacalholidays[".hasEvents"] = true;

?>
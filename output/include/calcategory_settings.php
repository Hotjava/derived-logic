<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacalcategory = array();
	$tdatacalcategory[".truncateText"] = true;
	$tdatacalcategory[".NumberOfChars"] = 80;
	$tdatacalcategory[".ShortName"] = "calcategory";
	$tdatacalcategory[".OwnerID"] = "";
	$tdatacalcategory[".OriginalTable"] = "calcategory";

//	field labels
$fieldLabelscalcategory = array();
$fieldToolTipscalcategory = array();
$pageTitlescalcategory = array();
$placeHolderscalcategory = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscalcategory["English"] = array();
	$fieldToolTipscalcategory["English"] = array();
	$placeHolderscalcategory["English"] = array();
	$pageTitlescalcategory["English"] = array();
	$fieldLabelscalcategory["English"]["id"] = "Id";
	$fieldToolTipscalcategory["English"]["id"] = "";
	$placeHolderscalcategory["English"]["id"] = "";
	$fieldLabelscalcategory["English"]["Category"] = "Category";
	$fieldToolTipscalcategory["English"]["Category"] = "";
	$placeHolderscalcategory["English"]["Category"] = "";
	$fieldLabelscalcategory["English"]["Color"] = "Color";
	$fieldToolTipscalcategory["English"]["Color"] = "";
	$placeHolderscalcategory["English"]["Color"] = "";
	if (count($fieldToolTipscalcategory["English"]))
		$tdatacalcategory[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscalcategory[""] = array();
	$fieldToolTipscalcategory[""] = array();
	$placeHolderscalcategory[""] = array();
	$pageTitlescalcategory[""] = array();
	if (count($fieldToolTipscalcategory[""]))
		$tdatacalcategory[".isUseToolTips"] = true;
}


	$tdatacalcategory[".NCSearch"] = true;



$tdatacalcategory[".shortTableName"] = "calcategory";
$tdatacalcategory[".nSecOptions"] = 0;
$tdatacalcategory[".recsPerRowPrint"] = 1;
$tdatacalcategory[".mainTableOwnerID"] = "";
$tdatacalcategory[".moveNext"] = 1;
$tdatacalcategory[".entityType"] = 1;

$tdatacalcategory[".strOriginalTableName"] = "calcategory";

	



$tdatacalcategory[".showAddInPopup"] = false;

$tdatacalcategory[".showEditInPopup"] = false;

$tdatacalcategory[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacalcategory[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacalcategory[".fieldsForRegister"] = array();

$tdatacalcategory[".listAjax"] = false;

	$tdatacalcategory[".audit"] = false;

	$tdatacalcategory[".locking"] = false;

$tdatacalcategory[".edit"] = true;
$tdatacalcategory[".afterEditAction"] = 1;
$tdatacalcategory[".closePopupAfterEdit"] = 1;
$tdatacalcategory[".afterEditActionDetTable"] = "";

$tdatacalcategory[".add"] = true;
$tdatacalcategory[".afterAddAction"] = 1;
$tdatacalcategory[".closePopupAfterAdd"] = 1;
$tdatacalcategory[".afterAddActionDetTable"] = "";

$tdatacalcategory[".list"] = true;





$tdatacalcategory[".exportFormatting"] = 2;
$tdatacalcategory[".exportDelimiter"] = ",";
		
$tdatacalcategory[".view"] = true;


$tdatacalcategory[".exportTo"] = true;

$tdatacalcategory[".printFriendly"] = true;

$tdatacalcategory[".delete"] = true;

$tdatacalcategory[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacalcategory[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacalcategory[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacalcategory[".searchSaving"] = false;
//

$tdatacalcategory[".showSearchPanel"] = true;
		$tdatacalcategory[".flexibleSearch"] = true;

$tdatacalcategory[".isUseAjaxSuggest"] = true;

$tdatacalcategory[".rowHighlite"] = true;





$tdatacalcategory[".ajaxCodeSnippetAdded"] = false;

$tdatacalcategory[".buttonsAdded"] = false;

$tdatacalcategory[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacalcategory[".isUseTimeForSearch"] = false;



$tdatacalcategory[".badgeColor"] = "CD853F";


$tdatacalcategory[".allSearchFields"] = array();
$tdatacalcategory[".filterFields"] = array();
$tdatacalcategory[".requiredSearchFields"] = array();

$tdatacalcategory[".allSearchFields"][] = "Category";
	$tdatacalcategory[".allSearchFields"][] = "Color";
	

$tdatacalcategory[".googleLikeFields"] = array();
$tdatacalcategory[".googleLikeFields"][] = "id";
$tdatacalcategory[".googleLikeFields"][] = "Category";
$tdatacalcategory[".googleLikeFields"][] = "Color";


$tdatacalcategory[".advSearchFields"] = array();
$tdatacalcategory[".advSearchFields"][] = "Category";
$tdatacalcategory[".advSearchFields"][] = "Color";

$tdatacalcategory[".tableType"] = "list";

$tdatacalcategory[".printerPageOrientation"] = 0;
$tdatacalcategory[".nPrinterPageScale"] = 100;

$tdatacalcategory[".nPrinterSplitRecords"] = 40;

$tdatacalcategory[".nPrinterPDFSplitRecords"] = 40;



$tdatacalcategory[".geocodingEnabled"] = false;





$tdatacalcategory[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatacalcategory[".pageSize"] = 20;

$tdatacalcategory[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacalcategory[".strOrderBy"] = $tstrOrderBy;

$tdatacalcategory[".orderindexes"] = array();

$tdatacalcategory[".sqlHead"] = "SELECT id,  	Category,  	Color";
$tdatacalcategory[".sqlFrom"] = "FROM calcategory";
$tdatacalcategory[".sqlWhereExpr"] = "";
$tdatacalcategory[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalcategory[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalcategory[".arrGroupsPerPage"] = $arrGPP;


$tableKeyscalcategory = array();
$tableKeyscalcategory[] = "id";
$tdatacalcategory[".Keys"] = $tableKeyscalcategory;

$tdatacalcategory[".listFields"] = array();
$tdatacalcategory[".listFields"][] = "Category";
$tdatacalcategory[".listFields"][] = "Color";

$tdatacalcategory[".hideMobileList"] = array();


$tdatacalcategory[".viewFields"] = array();
$tdatacalcategory[".viewFields"][] = "Category";
$tdatacalcategory[".viewFields"][] = "Color";

$tdatacalcategory[".addFields"] = array();
$tdatacalcategory[".addFields"][] = "Category";
$tdatacalcategory[".addFields"][] = "Color";

$tdatacalcategory[".masterListFields"] = array();

$tdatacalcategory[".inlineAddFields"] = array();

$tdatacalcategory[".editFields"] = array();
$tdatacalcategory[".editFields"][] = "Category";
$tdatacalcategory[".editFields"][] = "Color";

$tdatacalcategory[".inlineEditFields"] = array();

$tdatacalcategory[".updateSelectedFields"] = array();
$tdatacalcategory[".updateSelectedFields"][] = "Category";
$tdatacalcategory[".updateSelectedFields"][] = "Color";


$tdatacalcategory[".exportFields"] = array();
$tdatacalcategory[".exportFields"][] = "Category";
$tdatacalcategory[".exportFields"][] = "Color";

$tdatacalcategory[".importFields"] = array();

$tdatacalcategory[".printFields"] = array();
$tdatacalcategory[".printFields"][] = "Category";
$tdatacalcategory[".printFields"][] = "Color";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "calcategory";
	$fdata["Label"] = GetFieldLabel("calcategory","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
			
			
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








	$tdatacalcategory["id"] = $fdata;
//	Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Category";
	$fdata["GoodName"] = "Category";
	$fdata["ownerTable"] = "calcategory";
	$fdata["Label"] = GetFieldLabel("calcategory","Category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Category";

	
	
				$fdata["FieldPermissions"] = true;

			
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
			$edata["EditParams"].= " maxlength=50";

	
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
	
	// the end of search options settings




	$tdatacalcategory["Category"] = $fdata;
//	Color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Color";
	$fdata["GoodName"] = "Color";
	$fdata["ownerTable"] = "calcategory";
	$fdata["Label"] = GetFieldLabel("calcategory","Color");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Color";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Color";

	
	
				$fdata["FieldPermissions"] = true;

			
//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "ColorPicker");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
	// the end of search options settings




	$tdatacalcategory["Color"] = $fdata;


$tables_data["calcategory"]=&$tdatacalcategory;
$field_labels["calcategory"] = &$fieldLabelscalcategory;
$fieldToolTips["calcategory"] = &$fieldToolTipscalcategory;
$placeHolders["calcategory"] = &$placeHolderscalcategory;
$page_titles["calcategory"] = &$pageTitlescalcategory;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["calcategory"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["calcategory"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_calcategory()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	Category,  	Color";
$proto0["m_strFrom"] = "FROM calcategory";
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
	"m_strTable" => "calcategory",
	"m_srcTableName" => "calcategory"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "calcategory";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Category",
	"m_strTable" => "calcategory",
	"m_srcTableName" => "calcategory"
));

$proto8["m_sql"] = "Category";
$proto8["m_srcTableName"] = "calcategory";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Color",
	"m_strTable" => "calcategory",
	"m_srcTableName" => "calcategory"
));

$proto10["m_sql"] = "Color";
$proto10["m_srcTableName"] = "calcategory";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "calcategory";
$proto13["m_srcTableName"] = "calcategory";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "Category";
$proto13["m_columns"][] = "Color";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "calcategory";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "calcategory";
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
$proto0["m_srcTableName"]="calcategory";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_calcategory = createSqlQuery_calcategory();


	
		;

			

$tdatacalcategory[".sqlquery"] = $queryData_calcategory;

include_once(getabspath("include/calcategory_events.php"));
$tableEvents["calcategory"] = new eventclass_calcategory;
$tdatacalcategory[".hasEvents"] = true;

?>
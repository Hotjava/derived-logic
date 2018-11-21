<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacalusers = array();
	$tdatacalusers[".truncateText"] = true;
	$tdatacalusers[".NumberOfChars"] = 80;
	$tdatacalusers[".ShortName"] = "calusers";
	$tdatacalusers[".OwnerID"] = "";
	$tdatacalusers[".OriginalTable"] = "calusers";

//	field labels
$fieldLabelscalusers = array();
$fieldToolTipscalusers = array();
$pageTitlescalusers = array();
$placeHolderscalusers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscalusers["English"] = array();
	$fieldToolTipscalusers["English"] = array();
	$placeHolderscalusers["English"] = array();
	$pageTitlescalusers["English"] = array();
	$fieldLabelscalusers["English"]["id"] = "Id";
	$fieldToolTipscalusers["English"]["id"] = "";
	$placeHolderscalusers["English"]["id"] = "";
	$fieldLabelscalusers["English"]["username"] = "Username";
	$fieldToolTipscalusers["English"]["username"] = "";
	$placeHolderscalusers["English"]["username"] = "";
	$fieldLabelscalusers["English"]["password"] = "Password";
	$fieldToolTipscalusers["English"]["password"] = "";
	$placeHolderscalusers["English"]["password"] = "";
	$fieldLabelscalusers["English"]["group_id"] = "Group Id";
	$fieldToolTipscalusers["English"]["group_id"] = "";
	$placeHolderscalusers["English"]["group_id"] = "";
	if (count($fieldToolTipscalusers["English"]))
		$tdatacalusers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscalusers[""] = array();
	$fieldToolTipscalusers[""] = array();
	$placeHolderscalusers[""] = array();
	$pageTitlescalusers[""] = array();
	if (count($fieldToolTipscalusers[""]))
		$tdatacalusers[".isUseToolTips"] = true;
}


	$tdatacalusers[".NCSearch"] = true;



$tdatacalusers[".shortTableName"] = "calusers";
$tdatacalusers[".nSecOptions"] = 0;
$tdatacalusers[".recsPerRowPrint"] = 1;
$tdatacalusers[".mainTableOwnerID"] = "";
$tdatacalusers[".moveNext"] = 1;
$tdatacalusers[".entityType"] = 1;

$tdatacalusers[".strOriginalTableName"] = "calusers";

	



$tdatacalusers[".showAddInPopup"] = false;

$tdatacalusers[".showEditInPopup"] = true;

$tdatacalusers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
					
;
$popupPagesLayoutNames["edit"] = "edit";
$tdatacalusers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacalusers[".fieldsForRegister"] = array();

$tdatacalusers[".listAjax"] = false;

	$tdatacalusers[".audit"] = false;

	$tdatacalusers[".locking"] = false;



$tdatacalusers[".list"] = true;

$tdatacalusers[".inlineEdit"] = true;





$tdatacalusers[".inlineAdd"] = true;
$tdatacalusers[".view"] = true;




$tdatacalusers[".delete"] = true;

$tdatacalusers[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacalusers[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacalusers[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacalusers[".searchSaving"] = false;
//

$tdatacalusers[".showSearchPanel"] = true;
		$tdatacalusers[".flexibleSearch"] = true;

$tdatacalusers[".isUseAjaxSuggest"] = true;

$tdatacalusers[".rowHighlite"] = true;





$tdatacalusers[".ajaxCodeSnippetAdded"] = false;

$tdatacalusers[".buttonsAdded"] = false;

$tdatacalusers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacalusers[".isUseTimeForSearch"] = false;





$tdatacalusers[".allSearchFields"] = array();
$tdatacalusers[".filterFields"] = array();
$tdatacalusers[".requiredSearchFields"] = array();

$tdatacalusers[".allSearchFields"][] = "group_id";
	$tdatacalusers[".allSearchFields"][] = "username";
	$tdatacalusers[".allSearchFields"][] = "password";
	

$tdatacalusers[".googleLikeFields"] = array();
$tdatacalusers[".googleLikeFields"][] = "id";
$tdatacalusers[".googleLikeFields"][] = "username";
$tdatacalusers[".googleLikeFields"][] = "password";
$tdatacalusers[".googleLikeFields"][] = "group_id";


$tdatacalusers[".advSearchFields"] = array();
$tdatacalusers[".advSearchFields"][] = "group_id";
$tdatacalusers[".advSearchFields"][] = "username";
$tdatacalusers[".advSearchFields"][] = "password";

$tdatacalusers[".tableType"] = "list";

$tdatacalusers[".printerPageOrientation"] = 0;
$tdatacalusers[".nPrinterPageScale"] = 100;

$tdatacalusers[".nPrinterSplitRecords"] = 40;

$tdatacalusers[".nPrinterPDFSplitRecords"] = 40;



$tdatacalusers[".geocodingEnabled"] = false;





$tdatacalusers[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatacalusers[".pageSize"] = 20;

$tdatacalusers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacalusers[".strOrderBy"] = $tstrOrderBy;

$tdatacalusers[".orderindexes"] = array();

$tdatacalusers[".sqlHead"] = "SELECT id,  	username,  	password,  	group_id";
$tdatacalusers[".sqlFrom"] = "FROM calusers";
$tdatacalusers[".sqlWhereExpr"] = "";
$tdatacalusers[".sqlTail"] = "";

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
$tdatacalusers[".arrGridTabs"] = $arrGridTabs;











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalusers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalusers[".arrGroupsPerPage"] = $arrGPP;


$tableKeyscalusers = array();
$tableKeyscalusers[] = "id";
$tdatacalusers[".Keys"] = $tableKeyscalusers;

$tdatacalusers[".listFields"] = array();
$tdatacalusers[".listFields"][] = "group_id";
$tdatacalusers[".listFields"][] = "username";
$tdatacalusers[".listFields"][] = "password";

$tdatacalusers[".hideMobileList"] = array();


$tdatacalusers[".viewFields"] = array();
$tdatacalusers[".viewFields"][] = "username";
$tdatacalusers[".viewFields"][] = "password";
$tdatacalusers[".viewFields"][] = "group_id";

$tdatacalusers[".addFields"] = array();
$tdatacalusers[".addFields"][] = "group_id";

$tdatacalusers[".masterListFields"] = array();
$tdatacalusers[".masterListFields"][] = "group_id";

$tdatacalusers[".inlineAddFields"] = array();
$tdatacalusers[".inlineAddFields"][] = "group_id";
$tdatacalusers[".inlineAddFields"][] = "username";
$tdatacalusers[".inlineAddFields"][] = "password";

$tdatacalusers[".editFields"] = array();
$tdatacalusers[".editFields"][] = "id";
$tdatacalusers[".editFields"][] = "username";
$tdatacalusers[".editFields"][] = "password";
$tdatacalusers[".editFields"][] = "group_id";

$tdatacalusers[".inlineEditFields"] = array();
$tdatacalusers[".inlineEditFields"][] = "group_id";
$tdatacalusers[".inlineEditFields"][] = "username";
$tdatacalusers[".inlineEditFields"][] = "password";

$tdatacalusers[".updateSelectedFields"] = array();
$tdatacalusers[".updateSelectedFields"][] = "id";
$tdatacalusers[".updateSelectedFields"][] = "username";
$tdatacalusers[".updateSelectedFields"][] = "password";
$tdatacalusers[".updateSelectedFields"][] = "group_id";


$tdatacalusers[".exportFields"] = array();
$tdatacalusers[".exportFields"][] = "group_id";

$tdatacalusers[".importFields"] = array();
$tdatacalusers[".importFields"][] = "id";
$tdatacalusers[".importFields"][] = "username";
$tdatacalusers[".importFields"][] = "password";
$tdatacalusers[".importFields"][] = "group_id";

$tdatacalusers[".printFields"] = array();
$tdatacalusers[".printFields"][] = "group_id";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "calusers";
	$fdata["Label"] = GetFieldLabel("calusers","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
	
	
	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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








	$tdatacalusers["id"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "calusers";
	$fdata["Label"] = GetFieldLabel("calusers","username");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

	
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

	// the end of search options settings




	$tdatacalusers["username"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "calusers";
	$fdata["Label"] = GetFieldLabel("calusers","password");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

	
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

	// the end of search options settings




	$tdatacalusers["password"] = $fdata;
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "calusers";
	$fdata["Label"] = GetFieldLabel("calusers","group_id");
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

		$fdata["strField"] = "group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_id";

	
	
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




	$tdatacalusers["group_id"] = $fdata;


$tables_data["calusers"]=&$tdatacalusers;
$field_labels["calusers"] = &$fieldLabelscalusers;
$fieldToolTips["calusers"] = &$fieldToolTipscalusers;
$placeHolders["calusers"] = &$placeHolderscalusers;
$page_titles["calusers"] = &$pageTitlescalusers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["calusers"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["calusers"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_calusers()
{
$proto1=array();
$proto1["m_strHead"] = "SELECT";
$proto1["m_strFieldList"] = "id,  	username,  	password,  	group_id";
$proto1["m_strFrom"] = "FROM calusers";
$proto1["m_strWhere"] = "";
$proto1["m_strOrderBy"] = "";
	
		;
			$proto1["cipherer"] = null;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto1["m_where"] = $obj;
$proto5=array();
$proto5["m_sql"] = "";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

$proto1["m_having"] = $obj;
$proto1["m_fieldlist"] = array();
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "calusers",
	"m_srcTableName" => "calusers"
));

$proto7["m_sql"] = "id";
$proto7["m_srcTableName"] = "calusers";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto1["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "calusers",
	"m_srcTableName" => "calusers"
));

$proto9["m_sql"] = "username";
$proto9["m_srcTableName"] = "calusers";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto1["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "calusers",
	"m_srcTableName" => "calusers"
));

$proto11["m_sql"] = "password";
$proto11["m_srcTableName"] = "calusers";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto1["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "calusers",
	"m_srcTableName" => "calusers"
));

$proto13["m_sql"] = "group_id";
$proto13["m_srcTableName"] = "calusers";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto1["m_fieldlist"][]=$obj;
$proto1["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "calusers";
$proto16["m_srcTableName"] = "calusers";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "id";
$proto16["m_columns"][] = "username";
$proto16["m_columns"][] = "password";
$proto16["m_columns"][] = "group_id";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "calusers";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "calusers";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto1["m_fromlist"][]=$obj;
$proto1["m_groupby"] = array();
$proto1["m_orderby"] = array();
$proto1["m_srcTableName"]="calusers";		
$obj = new SQLQuery($proto1);

	return $obj;
}
$queryData_calusers = createSqlQuery_calusers();


	
		;

				

$tdatacalusers[".sqlquery"] = $queryData_calusers;

$tableEvents["calusers"] = new eventsBase;
$tdatacalusers[".hasEvents"] = false;

?>
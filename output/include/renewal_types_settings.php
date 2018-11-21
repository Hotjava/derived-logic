<?php
require_once(getabspath("classes/cipherer.php"));




$tdatarenewal_types = array();
	$tdatarenewal_types[".truncateText"] = true;
	$tdatarenewal_types[".NumberOfChars"] = 80;
	$tdatarenewal_types[".ShortName"] = "renewal_types";
	$tdatarenewal_types[".OwnerID"] = "";
	$tdatarenewal_types[".OriginalTable"] = "renewal_types";

//	field labels
$fieldLabelsrenewal_types = array();
$fieldToolTipsrenewal_types = array();
$pageTitlesrenewal_types = array();
$placeHoldersrenewal_types = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsrenewal_types["English"] = array();
	$fieldToolTipsrenewal_types["English"] = array();
	$placeHoldersrenewal_types["English"] = array();
	$pageTitlesrenewal_types["English"] = array();
	$fieldLabelsrenewal_types["English"]["id"] = "Id";
	$fieldToolTipsrenewal_types["English"]["id"] = "";
	$placeHoldersrenewal_types["English"]["id"] = "";
	$fieldLabelsrenewal_types["English"]["renewal_type"] = "Renewal Type";
	$fieldToolTipsrenewal_types["English"]["renewal_type"] = "";
	$placeHoldersrenewal_types["English"]["renewal_type"] = "";
	if (count($fieldToolTipsrenewal_types["English"]))
		$tdatarenewal_types[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsrenewal_types[""] = array();
	$fieldToolTipsrenewal_types[""] = array();
	$placeHoldersrenewal_types[""] = array();
	$pageTitlesrenewal_types[""] = array();
	if (count($fieldToolTipsrenewal_types[""]))
		$tdatarenewal_types[".isUseToolTips"] = true;
}


	$tdatarenewal_types[".NCSearch"] = true;



$tdatarenewal_types[".shortTableName"] = "renewal_types";
$tdatarenewal_types[".nSecOptions"] = 0;
$tdatarenewal_types[".recsPerRowPrint"] = 1;
$tdatarenewal_types[".mainTableOwnerID"] = "";
$tdatarenewal_types[".moveNext"] = 1;
$tdatarenewal_types[".entityType"] = 0;

$tdatarenewal_types[".strOriginalTableName"] = "renewal_types";

	



$tdatarenewal_types[".showAddInPopup"] = false;

$tdatarenewal_types[".showEditInPopup"] = false;

$tdatarenewal_types[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarenewal_types[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarenewal_types[".fieldsForRegister"] = array();

$tdatarenewal_types[".listAjax"] = false;

	$tdatarenewal_types[".audit"] = false;

	$tdatarenewal_types[".locking"] = false;

$tdatarenewal_types[".edit"] = true;
$tdatarenewal_types[".afterEditAction"] = 1;
$tdatarenewal_types[".closePopupAfterEdit"] = 1;
$tdatarenewal_types[".afterEditActionDetTable"] = "";

$tdatarenewal_types[".add"] = true;
$tdatarenewal_types[".afterAddAction"] = 1;
$tdatarenewal_types[".closePopupAfterAdd"] = 1;
$tdatarenewal_types[".afterAddActionDetTable"] = "";

$tdatarenewal_types[".list"] = true;



$tdatarenewal_types[".reorderRecordsByHeader"] = true;


$tdatarenewal_types[".exportFormatting"] = 2;
$tdatarenewal_types[".exportDelimiter"] = ",";
		
$tdatarenewal_types[".view"] = true;

$tdatarenewal_types[".import"] = true;

$tdatarenewal_types[".exportTo"] = true;

$tdatarenewal_types[".printFriendly"] = true;

$tdatarenewal_types[".delete"] = true;

$tdatarenewal_types[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatarenewal_types[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatarenewal_types[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatarenewal_types[".searchSaving"] = false;
//

$tdatarenewal_types[".showSearchPanel"] = true;
		$tdatarenewal_types[".flexibleSearch"] = true;

$tdatarenewal_types[".isUseAjaxSuggest"] = true;

$tdatarenewal_types[".rowHighlite"] = true;





$tdatarenewal_types[".ajaxCodeSnippetAdded"] = false;

$tdatarenewal_types[".buttonsAdded"] = false;

$tdatarenewal_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarenewal_types[".isUseTimeForSearch"] = false;





$tdatarenewal_types[".allSearchFields"] = array();
$tdatarenewal_types[".filterFields"] = array();
$tdatarenewal_types[".requiredSearchFields"] = array();

$tdatarenewal_types[".allSearchFields"][] = "renewal_type";
	

$tdatarenewal_types[".googleLikeFields"] = array();
$tdatarenewal_types[".googleLikeFields"][] = "id";
$tdatarenewal_types[".googleLikeFields"][] = "renewal_type";


$tdatarenewal_types[".advSearchFields"] = array();
$tdatarenewal_types[".advSearchFields"][] = "renewal_type";

$tdatarenewal_types[".tableType"] = "list";

$tdatarenewal_types[".printerPageOrientation"] = 0;
$tdatarenewal_types[".nPrinterPageScale"] = 100;

$tdatarenewal_types[".nPrinterSplitRecords"] = 40;

$tdatarenewal_types[".nPrinterPDFSplitRecords"] = 40;



$tdatarenewal_types[".geocodingEnabled"] = false;





$tdatarenewal_types[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatarenewal_types[".pageSize"] = 20;

$tdatarenewal_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarenewal_types[".strOrderBy"] = $tstrOrderBy;

$tdatarenewal_types[".orderindexes"] = array();

$tdatarenewal_types[".sqlHead"] = "SELECT id,  	renewal_type";
$tdatarenewal_types[".sqlFrom"] = "FROM renewal_types";
$tdatarenewal_types[".sqlWhereExpr"] = "";
$tdatarenewal_types[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarenewal_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarenewal_types[".arrGroupsPerPage"] = $arrGPP;

$tdatarenewal_types[".highlightSearchResults"] = true;

$tableKeysrenewal_types = array();
$tableKeysrenewal_types[] = "id";
$tdatarenewal_types[".Keys"] = $tableKeysrenewal_types;

$tdatarenewal_types[".listFields"] = array();
$tdatarenewal_types[".listFields"][] = "renewal_type";

$tdatarenewal_types[".hideMobileList"] = array();


$tdatarenewal_types[".viewFields"] = array();
$tdatarenewal_types[".viewFields"][] = "renewal_type";

$tdatarenewal_types[".addFields"] = array();
$tdatarenewal_types[".addFields"][] = "renewal_type";

$tdatarenewal_types[".masterListFields"] = array();
$tdatarenewal_types[".masterListFields"][] = "id";
$tdatarenewal_types[".masterListFields"][] = "renewal_type";

$tdatarenewal_types[".inlineAddFields"] = array();

$tdatarenewal_types[".editFields"] = array();
$tdatarenewal_types[".editFields"][] = "renewal_type";

$tdatarenewal_types[".inlineEditFields"] = array();

$tdatarenewal_types[".updateSelectedFields"] = array();
$tdatarenewal_types[".updateSelectedFields"][] = "renewal_type";


$tdatarenewal_types[".exportFields"] = array();
$tdatarenewal_types[".exportFields"][] = "id";
$tdatarenewal_types[".exportFields"][] = "renewal_type";

$tdatarenewal_types[".importFields"] = array();
$tdatarenewal_types[".importFields"][] = "renewal_type";

$tdatarenewal_types[".printFields"] = array();
$tdatarenewal_types[".printFields"][] = "renewal_type";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "renewal_types";
	$fdata["Label"] = GetFieldLabel("renewal_types","id");
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








	$tdatarenewal_types["id"] = $fdata;
//	renewal_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "renewal_type";
	$fdata["GoodName"] = "renewal_type";
	$fdata["ownerTable"] = "renewal_types";
	$fdata["Label"] = GetFieldLabel("renewal_types","renewal_type");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "renewal_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "renewal_type";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdatarenewal_types["renewal_type"] = $fdata;


$tables_data["renewal_types"]=&$tdatarenewal_types;
$field_labels["renewal_types"] = &$fieldLabelsrenewal_types;
$fieldToolTips["renewal_types"] = &$fieldToolTipsrenewal_types;
$placeHolders["renewal_types"] = &$placeHoldersrenewal_types;
$page_titles["renewal_types"] = &$pageTitlesrenewal_types;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["renewal_types"] = array();
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
		
	$detailsTablesData["renewal_types"][$dIndex] = $detailsParam;

	
		$detailsTablesData["renewal_types"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["renewal_types"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["renewal_types"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["renewal_types"][$dIndex]["detailKeys"][]="service_type_id";

// tables which are master tables for current table (detail)
$masterTablesData["renewal_types"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_renewal_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	renewal_type";
$proto0["m_strFrom"] = "FROM renewal_types";
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
	"m_strTable" => "renewal_types",
	"m_srcTableName" => "renewal_types"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "renewal_types";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "renewal_type",
	"m_strTable" => "renewal_types",
	"m_srcTableName" => "renewal_types"
));

$proto8["m_sql"] = "renewal_type";
$proto8["m_srcTableName"] = "renewal_types";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "renewal_types";
$proto11["m_srcTableName"] = "renewal_types";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "renewal_type";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "renewal_types";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "renewal_types";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="renewal_types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_renewal_types = createSqlQuery_renewal_types();


	
		;

		

$tdatarenewal_types[".sqlquery"] = $queryData_renewal_types;

include_once(getabspath("include/renewal_types_events.php"));
$tableEvents["renewal_types"] = new eventclass_renewal_types;
$tdatarenewal_types[".hasEvents"] = true;

?>
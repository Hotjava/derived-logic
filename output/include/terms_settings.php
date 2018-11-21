<?php
require_once(getabspath("classes/cipherer.php"));




$tdataterms = array();
	$tdataterms[".truncateText"] = true;
	$tdataterms[".NumberOfChars"] = 80;
	$tdataterms[".ShortName"] = "terms";
	$tdataterms[".OwnerID"] = "";
	$tdataterms[".OriginalTable"] = "terms";

//	field labels
$fieldLabelsterms = array();
$fieldToolTipsterms = array();
$pageTitlesterms = array();
$placeHoldersterms = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsterms["English"] = array();
	$fieldToolTipsterms["English"] = array();
	$placeHoldersterms["English"] = array();
	$pageTitlesterms["English"] = array();
	$fieldLabelsterms["English"]["id"] = "Id";
	$fieldToolTipsterms["English"]["id"] = "";
	$placeHoldersterms["English"]["id"] = "";
	$fieldLabelsterms["English"]["term_description"] = "Term Description";
	$fieldToolTipsterms["English"]["term_description"] = "";
	$placeHoldersterms["English"]["term_description"] = "";
	if (count($fieldToolTipsterms["English"]))
		$tdataterms[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsterms[""] = array();
	$fieldToolTipsterms[""] = array();
	$placeHoldersterms[""] = array();
	$pageTitlesterms[""] = array();
	if (count($fieldToolTipsterms[""]))
		$tdataterms[".isUseToolTips"] = true;
}


	$tdataterms[".NCSearch"] = true;



$tdataterms[".shortTableName"] = "terms";
$tdataterms[".nSecOptions"] = 0;
$tdataterms[".recsPerRowPrint"] = 1;
$tdataterms[".mainTableOwnerID"] = "";
$tdataterms[".moveNext"] = 1;
$tdataterms[".entityType"] = 0;

$tdataterms[".strOriginalTableName"] = "terms";

	



$tdataterms[".showAddInPopup"] = false;

$tdataterms[".showEditInPopup"] = false;

$tdataterms[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataterms[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataterms[".fieldsForRegister"] = array();

$tdataterms[".listAjax"] = false;

	$tdataterms[".audit"] = false;

	$tdataterms[".locking"] = false;

$tdataterms[".edit"] = true;
$tdataterms[".afterEditAction"] = 1;
$tdataterms[".closePopupAfterEdit"] = 1;
$tdataterms[".afterEditActionDetTable"] = "";

$tdataterms[".add"] = true;
$tdataterms[".afterAddAction"] = 1;
$tdataterms[".closePopupAfterAdd"] = 1;
$tdataterms[".afterAddActionDetTable"] = "";

$tdataterms[".list"] = true;



$tdataterms[".reorderRecordsByHeader"] = true;


$tdataterms[".exportFormatting"] = 2;
$tdataterms[".exportDelimiter"] = ",";
		
$tdataterms[".view"] = true;

$tdataterms[".import"] = true;

$tdataterms[".exportTo"] = true;

$tdataterms[".printFriendly"] = true;

$tdataterms[".delete"] = true;

$tdataterms[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataterms[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataterms[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataterms[".searchSaving"] = false;
//

$tdataterms[".showSearchPanel"] = true;
		$tdataterms[".flexibleSearch"] = true;

$tdataterms[".isUseAjaxSuggest"] = true;

$tdataterms[".rowHighlite"] = true;





$tdataterms[".ajaxCodeSnippetAdded"] = false;

$tdataterms[".buttonsAdded"] = false;

$tdataterms[".addPageEvents"] = false;

// use timepicker for search panel
$tdataterms[".isUseTimeForSearch"] = false;





$tdataterms[".allSearchFields"] = array();
$tdataterms[".filterFields"] = array();
$tdataterms[".requiredSearchFields"] = array();

$tdataterms[".allSearchFields"][] = "term_description";
	

$tdataterms[".googleLikeFields"] = array();
$tdataterms[".googleLikeFields"][] = "id";
$tdataterms[".googleLikeFields"][] = "term_description";


$tdataterms[".advSearchFields"] = array();
$tdataterms[".advSearchFields"][] = "term_description";

$tdataterms[".tableType"] = "list";

$tdataterms[".printerPageOrientation"] = 0;
$tdataterms[".nPrinterPageScale"] = 100;

$tdataterms[".nPrinterSplitRecords"] = 40;

$tdataterms[".nPrinterPDFSplitRecords"] = 40;



$tdataterms[".geocodingEnabled"] = false;





$tdataterms[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataterms[".pageSize"] = 20;

$tdataterms[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataterms[".strOrderBy"] = $tstrOrderBy;

$tdataterms[".orderindexes"] = array();

$tdataterms[".sqlHead"] = "SELECT id,  	term_description";
$tdataterms[".sqlFrom"] = "FROM terms";
$tdataterms[".sqlWhereExpr"] = "";
$tdataterms[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataterms[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataterms[".arrGroupsPerPage"] = $arrGPP;

$tdataterms[".highlightSearchResults"] = true;

$tableKeysterms = array();
$tableKeysterms[] = "id";
$tdataterms[".Keys"] = $tableKeysterms;

$tdataterms[".listFields"] = array();
$tdataterms[".listFields"][] = "term_description";

$tdataterms[".hideMobileList"] = array();


$tdataterms[".viewFields"] = array();
$tdataterms[".viewFields"][] = "term_description";

$tdataterms[".addFields"] = array();
$tdataterms[".addFields"][] = "term_description";

$tdataterms[".masterListFields"] = array();
$tdataterms[".masterListFields"][] = "id";
$tdataterms[".masterListFields"][] = "term_description";

$tdataterms[".inlineAddFields"] = array();

$tdataterms[".editFields"] = array();
$tdataterms[".editFields"][] = "term_description";

$tdataterms[".inlineEditFields"] = array();

$tdataterms[".updateSelectedFields"] = array();
$tdataterms[".updateSelectedFields"][] = "term_description";


$tdataterms[".exportFields"] = array();
$tdataterms[".exportFields"][] = "id";
$tdataterms[".exportFields"][] = "term_description";

$tdataterms[".importFields"] = array();
$tdataterms[".importFields"][] = "term_description";

$tdataterms[".printFields"] = array();
$tdataterms[".printFields"][] = "term_description";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "terms";
	$fdata["Label"] = GetFieldLabel("terms","id");
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








	$tdataterms["id"] = $fdata;
//	term_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "term_description";
	$fdata["GoodName"] = "term_description";
	$fdata["ownerTable"] = "terms";
	$fdata["Label"] = GetFieldLabel("terms","term_description");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "term_description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "term_description";

	
	
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




	$tdataterms["term_description"] = $fdata;


$tables_data["terms"]=&$tdataterms;
$field_labels["terms"] = &$fieldLabelsterms;
$fieldToolTips["terms"] = &$fieldToolTipsterms;
$placeHolders["terms"] = &$placeHoldersterms;
$page_titles["terms"] = &$pageTitlesterms;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["terms"] = array();
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
		
	$detailsTablesData["terms"][$dIndex] = $detailsParam;

	
		$detailsTablesData["terms"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["terms"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["terms"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["terms"][$dIndex]["detailKeys"][]="term_id";

// tables which are master tables for current table (detail)
$masterTablesData["terms"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_terms()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	term_description";
$proto0["m_strFrom"] = "FROM terms";
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
	"m_strTable" => "terms",
	"m_srcTableName" => "terms"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "terms";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "term_description",
	"m_strTable" => "terms",
	"m_srcTableName" => "terms"
));

$proto8["m_sql"] = "term_description";
$proto8["m_srcTableName"] = "terms";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "terms";
$proto11["m_srcTableName"] = "terms";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "term_description";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "terms";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "terms";
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
$proto0["m_srcTableName"]="terms";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_terms = createSqlQuery_terms();


	
		;

		

$tdataterms[".sqlquery"] = $queryData_terms;

include_once(getabspath("include/terms_events.php"));
$tableEvents["terms"] = new eventclass_terms;
$tdataterms[".hasEvents"] = true;

?>
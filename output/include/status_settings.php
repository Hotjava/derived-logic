<?php
require_once(getabspath("classes/cipherer.php"));




$tdatastatus = array();
	$tdatastatus[".truncateText"] = true;
	$tdatastatus[".NumberOfChars"] = 80;
	$tdatastatus[".ShortName"] = "status";
	$tdatastatus[".OwnerID"] = "";
	$tdatastatus[".OriginalTable"] = "status";

//	field labels
$fieldLabelsstatus = array();
$fieldToolTipsstatus = array();
$pageTitlesstatus = array();
$placeHoldersstatus = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstatus["English"] = array();
	$fieldToolTipsstatus["English"] = array();
	$placeHoldersstatus["English"] = array();
	$pageTitlesstatus["English"] = array();
	$fieldLabelsstatus["English"]["id"] = "Id";
	$fieldToolTipsstatus["English"]["id"] = "";
	$placeHoldersstatus["English"]["id"] = "";
	$fieldLabelsstatus["English"]["status"] = "Status";
	$fieldToolTipsstatus["English"]["status"] = "";
	$placeHoldersstatus["English"]["status"] = "";
	if (count($fieldToolTipsstatus["English"]))
		$tdatastatus[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsstatus[""] = array();
	$fieldToolTipsstatus[""] = array();
	$placeHoldersstatus[""] = array();
	$pageTitlesstatus[""] = array();
	if (count($fieldToolTipsstatus[""]))
		$tdatastatus[".isUseToolTips"] = true;
}


	$tdatastatus[".NCSearch"] = true;



$tdatastatus[".shortTableName"] = "status";
$tdatastatus[".nSecOptions"] = 0;
$tdatastatus[".recsPerRowPrint"] = 1;
$tdatastatus[".mainTableOwnerID"] = "";
$tdatastatus[".moveNext"] = 1;
$tdatastatus[".entityType"] = 0;

$tdatastatus[".strOriginalTableName"] = "status";

	



$tdatastatus[".showAddInPopup"] = false;

$tdatastatus[".showEditInPopup"] = false;

$tdatastatus[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatastatus[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatastatus[".fieldsForRegister"] = array();

$tdatastatus[".listAjax"] = false;

	$tdatastatus[".audit"] = false;

	$tdatastatus[".locking"] = false;

$tdatastatus[".edit"] = true;
$tdatastatus[".afterEditAction"] = 1;
$tdatastatus[".closePopupAfterEdit"] = 1;
$tdatastatus[".afterEditActionDetTable"] = "";

$tdatastatus[".add"] = true;
$tdatastatus[".afterAddAction"] = 1;
$tdatastatus[".closePopupAfterAdd"] = 1;
$tdatastatus[".afterAddActionDetTable"] = "";

$tdatastatus[".list"] = true;



$tdatastatus[".reorderRecordsByHeader"] = true;


$tdatastatus[".exportFormatting"] = 2;
$tdatastatus[".exportDelimiter"] = ",";
		
$tdatastatus[".view"] = true;


$tdatastatus[".exportTo"] = true;

$tdatastatus[".printFriendly"] = true;

$tdatastatus[".delete"] = true;

$tdatastatus[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatastatus[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatastatus[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatastatus[".searchSaving"] = false;
//

$tdatastatus[".showSearchPanel"] = true;
		$tdatastatus[".flexibleSearch"] = true;

$tdatastatus[".isUseAjaxSuggest"] = true;

$tdatastatus[".rowHighlite"] = true;





$tdatastatus[".ajaxCodeSnippetAdded"] = false;

$tdatastatus[".buttonsAdded"] = false;

$tdatastatus[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastatus[".isUseTimeForSearch"] = false;





$tdatastatus[".allSearchFields"] = array();
$tdatastatus[".filterFields"] = array();
$tdatastatus[".requiredSearchFields"] = array();

$tdatastatus[".allSearchFields"][] = "status";
	

$tdatastatus[".googleLikeFields"] = array();
$tdatastatus[".googleLikeFields"][] = "id";
$tdatastatus[".googleLikeFields"][] = "status";


$tdatastatus[".advSearchFields"] = array();
$tdatastatus[".advSearchFields"][] = "status";

$tdatastatus[".tableType"] = "list";

$tdatastatus[".printerPageOrientation"] = 0;
$tdatastatus[".nPrinterPageScale"] = 100;

$tdatastatus[".nPrinterSplitRecords"] = 40;

$tdatastatus[".nPrinterPDFSplitRecords"] = 40;



$tdatastatus[".geocodingEnabled"] = false;





$tdatastatus[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatastatus[".pageSize"] = 20;

$tdatastatus[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastatus[".strOrderBy"] = $tstrOrderBy;

$tdatastatus[".orderindexes"] = array();

$tdatastatus[".sqlHead"] = "SELECT id,  	status";
$tdatastatus[".sqlFrom"] = "FROM status";
$tdatastatus[".sqlWhereExpr"] = "";
$tdatastatus[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastatus[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastatus[".arrGroupsPerPage"] = $arrGPP;

$tdatastatus[".highlightSearchResults"] = true;

$tableKeysstatus = array();
$tableKeysstatus[] = "id";
$tdatastatus[".Keys"] = $tableKeysstatus;

$tdatastatus[".listFields"] = array();
$tdatastatus[".listFields"][] = "status";

$tdatastatus[".hideMobileList"] = array();


$tdatastatus[".viewFields"] = array();
$tdatastatus[".viewFields"][] = "status";

$tdatastatus[".addFields"] = array();
$tdatastatus[".addFields"][] = "status";

$tdatastatus[".masterListFields"] = array();
$tdatastatus[".masterListFields"][] = "id";
$tdatastatus[".masterListFields"][] = "status";

$tdatastatus[".inlineAddFields"] = array();

$tdatastatus[".editFields"] = array();
$tdatastatus[".editFields"][] = "status";

$tdatastatus[".inlineEditFields"] = array();

$tdatastatus[".updateSelectedFields"] = array();
$tdatastatus[".updateSelectedFields"][] = "status";


$tdatastatus[".exportFields"] = array();
$tdatastatus[".exportFields"][] = "id";
$tdatastatus[".exportFields"][] = "status";

$tdatastatus[".importFields"] = array();

$tdatastatus[".printFields"] = array();
$tdatastatus[".printFields"][] = "status";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "status";
	$fdata["Label"] = GetFieldLabel("status","id");
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








	$tdatastatus["id"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "status";
	$fdata["Label"] = GetFieldLabel("status","status");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
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




	$tdatastatus["status"] = $fdata;


$tables_data["status"]=&$tdatastatus;
$field_labels["status"] = &$fieldLabelsstatus;
$fieldToolTips["status"] = &$fieldToolTipsstatus;
$placeHolders["status"] = &$placeHoldersstatus;
$page_titles["status"] = &$pageTitlesstatus;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["status"] = array();
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
		
	$detailsTablesData["status"][$dIndex] = $detailsParam;

	
		$detailsTablesData["status"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["status"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["status"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["status"][$dIndex]["detailKeys"][]="status_id";

// tables which are master tables for current table (detail)
$masterTablesData["status"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	status";
$proto0["m_strFrom"] = "FROM status";
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
	"m_strTable" => "status",
	"m_srcTableName" => "status"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "status",
	"m_srcTableName" => "status"
));

$proto8["m_sql"] = "status";
$proto8["m_srcTableName"] = "status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "status";
$proto11["m_srcTableName"] = "status";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "status";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "status";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "status";
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
$proto0["m_srcTableName"]="status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_status = createSqlQuery_status();


	
		;

		

$tdatastatus[".sqlquery"] = $queryData_status;

include_once(getabspath("include/status_events.php"));
$tableEvents["status"] = new eventclass_status;
$tdatastatus[".hasEvents"] = true;

?>
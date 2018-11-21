<?php
require_once(getabspath("classes/cipherer.php"));




$tdataproduct_types = array();
	$tdataproduct_types[".truncateText"] = true;
	$tdataproduct_types[".NumberOfChars"] = 80;
	$tdataproduct_types[".ShortName"] = "product_types";
	$tdataproduct_types[".OwnerID"] = "";
	$tdataproduct_types[".OriginalTable"] = "product_types";

//	field labels
$fieldLabelsproduct_types = array();
$fieldToolTipsproduct_types = array();
$pageTitlesproduct_types = array();
$placeHoldersproduct_types = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproduct_types["English"] = array();
	$fieldToolTipsproduct_types["English"] = array();
	$placeHoldersproduct_types["English"] = array();
	$pageTitlesproduct_types["English"] = array();
	$fieldLabelsproduct_types["English"]["id"] = "Id";
	$fieldToolTipsproduct_types["English"]["id"] = "";
	$placeHoldersproduct_types["English"]["id"] = "";
	$fieldLabelsproduct_types["English"]["product_type"] = "Product Type";
	$fieldToolTipsproduct_types["English"]["product_type"] = "";
	$placeHoldersproduct_types["English"]["product_type"] = "";
	if (count($fieldToolTipsproduct_types["English"]))
		$tdataproduct_types[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsproduct_types[""] = array();
	$fieldToolTipsproduct_types[""] = array();
	$placeHoldersproduct_types[""] = array();
	$pageTitlesproduct_types[""] = array();
	if (count($fieldToolTipsproduct_types[""]))
		$tdataproduct_types[".isUseToolTips"] = true;
}


	$tdataproduct_types[".NCSearch"] = true;



$tdataproduct_types[".shortTableName"] = "product_types";
$tdataproduct_types[".nSecOptions"] = 0;
$tdataproduct_types[".recsPerRowPrint"] = 1;
$tdataproduct_types[".mainTableOwnerID"] = "";
$tdataproduct_types[".moveNext"] = 1;
$tdataproduct_types[".entityType"] = 0;

$tdataproduct_types[".strOriginalTableName"] = "product_types";

	



$tdataproduct_types[".showAddInPopup"] = false;

$tdataproduct_types[".showEditInPopup"] = false;

$tdataproduct_types[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataproduct_types[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataproduct_types[".fieldsForRegister"] = array();

$tdataproduct_types[".listAjax"] = false;

	$tdataproduct_types[".audit"] = false;

	$tdataproduct_types[".locking"] = false;

$tdataproduct_types[".edit"] = true;
$tdataproduct_types[".afterEditAction"] = 1;
$tdataproduct_types[".closePopupAfterEdit"] = 1;
$tdataproduct_types[".afterEditActionDetTable"] = "";

$tdataproduct_types[".add"] = true;
$tdataproduct_types[".afterAddAction"] = 1;
$tdataproduct_types[".closePopupAfterAdd"] = 1;
$tdataproduct_types[".afterAddActionDetTable"] = "";

$tdataproduct_types[".list"] = true;



$tdataproduct_types[".reorderRecordsByHeader"] = true;


$tdataproduct_types[".exportFormatting"] = 2;
$tdataproduct_types[".exportDelimiter"] = ",";
		
$tdataproduct_types[".view"] = true;


$tdataproduct_types[".exportTo"] = true;

$tdataproduct_types[".printFriendly"] = true;

$tdataproduct_types[".delete"] = true;

$tdataproduct_types[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataproduct_types[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataproduct_types[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataproduct_types[".searchSaving"] = false;
//

$tdataproduct_types[".showSearchPanel"] = true;
		$tdataproduct_types[".flexibleSearch"] = true;

$tdataproduct_types[".isUseAjaxSuggest"] = true;

$tdataproduct_types[".rowHighlite"] = true;





$tdataproduct_types[".ajaxCodeSnippetAdded"] = false;

$tdataproduct_types[".buttonsAdded"] = false;

$tdataproduct_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproduct_types[".isUseTimeForSearch"] = false;





$tdataproduct_types[".allSearchFields"] = array();
$tdataproduct_types[".filterFields"] = array();
$tdataproduct_types[".requiredSearchFields"] = array();

$tdataproduct_types[".allSearchFields"][] = "product_type";
	

$tdataproduct_types[".googleLikeFields"] = array();
$tdataproduct_types[".googleLikeFields"][] = "id";
$tdataproduct_types[".googleLikeFields"][] = "product_type";


$tdataproduct_types[".advSearchFields"] = array();
$tdataproduct_types[".advSearchFields"][] = "product_type";

$tdataproduct_types[".tableType"] = "list";

$tdataproduct_types[".printerPageOrientation"] = 0;
$tdataproduct_types[".nPrinterPageScale"] = 100;

$tdataproduct_types[".nPrinterSplitRecords"] = 40;

$tdataproduct_types[".nPrinterPDFSplitRecords"] = 40;



$tdataproduct_types[".geocodingEnabled"] = false;





$tdataproduct_types[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataproduct_types[".pageSize"] = 20;

$tdataproduct_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproduct_types[".strOrderBy"] = $tstrOrderBy;

$tdataproduct_types[".orderindexes"] = array();

$tdataproduct_types[".sqlHead"] = "SELECT id,  	product_type";
$tdataproduct_types[".sqlFrom"] = "FROM product_types";
$tdataproduct_types[".sqlWhereExpr"] = "";
$tdataproduct_types[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproduct_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproduct_types[".arrGroupsPerPage"] = $arrGPP;

$tdataproduct_types[".highlightSearchResults"] = true;

$tableKeysproduct_types = array();
$tableKeysproduct_types[] = "id";
$tdataproduct_types[".Keys"] = $tableKeysproduct_types;

$tdataproduct_types[".listFields"] = array();
$tdataproduct_types[".listFields"][] = "product_type";

$tdataproduct_types[".hideMobileList"] = array();


$tdataproduct_types[".viewFields"] = array();
$tdataproduct_types[".viewFields"][] = "product_type";

$tdataproduct_types[".addFields"] = array();
$tdataproduct_types[".addFields"][] = "product_type";

$tdataproduct_types[".masterListFields"] = array();
$tdataproduct_types[".masterListFields"][] = "id";
$tdataproduct_types[".masterListFields"][] = "product_type";

$tdataproduct_types[".inlineAddFields"] = array();

$tdataproduct_types[".editFields"] = array();
$tdataproduct_types[".editFields"][] = "product_type";

$tdataproduct_types[".inlineEditFields"] = array();

$tdataproduct_types[".updateSelectedFields"] = array();
$tdataproduct_types[".updateSelectedFields"][] = "product_type";


$tdataproduct_types[".exportFields"] = array();
$tdataproduct_types[".exportFields"][] = "id";
$tdataproduct_types[".exportFields"][] = "product_type";

$tdataproduct_types[".importFields"] = array();

$tdataproduct_types[".printFields"] = array();
$tdataproduct_types[".printFields"][] = "product_type";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "product_types";
	$fdata["Label"] = GetFieldLabel("product_types","id");
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








	$tdataproduct_types["id"] = $fdata;
//	product_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "product_type";
	$fdata["GoodName"] = "product_type";
	$fdata["ownerTable"] = "product_types";
	$fdata["Label"] = GetFieldLabel("product_types","product_type");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "product_type";

	
	
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




	$tdataproduct_types["product_type"] = $fdata;


$tables_data["product_types"]=&$tdataproduct_types;
$field_labels["product_types"] = &$fieldLabelsproduct_types;
$fieldToolTips["product_types"] = &$fieldToolTipsproduct_types;
$placeHolders["product_types"] = &$placeHoldersproduct_types;
$page_titles["product_types"] = &$pageTitlesproduct_types;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["product_types"] = array();
//	products
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="products";
		$detailsParam["dOriginalTable"] = "products";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "products";
	$detailsParam["dCaptionTable"] = GetTableCaption("products");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["product_types"][$dIndex] = $detailsParam;

	
		$detailsTablesData["product_types"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["product_types"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["product_types"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["product_types"][$dIndex]["detailKeys"][]="product_types_id";

// tables which are master tables for current table (detail)
$masterTablesData["product_types"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_product_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	product_type";
$proto0["m_strFrom"] = "FROM product_types";
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
	"m_strTable" => "product_types",
	"m_srcTableName" => "product_types"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "product_types";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "product_type",
	"m_strTable" => "product_types",
	"m_srcTableName" => "product_types"
));

$proto8["m_sql"] = "product_type";
$proto8["m_srcTableName"] = "product_types";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "product_types";
$proto11["m_srcTableName"] = "product_types";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "product_type";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "product_types";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "product_types";
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
$proto0["m_srcTableName"]="product_types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_product_types = createSqlQuery_product_types();


	
		;

		

$tdataproduct_types[".sqlquery"] = $queryData_product_types;

include_once(getabspath("include/product_types_events.php"));
$tableEvents["product_types"] = new eventclass_product_types;
$tdataproduct_types[".hasEvents"] = true;

?>
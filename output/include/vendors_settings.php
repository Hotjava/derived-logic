<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavendors = array();
	$tdatavendors[".truncateText"] = true;
	$tdatavendors[".NumberOfChars"] = 80;
	$tdatavendors[".ShortName"] = "vendors";
	$tdatavendors[".OwnerID"] = "";
	$tdatavendors[".OriginalTable"] = "vendors";

//	field labels
$fieldLabelsvendors = array();
$fieldToolTipsvendors = array();
$pageTitlesvendors = array();
$placeHoldersvendors = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvendors["English"] = array();
	$fieldToolTipsvendors["English"] = array();
	$placeHoldersvendors["English"] = array();
	$pageTitlesvendors["English"] = array();
	$fieldLabelsvendors["English"]["id"] = "Id";
	$fieldToolTipsvendors["English"]["id"] = "";
	$placeHoldersvendors["English"]["id"] = "";
	$fieldLabelsvendors["English"]["website"] = "Website";
	$fieldToolTipsvendors["English"]["website"] = "";
	$placeHoldersvendors["English"]["website"] = "";
	$fieldLabelsvendors["English"]["vendor_name"] = "Vendor Name";
	$fieldToolTipsvendors["English"]["vendor_name"] = "";
	$placeHoldersvendors["English"]["vendor_name"] = "";
	if (count($fieldToolTipsvendors["English"]))
		$tdatavendors[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvendors[""] = array();
	$fieldToolTipsvendors[""] = array();
	$placeHoldersvendors[""] = array();
	$pageTitlesvendors[""] = array();
	if (count($fieldToolTipsvendors[""]))
		$tdatavendors[".isUseToolTips"] = true;
}


	$tdatavendors[".NCSearch"] = true;



$tdatavendors[".shortTableName"] = "vendors";
$tdatavendors[".nSecOptions"] = 0;
$tdatavendors[".recsPerRowPrint"] = 1;
$tdatavendors[".mainTableOwnerID"] = "";
$tdatavendors[".moveNext"] = 1;
$tdatavendors[".entityType"] = 0;

$tdatavendors[".strOriginalTableName"] = "vendors";

	



$tdatavendors[".showAddInPopup"] = false;

$tdatavendors[".showEditInPopup"] = false;

$tdatavendors[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavendors[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavendors[".fieldsForRegister"] = array();

$tdatavendors[".listAjax"] = false;

	$tdatavendors[".audit"] = false;

	$tdatavendors[".locking"] = false;

$tdatavendors[".edit"] = true;
$tdatavendors[".afterEditAction"] = 1;
$tdatavendors[".closePopupAfterEdit"] = 1;
$tdatavendors[".afterEditActionDetTable"] = "";

$tdatavendors[".add"] = true;
$tdatavendors[".afterAddAction"] = 1;
$tdatavendors[".closePopupAfterAdd"] = 1;
$tdatavendors[".afterAddActionDetTable"] = "";

$tdatavendors[".list"] = true;



$tdatavendors[".reorderRecordsByHeader"] = true;


$tdatavendors[".exportFormatting"] = 2;
$tdatavendors[".exportDelimiter"] = ",";
		
$tdatavendors[".view"] = true;

$tdatavendors[".import"] = true;

$tdatavendors[".exportTo"] = true;

$tdatavendors[".printFriendly"] = true;

$tdatavendors[".delete"] = true;

$tdatavendors[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavendors[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatavendors[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatavendors[".searchSaving"] = false;
//

$tdatavendors[".showSearchPanel"] = true;
		$tdatavendors[".flexibleSearch"] = true;

$tdatavendors[".isUseAjaxSuggest"] = true;

$tdatavendors[".rowHighlite"] = true;





$tdatavendors[".ajaxCodeSnippetAdded"] = false;

$tdatavendors[".buttonsAdded"] = false;

$tdatavendors[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavendors[".isUseTimeForSearch"] = false;





$tdatavendors[".allSearchFields"] = array();
$tdatavendors[".filterFields"] = array();
$tdatavendors[".requiredSearchFields"] = array();

$tdatavendors[".allSearchFields"][] = "vendor_name";
	$tdatavendors[".allSearchFields"][] = "website";
	

$tdatavendors[".googleLikeFields"] = array();
$tdatavendors[".googleLikeFields"][] = "id";
$tdatavendors[".googleLikeFields"][] = "vendor_name";
$tdatavendors[".googleLikeFields"][] = "website";


$tdatavendors[".advSearchFields"] = array();
$tdatavendors[".advSearchFields"][] = "vendor_name";
$tdatavendors[".advSearchFields"][] = "website";

$tdatavendors[".tableType"] = "list";

$tdatavendors[".printerPageOrientation"] = 0;
$tdatavendors[".nPrinterPageScale"] = 100;

$tdatavendors[".nPrinterSplitRecords"] = 40;

$tdatavendors[".nPrinterPDFSplitRecords"] = 40;



$tdatavendors[".geocodingEnabled"] = false;





$tdatavendors[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatavendors[".pageSize"] = 20;

$tdatavendors[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavendors[".strOrderBy"] = $tstrOrderBy;

$tdatavendors[".orderindexes"] = array();

$tdatavendors[".sqlHead"] = "SELECT id,  	vendor_name,  	website";
$tdatavendors[".sqlFrom"] = "FROM vendors";
$tdatavendors[".sqlWhereExpr"] = "";
$tdatavendors[".sqlTail"] = "";

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
$tdatavendors[".arrGridTabs"] = $arrGridTabs;











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavendors[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavendors[".arrGroupsPerPage"] = $arrGPP;

$tdatavendors[".highlightSearchResults"] = true;

$tableKeysvendors = array();
$tableKeysvendors[] = "id";
$tdatavendors[".Keys"] = $tableKeysvendors;

$tdatavendors[".listFields"] = array();
$tdatavendors[".listFields"][] = "vendor_name";
$tdatavendors[".listFields"][] = "website";

$tdatavendors[".hideMobileList"] = array();


$tdatavendors[".viewFields"] = array();
$tdatavendors[".viewFields"][] = "vendor_name";
$tdatavendors[".viewFields"][] = "website";

$tdatavendors[".addFields"] = array();
$tdatavendors[".addFields"][] = "vendor_name";
$tdatavendors[".addFields"][] = "website";

$tdatavendors[".masterListFields"] = array();
$tdatavendors[".masterListFields"][] = "id";
$tdatavendors[".masterListFields"][] = "vendor_name";
$tdatavendors[".masterListFields"][] = "website";

$tdatavendors[".inlineAddFields"] = array();

$tdatavendors[".editFields"] = array();
$tdatavendors[".editFields"][] = "vendor_name";
$tdatavendors[".editFields"][] = "website";

$tdatavendors[".inlineEditFields"] = array();

$tdatavendors[".updateSelectedFields"] = array();
$tdatavendors[".updateSelectedFields"][] = "vendor_name";
$tdatavendors[".updateSelectedFields"][] = "website";


$tdatavendors[".exportFields"] = array();
$tdatavendors[".exportFields"][] = "vendor_name";
$tdatavendors[".exportFields"][] = "website";
$tdatavendors[".exportFields"][] = "id";

$tdatavendors[".importFields"] = array();
$tdatavendors[".importFields"][] = "vendor_name";
$tdatavendors[".importFields"][] = "website";

$tdatavendors[".printFields"] = array();
$tdatavendors[".printFields"][] = "vendor_name";
$tdatavendors[".printFields"][] = "website";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "vendors";
	$fdata["Label"] = GetFieldLabel("vendors","id");
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








	$tdatavendors["id"] = $fdata;
//	vendor_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "vendor_name";
	$fdata["GoodName"] = "vendor_name";
	$fdata["ownerTable"] = "vendors";
	$fdata["Label"] = GetFieldLabel("vendors","vendor_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "vendor_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vendor_name";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatavendors["vendor_name"] = $fdata;
//	website
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "website";
	$fdata["GoodName"] = "website";
	$fdata["ownerTable"] = "vendors";
	$fdata["Label"] = GetFieldLabel("vendors","website");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "website";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "website";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatavendors["website"] = $fdata;


$tables_data["vendors"]=&$tdatavendors;
$field_labels["vendors"] = &$fieldLabelsvendors;
$fieldToolTips["vendors"] = &$fieldToolTipsvendors;
$placeHolders["vendors"] = &$placeHoldersvendors;
$page_titles["vendors"] = &$pageTitlesvendors;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vendors"] = array();
//	vendor_contacts
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="vendor_contacts";
		$detailsParam["dOriginalTable"] = "vendor_contacts";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "vendor_contacts";
	$detailsParam["dCaptionTable"] = GetTableCaption("vendor_contacts");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["vendors"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vendors"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vendors"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["vendors"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vendors"][$dIndex]["detailKeys"][]="vendor_id";
//	renewals
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="renewals";
		$detailsParam["dOriginalTable"] = "renewals";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "renewals";
	$detailsParam["dCaptionTable"] = GetTableCaption("renewals");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["vendors"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vendors"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vendors"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["vendors"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vendors"][$dIndex]["detailKeys"][]="vendor_id";
//	Upcoming Top 5 Vendor Spend
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Upcoming Top 5 Vendor Spend";
		$detailsParam["dOriginalTable"] = "renewals";
		$detailsParam["proceedLink"] = true;
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "Upcoming_Top_5_Vendor_Spend";
	$detailsParam["dCaptionTable"] = GetTableCaption("Upcoming_Top_5_Vendor_Spend");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["vendors"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vendors"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vendors"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["vendors"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vendors"][$dIndex]["detailKeys"][]="vendor_id";
//	products
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="products";
		$detailsParam["dOriginalTable"] = "products";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "products";
	$detailsParam["dCaptionTable"] = GetTableCaption("products");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["vendors"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vendors"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vendors"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["vendors"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vendors"][$dIndex]["detailKeys"][]="vendor_id";

// tables which are master tables for current table (detail)
$masterTablesData["vendors"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vendors()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	vendor_name,  	website";
$proto0["m_strFrom"] = "FROM vendors";
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
	"m_strTable" => "vendors",
	"m_srcTableName" => "vendors"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "vendors";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "vendor_name",
	"m_strTable" => "vendors",
	"m_srcTableName" => "vendors"
));

$proto8["m_sql"] = "vendor_name";
$proto8["m_srcTableName"] = "vendors";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "website",
	"m_strTable" => "vendors",
	"m_srcTableName" => "vendors"
));

$proto10["m_sql"] = "website";
$proto10["m_srcTableName"] = "vendors";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "vendors";
$proto13["m_srcTableName"] = "vendors";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "vendor_name";
$proto13["m_columns"][] = "website";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "vendors";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "vendors";
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
$proto0["m_srcTableName"]="vendors";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vendors = createSqlQuery_vendors();


	
		;

			

$tdatavendors[".sqlquery"] = $queryData_vendors;

include_once(getabspath("include/vendors_events.php"));
$tableEvents["vendors"] = new eventclass_vendors;
$tdatavendors[".hasEvents"] = true;

?>
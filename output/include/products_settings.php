<?php
require_once(getabspath("classes/cipherer.php"));




$tdataproducts = array();
	$tdataproducts[".truncateText"] = true;
	$tdataproducts[".NumberOfChars"] = 80;
	$tdataproducts[".ShortName"] = "products";
	$tdataproducts[".OwnerID"] = "";
	$tdataproducts[".OriginalTable"] = "products";

//	field labels
$fieldLabelsproducts = array();
$fieldToolTipsproducts = array();
$pageTitlesproducts = array();
$placeHoldersproducts = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproducts["English"] = array();
	$fieldToolTipsproducts["English"] = array();
	$placeHoldersproducts["English"] = array();
	$pageTitlesproducts["English"] = array();
	$fieldLabelsproducts["English"]["id"] = "Id";
	$fieldToolTipsproducts["English"]["id"] = "";
	$placeHoldersproducts["English"]["id"] = "";
	$fieldLabelsproducts["English"]["vendor_id"] = "Vendor";
	$fieldToolTipsproducts["English"]["vendor_id"] = "";
	$placeHoldersproducts["English"]["vendor_id"] = "";
	$fieldLabelsproducts["English"]["product_name"] = "Product Name";
	$fieldToolTipsproducts["English"]["product_name"] = "";
	$placeHoldersproducts["English"]["product_name"] = "";
	$fieldLabelsproducts["English"]["product_types_id"] = "Product Type";
	$fieldToolTipsproducts["English"]["product_types_id"] = "";
	$placeHoldersproducts["English"]["product_types_id"] = "";
	if (count($fieldToolTipsproducts["English"]))
		$tdataproducts[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsproducts[""] = array();
	$fieldToolTipsproducts[""] = array();
	$placeHoldersproducts[""] = array();
	$pageTitlesproducts[""] = array();
	if (count($fieldToolTipsproducts[""]))
		$tdataproducts[".isUseToolTips"] = true;
}


	$tdataproducts[".NCSearch"] = true;



$tdataproducts[".shortTableName"] = "products";
$tdataproducts[".nSecOptions"] = 0;
$tdataproducts[".recsPerRowPrint"] = 1;
$tdataproducts[".mainTableOwnerID"] = "";
$tdataproducts[".moveNext"] = 1;
$tdataproducts[".entityType"] = 0;

$tdataproducts[".strOriginalTableName"] = "products";

	



$tdataproducts[".showAddInPopup"] = false;

$tdataproducts[".showEditInPopup"] = false;

$tdataproducts[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataproducts[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataproducts[".fieldsForRegister"] = array();

$tdataproducts[".listAjax"] = false;

	$tdataproducts[".audit"] = false;

	$tdataproducts[".locking"] = false;

$tdataproducts[".edit"] = true;
$tdataproducts[".afterEditAction"] = 1;
$tdataproducts[".closePopupAfterEdit"] = 1;
$tdataproducts[".afterEditActionDetTable"] = "";

$tdataproducts[".add"] = true;
$tdataproducts[".afterAddAction"] = 1;
$tdataproducts[".closePopupAfterAdd"] = 1;
$tdataproducts[".afterAddActionDetTable"] = "";

$tdataproducts[".list"] = true;



$tdataproducts[".reorderRecordsByHeader"] = true;


$tdataproducts[".exportFormatting"] = 2;
$tdataproducts[".exportDelimiter"] = ",";
		
$tdataproducts[".view"] = true;

$tdataproducts[".import"] = true;

$tdataproducts[".exportTo"] = true;

$tdataproducts[".printFriendly"] = true;

$tdataproducts[".delete"] = true;

$tdataproducts[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataproducts[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataproducts[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataproducts[".searchSaving"] = false;
//

$tdataproducts[".showSearchPanel"] = true;
		$tdataproducts[".flexibleSearch"] = true;

$tdataproducts[".isUseAjaxSuggest"] = true;

$tdataproducts[".rowHighlite"] = true;





$tdataproducts[".ajaxCodeSnippetAdded"] = false;

$tdataproducts[".buttonsAdded"] = false;

$tdataproducts[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproducts[".isUseTimeForSearch"] = false;



$tdataproducts[".badgeColor"] = "6493ea";


$tdataproducts[".allSearchFields"] = array();
$tdataproducts[".filterFields"] = array();
$tdataproducts[".requiredSearchFields"] = array();

$tdataproducts[".allSearchFields"][] = "vendor_id";
	$tdataproducts[".allSearchFields"][] = "product_name";
	$tdataproducts[".allSearchFields"][] = "product_types_id";
	

$tdataproducts[".googleLikeFields"] = array();
$tdataproducts[".googleLikeFields"][] = "id";
$tdataproducts[".googleLikeFields"][] = "vendor_id";
$tdataproducts[".googleLikeFields"][] = "product_name";
$tdataproducts[".googleLikeFields"][] = "product_types_id";


$tdataproducts[".advSearchFields"] = array();
$tdataproducts[".advSearchFields"][] = "vendor_id";
$tdataproducts[".advSearchFields"][] = "product_name";
$tdataproducts[".advSearchFields"][] = "product_types_id";

$tdataproducts[".tableType"] = "list";

$tdataproducts[".printerPageOrientation"] = 0;
$tdataproducts[".nPrinterPageScale"] = 100;

$tdataproducts[".nPrinterSplitRecords"] = 40;

$tdataproducts[".nPrinterPDFSplitRecords"] = 40;



$tdataproducts[".geocodingEnabled"] = false;





$tdataproducts[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataproducts[".pageSize"] = 20;

$tdataproducts[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproducts[".strOrderBy"] = $tstrOrderBy;

$tdataproducts[".orderindexes"] = array();

$tdataproducts[".sqlHead"] = "SELECT id,  	vendor_id,  	product_name,  	product_types_id";
$tdataproducts[".sqlFrom"] = "FROM products";
$tdataproducts[".sqlWhereExpr"] = "";
$tdataproducts[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproducts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproducts[".arrGroupsPerPage"] = $arrGPP;

$tdataproducts[".highlightSearchResults"] = true;

$tableKeysproducts = array();
$tableKeysproducts[] = "id";
$tdataproducts[".Keys"] = $tableKeysproducts;

$tdataproducts[".listFields"] = array();
$tdataproducts[".listFields"][] = "product_types_id";
$tdataproducts[".listFields"][] = "vendor_id";
$tdataproducts[".listFields"][] = "product_name";

$tdataproducts[".hideMobileList"] = array();


$tdataproducts[".viewFields"] = array();
$tdataproducts[".viewFields"][] = "vendor_id";
$tdataproducts[".viewFields"][] = "product_name";
$tdataproducts[".viewFields"][] = "product_types_id";

$tdataproducts[".addFields"] = array();
$tdataproducts[".addFields"][] = "vendor_id";
$tdataproducts[".addFields"][] = "product_name";
$tdataproducts[".addFields"][] = "product_types_id";

$tdataproducts[".masterListFields"] = array();
$tdataproducts[".masterListFields"][] = "id";
$tdataproducts[".masterListFields"][] = "vendor_id";
$tdataproducts[".masterListFields"][] = "product_name";
$tdataproducts[".masterListFields"][] = "product_types_id";

$tdataproducts[".inlineAddFields"] = array();

$tdataproducts[".editFields"] = array();
$tdataproducts[".editFields"][] = "vendor_id";
$tdataproducts[".editFields"][] = "product_name";
$tdataproducts[".editFields"][] = "product_types_id";

$tdataproducts[".inlineEditFields"] = array();

$tdataproducts[".updateSelectedFields"] = array();
$tdataproducts[".updateSelectedFields"][] = "vendor_id";
$tdataproducts[".updateSelectedFields"][] = "product_name";
$tdataproducts[".updateSelectedFields"][] = "product_types_id";


$tdataproducts[".exportFields"] = array();
$tdataproducts[".exportFields"][] = "id";
$tdataproducts[".exportFields"][] = "vendor_id";
$tdataproducts[".exportFields"][] = "product_name";
$tdataproducts[".exportFields"][] = "product_types_id";

$tdataproducts[".importFields"] = array();
$tdataproducts[".importFields"][] = "vendor_id";
$tdataproducts[".importFields"][] = "product_name";
$tdataproducts[".importFields"][] = "product_types_id";

$tdataproducts[".printFields"] = array();
$tdataproducts[".printFields"][] = "id";
$tdataproducts[".printFields"][] = "vendor_id";
$tdataproducts[".printFields"][] = "product_name";
$tdataproducts[".printFields"][] = "product_types_id";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = GetFieldLabel("products","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
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








	$tdataproducts["id"] = $fdata;
//	vendor_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "vendor_id";
	$fdata["GoodName"] = "vendor_id";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = GetFieldLabel("products","vendor_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "vendor_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vendor_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "vendors";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "vendor_name";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataproducts["vendor_id"] = $fdata;
//	product_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "product_name";
	$fdata["GoodName"] = "product_name";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = GetFieldLabel("products","product_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "product_name";

	
	
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




	$tdataproducts["product_name"] = $fdata;
//	product_types_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "product_types_id";
	$fdata["GoodName"] = "product_types_id";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = GetFieldLabel("products","product_types_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_types_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "product_types_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "product_types";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "product_type";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataproducts["product_types_id"] = $fdata;


$tables_data["products"]=&$tdataproducts;
$field_labels["products"] = &$fieldLabelsproducts;
$fieldToolTips["products"] = &$fieldToolTipsproducts;
$placeHolders["products"] = &$placeHoldersproducts;
$page_titles["products"] = &$pageTitlesproducts;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["products"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["products"] = array();


	
				$strOriginalDetailsTable="vendors";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="vendors";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vendors";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["products"][0] = $masterParams;
				$masterTablesData["products"][0]["masterKeys"] = array();
	$masterTablesData["products"][0]["masterKeys"][]="id";
				$masterTablesData["products"][0]["detailKeys"] = array();
	$masterTablesData["products"][0]["detailKeys"][]="vendor_id";
		
	
				$strOriginalDetailsTable="product_types";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="product_types";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "product_types";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["products"][1] = $masterParams;
				$masterTablesData["products"][1]["masterKeys"] = array();
	$masterTablesData["products"][1]["masterKeys"][]="id";
				$masterTablesData["products"][1]["detailKeys"] = array();
	$masterTablesData["products"][1]["detailKeys"][]="product_types_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_products()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	vendor_id,  	product_name,  	product_types_id";
$proto0["m_strFrom"] = "FROM products";
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
	"m_strTable" => "products",
	"m_srcTableName" => "products"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "products";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "vendor_id",
	"m_strTable" => "products",
	"m_srcTableName" => "products"
));

$proto8["m_sql"] = "vendor_id";
$proto8["m_srcTableName"] = "products";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "product_name",
	"m_strTable" => "products",
	"m_srcTableName" => "products"
));

$proto10["m_sql"] = "product_name";
$proto10["m_srcTableName"] = "products";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "product_types_id",
	"m_strTable" => "products",
	"m_srcTableName" => "products"
));

$proto12["m_sql"] = "product_types_id";
$proto12["m_srcTableName"] = "products";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "products";
$proto15["m_srcTableName"] = "products";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "vendor_id";
$proto15["m_columns"][] = "product_name";
$proto15["m_columns"][] = "product_types_id";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "products";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "products";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="products";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_products = createSqlQuery_products();


	
		;

				

$tdataproducts[".sqlquery"] = $queryData_products;

include_once(getabspath("include/products_events.php"));
$tableEvents["products"] = new eventclass_products;
$tdataproducts[".hasEvents"] = true;

?>
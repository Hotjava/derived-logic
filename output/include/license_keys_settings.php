<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalicense_keys = array();
	$tdatalicense_keys[".truncateText"] = true;
	$tdatalicense_keys[".NumberOfChars"] = 80;
	$tdatalicense_keys[".ShortName"] = "license_keys";
	$tdatalicense_keys[".OwnerID"] = "";
	$tdatalicense_keys[".OriginalTable"] = "license_keys";

//	field labels
$fieldLabelslicense_keys = array();
$fieldToolTipslicense_keys = array();
$pageTitleslicense_keys = array();
$placeHolderslicense_keys = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslicense_keys["English"] = array();
	$fieldToolTipslicense_keys["English"] = array();
	$placeHolderslicense_keys["English"] = array();
	$pageTitleslicense_keys["English"] = array();
	$fieldLabelslicense_keys["English"]["id"] = "Id";
	$fieldToolTipslicense_keys["English"]["id"] = "";
	$placeHolderslicense_keys["English"]["id"] = "";
	$fieldLabelslicense_keys["English"]["renewal_id"] = "Renewal";
	$fieldToolTipslicense_keys["English"]["renewal_id"] = "";
	$placeHolderslicense_keys["English"]["renewal_id"] = "";
	$fieldLabelslicense_keys["English"]["keys"] = "Keys";
	$fieldToolTipslicense_keys["English"]["keys"] = "";
	$placeHolderslicense_keys["English"]["keys"] = "";
	$fieldLabelslicense_keys["English"]["key_files"] = "Key Files";
	$fieldToolTipslicense_keys["English"]["key_files"] = "";
	$placeHolderslicense_keys["English"]["key_files"] = "";
	$fieldLabelslicense_keys["English"]["notes"] = "Notes";
	$fieldToolTipslicense_keys["English"]["notes"] = "";
	$placeHolderslicense_keys["English"]["notes"] = "";
	if (count($fieldToolTipslicense_keys["English"]))
		$tdatalicense_keys[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslicense_keys[""] = array();
	$fieldToolTipslicense_keys[""] = array();
	$placeHolderslicense_keys[""] = array();
	$pageTitleslicense_keys[""] = array();
	if (count($fieldToolTipslicense_keys[""]))
		$tdatalicense_keys[".isUseToolTips"] = true;
}


	$tdatalicense_keys[".NCSearch"] = true;



$tdatalicense_keys[".shortTableName"] = "license_keys";
$tdatalicense_keys[".nSecOptions"] = 0;
$tdatalicense_keys[".recsPerRowPrint"] = 1;
$tdatalicense_keys[".mainTableOwnerID"] = "";
$tdatalicense_keys[".moveNext"] = 1;
$tdatalicense_keys[".entityType"] = 0;

$tdatalicense_keys[".strOriginalTableName"] = "license_keys";

	



$tdatalicense_keys[".showAddInPopup"] = false;

$tdatalicense_keys[".showEditInPopup"] = false;

$tdatalicense_keys[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalicense_keys[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalicense_keys[".fieldsForRegister"] = array();

$tdatalicense_keys[".listAjax"] = false;

	$tdatalicense_keys[".audit"] = false;

	$tdatalicense_keys[".locking"] = false;

$tdatalicense_keys[".edit"] = true;
$tdatalicense_keys[".afterEditAction"] = 1;
$tdatalicense_keys[".closePopupAfterEdit"] = 1;
$tdatalicense_keys[".afterEditActionDetTable"] = "";

$tdatalicense_keys[".add"] = true;
$tdatalicense_keys[".afterAddAction"] = 1;
$tdatalicense_keys[".closePopupAfterAdd"] = 1;
$tdatalicense_keys[".afterAddActionDetTable"] = "";

$tdatalicense_keys[".list"] = true;



$tdatalicense_keys[".reorderRecordsByHeader"] = true;


$tdatalicense_keys[".exportFormatting"] = 2;
$tdatalicense_keys[".exportDelimiter"] = ",";
		
$tdatalicense_keys[".view"] = true;

$tdatalicense_keys[".import"] = true;

$tdatalicense_keys[".exportTo"] = true;

$tdatalicense_keys[".printFriendly"] = true;

$tdatalicense_keys[".delete"] = true;

$tdatalicense_keys[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatalicense_keys[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatalicense_keys[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatalicense_keys[".searchSaving"] = false;
//

$tdatalicense_keys[".showSearchPanel"] = true;
		$tdatalicense_keys[".flexibleSearch"] = true;

$tdatalicense_keys[".isUseAjaxSuggest"] = true;

$tdatalicense_keys[".rowHighlite"] = true;





$tdatalicense_keys[".ajaxCodeSnippetAdded"] = false;

$tdatalicense_keys[".buttonsAdded"] = false;

$tdatalicense_keys[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalicense_keys[".isUseTimeForSearch"] = false;



$tdatalicense_keys[".badgeColor"] = "e67349";


$tdatalicense_keys[".allSearchFields"] = array();
$tdatalicense_keys[".filterFields"] = array();
$tdatalicense_keys[".requiredSearchFields"] = array();

$tdatalicense_keys[".allSearchFields"][] = "renewal_id";
	$tdatalicense_keys[".allSearchFields"][] = "keys";
	$tdatalicense_keys[".allSearchFields"][] = "key_files";
	$tdatalicense_keys[".allSearchFields"][] = "notes";
	

$tdatalicense_keys[".googleLikeFields"] = array();
$tdatalicense_keys[".googleLikeFields"][] = "id";
$tdatalicense_keys[".googleLikeFields"][] = "renewal_id";
$tdatalicense_keys[".googleLikeFields"][] = "keys";
$tdatalicense_keys[".googleLikeFields"][] = "key_files";
$tdatalicense_keys[".googleLikeFields"][] = "notes";


$tdatalicense_keys[".advSearchFields"] = array();
$tdatalicense_keys[".advSearchFields"][] = "renewal_id";
$tdatalicense_keys[".advSearchFields"][] = "keys";
$tdatalicense_keys[".advSearchFields"][] = "key_files";
$tdatalicense_keys[".advSearchFields"][] = "notes";

$tdatalicense_keys[".tableType"] = "list";

$tdatalicense_keys[".printerPageOrientation"] = 0;
$tdatalicense_keys[".nPrinterPageScale"] = 100;

$tdatalicense_keys[".nPrinterSplitRecords"] = 40;

$tdatalicense_keys[".nPrinterPDFSplitRecords"] = 40;



$tdatalicense_keys[".geocodingEnabled"] = false;





$tdatalicense_keys[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatalicense_keys[".pageSize"] = 20;

$tdatalicense_keys[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalicense_keys[".strOrderBy"] = $tstrOrderBy;

$tdatalicense_keys[".orderindexes"] = array();

$tdatalicense_keys[".sqlHead"] = "SELECT id,  	renewal_id,  	`keys`,  	key_files,  	notes";
$tdatalicense_keys[".sqlFrom"] = "FROM license_keys";
$tdatalicense_keys[".sqlWhereExpr"] = "";
$tdatalicense_keys[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalicense_keys[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalicense_keys[".arrGroupsPerPage"] = $arrGPP;

$tdatalicense_keys[".highlightSearchResults"] = true;

$tableKeyslicense_keys = array();
$tableKeyslicense_keys[] = "id";
$tdatalicense_keys[".Keys"] = $tableKeyslicense_keys;

$tdatalicense_keys[".listFields"] = array();
$tdatalicense_keys[".listFields"][] = "renewal_id";
$tdatalicense_keys[".listFields"][] = "keys";
$tdatalicense_keys[".listFields"][] = "key_files";
$tdatalicense_keys[".listFields"][] = "notes";

$tdatalicense_keys[".hideMobileList"] = array();


$tdatalicense_keys[".viewFields"] = array();
$tdatalicense_keys[".viewFields"][] = "renewal_id";
$tdatalicense_keys[".viewFields"][] = "keys";
$tdatalicense_keys[".viewFields"][] = "key_files";
$tdatalicense_keys[".viewFields"][] = "notes";

$tdatalicense_keys[".addFields"] = array();
$tdatalicense_keys[".addFields"][] = "renewal_id";
$tdatalicense_keys[".addFields"][] = "keys";
$tdatalicense_keys[".addFields"][] = "key_files";
$tdatalicense_keys[".addFields"][] = "notes";

$tdatalicense_keys[".masterListFields"] = array();
$tdatalicense_keys[".masterListFields"][] = "id";
$tdatalicense_keys[".masterListFields"][] = "renewal_id";
$tdatalicense_keys[".masterListFields"][] = "keys";
$tdatalicense_keys[".masterListFields"][] = "key_files";
$tdatalicense_keys[".masterListFields"][] = "notes";

$tdatalicense_keys[".inlineAddFields"] = array();

$tdatalicense_keys[".editFields"] = array();
$tdatalicense_keys[".editFields"][] = "renewal_id";
$tdatalicense_keys[".editFields"][] = "keys";
$tdatalicense_keys[".editFields"][] = "key_files";
$tdatalicense_keys[".editFields"][] = "notes";

$tdatalicense_keys[".inlineEditFields"] = array();

$tdatalicense_keys[".updateSelectedFields"] = array();
$tdatalicense_keys[".updateSelectedFields"][] = "renewal_id";
$tdatalicense_keys[".updateSelectedFields"][] = "keys";
$tdatalicense_keys[".updateSelectedFields"][] = "key_files";
$tdatalicense_keys[".updateSelectedFields"][] = "notes";


$tdatalicense_keys[".exportFields"] = array();
$tdatalicense_keys[".exportFields"][] = "id";
$tdatalicense_keys[".exportFields"][] = "renewal_id";
$tdatalicense_keys[".exportFields"][] = "keys";
$tdatalicense_keys[".exportFields"][] = "key_files";
$tdatalicense_keys[".exportFields"][] = "notes";

$tdatalicense_keys[".importFields"] = array();
$tdatalicense_keys[".importFields"][] = "renewal_id";
$tdatalicense_keys[".importFields"][] = "keys";
$tdatalicense_keys[".importFields"][] = "key_files";
$tdatalicense_keys[".importFields"][] = "notes";

$tdatalicense_keys[".printFields"] = array();
$tdatalicense_keys[".printFields"][] = "id";
$tdatalicense_keys[".printFields"][] = "renewal_id";
$tdatalicense_keys[".printFields"][] = "keys";
$tdatalicense_keys[".printFields"][] = "key_files";
$tdatalicense_keys[".printFields"][] = "notes";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "license_keys";
	$fdata["Label"] = GetFieldLabel("license_keys","id");
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








	$tdatalicense_keys["id"] = $fdata;
//	renewal_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "renewal_id";
	$fdata["GoodName"] = "renewal_id";
	$fdata["ownerTable"] = "license_keys";
	$fdata["Label"] = GetFieldLabel("license_keys","renewal_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "renewal_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "renewal_id";

	
	
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
	$edata["LookupTable"] = "renewals";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "order_description";
	
	

	
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




	$tdatalicense_keys["renewal_id"] = $fdata;
//	keys
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "keys";
	$fdata["GoodName"] = "keys";
	$fdata["ownerTable"] = "license_keys";
	$fdata["Label"] = GetFieldLabel("license_keys","keys");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "keys";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`keys`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdatalicense_keys["keys"] = $fdata;
//	key_files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "key_files";
	$fdata["GoodName"] = "key_files";
	$fdata["ownerTable"] = "license_keys";
	$fdata["Label"] = GetFieldLabel("license_keys","key_files");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "key_files";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "key_files";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files/keys";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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




	$tdatalicense_keys["key_files"] = $fdata;
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "license_keys";
	$fdata["Label"] = GetFieldLabel("license_keys","notes");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "notes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notes";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdatalicense_keys["notes"] = $fdata;


$tables_data["license_keys"]=&$tdatalicense_keys;
$field_labels["license_keys"] = &$fieldLabelslicense_keys;
$fieldToolTips["license_keys"] = &$fieldToolTipslicense_keys;
$placeHolders["license_keys"] = &$placeHolderslicense_keys;
$page_titles["license_keys"] = &$pageTitleslicense_keys;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["license_keys"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["license_keys"] = array();


	
				$strOriginalDetailsTable="renewals";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="renewals";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "renewals";
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
					$masterTablesData["license_keys"][0] = $masterParams;
				$masterTablesData["license_keys"][0]["masterKeys"] = array();
	$masterTablesData["license_keys"][0]["masterKeys"][]="id";
				$masterTablesData["license_keys"][0]["detailKeys"] = array();
	$masterTablesData["license_keys"][0]["detailKeys"][]="renewal_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_license_keys()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	renewal_id,  	`keys`,  	key_files,  	notes";
$proto0["m_strFrom"] = "FROM license_keys";
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
	"m_strTable" => "license_keys",
	"m_srcTableName" => "license_keys"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "license_keys";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "renewal_id",
	"m_strTable" => "license_keys",
	"m_srcTableName" => "license_keys"
));

$proto8["m_sql"] = "renewal_id";
$proto8["m_srcTableName"] = "license_keys";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "keys",
	"m_strTable" => "license_keys",
	"m_srcTableName" => "license_keys"
));

$proto10["m_sql"] = "`keys`";
$proto10["m_srcTableName"] = "license_keys";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "key_files",
	"m_strTable" => "license_keys",
	"m_srcTableName" => "license_keys"
));

$proto12["m_sql"] = "key_files";
$proto12["m_srcTableName"] = "license_keys";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "license_keys",
	"m_srcTableName" => "license_keys"
));

$proto14["m_sql"] = "notes";
$proto14["m_srcTableName"] = "license_keys";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "license_keys";
$proto17["m_srcTableName"] = "license_keys";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "renewal_id";
$proto17["m_columns"][] = "keys";
$proto17["m_columns"][] = "key_files";
$proto17["m_columns"][] = "notes";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "license_keys";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "license_keys";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="license_keys";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_license_keys = createSqlQuery_license_keys();


	
		;

					

$tdatalicense_keys[".sqlquery"] = $queryData_license_keys;

$tableEvents["license_keys"] = new eventsBase;
$tdatalicense_keys[".hasEvents"] = false;

?>
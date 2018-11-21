<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavendor_contacts = array();
	$tdatavendor_contacts[".truncateText"] = true;
	$tdatavendor_contacts[".NumberOfChars"] = 80;
	$tdatavendor_contacts[".ShortName"] = "vendor_contacts";
	$tdatavendor_contacts[".OwnerID"] = "";
	$tdatavendor_contacts[".OriginalTable"] = "vendor_contacts";

//	field labels
$fieldLabelsvendor_contacts = array();
$fieldToolTipsvendor_contacts = array();
$pageTitlesvendor_contacts = array();
$placeHoldersvendor_contacts = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvendor_contacts["English"] = array();
	$fieldToolTipsvendor_contacts["English"] = array();
	$placeHoldersvendor_contacts["English"] = array();
	$pageTitlesvendor_contacts["English"] = array();
	$fieldLabelsvendor_contacts["English"]["id"] = "Id";
	$fieldToolTipsvendor_contacts["English"]["id"] = "";
	$placeHoldersvendor_contacts["English"]["id"] = "";
	$fieldLabelsvendor_contacts["English"]["contact_name"] = "Contact Name";
	$fieldToolTipsvendor_contacts["English"]["contact_name"] = "";
	$placeHoldersvendor_contacts["English"]["contact_name"] = "";
	$fieldLabelsvendor_contacts["English"]["contact_tel"] = "Contact Tel";
	$fieldToolTipsvendor_contacts["English"]["contact_tel"] = "";
	$placeHoldersvendor_contacts["English"]["contact_tel"] = "";
	$fieldLabelsvendor_contacts["English"]["contact_email"] = "Contact Email";
	$fieldToolTipsvendor_contacts["English"]["contact_email"] = "";
	$placeHoldersvendor_contacts["English"]["contact_email"] = "";
	$fieldLabelsvendor_contacts["English"]["vendor_id"] = "Vendor";
	$fieldToolTipsvendor_contacts["English"]["vendor_id"] = "";
	$placeHoldersvendor_contacts["English"]["vendor_id"] = "";
	if (count($fieldToolTipsvendor_contacts["English"]))
		$tdatavendor_contacts[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvendor_contacts[""] = array();
	$fieldToolTipsvendor_contacts[""] = array();
	$placeHoldersvendor_contacts[""] = array();
	$pageTitlesvendor_contacts[""] = array();
	if (count($fieldToolTipsvendor_contacts[""]))
		$tdatavendor_contacts[".isUseToolTips"] = true;
}


	$tdatavendor_contacts[".NCSearch"] = true;



$tdatavendor_contacts[".shortTableName"] = "vendor_contacts";
$tdatavendor_contacts[".nSecOptions"] = 0;
$tdatavendor_contacts[".recsPerRowPrint"] = 1;
$tdatavendor_contacts[".mainTableOwnerID"] = "";
$tdatavendor_contacts[".moveNext"] = 1;
$tdatavendor_contacts[".entityType"] = 0;

$tdatavendor_contacts[".strOriginalTableName"] = "vendor_contacts";

	



$tdatavendor_contacts[".showAddInPopup"] = false;

$tdatavendor_contacts[".showEditInPopup"] = false;

$tdatavendor_contacts[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavendor_contacts[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavendor_contacts[".fieldsForRegister"] = array();

$tdatavendor_contacts[".listAjax"] = false;

	$tdatavendor_contacts[".audit"] = false;

	$tdatavendor_contacts[".locking"] = false;

$tdatavendor_contacts[".edit"] = true;
$tdatavendor_contacts[".afterEditAction"] = 1;
$tdatavendor_contacts[".closePopupAfterEdit"] = 1;
$tdatavendor_contacts[".afterEditActionDetTable"] = "";

$tdatavendor_contacts[".add"] = true;
$tdatavendor_contacts[".afterAddAction"] = 1;
$tdatavendor_contacts[".closePopupAfterAdd"] = 1;
$tdatavendor_contacts[".afterAddActionDetTable"] = "";

$tdatavendor_contacts[".list"] = true;



$tdatavendor_contacts[".reorderRecordsByHeader"] = true;


$tdatavendor_contacts[".exportFormatting"] = 2;
$tdatavendor_contacts[".exportDelimiter"] = ",";
		
$tdatavendor_contacts[".view"] = true;

$tdatavendor_contacts[".import"] = true;

$tdatavendor_contacts[".exportTo"] = true;

$tdatavendor_contacts[".printFriendly"] = true;

$tdatavendor_contacts[".delete"] = true;

$tdatavendor_contacts[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavendor_contacts[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatavendor_contacts[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatavendor_contacts[".searchSaving"] = false;
//

$tdatavendor_contacts[".showSearchPanel"] = true;
		$tdatavendor_contacts[".flexibleSearch"] = true;

$tdatavendor_contacts[".isUseAjaxSuggest"] = true;

$tdatavendor_contacts[".rowHighlite"] = true;





$tdatavendor_contacts[".ajaxCodeSnippetAdded"] = false;

$tdatavendor_contacts[".buttonsAdded"] = false;

$tdatavendor_contacts[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavendor_contacts[".isUseTimeForSearch"] = false;



$tdatavendor_contacts[".badgeColor"] = "cd853f";


$tdatavendor_contacts[".allSearchFields"] = array();
$tdatavendor_contacts[".filterFields"] = array();
$tdatavendor_contacts[".requiredSearchFields"] = array();

$tdatavendor_contacts[".allSearchFields"][] = "vendor_id";
	$tdatavendor_contacts[".allSearchFields"][] = "contact_name";
	$tdatavendor_contacts[".allSearchFields"][] = "contact_tel";
	$tdatavendor_contacts[".allSearchFields"][] = "contact_email";
	

$tdatavendor_contacts[".googleLikeFields"] = array();
$tdatavendor_contacts[".googleLikeFields"][] = "id";
$tdatavendor_contacts[".googleLikeFields"][] = "vendor_id";
$tdatavendor_contacts[".googleLikeFields"][] = "contact_name";
$tdatavendor_contacts[".googleLikeFields"][] = "contact_tel";
$tdatavendor_contacts[".googleLikeFields"][] = "contact_email";


$tdatavendor_contacts[".advSearchFields"] = array();
$tdatavendor_contacts[".advSearchFields"][] = "vendor_id";
$tdatavendor_contacts[".advSearchFields"][] = "contact_name";
$tdatavendor_contacts[".advSearchFields"][] = "contact_tel";
$tdatavendor_contacts[".advSearchFields"][] = "contact_email";

$tdatavendor_contacts[".tableType"] = "list";

$tdatavendor_contacts[".printerPageOrientation"] = 0;
$tdatavendor_contacts[".nPrinterPageScale"] = 100;

$tdatavendor_contacts[".nPrinterSplitRecords"] = 40;

$tdatavendor_contacts[".nPrinterPDFSplitRecords"] = 40;



$tdatavendor_contacts[".geocodingEnabled"] = false;





$tdatavendor_contacts[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatavendor_contacts[".pageSize"] = 20;

$tdatavendor_contacts[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavendor_contacts[".strOrderBy"] = $tstrOrderBy;

$tdatavendor_contacts[".orderindexes"] = array();

$tdatavendor_contacts[".sqlHead"] = "SELECT id,  	vendor_id,  	contact_name,  	contact_tel,  	contact_email";
$tdatavendor_contacts[".sqlFrom"] = "FROM vendor_contacts";
$tdatavendor_contacts[".sqlWhereExpr"] = "";
$tdatavendor_contacts[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavendor_contacts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavendor_contacts[".arrGroupsPerPage"] = $arrGPP;

$tdatavendor_contacts[".highlightSearchResults"] = true;

$tableKeysvendor_contacts = array();
$tableKeysvendor_contacts[] = "id";
$tdatavendor_contacts[".Keys"] = $tableKeysvendor_contacts;

$tdatavendor_contacts[".listFields"] = array();
$tdatavendor_contacts[".listFields"][] = "vendor_id";
$tdatavendor_contacts[".listFields"][] = "contact_name";
$tdatavendor_contacts[".listFields"][] = "contact_tel";
$tdatavendor_contacts[".listFields"][] = "contact_email";

$tdatavendor_contacts[".hideMobileList"] = array();


$tdatavendor_contacts[".viewFields"] = array();
$tdatavendor_contacts[".viewFields"][] = "vendor_id";
$tdatavendor_contacts[".viewFields"][] = "contact_name";
$tdatavendor_contacts[".viewFields"][] = "contact_tel";
$tdatavendor_contacts[".viewFields"][] = "contact_email";

$tdatavendor_contacts[".addFields"] = array();
$tdatavendor_contacts[".addFields"][] = "vendor_id";
$tdatavendor_contacts[".addFields"][] = "contact_name";
$tdatavendor_contacts[".addFields"][] = "contact_tel";
$tdatavendor_contacts[".addFields"][] = "contact_email";

$tdatavendor_contacts[".masterListFields"] = array();
$tdatavendor_contacts[".masterListFields"][] = "id";
$tdatavendor_contacts[".masterListFields"][] = "vendor_id";
$tdatavendor_contacts[".masterListFields"][] = "contact_name";
$tdatavendor_contacts[".masterListFields"][] = "contact_tel";
$tdatavendor_contacts[".masterListFields"][] = "contact_email";

$tdatavendor_contacts[".inlineAddFields"] = array();

$tdatavendor_contacts[".editFields"] = array();
$tdatavendor_contacts[".editFields"][] = "vendor_id";
$tdatavendor_contacts[".editFields"][] = "contact_name";
$tdatavendor_contacts[".editFields"][] = "contact_tel";
$tdatavendor_contacts[".editFields"][] = "contact_email";

$tdatavendor_contacts[".inlineEditFields"] = array();

$tdatavendor_contacts[".updateSelectedFields"] = array();
$tdatavendor_contacts[".updateSelectedFields"][] = "vendor_id";
$tdatavendor_contacts[".updateSelectedFields"][] = "contact_name";
$tdatavendor_contacts[".updateSelectedFields"][] = "contact_tel";
$tdatavendor_contacts[".updateSelectedFields"][] = "contact_email";


$tdatavendor_contacts[".exportFields"] = array();
$tdatavendor_contacts[".exportFields"][] = "id";
$tdatavendor_contacts[".exportFields"][] = "vendor_id";
$tdatavendor_contacts[".exportFields"][] = "contact_name";
$tdatavendor_contacts[".exportFields"][] = "contact_tel";
$tdatavendor_contacts[".exportFields"][] = "contact_email";

$tdatavendor_contacts[".importFields"] = array();
$tdatavendor_contacts[".importFields"][] = "vendor_id";
$tdatavendor_contacts[".importFields"][] = "contact_name";
$tdatavendor_contacts[".importFields"][] = "contact_tel";
$tdatavendor_contacts[".importFields"][] = "contact_email";

$tdatavendor_contacts[".printFields"] = array();
$tdatavendor_contacts[".printFields"][] = "vendor_id";
$tdatavendor_contacts[".printFields"][] = "contact_name";
$tdatavendor_contacts[".printFields"][] = "contact_tel";
$tdatavendor_contacts[".printFields"][] = "contact_email";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "vendor_contacts";
	$fdata["Label"] = GetFieldLabel("vendor_contacts","id");
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








	$tdatavendor_contacts["id"] = $fdata;
//	vendor_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "vendor_id";
	$fdata["GoodName"] = "vendor_id";
	$fdata["ownerTable"] = "vendor_contacts";
	$fdata["Label"] = GetFieldLabel("vendor_contacts","vendor_id");
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




	$tdatavendor_contacts["vendor_id"] = $fdata;
//	contact_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "contact_name";
	$fdata["GoodName"] = "contact_name";
	$fdata["ownerTable"] = "vendor_contacts";
	$fdata["Label"] = GetFieldLabel("vendor_contacts","contact_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "contact_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contact_name";

	
	
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




	$tdatavendor_contacts["contact_name"] = $fdata;
//	contact_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "contact_tel";
	$fdata["GoodName"] = "contact_tel";
	$fdata["ownerTable"] = "vendor_contacts";
	$fdata["Label"] = GetFieldLabel("vendor_contacts","contact_tel");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "contact_tel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contact_tel";

	
	
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




	$tdatavendor_contacts["contact_tel"] = $fdata;
//	contact_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "contact_email";
	$fdata["GoodName"] = "contact_email";
	$fdata["ownerTable"] = "vendor_contacts";
	$fdata["Label"] = GetFieldLabel("vendor_contacts","contact_email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "contact_email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contact_email";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatavendor_contacts["contact_email"] = $fdata;


$tables_data["vendor_contacts"]=&$tdatavendor_contacts;
$field_labels["vendor_contacts"] = &$fieldLabelsvendor_contacts;
$fieldToolTips["vendor_contacts"] = &$fieldToolTipsvendor_contacts;
$placeHolders["vendor_contacts"] = &$placeHoldersvendor_contacts;
$page_titles["vendor_contacts"] = &$pageTitlesvendor_contacts;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vendor_contacts"] = array();
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
		
	$detailsTablesData["vendor_contacts"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vendor_contacts"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vendor_contacts"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["vendor_contacts"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vendor_contacts"][$dIndex]["detailKeys"][]="vendor_contact_id";

// tables which are master tables for current table (detail)
$masterTablesData["vendor_contacts"] = array();


	
				$strOriginalDetailsTable="vendors";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="vendors";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vendors";
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
					$masterTablesData["vendor_contacts"][0] = $masterParams;
				$masterTablesData["vendor_contacts"][0]["masterKeys"] = array();
	$masterTablesData["vendor_contacts"][0]["masterKeys"][]="id";
				$masterTablesData["vendor_contacts"][0]["detailKeys"] = array();
	$masterTablesData["vendor_contacts"][0]["detailKeys"][]="vendor_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vendor_contacts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	vendor_id,  	contact_name,  	contact_tel,  	contact_email";
$proto0["m_strFrom"] = "FROM vendor_contacts";
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
	"m_strTable" => "vendor_contacts",
	"m_srcTableName" => "vendor_contacts"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "vendor_contacts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "vendor_id",
	"m_strTable" => "vendor_contacts",
	"m_srcTableName" => "vendor_contacts"
));

$proto8["m_sql"] = "vendor_id";
$proto8["m_srcTableName"] = "vendor_contacts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_name",
	"m_strTable" => "vendor_contacts",
	"m_srcTableName" => "vendor_contacts"
));

$proto10["m_sql"] = "contact_name";
$proto10["m_srcTableName"] = "vendor_contacts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_tel",
	"m_strTable" => "vendor_contacts",
	"m_srcTableName" => "vendor_contacts"
));

$proto12["m_sql"] = "contact_tel";
$proto12["m_srcTableName"] = "vendor_contacts";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_email",
	"m_strTable" => "vendor_contacts",
	"m_srcTableName" => "vendor_contacts"
));

$proto14["m_sql"] = "contact_email";
$proto14["m_srcTableName"] = "vendor_contacts";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "vendor_contacts";
$proto17["m_srcTableName"] = "vendor_contacts";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "vendor_id";
$proto17["m_columns"][] = "contact_name";
$proto17["m_columns"][] = "contact_tel";
$proto17["m_columns"][] = "contact_email";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "vendor_contacts";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "vendor_contacts";
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
$proto0["m_srcTableName"]="vendor_contacts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vendor_contacts = createSqlQuery_vendor_contacts();


	
		;

					

$tdatavendor_contacts[".sqlquery"] = $queryData_vendor_contacts;

include_once(getabspath("include/vendor_contacts_events.php"));
$tableEvents["vendor_contacts"] = new eventclass_vendor_contacts;
$tdatavendor_contacts[".hasEvents"] = true;

?>
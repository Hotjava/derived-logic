<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacalcalendar = array();
	$tdatacalcalendar[".truncateText"] = true;
	$tdatacalcalendar[".NumberOfChars"] = 80;
	$tdatacalcalendar[".ShortName"] = "calcalendar";
	$tdatacalcalendar[".OwnerID"] = "OwnerID";
	$tdatacalcalendar[".OriginalTable"] = "calcalendar";

//	field labels
$fieldLabelscalcalendar = array();
$fieldToolTipscalcalendar = array();
$pageTitlescalcalendar = array();
$placeHolderscalcalendar = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscalcalendar["English"] = array();
	$fieldToolTipscalcalendar["English"] = array();
	$placeHolderscalcalendar["English"] = array();
	$pageTitlescalcalendar["English"] = array();
	$fieldLabelscalcalendar["English"]["id"] = "Id";
	$fieldToolTipscalcalendar["English"]["id"] = "";
	$placeHolderscalcalendar["English"]["id"] = "";
	$fieldLabelscalcalendar["English"]["DateField"] = "When";
	$fieldToolTipscalcalendar["English"]["DateField"] = "";
	$placeHolderscalcalendar["English"]["DateField"] = "";
	$fieldLabelscalcalendar["English"]["Description"] = "Description";
	$fieldToolTipscalcalendar["English"]["Description"] = "";
	$placeHolderscalcalendar["English"]["Description"] = "";
	$fieldLabelscalcalendar["English"]["Subject"] = "What";
	$fieldToolTipscalcalendar["English"]["Subject"] = "";
	$placeHolderscalcalendar["English"]["Subject"] = "";
	$fieldLabelscalcalendar["English"]["TimeField"] = "From";
	$fieldToolTipscalcalendar["English"]["TimeField"] = "";
	$placeHolderscalcalendar["English"]["TimeField"] = "";
	$fieldLabelscalcalendar["English"]["EndTime"] = "To";
	$fieldToolTipscalcalendar["English"]["EndTime"] = "";
	$placeHolderscalcalendar["English"]["EndTime"] = "";
	$fieldLabelscalcalendar["English"]["DayEvent"] = "All day event";
	$fieldToolTipscalcalendar["English"]["DayEvent"] = "";
	$placeHolderscalcalendar["English"]["DayEvent"] = "";
	$fieldLabelscalcalendar["English"]["EndDate"] = "End Date";
	$fieldToolTipscalcalendar["English"]["EndDate"] = "";
	$placeHolderscalcalendar["English"]["EndDate"] = "";
	$fieldLabelscalcalendar["English"]["Period"] = "Period";
	$fieldToolTipscalcalendar["English"]["Period"] = "";
	$placeHolderscalcalendar["English"]["Period"] = "";
	$fieldLabelscalcalendar["English"]["Recurrence"] = "Repeat";
	$fieldToolTipscalcalendar["English"]["Recurrence"] = "";
	$placeHolderscalcalendar["English"]["Recurrence"] = "";
	$fieldLabelscalcalendar["English"]["Category"] = "Category";
	$fieldToolTipscalcalendar["English"]["Category"] = "";
	$placeHolderscalcalendar["English"]["Category"] = "";
	$fieldLabelscalcalendar["English"]["OwnerID"] = "Owner ID";
	$fieldToolTipscalcalendar["English"]["OwnerID"] = "";
	$placeHolderscalcalendar["English"]["OwnerID"] = "";
	$fieldLabelscalcalendar["English"]["PeriodDays"] = "Repeat on";
	$fieldToolTipscalcalendar["English"]["PeriodDays"] = "";
	$placeHolderscalcalendar["English"]["PeriodDays"] = "";
	if (count($fieldToolTipscalcalendar["English"]))
		$tdatacalcalendar[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscalcalendar[""] = array();
	$fieldToolTipscalcalendar[""] = array();
	$placeHolderscalcalendar[""] = array();
	$pageTitlescalcalendar[""] = array();
	if (count($fieldToolTipscalcalendar[""]))
		$tdatacalcalendar[".isUseToolTips"] = true;
}


	$tdatacalcalendar[".NCSearch"] = true;



$tdatacalcalendar[".shortTableName"] = "calcalendar";
$tdatacalcalendar[".nSecOptions"] = 1;
$tdatacalcalendar[".recsPerRowPrint"] = 1;
$tdatacalcalendar[".mainTableOwnerID"] = "OwnerID";
$tdatacalcalendar[".moveNext"] = 1;
$tdatacalcalendar[".entityType"] = 1;

$tdatacalcalendar[".strOriginalTableName"] = "calcalendar";

	



$tdatacalcalendar[".showAddInPopup"] = false;

$tdatacalcalendar[".showEditInPopup"] = false;

$tdatacalcalendar[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacalcalendar[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacalcalendar[".fieldsForRegister"] = array();

$tdatacalcalendar[".listAjax"] = false;

	$tdatacalcalendar[".audit"] = false;

	$tdatacalcalendar[".locking"] = false;

$tdatacalcalendar[".edit"] = true;
$tdatacalcalendar[".afterEditAction"] = 1;
$tdatacalcalendar[".closePopupAfterEdit"] = 1;
$tdatacalcalendar[".afterEditActionDetTable"] = "";

$tdatacalcalendar[".add"] = true;
$tdatacalcalendar[".afterAddAction"] = 1;
$tdatacalcalendar[".closePopupAfterAdd"] = 1;
$tdatacalcalendar[".afterAddActionDetTable"] = "";

$tdatacalcalendar[".list"] = true;





$tdatacalcalendar[".exportFormatting"] = 2;
$tdatacalcalendar[".exportDelimiter"] = ",";
		
$tdatacalcalendar[".view"] = true;


$tdatacalcalendar[".exportTo"] = true;

$tdatacalcalendar[".printFriendly"] = true;

$tdatacalcalendar[".delete"] = true;

$tdatacalcalendar[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacalcalendar[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacalcalendar[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacalcalendar[".searchSaving"] = false;
//

$tdatacalcalendar[".showSearchPanel"] = true;
		$tdatacalcalendar[".flexibleSearch"] = true;

$tdatacalcalendar[".isUseAjaxSuggest"] = true;

$tdatacalcalendar[".rowHighlite"] = true;





$tdatacalcalendar[".ajaxCodeSnippetAdded"] = false;

$tdatacalcalendar[".buttonsAdded"] = false;

$tdatacalcalendar[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacalcalendar[".isUseTimeForSearch"] = false;



$tdatacalcalendar[".badgeColor"] = "CD853F";


$tdatacalcalendar[".allSearchFields"] = array();
$tdatacalcalendar[".filterFields"] = array();
$tdatacalcalendar[".requiredSearchFields"] = array();

$tdatacalcalendar[".allSearchFields"][] = "DateField";
	$tdatacalcalendar[".allSearchFields"][] = "Subject";
	

$tdatacalcalendar[".googleLikeFields"] = array();
$tdatacalcalendar[".googleLikeFields"][] = "DateField";
$tdatacalcalendar[".googleLikeFields"][] = "Description";
$tdatacalcalendar[".googleLikeFields"][] = "Subject";
$tdatacalcalendar[".googleLikeFields"][] = "PeriodDays";


$tdatacalcalendar[".advSearchFields"] = array();
$tdatacalcalendar[".advSearchFields"][] = "DateField";
$tdatacalcalendar[".advSearchFields"][] = "Subject";

$tdatacalcalendar[".tableType"] = "list";

$tdatacalcalendar[".printerPageOrientation"] = 0;
$tdatacalcalendar[".nPrinterPageScale"] = 100;

$tdatacalcalendar[".nPrinterSplitRecords"] = 40;

$tdatacalcalendar[".nPrinterPDFSplitRecords"] = 40;



$tdatacalcalendar[".geocodingEnabled"] = false;





$tdatacalcalendar[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatacalcalendar[".pageSize"] = 20;

$tdatacalcalendar[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacalcalendar[".strOrderBy"] = $tstrOrderBy;

$tdatacalcalendar[".orderindexes"] = array();

$tdatacalcalendar[".sqlHead"] = "SELECT id,  DateField,  Description,  Subject,  TimeField,  EndTime,  DayEvent,  EndDate,  Period,  Recurrence,  Category,  OwnerID,  PeriodDays";
$tdatacalcalendar[".sqlFrom"] = "FROM calcalendar";
$tdatacalcalendar[".sqlWhereExpr"] = "";
$tdatacalcalendar[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalcalendar[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalcalendar[".arrGroupsPerPage"] = $arrGPP;


$tableKeyscalcalendar = array();
$tableKeyscalcalendar[] = "id";
$tdatacalcalendar[".Keys"] = $tableKeyscalcalendar;

$tdatacalcalendar[".listFields"] = array();
$tdatacalcalendar[".listFields"][] = "Subject";
$tdatacalcalendar[".listFields"][] = "Description";
$tdatacalcalendar[".listFields"][] = "Category";
$tdatacalcalendar[".listFields"][] = "DateField";
$tdatacalcalendar[".listFields"][] = "EndDate";
$tdatacalcalendar[".listFields"][] = "TimeField";
$tdatacalcalendar[".listFields"][] = "EndTime";
$tdatacalcalendar[".listFields"][] = "Period";
$tdatacalcalendar[".listFields"][] = "PeriodDays";

$tdatacalcalendar[".hideMobileList"] = array();


$tdatacalcalendar[".viewFields"] = array();
$tdatacalcalendar[".viewFields"][] = "DateField";
$tdatacalcalendar[".viewFields"][] = "PeriodDays";
$tdatacalcalendar[".viewFields"][] = "TimeField";
$tdatacalcalendar[".viewFields"][] = "Subject";
$tdatacalcalendar[".viewFields"][] = "Description";
$tdatacalcalendar[".viewFields"][] = "Category";
$tdatacalcalendar[".viewFields"][] = "EndTime";
$tdatacalcalendar[".viewFields"][] = "DayEvent";
$tdatacalcalendar[".viewFields"][] = "EndDate";
$tdatacalcalendar[".viewFields"][] = "Period";
$tdatacalcalendar[".viewFields"][] = "Recurrence";

$tdatacalcalendar[".addFields"] = array();
$tdatacalcalendar[".addFields"][] = "DateField";
$tdatacalcalendar[".addFields"][] = "Description";
$tdatacalcalendar[".addFields"][] = "Subject";
$tdatacalcalendar[".addFields"][] = "TimeField";
$tdatacalcalendar[".addFields"][] = "EndTime";
$tdatacalcalendar[".addFields"][] = "DayEvent";
$tdatacalcalendar[".addFields"][] = "EndDate";
$tdatacalcalendar[".addFields"][] = "Period";
$tdatacalcalendar[".addFields"][] = "Recurrence";
$tdatacalcalendar[".addFields"][] = "Category";
$tdatacalcalendar[".addFields"][] = "PeriodDays";

$tdatacalcalendar[".masterListFields"] = array();
$tdatacalcalendar[".masterListFields"][] = "DateField";
$tdatacalcalendar[".masterListFields"][] = "PeriodDays";

$tdatacalcalendar[".inlineAddFields"] = array();

$tdatacalcalendar[".editFields"] = array();
$tdatacalcalendar[".editFields"][] = "DateField";
$tdatacalcalendar[".editFields"][] = "Recurrence";
$tdatacalcalendar[".editFields"][] = "TimeField";
$tdatacalcalendar[".editFields"][] = "Subject";
$tdatacalcalendar[".editFields"][] = "Description";
$tdatacalcalendar[".editFields"][] = "Category";
$tdatacalcalendar[".editFields"][] = "EndTime";
$tdatacalcalendar[".editFields"][] = "DayEvent";
$tdatacalcalendar[".editFields"][] = "EndDate";
$tdatacalcalendar[".editFields"][] = "Period";
$tdatacalcalendar[".editFields"][] = "PeriodDays";

$tdatacalcalendar[".inlineEditFields"] = array();

$tdatacalcalendar[".updateSelectedFields"] = array();
$tdatacalcalendar[".updateSelectedFields"][] = "DateField";
$tdatacalcalendar[".updateSelectedFields"][] = "Recurrence";
$tdatacalcalendar[".updateSelectedFields"][] = "TimeField";
$tdatacalcalendar[".updateSelectedFields"][] = "Subject";
$tdatacalcalendar[".updateSelectedFields"][] = "Description";
$tdatacalcalendar[".updateSelectedFields"][] = "Category";
$tdatacalcalendar[".updateSelectedFields"][] = "EndTime";
$tdatacalcalendar[".updateSelectedFields"][] = "DayEvent";
$tdatacalcalendar[".updateSelectedFields"][] = "EndDate";
$tdatacalcalendar[".updateSelectedFields"][] = "Period";
$tdatacalcalendar[".updateSelectedFields"][] = "PeriodDays";


$tdatacalcalendar[".exportFields"] = array();
$tdatacalcalendar[".exportFields"][] = "DateField";
$tdatacalcalendar[".exportFields"][] = "PeriodDays";
$tdatacalcalendar[".exportFields"][] = "EndDate";
$tdatacalcalendar[".exportFields"][] = "Subject";
$tdatacalcalendar[".exportFields"][] = "TimeField";
$tdatacalcalendar[".exportFields"][] = "EndTime";
$tdatacalcalendar[".exportFields"][] = "Description";
$tdatacalcalendar[".exportFields"][] = "Category";
$tdatacalcalendar[".exportFields"][] = "Period";

$tdatacalcalendar[".importFields"] = array();

$tdatacalcalendar[".printFields"] = array();
$tdatacalcalendar[".printFields"][] = "DateField";
$tdatacalcalendar[".printFields"][] = "PeriodDays";
$tdatacalcalendar[".printFields"][] = "EndDate";
$tdatacalcalendar[".printFields"][] = "Subject";
$tdatacalcalendar[".printFields"][] = "TimeField";
$tdatacalcalendar[".printFields"][] = "EndTime";
$tdatacalcalendar[".printFields"][] = "Description";
$tdatacalcalendar[".printFields"][] = "Category";
$tdatacalcalendar[".printFields"][] = "Period";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","id");
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








	$tdatacalcalendar["id"] = $fdata;
//	DateField
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DateField";
	$fdata["GoodName"] = "DateField";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","DateField");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DateField";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DateField";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Long Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatacalcalendar["DateField"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","Description");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Description";

	
	
				$fdata["FieldPermissions"] = true;

			
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

	
	
	
				$edata["nRows"] = 250;
			$edata["nCols"] = 500;

	
	
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacalcalendar["Description"] = $fdata;
//	Subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Subject";
	$fdata["GoodName"] = "Subject";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","Subject");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Subject";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Subject";

	
	
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
			$edata["EditParams"].= " maxlength=200";

	
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




	$tdatacalcalendar["Subject"] = $fdata;
//	TimeField
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TimeField";
	$fdata["GoodName"] = "TimeField";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","TimeField");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TimeField";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TimeField";

	
	
				$fdata["FieldPermissions"] = true;

			
//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacalcalendar["TimeField"] = $fdata;
//	EndTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EndTime";
	$fdata["GoodName"] = "EndTime";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","EndTime");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EndTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EndTime";

	
	
				$fdata["FieldPermissions"] = true;

			
//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacalcalendar["EndTime"] = $fdata;
//	DayEvent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DayEvent";
	$fdata["GoodName"] = "DayEvent";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","DayEvent");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "DayEvent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DayEvent";

	
	
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
		
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacalcalendar["DayEvent"] = $fdata;
//	EndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "EndDate";
	$fdata["GoodName"] = "EndDate";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","EndDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EndDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EndDate";

	
	
				$fdata["FieldPermissions"] = true;

			
//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Long Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacalcalendar["EndDate"] = $fdata;
//	Period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Period";
	$fdata["GoodName"] = "Period";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","Period");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Period";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Period";

	
	
				$fdata["FieldPermissions"] = true;

			
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "calperiod";
	$edata["LookupConnId"] = "Tables";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ValueField";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Period";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
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








	$tdatacalcalendar["Period"] = $fdata;
//	Recurrence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Recurrence";
	$fdata["GoodName"] = "Recurrence";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","Recurrence");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Recurrence";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Recurrence";

	
	
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
		
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacalcalendar["Recurrence"] = $fdata;
//	Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Category";
	$fdata["GoodName"] = "Category";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","Category");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "calcategory";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Category";
	
	

	
	$edata["LookupOrderBy"] = "id";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
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








	$tdatacalcalendar["Category"] = $fdata;
//	OwnerID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "OwnerID";
	$fdata["GoodName"] = "OwnerID";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","OwnerID");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "OwnerID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OwnerID";

	
	
			
			
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
		
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacalcalendar["OwnerID"] = $fdata;
//	PeriodDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PeriodDays";
	$fdata["GoodName"] = "PeriodDays";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","PeriodDays");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PeriodDays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PeriodDays";

	
	
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
	$edata["LookupTable"] = "calweekdays";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "daynum";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "dayname";
	
	

	
	$edata["LookupOrderBy"] = "daynum";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacalcalendar["PeriodDays"] = $fdata;


$tables_data["calcalendar"]=&$tdatacalcalendar;
$field_labels["calcalendar"] = &$fieldLabelscalcalendar;
$fieldToolTips["calcalendar"] = &$fieldToolTipscalcalendar;
$placeHolders["calcalendar"] = &$placeHolderscalcalendar;
$page_titles["calcalendar"] = &$pageTitlescalcalendar;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["calcalendar"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["calcalendar"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_calcalendar()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  DateField,  Description,  Subject,  TimeField,  EndTime,  DayEvent,  EndDate,  Period,  Recurrence,  Category,  OwnerID,  PeriodDays";
$proto0["m_strFrom"] = "FROM calcalendar";
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
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "calcalendar";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DateField",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto8["m_sql"] = "DateField";
$proto8["m_srcTableName"] = "calcalendar";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto10["m_sql"] = "Description";
$proto10["m_srcTableName"] = "calcalendar";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Subject",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto12["m_sql"] = "Subject";
$proto12["m_srcTableName"] = "calcalendar";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeField",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto14["m_sql"] = "TimeField";
$proto14["m_srcTableName"] = "calcalendar";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "EndTime",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto16["m_sql"] = "EndTime";
$proto16["m_srcTableName"] = "calcalendar";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DayEvent",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto18["m_sql"] = "DayEvent";
$proto18["m_srcTableName"] = "calcalendar";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "EndDate",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto20["m_sql"] = "EndDate";
$proto20["m_srcTableName"] = "calcalendar";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Period",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto22["m_sql"] = "Period";
$proto22["m_srcTableName"] = "calcalendar";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Recurrence",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto24["m_sql"] = "Recurrence";
$proto24["m_srcTableName"] = "calcalendar";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Category",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto26["m_sql"] = "Category";
$proto26["m_srcTableName"] = "calcalendar";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "OwnerID",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto28["m_sql"] = "OwnerID";
$proto28["m_srcTableName"] = "calcalendar";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "PeriodDays",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto30["m_sql"] = "PeriodDays";
$proto30["m_srcTableName"] = "calcalendar";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "calcalendar";
$proto33["m_srcTableName"] = "calcalendar";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "DateField";
$proto33["m_columns"][] = "Description";
$proto33["m_columns"][] = "Subject";
$proto33["m_columns"][] = "TimeField";
$proto33["m_columns"][] = "EndTime";
$proto33["m_columns"][] = "DayEvent";
$proto33["m_columns"][] = "EndDate";
$proto33["m_columns"][] = "Period";
$proto33["m_columns"][] = "PeriodDays";
$proto33["m_columns"][] = "Recurrence";
$proto33["m_columns"][] = "Category";
$proto33["m_columns"][] = "OwnerID";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "calcalendar";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "calcalendar";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="calcalendar";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_calcalendar = createSqlQuery_calcalendar();


	
		;

													

$tdatacalcalendar[".sqlquery"] = $queryData_calcalendar;

include_once(getabspath("include/calcalendar_events.php"));
$tableEvents["calcalendar"] = new eventclass_calcalendar;
$tdatacalcalendar[".hasEvents"] = true;

?>
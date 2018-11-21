<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacalmonthly = array();
	$tdatacalmonthly[".truncateText"] = true;
	$tdatacalmonthly[".NumberOfChars"] = 80;
	$tdatacalmonthly[".ShortName"] = "calmonthly";
	$tdatacalmonthly[".OwnerID"] = "OwnerID";
	$tdatacalmonthly[".OriginalTable"] = "calcalendar";

//	field labels
$fieldLabelscalmonthly = array();
$fieldToolTipscalmonthly = array();
$pageTitlescalmonthly = array();
$placeHolderscalmonthly = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscalmonthly["English"] = array();
	$fieldToolTipscalmonthly["English"] = array();
	$placeHolderscalmonthly["English"] = array();
	$pageTitlescalmonthly["English"] = array();
	$fieldLabelscalmonthly["English"]["id"] = "Id";
	$fieldToolTipscalmonthly["English"]["id"] = "";
	$placeHolderscalmonthly["English"]["id"] = "";
	$fieldLabelscalmonthly["English"]["DateField"] = "When";
	$fieldToolTipscalmonthly["English"]["DateField"] = "";
	$placeHolderscalmonthly["English"]["DateField"] = "";
	$fieldLabelscalmonthly["English"]["Description"] = "Description";
	$fieldToolTipscalmonthly["English"]["Description"] = "";
	$placeHolderscalmonthly["English"]["Description"] = "";
	$fieldLabelscalmonthly["English"]["Subject"] = "What";
	$fieldToolTipscalmonthly["English"]["Subject"] = "";
	$placeHolderscalmonthly["English"]["Subject"] = "";
	$fieldLabelscalmonthly["English"]["TimeField"] = "From";
	$fieldToolTipscalmonthly["English"]["TimeField"] = "";
	$placeHolderscalmonthly["English"]["TimeField"] = "";
	$fieldLabelscalmonthly["English"]["EndTime"] = "To";
	$fieldToolTipscalmonthly["English"]["EndTime"] = "";
	$placeHolderscalmonthly["English"]["EndTime"] = "";
	$fieldLabelscalmonthly["English"]["DayEvent"] = "All day event";
	$fieldToolTipscalmonthly["English"]["DayEvent"] = "";
	$placeHolderscalmonthly["English"]["DayEvent"] = "";
	$fieldLabelscalmonthly["English"]["EndDate"] = "to date";
	$fieldToolTipscalmonthly["English"]["EndDate"] = "";
	$placeHolderscalmonthly["English"]["EndDate"] = "";
	$fieldLabelscalmonthly["English"]["Period"] = "Period";
	$fieldToolTipscalmonthly["English"]["Period"] = "";
	$placeHolderscalmonthly["English"]["Period"] = "";
	$fieldLabelscalmonthly["English"]["Recurrence"] = "Repeat";
	$fieldToolTipscalmonthly["English"]["Recurrence"] = "";
	$placeHolderscalmonthly["English"]["Recurrence"] = "";
	$fieldLabelscalmonthly["English"]["Category"] = "Category";
	$fieldToolTipscalmonthly["English"]["Category"] = "";
	$placeHolderscalmonthly["English"]["Category"] = "";
	$fieldLabelscalmonthly["English"]["OwnerID"] = "Owner ID";
	$fieldToolTipscalmonthly["English"]["OwnerID"] = "";
	$placeHolderscalmonthly["English"]["OwnerID"] = "";
	$fieldLabelscalmonthly["English"]["PeriodDays"] = "on";
	$fieldToolTipscalmonthly["English"]["PeriodDays"] = "";
	$placeHolderscalmonthly["English"]["PeriodDays"] = "";
	if (count($fieldToolTipscalmonthly["English"]))
		$tdatacalmonthly[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscalmonthly[""] = array();
	$fieldToolTipscalmonthly[""] = array();
	$placeHolderscalmonthly[""] = array();
	$pageTitlescalmonthly[""] = array();
	if (count($fieldToolTipscalmonthly[""]))
		$tdatacalmonthly[".isUseToolTips"] = true;
}


	$tdatacalmonthly[".NCSearch"] = true;



$tdatacalmonthly[".shortTableName"] = "calmonthly";
$tdatacalmonthly[".nSecOptions"] = 1;
$tdatacalmonthly[".recsPerRowPrint"] = 1;
$tdatacalmonthly[".mainTableOwnerID"] = "OwnerID";
$tdatacalmonthly[".moveNext"] = 1;
$tdatacalmonthly[".entityType"] = 1;

$tdatacalmonthly[".strOriginalTableName"] = "calcalendar";

	



$tdatacalmonthly[".showAddInPopup"] = true;

$tdatacalmonthly[".showEditInPopup"] = true;

$tdatacalmonthly[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "Calendarcalmonthly_add";
						
	;
$popupPagesLayoutNames["edit"] = "Calendarcalmonthly_edit";
						
	;
$popupPagesLayoutNames["view"] = "Calendarcalmonthly_view";
$tdatacalmonthly[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacalmonthly[".fieldsForRegister"] = array();

$tdatacalmonthly[".listAjax"] = false;

	$tdatacalmonthly[".audit"] = false;

	$tdatacalmonthly[".locking"] = false;

$tdatacalmonthly[".edit"] = true;
$tdatacalmonthly[".afterEditAction"] = 1;
$tdatacalmonthly[".closePopupAfterEdit"] = 1;
$tdatacalmonthly[".afterEditActionDetTable"] = "";

$tdatacalmonthly[".add"] = true;
$tdatacalmonthly[".afterAddAction"] = 0;
$tdatacalmonthly[".closePopupAfterAdd"] = 1;
$tdatacalmonthly[".afterAddActionDetTable"] = "";

$tdatacalmonthly[".list"] = true;





$tdatacalmonthly[".exportFormatting"] = 2;
$tdatacalmonthly[".exportDelimiter"] = ",";
		
$tdatacalmonthly[".view"] = true;


$tdatacalmonthly[".exportTo"] = true;

$tdatacalmonthly[".printFriendly"] = true;


$tdatacalmonthly[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacalmonthly[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacalmonthly[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacalmonthly[".searchSaving"] = false;
//

$tdatacalmonthly[".showSearchPanel"] = true;
		$tdatacalmonthly[".flexibleSearch"] = true;

$tdatacalmonthly[".isUseAjaxSuggest"] = true;

$tdatacalmonthly[".rowHighlite"] = true;





$tdatacalmonthly[".ajaxCodeSnippetAdded"] = false;

$tdatacalmonthly[".buttonsAdded"] = false;

$tdatacalmonthly[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacalmonthly[".isUseTimeForSearch"] = false;



$tdatacalmonthly[".badgeColor"] = "BC8F8F";


$tdatacalmonthly[".allSearchFields"] = array();
$tdatacalmonthly[".filterFields"] = array();
$tdatacalmonthly[".requiredSearchFields"] = array();



$tdatacalmonthly[".googleLikeFields"] = array();
$tdatacalmonthly[".googleLikeFields"][] = "id";
$tdatacalmonthly[".googleLikeFields"][] = "DateField";
$tdatacalmonthly[".googleLikeFields"][] = "Description";
$tdatacalmonthly[".googleLikeFields"][] = "Subject";
$tdatacalmonthly[".googleLikeFields"][] = "TimeField";
$tdatacalmonthly[".googleLikeFields"][] = "EndTime";
$tdatacalmonthly[".googleLikeFields"][] = "DayEvent";
$tdatacalmonthly[".googleLikeFields"][] = "EndDate";
$tdatacalmonthly[".googleLikeFields"][] = "Period";
$tdatacalmonthly[".googleLikeFields"][] = "Recurrence";
$tdatacalmonthly[".googleLikeFields"][] = "Category";
$tdatacalmonthly[".googleLikeFields"][] = "OwnerID";
$tdatacalmonthly[".googleLikeFields"][] = "PeriodDays";



$tdatacalmonthly[".tableType"] = "list";

$tdatacalmonthly[".printerPageOrientation"] = 0;
$tdatacalmonthly[".nPrinterPageScale"] = 100;

$tdatacalmonthly[".nPrinterSplitRecords"] = 40;

$tdatacalmonthly[".nPrinterPDFSplitRecords"] = 40;



$tdatacalmonthly[".geocodingEnabled"] = false;





$tdatacalmonthly[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatacalmonthly[".pageSize"] = 20;

$tdatacalmonthly[".warnLeavingPages"] = true;

$tdatacalmonthly[".hideEmptyFieldsOnView"] = true;


$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacalmonthly[".strOrderBy"] = $tstrOrderBy;

$tdatacalmonthly[".orderindexes"] = array();

$tdatacalmonthly[".sqlHead"] = "SELECT id,  DateField,  Description,  Subject,  TimeField,  EndTime,  DayEvent,  EndDate,  Period,  Recurrence,  Category,  OwnerID,  PeriodDays";
$tdatacalmonthly[".sqlFrom"] = "FROM calcalendar";
$tdatacalmonthly[".sqlWhereExpr"] = "";
$tdatacalmonthly[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalmonthly[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalmonthly[".arrGroupsPerPage"] = $arrGPP;


$tableKeyscalmonthly = array();
$tableKeyscalmonthly[] = "id";
$tdatacalmonthly[".Keys"] = $tableKeyscalmonthly;

$tdatacalmonthly[".listFields"] = array();
$tdatacalmonthly[".listFields"][] = "PeriodDays";
$tdatacalmonthly[".listFields"][] = "Category";
$tdatacalmonthly[".listFields"][] = "EndDate";
$tdatacalmonthly[".listFields"][] = "Period";
$tdatacalmonthly[".listFields"][] = "Recurrence";
$tdatacalmonthly[".listFields"][] = "TimeField";
$tdatacalmonthly[".listFields"][] = "EndTime";
$tdatacalmonthly[".listFields"][] = "DayEvent";
$tdatacalmonthly[".listFields"][] = "Subject";
$tdatacalmonthly[".listFields"][] = "DateField";
$tdatacalmonthly[".listFields"][] = "Description";

$tdatacalmonthly[".hideMobileList"] = array();


$tdatacalmonthly[".viewFields"] = array();
$tdatacalmonthly[".viewFields"][] = "Subject";
$tdatacalmonthly[".viewFields"][] = "Category";
$tdatacalmonthly[".viewFields"][] = "Description";
$tdatacalmonthly[".viewFields"][] = "DateField";
$tdatacalmonthly[".viewFields"][] = "EndDate";
$tdatacalmonthly[".viewFields"][] = "TimeField";
$tdatacalmonthly[".viewFields"][] = "EndTime";
$tdatacalmonthly[".viewFields"][] = "DayEvent";
$tdatacalmonthly[".viewFields"][] = "Recurrence";
$tdatacalmonthly[".viewFields"][] = "Period";
$tdatacalmonthly[".viewFields"][] = "PeriodDays";

$tdatacalmonthly[".addFields"] = array();
$tdatacalmonthly[".addFields"][] = "Subject";
$tdatacalmonthly[".addFields"][] = "Category";
$tdatacalmonthly[".addFields"][] = "Description";
$tdatacalmonthly[".addFields"][] = "DateField";
$tdatacalmonthly[".addFields"][] = "EndDate";
$tdatacalmonthly[".addFields"][] = "TimeField";
$tdatacalmonthly[".addFields"][] = "EndTime";
$tdatacalmonthly[".addFields"][] = "DayEvent";
$tdatacalmonthly[".addFields"][] = "Recurrence";
$tdatacalmonthly[".addFields"][] = "Period";
$tdatacalmonthly[".addFields"][] = "PeriodDays";

$tdatacalmonthly[".masterListFields"] = array();
$tdatacalmonthly[".masterListFields"][] = "PeriodDays";

$tdatacalmonthly[".inlineAddFields"] = array();

$tdatacalmonthly[".editFields"] = array();
$tdatacalmonthly[".editFields"][] = "Subject";
$tdatacalmonthly[".editFields"][] = "Category";
$tdatacalmonthly[".editFields"][] = "Description";
$tdatacalmonthly[".editFields"][] = "DateField";
$tdatacalmonthly[".editFields"][] = "EndDate";
$tdatacalmonthly[".editFields"][] = "TimeField";
$tdatacalmonthly[".editFields"][] = "EndTime";
$tdatacalmonthly[".editFields"][] = "DayEvent";
$tdatacalmonthly[".editFields"][] = "Recurrence";
$tdatacalmonthly[".editFields"][] = "Period";
$tdatacalmonthly[".editFields"][] = "PeriodDays";

$tdatacalmonthly[".inlineEditFields"] = array();

$tdatacalmonthly[".updateSelectedFields"] = array();
$tdatacalmonthly[".updateSelectedFields"][] = "Subject";
$tdatacalmonthly[".updateSelectedFields"][] = "Category";
$tdatacalmonthly[".updateSelectedFields"][] = "Description";
$tdatacalmonthly[".updateSelectedFields"][] = "DateField";
$tdatacalmonthly[".updateSelectedFields"][] = "EndDate";
$tdatacalmonthly[".updateSelectedFields"][] = "TimeField";
$tdatacalmonthly[".updateSelectedFields"][] = "EndTime";
$tdatacalmonthly[".updateSelectedFields"][] = "DayEvent";
$tdatacalmonthly[".updateSelectedFields"][] = "Recurrence";
$tdatacalmonthly[".updateSelectedFields"][] = "Period";
$tdatacalmonthly[".updateSelectedFields"][] = "PeriodDays";


$tdatacalmonthly[".exportFields"] = array();
$tdatacalmonthly[".exportFields"][] = "PeriodDays";
$tdatacalmonthly[".exportFields"][] = "Subject";
$tdatacalmonthly[".exportFields"][] = "Category";
$tdatacalmonthly[".exportFields"][] = "Description";
$tdatacalmonthly[".exportFields"][] = "DateField";
$tdatacalmonthly[".exportFields"][] = "EndDate";
$tdatacalmonthly[".exportFields"][] = "TimeField";
$tdatacalmonthly[".exportFields"][] = "EndTime";
$tdatacalmonthly[".exportFields"][] = "DayEvent";
$tdatacalmonthly[".exportFields"][] = "Recurrence";
$tdatacalmonthly[".exportFields"][] = "Period";

$tdatacalmonthly[".importFields"] = array();

$tdatacalmonthly[".printFields"] = array();
$tdatacalmonthly[".printFields"][] = "PeriodDays";
$tdatacalmonthly[".printFields"][] = "Subject";
$tdatacalmonthly[".printFields"][] = "Category";
$tdatacalmonthly[".printFields"][] = "Description";
$tdatacalmonthly[".printFields"][] = "DateField";
$tdatacalmonthly[".printFields"][] = "EndDate";
$tdatacalmonthly[".printFields"][] = "TimeField";
$tdatacalmonthly[".printFields"][] = "EndTime";
$tdatacalmonthly[".printFields"][] = "DayEvent";
$tdatacalmonthly[".printFields"][] = "Recurrence";
$tdatacalmonthly[".printFields"][] = "Period";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calmonthly","id");
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








	$tdatacalmonthly["id"] = $fdata;
//	DateField
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DateField";
	$fdata["GoodName"] = "DateField";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calmonthly","DateField");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DateField";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DateField";

	
	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacalmonthly["DateField"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calmonthly","Description");
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

	
	
	
				$edata["nRows"] = 30;
			$edata["nCols"] = 420;

	
	
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacalmonthly["Description"] = $fdata;
//	Subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Subject";
	$fdata["GoodName"] = "Subject";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calmonthly","Subject");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
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

		$edata["controlWidth"] = 420;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacalmonthly["Subject"] = $fdata;
//	TimeField
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TimeField";
	$fdata["GoodName"] = "TimeField";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calmonthly","TimeField");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "calglobals";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TimePeriod";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "TimePeriod";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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








	$tdatacalmonthly["TimeField"] = $fdata;
//	EndTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EndTime";
	$fdata["GoodName"] = "EndTime";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calmonthly","EndTime");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "calglobals";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TimePeriod";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "TimePeriod";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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








	$tdatacalmonthly["EndTime"] = $fdata;
//	DayEvent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DayEvent";
	$fdata["GoodName"] = "DayEvent";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calmonthly","DayEvent");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DayEvent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DayEvent";

	
	
				$fdata["FieldPermissions"] = true;

			
//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	
		
	


	
	
	
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








	$tdatacalmonthly["DayEvent"] = $fdata;
//	EndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "EndDate";
	$fdata["GoodName"] = "EndDate";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calmonthly","EndDate");
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








	$tdatacalmonthly["EndDate"] = $fdata;
//	Period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Period";
	$fdata["GoodName"] = "Period";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calmonthly","Period");
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
	
	

	
	$edata["LookupOrderBy"] = "id";

	
	
	
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








	$tdatacalmonthly["Period"] = $fdata;
//	Recurrence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Recurrence";
	$fdata["GoodName"] = "Recurrence";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calmonthly","Recurrence");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Recurrence";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Recurrence";

	
	
				$fdata["FieldPermissions"] = true;

			
//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	
		
	


	
	
	
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








	$tdatacalmonthly["Recurrence"] = $fdata;
//	Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Category";
	$fdata["GoodName"] = "Category";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calmonthly","Category");
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
	
	

	
	$edata["LookupOrderBy"] = "Category";

	
	
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








	$tdatacalmonthly["Category"] = $fdata;
//	OwnerID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "OwnerID";
	$fdata["GoodName"] = "OwnerID";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calmonthly","OwnerID");
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








	$tdatacalmonthly["OwnerID"] = $fdata;
//	PeriodDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PeriodDays";
	$fdata["GoodName"] = "PeriodDays";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calmonthly","PeriodDays");
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








	$tdatacalmonthly["PeriodDays"] = $fdata;


$tables_data["calmonthly"]=&$tdatacalmonthly;
$field_labels["calmonthly"] = &$fieldLabelscalmonthly;
$fieldToolTips["calmonthly"] = &$fieldToolTipscalmonthly;
$placeHolders["calmonthly"] = &$placeHolderscalmonthly;
$page_titles["calmonthly"] = &$pageTitlescalmonthly;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["calmonthly"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["calmonthly"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_calmonthly()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "id,  DateField,  Description,  Subject,  TimeField,  EndTime,  DayEvent,  EndDate,  Period,  Recurrence,  Category,  OwnerID,  PeriodDays";
$proto3["m_strFrom"] = "FROM calcalendar";
$proto3["m_strWhere"] = "";
$proto3["m_strOrderBy"] = "";
	
		;
			$proto3["cipherer"] = null;
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

$proto3["m_where"] = $obj;
$proto7=array();
$proto7["m_sql"] = "";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

$proto3["m_having"] = $obj;
$proto3["m_fieldlist"] = array();
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calmonthly"
));

$proto9["m_sql"] = "id";
$proto9["m_srcTableName"] = "calmonthly";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "DateField",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calmonthly"
));

$proto11["m_sql"] = "DateField";
$proto11["m_srcTableName"] = "calmonthly";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calmonthly"
));

$proto13["m_sql"] = "Description";
$proto13["m_srcTableName"] = "calmonthly";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Subject",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calmonthly"
));

$proto15["m_sql"] = "Subject";
$proto15["m_srcTableName"] = "calmonthly";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto3["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeField",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calmonthly"
));

$proto17["m_sql"] = "TimeField";
$proto17["m_srcTableName"] = "calmonthly";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto3["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "EndTime",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calmonthly"
));

$proto19["m_sql"] = "EndTime";
$proto19["m_srcTableName"] = "calmonthly";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto3["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "DayEvent",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calmonthly"
));

$proto21["m_sql"] = "DayEvent";
$proto21["m_srcTableName"] = "calmonthly";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto3["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "EndDate",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calmonthly"
));

$proto23["m_sql"] = "EndDate";
$proto23["m_srcTableName"] = "calmonthly";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto3["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Period",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calmonthly"
));

$proto25["m_sql"] = "Period";
$proto25["m_srcTableName"] = "calmonthly";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto3["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Recurrence",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calmonthly"
));

$proto27["m_sql"] = "Recurrence";
$proto27["m_srcTableName"] = "calmonthly";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto3["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Category",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calmonthly"
));

$proto29["m_sql"] = "Category";
$proto29["m_srcTableName"] = "calmonthly";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto3["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "OwnerID",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calmonthly"
));

$proto31["m_sql"] = "OwnerID";
$proto31["m_srcTableName"] = "calmonthly";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto3["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "PeriodDays",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calmonthly"
));

$proto33["m_sql"] = "PeriodDays";
$proto33["m_srcTableName"] = "calmonthly";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "calcalendar";
$proto36["m_srcTableName"] = "calmonthly";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "id";
$proto36["m_columns"][] = "DateField";
$proto36["m_columns"][] = "Description";
$proto36["m_columns"][] = "Subject";
$proto36["m_columns"][] = "TimeField";
$proto36["m_columns"][] = "EndTime";
$proto36["m_columns"][] = "DayEvent";
$proto36["m_columns"][] = "EndDate";
$proto36["m_columns"][] = "Period";
$proto36["m_columns"][] = "PeriodDays";
$proto36["m_columns"][] = "Recurrence";
$proto36["m_columns"][] = "Category";
$proto36["m_columns"][] = "OwnerID";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "calcalendar";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "calmonthly";
$proto37=array();
$proto37["m_sql"] = "";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="calmonthly";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_calmonthly = createSqlQuery_calmonthly();


	
		;

													

$tdatacalmonthly[".sqlquery"] = $queryData_calmonthly;

include_once(getabspath("include/calmonthly_events.php"));
$tableEvents["calmonthly"] = new eventclass_calmonthly;
$tdatacalmonthly[".hasEvents"] = true;

?>
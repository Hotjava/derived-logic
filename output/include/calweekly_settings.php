<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacalweekly = array();
	$tdatacalweekly[".truncateText"] = true;
	$tdatacalweekly[".NumberOfChars"] = 32;
	$tdatacalweekly[".ShortName"] = "calweekly";
	$tdatacalweekly[".OwnerID"] = "OwnerID";
	$tdatacalweekly[".OriginalTable"] = "calcalendar";

//	field labels
$fieldLabelscalweekly = array();
$fieldToolTipscalweekly = array();
$pageTitlescalweekly = array();
$placeHolderscalweekly = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscalweekly["English"] = array();
	$fieldToolTipscalweekly["English"] = array();
	$placeHolderscalweekly["English"] = array();
	$pageTitlescalweekly["English"] = array();
	$fieldLabelscalweekly["English"]["id"] = "Id";
	$fieldToolTipscalweekly["English"]["id"] = "";
	$placeHolderscalweekly["English"]["id"] = "";
	$fieldLabelscalweekly["English"]["DateField"] = "When";
	$fieldToolTipscalweekly["English"]["DateField"] = "";
	$placeHolderscalweekly["English"]["DateField"] = "";
	$fieldLabelscalweekly["English"]["Description"] = "Description";
	$fieldToolTipscalweekly["English"]["Description"] = "";
	$placeHolderscalweekly["English"]["Description"] = "";
	$fieldLabelscalweekly["English"]["Subject"] = "What";
	$fieldToolTipscalweekly["English"]["Subject"] = "";
	$placeHolderscalweekly["English"]["Subject"] = "";
	$fieldLabelscalweekly["English"]["TimeField"] = "From";
	$fieldToolTipscalweekly["English"]["TimeField"] = "";
	$placeHolderscalweekly["English"]["TimeField"] = "";
	$fieldLabelscalweekly["English"]["EndTime"] = "To";
	$fieldToolTipscalweekly["English"]["EndTime"] = "";
	$placeHolderscalweekly["English"]["EndTime"] = "";
	$fieldLabelscalweekly["English"]["DayEvent"] = "All day event";
	$fieldToolTipscalweekly["English"]["DayEvent"] = "";
	$placeHolderscalweekly["English"]["DayEvent"] = "";
	$fieldLabelscalweekly["English"]["EndDate"] = "to date";
	$fieldToolTipscalweekly["English"]["EndDate"] = "";
	$placeHolderscalweekly["English"]["EndDate"] = "";
	$fieldLabelscalweekly["English"]["Period"] = "Period";
	$fieldToolTipscalweekly["English"]["Period"] = "";
	$placeHolderscalweekly["English"]["Period"] = "";
	$fieldLabelscalweekly["English"]["Recurrence"] = "Repeat";
	$fieldToolTipscalweekly["English"]["Recurrence"] = "";
	$placeHolderscalweekly["English"]["Recurrence"] = "";
	$fieldLabelscalweekly["English"]["Category"] = "Category";
	$fieldToolTipscalweekly["English"]["Category"] = "";
	$placeHolderscalweekly["English"]["Category"] = "";
	$fieldLabelscalweekly["English"]["OwnerID"] = "Owner ID";
	$fieldToolTipscalweekly["English"]["OwnerID"] = "";
	$placeHolderscalweekly["English"]["OwnerID"] = "";
	$fieldLabelscalweekly["English"]["PeriodDays"] = "on";
	$fieldToolTipscalweekly["English"]["PeriodDays"] = "";
	$placeHolderscalweekly["English"]["PeriodDays"] = "";
	if (count($fieldToolTipscalweekly["English"]))
		$tdatacalweekly[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscalweekly[""] = array();
	$fieldToolTipscalweekly[""] = array();
	$placeHolderscalweekly[""] = array();
	$pageTitlescalweekly[""] = array();
	if (count($fieldToolTipscalweekly[""]))
		$tdatacalweekly[".isUseToolTips"] = true;
}


	$tdatacalweekly[".NCSearch"] = true;



$tdatacalweekly[".shortTableName"] = "calweekly";
$tdatacalweekly[".nSecOptions"] = 1;
$tdatacalweekly[".recsPerRowPrint"] = 1;
$tdatacalweekly[".mainTableOwnerID"] = "OwnerID";
$tdatacalweekly[".moveNext"] = 1;
$tdatacalweekly[".entityType"] = 1;

$tdatacalweekly[".strOriginalTableName"] = "calcalendar";

	



$tdatacalweekly[".showAddInPopup"] = true;

$tdatacalweekly[".showEditInPopup"] = true;

$tdatacalweekly[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "Calendarcalweekly_add";
						
	;
$popupPagesLayoutNames["edit"] = "Calendarcalweekly_edit";
						
	;
$popupPagesLayoutNames["view"] = "Calendarcalweekly_view";
$tdatacalweekly[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacalweekly[".fieldsForRegister"] = array();

$tdatacalweekly[".listAjax"] = false;

	$tdatacalweekly[".audit"] = false;

	$tdatacalweekly[".locking"] = false;

$tdatacalweekly[".edit"] = true;
$tdatacalweekly[".afterEditAction"] = 1;
$tdatacalweekly[".closePopupAfterEdit"] = 1;
$tdatacalweekly[".afterEditActionDetTable"] = "";

$tdatacalweekly[".add"] = true;
$tdatacalweekly[".afterAddAction"] = 1;
$tdatacalweekly[".closePopupAfterAdd"] = 1;
$tdatacalweekly[".afterAddActionDetTable"] = "";

$tdatacalweekly[".list"] = true;





$tdatacalweekly[".exportFormatting"] = 2;
$tdatacalweekly[".exportDelimiter"] = ",";
		
$tdatacalweekly[".view"] = true;


$tdatacalweekly[".exportTo"] = true;

$tdatacalweekly[".printFriendly"] = true;


$tdatacalweekly[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacalweekly[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacalweekly[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacalweekly[".searchSaving"] = false;
//

$tdatacalweekly[".showSearchPanel"] = true;
		$tdatacalweekly[".flexibleSearch"] = true;

$tdatacalweekly[".isUseAjaxSuggest"] = true;

$tdatacalweekly[".rowHighlite"] = true;





$tdatacalweekly[".ajaxCodeSnippetAdded"] = false;

$tdatacalweekly[".buttonsAdded"] = false;

$tdatacalweekly[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacalweekly[".isUseTimeForSearch"] = false;





$tdatacalweekly[".allSearchFields"] = array();
$tdatacalweekly[".filterFields"] = array();
$tdatacalweekly[".requiredSearchFields"] = array();



$tdatacalweekly[".googleLikeFields"] = array();
$tdatacalweekly[".googleLikeFields"][] = "id";
$tdatacalweekly[".googleLikeFields"][] = "DateField";
$tdatacalweekly[".googleLikeFields"][] = "Description";
$tdatacalweekly[".googleLikeFields"][] = "Subject";
$tdatacalweekly[".googleLikeFields"][] = "TimeField";
$tdatacalweekly[".googleLikeFields"][] = "EndTime";
$tdatacalweekly[".googleLikeFields"][] = "DayEvent";
$tdatacalweekly[".googleLikeFields"][] = "EndDate";
$tdatacalweekly[".googleLikeFields"][] = "Period";
$tdatacalweekly[".googleLikeFields"][] = "Recurrence";
$tdatacalweekly[".googleLikeFields"][] = "Category";
$tdatacalweekly[".googleLikeFields"][] = "OwnerID";
$tdatacalweekly[".googleLikeFields"][] = "PeriodDays";



$tdatacalweekly[".tableType"] = "list";

$tdatacalweekly[".printerPageOrientation"] = 0;
$tdatacalweekly[".nPrinterPageScale"] = 100;

$tdatacalweekly[".nPrinterSplitRecords"] = 40;

$tdatacalweekly[".nPrinterPDFSplitRecords"] = 40;



$tdatacalweekly[".geocodingEnabled"] = false;





$tdatacalweekly[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatacalweekly[".pageSize"] = 20;

$tdatacalweekly[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacalweekly[".strOrderBy"] = $tstrOrderBy;

$tdatacalweekly[".orderindexes"] = array();

$tdatacalweekly[".sqlHead"] = "SELECT id,  DateField,  Description,  Subject,  TimeField,  EndTime,  DayEvent,  EndDate,  Period,  Recurrence,  Category,  OwnerID,  PeriodDays";
$tdatacalweekly[".sqlFrom"] = "FROM calcalendar";
$tdatacalweekly[".sqlWhereExpr"] = "";
$tdatacalweekly[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalweekly[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalweekly[".arrGroupsPerPage"] = $arrGPP;


$tableKeyscalweekly = array();
$tableKeyscalweekly[] = "id";
$tdatacalweekly[".Keys"] = $tableKeyscalweekly;

$tdatacalweekly[".listFields"] = array();
$tdatacalweekly[".listFields"][] = "PeriodDays";
$tdatacalweekly[".listFields"][] = "Category";
$tdatacalweekly[".listFields"][] = "EndDate";
$tdatacalweekly[".listFields"][] = "Period";
$tdatacalweekly[".listFields"][] = "Recurrence";
$tdatacalweekly[".listFields"][] = "EndTime";
$tdatacalweekly[".listFields"][] = "DayEvent";
$tdatacalweekly[".listFields"][] = "TimeField";
$tdatacalweekly[".listFields"][] = "Subject";
$tdatacalweekly[".listFields"][] = "DateField";
$tdatacalweekly[".listFields"][] = "Description";

$tdatacalweekly[".hideMobileList"] = array();


$tdatacalweekly[".viewFields"] = array();
$tdatacalweekly[".viewFields"][] = "Subject";
$tdatacalweekly[".viewFields"][] = "Category";
$tdatacalweekly[".viewFields"][] = "Description";
$tdatacalweekly[".viewFields"][] = "DateField";
$tdatacalweekly[".viewFields"][] = "EndDate";
$tdatacalweekly[".viewFields"][] = "TimeField";
$tdatacalweekly[".viewFields"][] = "EndTime";
$tdatacalweekly[".viewFields"][] = "DayEvent";
$tdatacalweekly[".viewFields"][] = "Recurrence";
$tdatacalweekly[".viewFields"][] = "Period";
$tdatacalweekly[".viewFields"][] = "PeriodDays";

$tdatacalweekly[".addFields"] = array();
$tdatacalweekly[".addFields"][] = "Subject";
$tdatacalweekly[".addFields"][] = "Category";
$tdatacalweekly[".addFields"][] = "Description";
$tdatacalweekly[".addFields"][] = "DateField";
$tdatacalweekly[".addFields"][] = "EndDate";
$tdatacalweekly[".addFields"][] = "TimeField";
$tdatacalweekly[".addFields"][] = "EndTime";
$tdatacalweekly[".addFields"][] = "DayEvent";
$tdatacalweekly[".addFields"][] = "Recurrence";
$tdatacalweekly[".addFields"][] = "Period";
$tdatacalweekly[".addFields"][] = "PeriodDays";

$tdatacalweekly[".masterListFields"] = array();
$tdatacalweekly[".masterListFields"][] = "PeriodDays";

$tdatacalweekly[".inlineAddFields"] = array();

$tdatacalweekly[".editFields"] = array();
$tdatacalweekly[".editFields"][] = "Subject";
$tdatacalweekly[".editFields"][] = "Category";
$tdatacalweekly[".editFields"][] = "Description";
$tdatacalweekly[".editFields"][] = "DateField";
$tdatacalweekly[".editFields"][] = "EndDate";
$tdatacalweekly[".editFields"][] = "TimeField";
$tdatacalweekly[".editFields"][] = "EndTime";
$tdatacalweekly[".editFields"][] = "DayEvent";
$tdatacalweekly[".editFields"][] = "Recurrence";
$tdatacalweekly[".editFields"][] = "Period";
$tdatacalweekly[".editFields"][] = "PeriodDays";

$tdatacalweekly[".inlineEditFields"] = array();

$tdatacalweekly[".updateSelectedFields"] = array();
$tdatacalweekly[".updateSelectedFields"][] = "Subject";
$tdatacalweekly[".updateSelectedFields"][] = "Category";
$tdatacalweekly[".updateSelectedFields"][] = "Description";
$tdatacalweekly[".updateSelectedFields"][] = "DateField";
$tdatacalweekly[".updateSelectedFields"][] = "EndDate";
$tdatacalweekly[".updateSelectedFields"][] = "TimeField";
$tdatacalweekly[".updateSelectedFields"][] = "EndTime";
$tdatacalweekly[".updateSelectedFields"][] = "DayEvent";
$tdatacalweekly[".updateSelectedFields"][] = "Recurrence";
$tdatacalweekly[".updateSelectedFields"][] = "Period";
$tdatacalweekly[".updateSelectedFields"][] = "PeriodDays";


$tdatacalweekly[".exportFields"] = array();
$tdatacalweekly[".exportFields"][] = "DateField";
$tdatacalweekly[".exportFields"][] = "Description";
$tdatacalweekly[".exportFields"][] = "Subject";
$tdatacalweekly[".exportFields"][] = "TimeField";
$tdatacalweekly[".exportFields"][] = "EndTime";
$tdatacalweekly[".exportFields"][] = "DayEvent";
$tdatacalweekly[".exportFields"][] = "EndDate";
$tdatacalweekly[".exportFields"][] = "Period";
$tdatacalweekly[".exportFields"][] = "Recurrence";
$tdatacalweekly[".exportFields"][] = "Category";
$tdatacalweekly[".exportFields"][] = "PeriodDays";

$tdatacalweekly[".importFields"] = array();

$tdatacalweekly[".printFields"] = array();
$tdatacalweekly[".printFields"][] = "PeriodDays";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calweekly","id");
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








	$tdatacalweekly["id"] = $fdata;
//	DateField
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DateField";
	$fdata["GoodName"] = "DateField";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calweekly","DateField");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
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








	$tdatacalweekly["DateField"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calweekly","Description");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
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








	$tdatacalweekly["Description"] = $fdata;
//	Subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Subject";
	$fdata["GoodName"] = "Subject";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calweekly","Subject");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
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
			$edata["EditParams"].= " maxlength=500";

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








	$tdatacalweekly["Subject"] = $fdata;
//	TimeField
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TimeField";
	$fdata["GoodName"] = "TimeField";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calweekly","TimeField");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
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








	$tdatacalweekly["TimeField"] = $fdata;
//	EndTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EndTime";
	$fdata["GoodName"] = "EndTime";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calweekly","EndTime");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
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








	$tdatacalweekly["EndTime"] = $fdata;
//	DayEvent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DayEvent";
	$fdata["GoodName"] = "DayEvent";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calweekly","DayEvent");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
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








	$tdatacalweekly["DayEvent"] = $fdata;
//	EndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "EndDate";
	$fdata["GoodName"] = "EndDate";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calweekly","EndDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
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








	$tdatacalweekly["EndDate"] = $fdata;
//	Period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Period";
	$fdata["GoodName"] = "Period";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calweekly","Period");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
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








	$tdatacalweekly["Period"] = $fdata;
//	Recurrence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Recurrence";
	$fdata["GoodName"] = "Recurrence";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calweekly","Recurrence");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
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








	$tdatacalweekly["Recurrence"] = $fdata;
//	Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Category";
	$fdata["GoodName"] = "Category";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calweekly","Category");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
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








	$tdatacalweekly["Category"] = $fdata;
//	OwnerID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "OwnerID";
	$fdata["GoodName"] = "OwnerID";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calweekly","OwnerID");
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








	$tdatacalweekly["OwnerID"] = $fdata;
//	PeriodDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PeriodDays";
	$fdata["GoodName"] = "PeriodDays";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calweekly","PeriodDays");
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








	$tdatacalweekly["PeriodDays"] = $fdata;


$tables_data["calweekly"]=&$tdatacalweekly;
$field_labels["calweekly"] = &$fieldLabelscalweekly;
$fieldToolTips["calweekly"] = &$fieldToolTipscalweekly;
$placeHolders["calweekly"] = &$placeHolderscalweekly;
$page_titles["calweekly"] = &$pageTitlescalweekly;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["calweekly"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["calweekly"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_calweekly()
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
	"m_srcTableName" => "calweekly"
));

$proto9["m_sql"] = "id";
$proto9["m_srcTableName"] = "calweekly";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "DateField",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calweekly"
));

$proto11["m_sql"] = "DateField";
$proto11["m_srcTableName"] = "calweekly";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calweekly"
));

$proto13["m_sql"] = "Description";
$proto13["m_srcTableName"] = "calweekly";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Subject",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calweekly"
));

$proto15["m_sql"] = "Subject";
$proto15["m_srcTableName"] = "calweekly";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto3["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeField",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calweekly"
));

$proto17["m_sql"] = "TimeField";
$proto17["m_srcTableName"] = "calweekly";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto3["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "EndTime",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calweekly"
));

$proto19["m_sql"] = "EndTime";
$proto19["m_srcTableName"] = "calweekly";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto3["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "DayEvent",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calweekly"
));

$proto21["m_sql"] = "DayEvent";
$proto21["m_srcTableName"] = "calweekly";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto3["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "EndDate",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calweekly"
));

$proto23["m_sql"] = "EndDate";
$proto23["m_srcTableName"] = "calweekly";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto3["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Period",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calweekly"
));

$proto25["m_sql"] = "Period";
$proto25["m_srcTableName"] = "calweekly";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto3["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Recurrence",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calweekly"
));

$proto27["m_sql"] = "Recurrence";
$proto27["m_srcTableName"] = "calweekly";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto3["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Category",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calweekly"
));

$proto29["m_sql"] = "Category";
$proto29["m_srcTableName"] = "calweekly";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto3["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "OwnerID",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calweekly"
));

$proto31["m_sql"] = "OwnerID";
$proto31["m_srcTableName"] = "calweekly";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto3["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "PeriodDays",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calweekly"
));

$proto33["m_sql"] = "PeriodDays";
$proto33["m_srcTableName"] = "calweekly";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "calcalendar";
$proto36["m_srcTableName"] = "calweekly";
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
$proto35["m_srcTableName"] = "calweekly";
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
$proto3["m_srcTableName"]="calweekly";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_calweekly = createSqlQuery_calweekly();


	
		;

													

$tdatacalweekly[".sqlquery"] = $queryData_calweekly;

include_once(getabspath("include/calweekly_events.php"));
$tableEvents["calweekly"] = new eventclass_calweekly;
$tdatacalweekly[".hasEvents"] = true;

?>
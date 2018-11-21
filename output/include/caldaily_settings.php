<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacaldaily = array();
	$tdatacaldaily[".truncateText"] = true;
	$tdatacaldaily[".NumberOfChars"] = 80;
	$tdatacaldaily[".ShortName"] = "caldaily";
	$tdatacaldaily[".OwnerID"] = "OwnerID";
	$tdatacaldaily[".OriginalTable"] = "calcalendar";

//	field labels
$fieldLabelscaldaily = array();
$fieldToolTipscaldaily = array();
$pageTitlescaldaily = array();
$placeHolderscaldaily = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscaldaily["English"] = array();
	$fieldToolTipscaldaily["English"] = array();
	$placeHolderscaldaily["English"] = array();
	$pageTitlescaldaily["English"] = array();
	$fieldLabelscaldaily["English"]["id"] = "Id";
	$fieldToolTipscaldaily["English"]["id"] = "";
	$placeHolderscaldaily["English"]["id"] = "";
	$fieldLabelscaldaily["English"]["DateField"] = "When";
	$fieldToolTipscaldaily["English"]["DateField"] = "";
	$placeHolderscaldaily["English"]["DateField"] = "";
	$fieldLabelscaldaily["English"]["Description"] = "Description";
	$fieldToolTipscaldaily["English"]["Description"] = "";
	$placeHolderscaldaily["English"]["Description"] = "";
	$fieldLabelscaldaily["English"]["Subject"] = "What";
	$fieldToolTipscaldaily["English"]["Subject"] = "";
	$placeHolderscaldaily["English"]["Subject"] = "";
	$fieldLabelscaldaily["English"]["TimeField"] = "From";
	$fieldToolTipscaldaily["English"]["TimeField"] = "";
	$placeHolderscaldaily["English"]["TimeField"] = "";
	$fieldLabelscaldaily["English"]["EndTime"] = "To";
	$fieldToolTipscaldaily["English"]["EndTime"] = "";
	$placeHolderscaldaily["English"]["EndTime"] = "";
	$fieldLabelscaldaily["English"]["DayEvent"] = "All day event";
	$fieldToolTipscaldaily["English"]["DayEvent"] = "";
	$placeHolderscaldaily["English"]["DayEvent"] = "";
	$fieldLabelscaldaily["English"]["EndDate"] = "to date";
	$fieldToolTipscaldaily["English"]["EndDate"] = "";
	$placeHolderscaldaily["English"]["EndDate"] = "";
	$fieldLabelscaldaily["English"]["Period"] = "Period";
	$fieldToolTipscaldaily["English"]["Period"] = "";
	$placeHolderscaldaily["English"]["Period"] = "";
	$fieldLabelscaldaily["English"]["Recurrence"] = "Repeat";
	$fieldToolTipscaldaily["English"]["Recurrence"] = "";
	$placeHolderscaldaily["English"]["Recurrence"] = "";
	$fieldLabelscaldaily["English"]["Category"] = "Category";
	$fieldToolTipscaldaily["English"]["Category"] = "";
	$placeHolderscaldaily["English"]["Category"] = "";
	$fieldLabelscaldaily["English"]["OwnerID"] = "Owner ID";
	$fieldToolTipscaldaily["English"]["OwnerID"] = "";
	$placeHolderscaldaily["English"]["OwnerID"] = "";
	$fieldLabelscaldaily["English"]["PeriodDays"] = "on";
	$fieldToolTipscaldaily["English"]["PeriodDays"] = "";
	$placeHolderscaldaily["English"]["PeriodDays"] = "";
	if (count($fieldToolTipscaldaily["English"]))
		$tdatacaldaily[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscaldaily[""] = array();
	$fieldToolTipscaldaily[""] = array();
	$placeHolderscaldaily[""] = array();
	$pageTitlescaldaily[""] = array();
	if (count($fieldToolTipscaldaily[""]))
		$tdatacaldaily[".isUseToolTips"] = true;
}


	$tdatacaldaily[".NCSearch"] = true;



$tdatacaldaily[".shortTableName"] = "caldaily";
$tdatacaldaily[".nSecOptions"] = 1;
$tdatacaldaily[".recsPerRowPrint"] = 1;
$tdatacaldaily[".mainTableOwnerID"] = "OwnerID";
$tdatacaldaily[".moveNext"] = 1;
$tdatacaldaily[".entityType"] = 1;

$tdatacaldaily[".strOriginalTableName"] = "calcalendar";

	



$tdatacaldaily[".showAddInPopup"] = false;

$tdatacaldaily[".showEditInPopup"] = false;

$tdatacaldaily[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacaldaily[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacaldaily[".fieldsForRegister"] = array();

$tdatacaldaily[".listAjax"] = false;

	$tdatacaldaily[".audit"] = false;

	$tdatacaldaily[".locking"] = false;

$tdatacaldaily[".edit"] = true;
$tdatacaldaily[".afterEditAction"] = 1;
$tdatacaldaily[".closePopupAfterEdit"] = 1;
$tdatacaldaily[".afterEditActionDetTable"] = "";

$tdatacaldaily[".add"] = true;
$tdatacaldaily[".afterAddAction"] = 1;
$tdatacaldaily[".closePopupAfterAdd"] = 1;
$tdatacaldaily[".afterAddActionDetTable"] = "";

$tdatacaldaily[".list"] = true;





$tdatacaldaily[".exportFormatting"] = 2;
$tdatacaldaily[".exportDelimiter"] = ",";
		
$tdatacaldaily[".view"] = true;


$tdatacaldaily[".exportTo"] = true;

$tdatacaldaily[".printFriendly"] = true;

$tdatacaldaily[".delete"] = true;

$tdatacaldaily[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacaldaily[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacaldaily[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacaldaily[".searchSaving"] = false;
//

$tdatacaldaily[".showSearchPanel"] = true;
		$tdatacaldaily[".flexibleSearch"] = true;

$tdatacaldaily[".isUseAjaxSuggest"] = true;

$tdatacaldaily[".rowHighlite"] = true;





$tdatacaldaily[".ajaxCodeSnippetAdded"] = false;

$tdatacaldaily[".buttonsAdded"] = false;

$tdatacaldaily[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacaldaily[".isUseTimeForSearch"] = true;



$tdatacaldaily[".badgeColor"] = "4682B4";


$tdatacaldaily[".allSearchFields"] = array();
$tdatacaldaily[".filterFields"] = array();
$tdatacaldaily[".requiredSearchFields"] = array();

$tdatacaldaily[".allSearchFields"][] = "Description";
	$tdatacaldaily[".allSearchFields"][] = "Subject";
	

$tdatacaldaily[".googleLikeFields"] = array();
$tdatacaldaily[".googleLikeFields"][] = "Description";
$tdatacaldaily[".googleLikeFields"][] = "Subject";
$tdatacaldaily[".googleLikeFields"][] = "Category";
$tdatacaldaily[".googleLikeFields"][] = "PeriodDays";


$tdatacaldaily[".advSearchFields"] = array();
$tdatacaldaily[".advSearchFields"][] = "Description";
$tdatacaldaily[".advSearchFields"][] = "Subject";

$tdatacaldaily[".tableType"] = "list";

$tdatacaldaily[".printerPageOrientation"] = 0;
$tdatacaldaily[".nPrinterPageScale"] = 100;

$tdatacaldaily[".nPrinterSplitRecords"] = 40;

$tdatacaldaily[".nPrinterPDFSplitRecords"] = 40;



$tdatacaldaily[".geocodingEnabled"] = false;





$tdatacaldaily[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatacaldaily[".pageSize"] = 20;

$tdatacaldaily[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacaldaily[".strOrderBy"] = $tstrOrderBy;

$tdatacaldaily[".orderindexes"] = array();

$tdatacaldaily[".sqlHead"] = "SELECT id,  DateField,  Description,  Subject,  TimeField,  EndTime,  DayEvent,  EndDate,  Period,  Recurrence,  Category,  OwnerID,  PeriodDays";
$tdatacaldaily[".sqlFrom"] = "FROM calcalendar";
$tdatacaldaily[".sqlWhereExpr"] = "";
$tdatacaldaily[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacaldaily[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacaldaily[".arrGroupsPerPage"] = $arrGPP;


$tableKeyscaldaily = array();
$tableKeyscaldaily[] = "id";
$tdatacaldaily[".Keys"] = $tableKeyscaldaily;

$tdatacaldaily[".listFields"] = array();
$tdatacaldaily[".listFields"][] = "Subject";
$tdatacaldaily[".listFields"][] = "Category";
$tdatacaldaily[".listFields"][] = "Description";
$tdatacaldaily[".listFields"][] = "DateField";
$tdatacaldaily[".listFields"][] = "EndDate";
$tdatacaldaily[".listFields"][] = "TimeField";
$tdatacaldaily[".listFields"][] = "EndTime";
$tdatacaldaily[".listFields"][] = "Period";
$tdatacaldaily[".listFields"][] = "PeriodDays";

$tdatacaldaily[".hideMobileList"] = array();


$tdatacaldaily[".viewFields"] = array();
$tdatacaldaily[".viewFields"][] = "Subject";
$tdatacaldaily[".viewFields"][] = "Description";
$tdatacaldaily[".viewFields"][] = "DateField";
$tdatacaldaily[".viewFields"][] = "Category";
$tdatacaldaily[".viewFields"][] = "EndDate";
$tdatacaldaily[".viewFields"][] = "TimeField";
$tdatacaldaily[".viewFields"][] = "EndTime";
$tdatacaldaily[".viewFields"][] = "DayEvent";
$tdatacaldaily[".viewFields"][] = "Recurrence";
$tdatacaldaily[".viewFields"][] = "Period";
$tdatacaldaily[".viewFields"][] = "PeriodDays";

$tdatacaldaily[".addFields"] = array();
$tdatacaldaily[".addFields"][] = "Subject";
$tdatacaldaily[".addFields"][] = "Category";
$tdatacaldaily[".addFields"][] = "Description";
$tdatacaldaily[".addFields"][] = "DateField";
$tdatacaldaily[".addFields"][] = "EndDate";
$tdatacaldaily[".addFields"][] = "TimeField";
$tdatacaldaily[".addFields"][] = "EndTime";
$tdatacaldaily[".addFields"][] = "DayEvent";
$tdatacaldaily[".addFields"][] = "Recurrence";
$tdatacaldaily[".addFields"][] = "Period";
$tdatacaldaily[".addFields"][] = "PeriodDays";

$tdatacaldaily[".masterListFields"] = array();
$tdatacaldaily[".masterListFields"][] = "PeriodDays";

$tdatacaldaily[".inlineAddFields"] = array();

$tdatacaldaily[".editFields"] = array();
$tdatacaldaily[".editFields"][] = "Subject";
$tdatacaldaily[".editFields"][] = "Category";
$tdatacaldaily[".editFields"][] = "Description";
$tdatacaldaily[".editFields"][] = "DateField";
$tdatacaldaily[".editFields"][] = "EndDate";
$tdatacaldaily[".editFields"][] = "TimeField";
$tdatacaldaily[".editFields"][] = "EndTime";
$tdatacaldaily[".editFields"][] = "DayEvent";
$tdatacaldaily[".editFields"][] = "Recurrence";
$tdatacaldaily[".editFields"][] = "Period";
$tdatacaldaily[".editFields"][] = "PeriodDays";

$tdatacaldaily[".inlineEditFields"] = array();

$tdatacaldaily[".updateSelectedFields"] = array();
$tdatacaldaily[".updateSelectedFields"][] = "Subject";
$tdatacaldaily[".updateSelectedFields"][] = "Category";
$tdatacaldaily[".updateSelectedFields"][] = "Description";
$tdatacaldaily[".updateSelectedFields"][] = "DateField";
$tdatacaldaily[".updateSelectedFields"][] = "EndDate";
$tdatacaldaily[".updateSelectedFields"][] = "TimeField";
$tdatacaldaily[".updateSelectedFields"][] = "EndTime";
$tdatacaldaily[".updateSelectedFields"][] = "DayEvent";
$tdatacaldaily[".updateSelectedFields"][] = "Recurrence";
$tdatacaldaily[".updateSelectedFields"][] = "Period";
$tdatacaldaily[".updateSelectedFields"][] = "PeriodDays";


$tdatacaldaily[".exportFields"] = array();
$tdatacaldaily[".exportFields"][] = "DateField";
$tdatacaldaily[".exportFields"][] = "PeriodDays";
$tdatacaldaily[".exportFields"][] = "EndDate";
$tdatacaldaily[".exportFields"][] = "Subject";
$tdatacaldaily[".exportFields"][] = "TimeField";
$tdatacaldaily[".exportFields"][] = "EndTime";
$tdatacaldaily[".exportFields"][] = "Description";
$tdatacaldaily[".exportFields"][] = "Category";
$tdatacaldaily[".exportFields"][] = "Period";

$tdatacaldaily[".importFields"] = array();

$tdatacaldaily[".printFields"] = array();
$tdatacaldaily[".printFields"][] = "PeriodDays";
$tdatacaldaily[".printFields"][] = "DateField";
$tdatacaldaily[".printFields"][] = "EndDate";
$tdatacaldaily[".printFields"][] = "Subject";
$tdatacaldaily[".printFields"][] = "TimeField";
$tdatacaldaily[".printFields"][] = "EndTime";
$tdatacaldaily[".printFields"][] = "Category";
$tdatacaldaily[".printFields"][] = "Description";
$tdatacaldaily[".printFields"][] = "Period";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("caldaily","id");
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








	$tdatacaldaily["id"] = $fdata;
//	DateField
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DateField";
	$fdata["GoodName"] = "DateField";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("caldaily","DateField");
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








	$tdatacaldaily["DateField"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("caldaily","Description");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

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
			$edata["nCols"] = 500;

	
	
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
	// the end of search options settings




	$tdatacaldaily["Description"] = $fdata;
//	Subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Subject";
	$fdata["GoodName"] = "Subject";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("caldaily","Subject");
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
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 500;

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




	$tdatacaldaily["Subject"] = $fdata;
//	TimeField
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TimeField";
	$fdata["GoodName"] = "TimeField";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("caldaily","TimeField");
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








	$tdatacaldaily["TimeField"] = $fdata;
//	EndTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EndTime";
	$fdata["GoodName"] = "EndTime";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("caldaily","EndTime");
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








	$tdatacaldaily["EndTime"] = $fdata;
//	DayEvent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DayEvent";
	$fdata["GoodName"] = "DayEvent";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("caldaily","DayEvent");
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








	$tdatacaldaily["DayEvent"] = $fdata;
//	EndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "EndDate";
	$fdata["GoodName"] = "EndDate";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("caldaily","EndDate");
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








	$tdatacaldaily["EndDate"] = $fdata;
//	Period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Period";
	$fdata["GoodName"] = "Period";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("caldaily","Period");
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








	$tdatacaldaily["Period"] = $fdata;
//	Recurrence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Recurrence";
	$fdata["GoodName"] = "Recurrence";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("caldaily","Recurrence");
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








	$tdatacaldaily["Recurrence"] = $fdata;
//	Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Category";
	$fdata["GoodName"] = "Category";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("caldaily","Category");
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








	$tdatacaldaily["Category"] = $fdata;
//	OwnerID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "OwnerID";
	$fdata["GoodName"] = "OwnerID";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("caldaily","OwnerID");
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








	$tdatacaldaily["OwnerID"] = $fdata;
//	PeriodDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PeriodDays";
	$fdata["GoodName"] = "PeriodDays";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("caldaily","PeriodDays");
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








	$tdatacaldaily["PeriodDays"] = $fdata;


$tables_data["caldaily"]=&$tdatacaldaily;
$field_labels["caldaily"] = &$fieldLabelscaldaily;
$fieldToolTips["caldaily"] = &$fieldToolTipscaldaily;
$placeHolders["caldaily"] = &$placeHolderscaldaily;
$page_titles["caldaily"] = &$pageTitlescaldaily;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["caldaily"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["caldaily"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_caldaily()
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
	"m_srcTableName" => "caldaily"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "caldaily";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DateField",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "caldaily"
));

$proto8["m_sql"] = "DateField";
$proto8["m_srcTableName"] = "caldaily";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "caldaily"
));

$proto10["m_sql"] = "Description";
$proto10["m_srcTableName"] = "caldaily";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Subject",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "caldaily"
));

$proto12["m_sql"] = "Subject";
$proto12["m_srcTableName"] = "caldaily";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeField",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "caldaily"
));

$proto14["m_sql"] = "TimeField";
$proto14["m_srcTableName"] = "caldaily";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "EndTime",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "caldaily"
));

$proto16["m_sql"] = "EndTime";
$proto16["m_srcTableName"] = "caldaily";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DayEvent",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "caldaily"
));

$proto18["m_sql"] = "DayEvent";
$proto18["m_srcTableName"] = "caldaily";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "EndDate",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "caldaily"
));

$proto20["m_sql"] = "EndDate";
$proto20["m_srcTableName"] = "caldaily";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Period",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "caldaily"
));

$proto22["m_sql"] = "Period";
$proto22["m_srcTableName"] = "caldaily";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Recurrence",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "caldaily"
));

$proto24["m_sql"] = "Recurrence";
$proto24["m_srcTableName"] = "caldaily";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Category",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "caldaily"
));

$proto26["m_sql"] = "Category";
$proto26["m_srcTableName"] = "caldaily";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "OwnerID",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "caldaily"
));

$proto28["m_sql"] = "OwnerID";
$proto28["m_srcTableName"] = "caldaily";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "PeriodDays",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "caldaily"
));

$proto30["m_sql"] = "PeriodDays";
$proto30["m_srcTableName"] = "caldaily";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "calcalendar";
$proto33["m_srcTableName"] = "caldaily";
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
$proto32["m_srcTableName"] = "caldaily";
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
$proto0["m_srcTableName"]="caldaily";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_caldaily = createSqlQuery_caldaily();


	
		;

													

$tdatacaldaily[".sqlquery"] = $queryData_caldaily;

include_once(getabspath("include/caldaily_events.php"));
$tableEvents["caldaily"] = new eventclass_caldaily;
$tdatacaldaily[".hasEvents"] = true;

?>
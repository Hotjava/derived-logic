<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacalyearly = array();
	$tdatacalyearly[".truncateText"] = true;
	$tdatacalyearly[".NumberOfChars"] = 80;
	$tdatacalyearly[".ShortName"] = "calyearly";
	$tdatacalyearly[".OwnerID"] = "OwnerID";
	$tdatacalyearly[".OriginalTable"] = "calcalendar";

//	field labels
$fieldLabelscalyearly = array();
$fieldToolTipscalyearly = array();
$pageTitlescalyearly = array();
$placeHolderscalyearly = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscalyearly["English"] = array();
	$fieldToolTipscalyearly["English"] = array();
	$placeHolderscalyearly["English"] = array();
	$pageTitlescalyearly["English"] = array();
	$fieldLabelscalyearly["English"]["id"] = "Id";
	$fieldToolTipscalyearly["English"]["id"] = "";
	$placeHolderscalyearly["English"]["id"] = "";
	$fieldLabelscalyearly["English"]["DateField"] = "When";
	$fieldToolTipscalyearly["English"]["DateField"] = "";
	$placeHolderscalyearly["English"]["DateField"] = "";
	$fieldLabelscalyearly["English"]["Description"] = "Description";
	$fieldToolTipscalyearly["English"]["Description"] = "";
	$placeHolderscalyearly["English"]["Description"] = "";
	$fieldLabelscalyearly["English"]["Subject"] = "What";
	$fieldToolTipscalyearly["English"]["Subject"] = "";
	$placeHolderscalyearly["English"]["Subject"] = "";
	$fieldLabelscalyearly["English"]["TimeField"] = "Time Field";
	$fieldToolTipscalyearly["English"]["TimeField"] = "";
	$placeHolderscalyearly["English"]["TimeField"] = "";
	$fieldLabelscalyearly["English"]["EndTime"] = "End Time";
	$fieldToolTipscalyearly["English"]["EndTime"] = "";
	$placeHolderscalyearly["English"]["EndTime"] = "";
	$fieldLabelscalyearly["English"]["DayEvent"] = "Day Event";
	$fieldToolTipscalyearly["English"]["DayEvent"] = "";
	$placeHolderscalyearly["English"]["DayEvent"] = "";
	$fieldLabelscalyearly["English"]["EndDate"] = "End Date";
	$fieldToolTipscalyearly["English"]["EndDate"] = "";
	$placeHolderscalyearly["English"]["EndDate"] = "";
	$fieldLabelscalyearly["English"]["Period"] = "Period";
	$fieldToolTipscalyearly["English"]["Period"] = "";
	$placeHolderscalyearly["English"]["Period"] = "";
	$fieldLabelscalyearly["English"]["Recurrence"] = "Recurrence";
	$fieldToolTipscalyearly["English"]["Recurrence"] = "";
	$placeHolderscalyearly["English"]["Recurrence"] = "";
	$fieldLabelscalyearly["English"]["Category"] = "Category";
	$fieldToolTipscalyearly["English"]["Category"] = "";
	$placeHolderscalyearly["English"]["Category"] = "";
	$fieldLabelscalyearly["English"]["OwnerID"] = "Owner ID";
	$fieldToolTipscalyearly["English"]["OwnerID"] = "";
	$placeHolderscalyearly["English"]["OwnerID"] = "";
	$fieldLabelscalyearly["English"]["PeriodDays"] = "Period Days";
	$fieldToolTipscalyearly["English"]["PeriodDays"] = "";
	$placeHolderscalyearly["English"]["PeriodDays"] = "";
	if (count($fieldToolTipscalyearly["English"]))
		$tdatacalyearly[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscalyearly[""] = array();
	$fieldToolTipscalyearly[""] = array();
	$placeHolderscalyearly[""] = array();
	$pageTitlescalyearly[""] = array();
	if (count($fieldToolTipscalyearly[""]))
		$tdatacalyearly[".isUseToolTips"] = true;
}


	$tdatacalyearly[".NCSearch"] = true;



$tdatacalyearly[".shortTableName"] = "calyearly";
$tdatacalyearly[".nSecOptions"] = 1;
$tdatacalyearly[".recsPerRowPrint"] = 1;
$tdatacalyearly[".mainTableOwnerID"] = "OwnerID";
$tdatacalyearly[".moveNext"] = 1;
$tdatacalyearly[".entityType"] = 1;

$tdatacalyearly[".strOriginalTableName"] = "calcalendar";

	



$tdatacalyearly[".showAddInPopup"] = false;

$tdatacalyearly[".showEditInPopup"] = false;

$tdatacalyearly[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacalyearly[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacalyearly[".fieldsForRegister"] = array();

$tdatacalyearly[".listAjax"] = false;

	$tdatacalyearly[".audit"] = false;

	$tdatacalyearly[".locking"] = false;



$tdatacalyearly[".list"] = true;











$tdatacalyearly[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacalyearly[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacalyearly[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacalyearly[".searchSaving"] = false;
//

$tdatacalyearly[".showSearchPanel"] = true;
		$tdatacalyearly[".flexibleSearch"] = true;

$tdatacalyearly[".isUseAjaxSuggest"] = true;

$tdatacalyearly[".rowHighlite"] = true;





$tdatacalyearly[".ajaxCodeSnippetAdded"] = false;

$tdatacalyearly[".buttonsAdded"] = false;

$tdatacalyearly[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacalyearly[".isUseTimeForSearch"] = false;





$tdatacalyearly[".allSearchFields"] = array();
$tdatacalyearly[".filterFields"] = array();
$tdatacalyearly[".requiredSearchFields"] = array();



$tdatacalyearly[".googleLikeFields"] = array();
$tdatacalyearly[".googleLikeFields"][] = "id";
$tdatacalyearly[".googleLikeFields"][] = "DateField";
$tdatacalyearly[".googleLikeFields"][] = "Description";
$tdatacalyearly[".googleLikeFields"][] = "Subject";
$tdatacalyearly[".googleLikeFields"][] = "TimeField";
$tdatacalyearly[".googleLikeFields"][] = "EndTime";
$tdatacalyearly[".googleLikeFields"][] = "DayEvent";
$tdatacalyearly[".googleLikeFields"][] = "EndDate";
$tdatacalyearly[".googleLikeFields"][] = "Period";
$tdatacalyearly[".googleLikeFields"][] = "Recurrence";
$tdatacalyearly[".googleLikeFields"][] = "Category";
$tdatacalyearly[".googleLikeFields"][] = "OwnerID";
$tdatacalyearly[".googleLikeFields"][] = "PeriodDays";



$tdatacalyearly[".tableType"] = "list";

$tdatacalyearly[".printerPageOrientation"] = 0;
$tdatacalyearly[".nPrinterPageScale"] = 100;

$tdatacalyearly[".nPrinterSplitRecords"] = 40;

$tdatacalyearly[".nPrinterPDFSplitRecords"] = 40;



$tdatacalyearly[".geocodingEnabled"] = false;





$tdatacalyearly[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatacalyearly[".pageSize"] = 20;

$tdatacalyearly[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacalyearly[".strOrderBy"] = $tstrOrderBy;

$tdatacalyearly[".orderindexes"] = array();

$tdatacalyearly[".sqlHead"] = "SELECT id,  DateField,  Description,  Subject,  TimeField,  EndTime,  DayEvent,  EndDate,  Period,  Recurrence,  Category,  OwnerID,  PeriodDays";
$tdatacalyearly[".sqlFrom"] = "FROM calcalendar";
$tdatacalyearly[".sqlWhereExpr"] = "";
$tdatacalyearly[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalyearly[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalyearly[".arrGroupsPerPage"] = $arrGPP;


$tableKeyscalyearly = array();
$tableKeyscalyearly[] = "id";
$tdatacalyearly[".Keys"] = $tableKeyscalyearly;

$tdatacalyearly[".listFields"] = array();

$tdatacalyearly[".hideMobileList"] = array();


$tdatacalyearly[".viewFields"] = array();

$tdatacalyearly[".addFields"] = array();

$tdatacalyearly[".masterListFields"] = array();
$tdatacalyearly[".masterListFields"][] = "PeriodDays";

$tdatacalyearly[".inlineAddFields"] = array();

$tdatacalyearly[".editFields"] = array();

$tdatacalyearly[".inlineEditFields"] = array();

$tdatacalyearly[".updateSelectedFields"] = array();


$tdatacalyearly[".exportFields"] = array();

$tdatacalyearly[".importFields"] = array();

$tdatacalyearly[".printFields"] = array();


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calyearly","id");
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








	$tdatacalyearly["id"] = $fdata;
//	DateField
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DateField";
	$fdata["GoodName"] = "DateField";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calyearly","DateField");
	$fdata["FieldType"] = 7;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "DateField";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DateField";

	
	
			
			
//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
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








	$tdatacalyearly["DateField"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calyearly","Description");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Description";

	
	
			
			
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








	$tdatacalyearly["Description"] = $fdata;
//	Subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Subject";
	$fdata["GoodName"] = "Subject";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calyearly","Subject");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Subject";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Subject";

	
	
			
			
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
			$edata["EditParams"].= " maxlength=200";

	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacalyearly["Subject"] = $fdata;
//	TimeField
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TimeField";
	$fdata["GoodName"] = "TimeField";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calyearly","TimeField");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "TimeField";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TimeField";

	
	
			
			
//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=20";

	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacalyearly["TimeField"] = $fdata;
//	EndTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EndTime";
	$fdata["GoodName"] = "EndTime";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calyearly","EndTime");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "EndTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EndTime";

	
	
			
			
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
			$edata["EditParams"].= " maxlength=10";

	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacalyearly["EndTime"] = $fdata;
//	DayEvent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DayEvent";
	$fdata["GoodName"] = "DayEvent";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calyearly","DayEvent");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "DayEvent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DayEvent";

	
	
			
			
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








	$tdatacalyearly["DayEvent"] = $fdata;
//	EndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "EndDate";
	$fdata["GoodName"] = "EndDate";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calyearly","EndDate");
	$fdata["FieldType"] = 7;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "EndDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EndDate";

	
	
			
			
//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
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








	$tdatacalyearly["EndDate"] = $fdata;
//	Period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Period";
	$fdata["GoodName"] = "Period";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calyearly","Period");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Period";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Period";

	
	
			
			
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
			$edata["EditParams"].= " maxlength=255";

	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacalyearly["Period"] = $fdata;
//	Recurrence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Recurrence";
	$fdata["GoodName"] = "Recurrence";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calyearly","Recurrence");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Recurrence";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Recurrence";

	
	
			
			
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








	$tdatacalyearly["Recurrence"] = $fdata;
//	Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Category";
	$fdata["GoodName"] = "Category";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calyearly","Category");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Category";

	
	
			
			
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








	$tdatacalyearly["Category"] = $fdata;
//	OwnerID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "OwnerID";
	$fdata["GoodName"] = "OwnerID";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calyearly","OwnerID");
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








	$tdatacalyearly["OwnerID"] = $fdata;
//	PeriodDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PeriodDays";
	$fdata["GoodName"] = "PeriodDays";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calyearly","PeriodDays");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "PeriodDays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PeriodDays";

	
	
			
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacalyearly["PeriodDays"] = $fdata;


$tables_data["calyearly"]=&$tdatacalyearly;
$field_labels["calyearly"] = &$fieldLabelscalyearly;
$fieldToolTips["calyearly"] = &$fieldToolTipscalyearly;
$placeHolders["calyearly"] = &$placeHolderscalyearly;
$page_titles["calyearly"] = &$pageTitlescalyearly;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["calyearly"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["calyearly"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_calyearly()
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
	"m_srcTableName" => "calyearly"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "calyearly";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DateField",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calyearly"
));

$proto8["m_sql"] = "DateField";
$proto8["m_srcTableName"] = "calyearly";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calyearly"
));

$proto10["m_sql"] = "Description";
$proto10["m_srcTableName"] = "calyearly";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Subject",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calyearly"
));

$proto12["m_sql"] = "Subject";
$proto12["m_srcTableName"] = "calyearly";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeField",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calyearly"
));

$proto14["m_sql"] = "TimeField";
$proto14["m_srcTableName"] = "calyearly";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "EndTime",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calyearly"
));

$proto16["m_sql"] = "EndTime";
$proto16["m_srcTableName"] = "calyearly";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DayEvent",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calyearly"
));

$proto18["m_sql"] = "DayEvent";
$proto18["m_srcTableName"] = "calyearly";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "EndDate",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calyearly"
));

$proto20["m_sql"] = "EndDate";
$proto20["m_srcTableName"] = "calyearly";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Period",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calyearly"
));

$proto22["m_sql"] = "Period";
$proto22["m_srcTableName"] = "calyearly";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Recurrence",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calyearly"
));

$proto24["m_sql"] = "Recurrence";
$proto24["m_srcTableName"] = "calyearly";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Category",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calyearly"
));

$proto26["m_sql"] = "Category";
$proto26["m_srcTableName"] = "calyearly";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "OwnerID",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calyearly"
));

$proto28["m_sql"] = "OwnerID";
$proto28["m_srcTableName"] = "calyearly";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "PeriodDays",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calyearly"
));

$proto30["m_sql"] = "PeriodDays";
$proto30["m_srcTableName"] = "calyearly";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "calcalendar";
$proto33["m_srcTableName"] = "calyearly";
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
$proto32["m_srcTableName"] = "calyearly";
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
$proto0["m_srcTableName"]="calyearly";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_calyearly = createSqlQuery_calyearly();


	
		;

													

$tdatacalyearly[".sqlquery"] = $queryData_calyearly;

include_once(getabspath("include/calyearly_events.php"));
$tableEvents["calyearly"] = new eventclass_calyearly;
$tdatacalyearly[".hasEvents"] = true;

?>
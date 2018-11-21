<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacalglobals = array();
	$tdatacalglobals[".truncateText"] = true;
	$tdatacalglobals[".NumberOfChars"] = 80;
	$tdatacalglobals[".ShortName"] = "calglobals";
	$tdatacalglobals[".OwnerID"] = "";
	$tdatacalglobals[".OriginalTable"] = "calglobals";

//	field labels
$fieldLabelscalglobals = array();
$fieldToolTipscalglobals = array();
$pageTitlescalglobals = array();
$placeHolderscalglobals = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscalglobals["English"] = array();
	$fieldToolTipscalglobals["English"] = array();
	$placeHolderscalglobals["English"] = array();
	$pageTitlescalglobals["English"] = array();
	$fieldLabelscalglobals["English"]["id"] = "Id";
	$fieldToolTipscalglobals["English"]["id"] = "";
	$placeHolderscalglobals["English"]["id"] = "";
	$fieldLabelscalglobals["English"]["TimePeriod"] = "Time Period";
	$fieldToolTipscalglobals["English"]["TimePeriod"] = "";
	$placeHolderscalglobals["English"]["TimePeriod"] = "";
	$fieldLabelscalglobals["English"]["FirstDayOfWeek"] = "First Day Of Week";
	$fieldToolTipscalglobals["English"]["FirstDayOfWeek"] = "";
	$placeHolderscalglobals["English"]["FirstDayOfWeek"] = "";
	$fieldLabelscalglobals["English"]["EditInPast"] = "Edit In Past";
	$fieldToolTipscalglobals["English"]["EditInPast"] = "";
	$placeHolderscalglobals["English"]["EditInPast"] = "";
	$fieldLabelscalglobals["English"]["DefaultColor"] = "Default Color";
	$fieldToolTipscalglobals["English"]["DefaultColor"] = "";
	$placeHolderscalglobals["English"]["DefaultColor"] = "";
	$fieldLabelscalglobals["English"]["HolidayColor"] = "Holiday Color";
	$fieldToolTipscalglobals["English"]["HolidayColor"] = "";
	$placeHolderscalglobals["English"]["HolidayColor"] = "";
	$fieldLabelscalglobals["English"]["SubjectLength"] = "Subject Length";
	$fieldToolTipscalglobals["English"]["SubjectLength"] = "";
	$placeHolderscalglobals["English"]["SubjectLength"] = "";
	$fieldLabelscalglobals["English"]["DescriptionLength"] = "Description Length";
	$fieldToolTipscalglobals["English"]["DescriptionLength"] = "";
	$placeHolderscalglobals["English"]["DescriptionLength"] = "";
	$fieldLabelscalglobals["English"]["CountEvents"] = "Events per day";
	$fieldToolTipscalglobals["English"]["CountEvents"] = "";
	$placeHolderscalglobals["English"]["CountEvents"] = "";
	$fieldLabelscalglobals["English"]["WeekEndColor"] = "Weekend Color";
	$fieldToolTipscalglobals["English"]["WeekEndColor"] = "";
	$placeHolderscalglobals["English"]["WeekEndColor"] = "";
	$fieldLabelscalglobals["English"]["RangedColor"] = "Ranged Color";
	$fieldToolTipscalglobals["English"]["RangedColor"] = "";
	$placeHolderscalglobals["English"]["RangedColor"] = "";
	if (count($fieldToolTipscalglobals["English"]))
		$tdatacalglobals[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscalglobals[""] = array();
	$fieldToolTipscalglobals[""] = array();
	$placeHolderscalglobals[""] = array();
	$pageTitlescalglobals[""] = array();
	if (count($fieldToolTipscalglobals[""]))
		$tdatacalglobals[".isUseToolTips"] = true;
}


	$tdatacalglobals[".NCSearch"] = true;



$tdatacalglobals[".shortTableName"] = "calglobals";
$tdatacalglobals[".nSecOptions"] = 0;
$tdatacalglobals[".recsPerRowList"] = 1;
$tdatacalglobals[".recsPerRowPrint"] = 1;
$tdatacalglobals[".mainTableOwnerID"] = "";
$tdatacalglobals[".moveNext"] = 1;
$tdatacalglobals[".entityType"] = 1;

$tdatacalglobals[".strOriginalTableName"] = "calglobals";

	



$tdatacalglobals[".showAddInPopup"] = false;

$tdatacalglobals[".showEditInPopup"] = false;

$tdatacalglobals[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["view"] = "view_bootstrap";
$tdatacalglobals[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacalglobals[".fieldsForRegister"] = array();

$tdatacalglobals[".listAjax"] = false;

	$tdatacalglobals[".audit"] = false;

	$tdatacalglobals[".locking"] = false;

$tdatacalglobals[".edit"] = true;
$tdatacalglobals[".afterEditAction"] = 1;
$tdatacalglobals[".closePopupAfterEdit"] = 1;
$tdatacalglobals[".afterEditActionDetTable"] = "";


$tdatacalglobals[".list"] = true;






$tdatacalglobals[".view"] = true;





$tdatacalglobals[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacalglobals[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacalglobals[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacalglobals[".searchSaving"] = false;
//

$tdatacalglobals[".showSearchPanel"] = true;
		$tdatacalglobals[".flexibleSearch"] = true;

$tdatacalglobals[".isUseAjaxSuggest"] = true;

$tdatacalglobals[".rowHighlite"] = true;





$tdatacalglobals[".ajaxCodeSnippetAdded"] = false;

$tdatacalglobals[".buttonsAdded"] = false;

$tdatacalglobals[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacalglobals[".isUseTimeForSearch"] = false;





$tdatacalglobals[".allSearchFields"] = array();
$tdatacalglobals[".filterFields"] = array();
$tdatacalglobals[".requiredSearchFields"] = array();

$tdatacalglobals[".allSearchFields"][] = "RangedColor";
	$tdatacalglobals[".allSearchFields"][] = "FirstDayOfWeek";
	$tdatacalglobals[".allSearchFields"][] = "EditInPast";
	$tdatacalglobals[".allSearchFields"][] = "DefaultColor";
	$tdatacalglobals[".allSearchFields"][] = "HolidayColor";
	$tdatacalglobals[".allSearchFields"][] = "SubjectLength";
	$tdatacalglobals[".allSearchFields"][] = "DescriptionLength";
	$tdatacalglobals[".allSearchFields"][] = "CountEvents";
	$tdatacalglobals[".allSearchFields"][] = "WeekEndColor";
	

$tdatacalglobals[".googleLikeFields"] = array();
$tdatacalglobals[".googleLikeFields"][] = "id";
$tdatacalglobals[".googleLikeFields"][] = "TimePeriod";
$tdatacalglobals[".googleLikeFields"][] = "FirstDayOfWeek";
$tdatacalglobals[".googleLikeFields"][] = "EditInPast";
$tdatacalglobals[".googleLikeFields"][] = "DefaultColor";
$tdatacalglobals[".googleLikeFields"][] = "HolidayColor";
$tdatacalglobals[".googleLikeFields"][] = "SubjectLength";
$tdatacalglobals[".googleLikeFields"][] = "DescriptionLength";
$tdatacalglobals[".googleLikeFields"][] = "CountEvents";
$tdatacalglobals[".googleLikeFields"][] = "WeekEndColor";
$tdatacalglobals[".googleLikeFields"][] = "RangedColor";


$tdatacalglobals[".advSearchFields"] = array();
$tdatacalglobals[".advSearchFields"][] = "RangedColor";
$tdatacalglobals[".advSearchFields"][] = "FirstDayOfWeek";
$tdatacalglobals[".advSearchFields"][] = "EditInPast";
$tdatacalglobals[".advSearchFields"][] = "DefaultColor";
$tdatacalglobals[".advSearchFields"][] = "HolidayColor";
$tdatacalglobals[".advSearchFields"][] = "SubjectLength";
$tdatacalglobals[".advSearchFields"][] = "DescriptionLength";
$tdatacalglobals[".advSearchFields"][] = "CountEvents";
$tdatacalglobals[".advSearchFields"][] = "WeekEndColor";

$tdatacalglobals[".tableType"] = "list";

$tdatacalglobals[".printerPageOrientation"] = 0;
$tdatacalglobals[".nPrinterPageScale"] = 100;

$tdatacalglobals[".nPrinterSplitRecords"] = 40;

$tdatacalglobals[".nPrinterPDFSplitRecords"] = 40;



$tdatacalglobals[".geocodingEnabled"] = false;





$tdatacalglobals[".listGridLayout"] = 1;





// view page pdf

// print page pdf


$tdatacalglobals[".pageSize"] = 20;

$tdatacalglobals[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacalglobals[".strOrderBy"] = $tstrOrderBy;

$tdatacalglobals[".orderindexes"] = array();

$tdatacalglobals[".sqlHead"] = "SELECT id,  TimePeriod,  FirstDayOfWeek,  EditInPast,  DefaultColor,  HolidayColor,  SubjectLength,  DescriptionLength,  CountEvents,  WeekEndColor,  RangedColor";
$tdatacalglobals[".sqlFrom"] = "FROM calglobals";
$tdatacalglobals[".sqlWhereExpr"] = "";
$tdatacalglobals[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalglobals[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalglobals[".arrGroupsPerPage"] = $arrGPP;


$tableKeyscalglobals = array();
$tableKeyscalglobals[] = "id";
$tdatacalglobals[".Keys"] = $tableKeyscalglobals;

$tdatacalglobals[".listFields"] = array();
$tdatacalglobals[".listFields"][] = "FirstDayOfWeek";
$tdatacalglobals[".listFields"][] = "EditInPast";
$tdatacalglobals[".listFields"][] = "TimePeriod";
$tdatacalglobals[".listFields"][] = "DefaultColor";
$tdatacalglobals[".listFields"][] = "HolidayColor";
$tdatacalglobals[".listFields"][] = "WeekEndColor";
$tdatacalglobals[".listFields"][] = "RangedColor";
$tdatacalglobals[".listFields"][] = "SubjectLength";
$tdatacalglobals[".listFields"][] = "DescriptionLength";
$tdatacalglobals[".listFields"][] = "CountEvents";

$tdatacalglobals[".hideMobileList"] = array();


$tdatacalglobals[".viewFields"] = array();
$tdatacalglobals[".viewFields"][] = "SubjectLength";
$tdatacalglobals[".viewFields"][] = "DescriptionLength";
$tdatacalglobals[".viewFields"][] = "CountEvents";
$tdatacalglobals[".viewFields"][] = "TimePeriod";
$tdatacalglobals[".viewFields"][] = "FirstDayOfWeek";
$tdatacalglobals[".viewFields"][] = "EditInPast";
$tdatacalglobals[".viewFields"][] = "DefaultColor";
$tdatacalglobals[".viewFields"][] = "HolidayColor";
$tdatacalglobals[".viewFields"][] = "WeekEndColor";
$tdatacalglobals[".viewFields"][] = "RangedColor";

$tdatacalglobals[".addFields"] = array();

$tdatacalglobals[".masterListFields"] = array();
$tdatacalglobals[".masterListFields"][] = "FirstDayOfWeek";
$tdatacalglobals[".masterListFields"][] = "EditInPast";
$tdatacalglobals[".masterListFields"][] = "DefaultColor";
$tdatacalglobals[".masterListFields"][] = "HolidayColor";
$tdatacalglobals[".masterListFields"][] = "SubjectLength";
$tdatacalglobals[".masterListFields"][] = "DescriptionLength";
$tdatacalglobals[".masterListFields"][] = "CountEvents";
$tdatacalglobals[".masterListFields"][] = "WeekEndColor";
$tdatacalglobals[".masterListFields"][] = "RangedColor";

$tdatacalglobals[".inlineAddFields"] = array();

$tdatacalglobals[".editFields"] = array();
$tdatacalglobals[".editFields"][] = "SubjectLength";
$tdatacalglobals[".editFields"][] = "DescriptionLength";
$tdatacalglobals[".editFields"][] = "CountEvents";
$tdatacalglobals[".editFields"][] = "TimePeriod";
$tdatacalglobals[".editFields"][] = "FirstDayOfWeek";
$tdatacalglobals[".editFields"][] = "EditInPast";
$tdatacalglobals[".editFields"][] = "DefaultColor";
$tdatacalglobals[".editFields"][] = "HolidayColor";
$tdatacalglobals[".editFields"][] = "WeekEndColor";
$tdatacalglobals[".editFields"][] = "RangedColor";

$tdatacalglobals[".inlineEditFields"] = array();

$tdatacalglobals[".updateSelectedFields"] = array();
$tdatacalglobals[".updateSelectedFields"][] = "SubjectLength";
$tdatacalglobals[".updateSelectedFields"][] = "DescriptionLength";
$tdatacalglobals[".updateSelectedFields"][] = "CountEvents";
$tdatacalglobals[".updateSelectedFields"][] = "TimePeriod";
$tdatacalglobals[".updateSelectedFields"][] = "FirstDayOfWeek";
$tdatacalglobals[".updateSelectedFields"][] = "EditInPast";
$tdatacalglobals[".updateSelectedFields"][] = "DefaultColor";
$tdatacalglobals[".updateSelectedFields"][] = "HolidayColor";
$tdatacalglobals[".updateSelectedFields"][] = "WeekEndColor";
$tdatacalglobals[".updateSelectedFields"][] = "RangedColor";


$tdatacalglobals[".exportFields"] = array();

$tdatacalglobals[".importFields"] = array();

$tdatacalglobals[".printFields"] = array();


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","id");
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








	$tdatacalglobals["id"] = $fdata;
//	TimePeriod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TimePeriod";
	$fdata["GoodName"] = "TimePeriod";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","TimePeriod");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "TimePeriod";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TimePeriod";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "15";
	$edata["LookupValues"][] = "30";
	$edata["LookupValues"][] = "60";

	
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








	$tdatacalglobals["TimePeriod"] = $fdata;
//	FirstDayOfWeek
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FirstDayOfWeek";
	$fdata["GoodName"] = "FirstDayOfWeek";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","FirstDayOfWeek");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "FirstDayOfWeek";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FirstDayOfWeek";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "calfirstday";
	$edata["LookupConnId"] = "Tables";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "dayvalue";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "dayname";
	
	

	
	$edata["LookupOrderBy"] = "dayname";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalglobals["FirstDayOfWeek"] = $fdata;
//	EditInPast
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "EditInPast";
	$fdata["GoodName"] = "EditInPast";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","EditInPast");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "EditInPast";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EditInPast";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalglobals["EditInPast"] = $fdata;
//	DefaultColor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DefaultColor";
	$fdata["GoodName"] = "DefaultColor";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","DefaultColor");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "DefaultColor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DefaultColor";

	
	
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

	$edata = array("EditFormat" => "ColorPicker");

	
	
		
	


	
	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalglobals["DefaultColor"] = $fdata;
//	HolidayColor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "HolidayColor";
	$fdata["GoodName"] = "HolidayColor";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","HolidayColor");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "HolidayColor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HolidayColor";

	
	
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

	$edata = array("EditFormat" => "ColorPicker");

	
	
		
	


	
	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalglobals["HolidayColor"] = $fdata;
//	SubjectLength
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SubjectLength";
	$fdata["GoodName"] = "SubjectLength";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","SubjectLength");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "SubjectLength";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SubjectLength";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalglobals["SubjectLength"] = $fdata;
//	DescriptionLength
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DescriptionLength";
	$fdata["GoodName"] = "DescriptionLength";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","DescriptionLength");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "DescriptionLength";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DescriptionLength";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalglobals["DescriptionLength"] = $fdata;
//	CountEvents
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CountEvents";
	$fdata["GoodName"] = "CountEvents";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","CountEvents");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "CountEvents";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CountEvents";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalglobals["CountEvents"] = $fdata;
//	WeekEndColor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "WeekEndColor";
	$fdata["GoodName"] = "WeekEndColor";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","WeekEndColor");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "WeekEndColor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WeekEndColor";

	
	
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

	$edata = array("EditFormat" => "ColorPicker");

	
	
		
	


	
	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalglobals["WeekEndColor"] = $fdata;
//	RangedColor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "RangedColor";
	$fdata["GoodName"] = "RangedColor";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","RangedColor");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "RangedColor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RangedColor";

	
	
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

	$edata = array("EditFormat" => "ColorPicker");

	
	
		
	


	
	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalglobals["RangedColor"] = $fdata;


$tables_data["calglobals"]=&$tdatacalglobals;
$field_labels["calglobals"] = &$fieldLabelscalglobals;
$fieldToolTips["calglobals"] = &$fieldToolTipscalglobals;
$placeHolders["calglobals"] = &$placeHolderscalglobals;
$page_titles["calglobals"] = &$pageTitlescalglobals;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["calglobals"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["calglobals"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_calglobals()
{
$proto1=array();
$proto1["m_strHead"] = "SELECT";
$proto1["m_strFieldList"] = "id,  TimePeriod,  FirstDayOfWeek,  EditInPast,  DefaultColor,  HolidayColor,  SubjectLength,  DescriptionLength,  CountEvents,  WeekEndColor,  RangedColor";
$proto1["m_strFrom"] = "FROM calglobals";
$proto1["m_strWhere"] = "";
$proto1["m_strOrderBy"] = "";
	
		;
			$proto1["cipherer"] = null;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto1["m_where"] = $obj;
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

$proto1["m_having"] = $obj;
$proto1["m_fieldlist"] = array();
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto7["m_sql"] = "id";
$proto7["m_srcTableName"] = "calglobals";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto1["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "TimePeriod",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto9["m_sql"] = "TimePeriod";
$proto9["m_srcTableName"] = "calglobals";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto1["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "FirstDayOfWeek",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto11["m_sql"] = "FirstDayOfWeek";
$proto11["m_srcTableName"] = "calglobals";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto1["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "EditInPast",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto13["m_sql"] = "EditInPast";
$proto13["m_srcTableName"] = "calglobals";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto1["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "DefaultColor",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto15["m_sql"] = "DefaultColor";
$proto15["m_srcTableName"] = "calglobals";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto1["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "HolidayColor",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto17["m_sql"] = "HolidayColor";
$proto17["m_srcTableName"] = "calglobals";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto1["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "SubjectLength",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto19["m_sql"] = "SubjectLength";
$proto19["m_srcTableName"] = "calglobals";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto1["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "DescriptionLength",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto21["m_sql"] = "DescriptionLength";
$proto21["m_srcTableName"] = "calglobals";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto1["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "CountEvents",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto23["m_sql"] = "CountEvents";
$proto23["m_srcTableName"] = "calglobals";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto1["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "WeekEndColor",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto25["m_sql"] = "WeekEndColor";
$proto25["m_srcTableName"] = "calglobals";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto1["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "RangedColor",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto27["m_sql"] = "RangedColor";
$proto27["m_srcTableName"] = "calglobals";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto1["m_fieldlist"][]=$obj;
$proto1["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "calglobals";
$proto30["m_srcTableName"] = "calglobals";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "id";
$proto30["m_columns"][] = "TimePeriod";
$proto30["m_columns"][] = "FirstDayOfWeek";
$proto30["m_columns"][] = "EditInPast";
$proto30["m_columns"][] = "DefaultColor";
$proto30["m_columns"][] = "HolidayColor";
$proto30["m_columns"][] = "WeekEndColor";
$proto30["m_columns"][] = "RangedColor";
$proto30["m_columns"][] = "SubjectLength";
$proto30["m_columns"][] = "DescriptionLength";
$proto30["m_columns"][] = "CountEvents";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "calglobals";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "calglobals";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto1["m_fromlist"][]=$obj;
$proto1["m_groupby"] = array();
$proto1["m_orderby"] = array();
$proto1["m_srcTableName"]="calglobals";		
$obj = new SQLQuery($proto1);

	return $obj;
}
$queryData_calglobals = createSqlQuery_calglobals();


	
		;

											

$tdatacalglobals[".sqlquery"] = $queryData_calglobals;

include_once(getabspath("include/calglobals_events.php"));
$tableEvents["calglobals"] = new eventclass_calglobals;
$tdatacalglobals[".hasEvents"] = true;

?>
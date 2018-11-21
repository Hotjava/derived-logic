<?php
require_once(getabspath("classes/cipherer.php"));




$tdataops_contacts = array();
	$tdataops_contacts[".truncateText"] = true;
	$tdataops_contacts[".NumberOfChars"] = 80;
	$tdataops_contacts[".ShortName"] = "ops_contacts";
	$tdataops_contacts[".OwnerID"] = "";
	$tdataops_contacts[".OriginalTable"] = "ops_contacts";

//	field labels
$fieldLabelsops_contacts = array();
$fieldToolTipsops_contacts = array();
$pageTitlesops_contacts = array();
$placeHoldersops_contacts = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsops_contacts["English"] = array();
	$fieldToolTipsops_contacts["English"] = array();
	$placeHoldersops_contacts["English"] = array();
	$pageTitlesops_contacts["English"] = array();
	$fieldLabelsops_contacts["English"]["id"] = "Id";
	$fieldToolTipsops_contacts["English"]["id"] = "";
	$placeHoldersops_contacts["English"]["id"] = "";
	$fieldLabelsops_contacts["English"]["contact_name"] = "Contact Name";
	$fieldToolTipsops_contacts["English"]["contact_name"] = "";
	$placeHoldersops_contacts["English"]["contact_name"] = "";
	$fieldLabelsops_contacts["English"]["contact_tel"] = "Contact Tel";
	$fieldToolTipsops_contacts["English"]["contact_tel"] = "";
	$placeHoldersops_contacts["English"]["contact_tel"] = "";
	$fieldLabelsops_contacts["English"]["contact_email"] = "Contact Email";
	$fieldToolTipsops_contacts["English"]["contact_email"] = "";
	$placeHoldersops_contacts["English"]["contact_email"] = "";
	if (count($fieldToolTipsops_contacts["English"]))
		$tdataops_contacts[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsops_contacts[""] = array();
	$fieldToolTipsops_contacts[""] = array();
	$placeHoldersops_contacts[""] = array();
	$pageTitlesops_contacts[""] = array();
	if (count($fieldToolTipsops_contacts[""]))
		$tdataops_contacts[".isUseToolTips"] = true;
}


	$tdataops_contacts[".NCSearch"] = true;



$tdataops_contacts[".shortTableName"] = "ops_contacts";
$tdataops_contacts[".nSecOptions"] = 0;
$tdataops_contacts[".recsPerRowPrint"] = 1;
$tdataops_contacts[".mainTableOwnerID"] = "";
$tdataops_contacts[".moveNext"] = 1;
$tdataops_contacts[".entityType"] = 0;

$tdataops_contacts[".strOriginalTableName"] = "ops_contacts";

	



$tdataops_contacts[".showAddInPopup"] = false;

$tdataops_contacts[".showEditInPopup"] = false;

$tdataops_contacts[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataops_contacts[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataops_contacts[".fieldsForRegister"] = array();

$tdataops_contacts[".listAjax"] = false;

	$tdataops_contacts[".audit"] = false;

	$tdataops_contacts[".locking"] = false;

$tdataops_contacts[".edit"] = true;
$tdataops_contacts[".afterEditAction"] = 1;
$tdataops_contacts[".closePopupAfterEdit"] = 1;
$tdataops_contacts[".afterEditActionDetTable"] = "";

$tdataops_contacts[".add"] = true;
$tdataops_contacts[".afterAddAction"] = 1;
$tdataops_contacts[".closePopupAfterAdd"] = 1;
$tdataops_contacts[".afterAddActionDetTable"] = "";

$tdataops_contacts[".list"] = true;



$tdataops_contacts[".reorderRecordsByHeader"] = true;


$tdataops_contacts[".exportFormatting"] = 2;
$tdataops_contacts[".exportDelimiter"] = ",";
		
$tdataops_contacts[".view"] = true;

$tdataops_contacts[".import"] = true;

$tdataops_contacts[".exportTo"] = true;

$tdataops_contacts[".printFriendly"] = true;

$tdataops_contacts[".delete"] = true;

$tdataops_contacts[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataops_contacts[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataops_contacts[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataops_contacts[".searchSaving"] = false;
//

$tdataops_contacts[".showSearchPanel"] = true;
		$tdataops_contacts[".flexibleSearch"] = true;

$tdataops_contacts[".isUseAjaxSuggest"] = true;

$tdataops_contacts[".rowHighlite"] = true;





$tdataops_contacts[".ajaxCodeSnippetAdded"] = false;

$tdataops_contacts[".buttonsAdded"] = false;

$tdataops_contacts[".addPageEvents"] = false;

// use timepicker for search panel
$tdataops_contacts[".isUseTimeForSearch"] = false;





$tdataops_contacts[".allSearchFields"] = array();
$tdataops_contacts[".filterFields"] = array();
$tdataops_contacts[".requiredSearchFields"] = array();

$tdataops_contacts[".allSearchFields"][] = "contact_name";
	$tdataops_contacts[".allSearchFields"][] = "contact_tel";
	$tdataops_contacts[".allSearchFields"][] = "contact_email";
	

$tdataops_contacts[".googleLikeFields"] = array();
$tdataops_contacts[".googleLikeFields"][] = "id";
$tdataops_contacts[".googleLikeFields"][] = "contact_name";
$tdataops_contacts[".googleLikeFields"][] = "contact_tel";
$tdataops_contacts[".googleLikeFields"][] = "contact_email";


$tdataops_contacts[".advSearchFields"] = array();
$tdataops_contacts[".advSearchFields"][] = "contact_name";
$tdataops_contacts[".advSearchFields"][] = "contact_tel";
$tdataops_contacts[".advSearchFields"][] = "contact_email";

$tdataops_contacts[".tableType"] = "list";

$tdataops_contacts[".printerPageOrientation"] = 0;
$tdataops_contacts[".nPrinterPageScale"] = 100;

$tdataops_contacts[".nPrinterSplitRecords"] = 40;

$tdataops_contacts[".nPrinterPDFSplitRecords"] = 40;



$tdataops_contacts[".geocodingEnabled"] = false;





$tdataops_contacts[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataops_contacts[".pageSize"] = 20;

$tdataops_contacts[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataops_contacts[".strOrderBy"] = $tstrOrderBy;

$tdataops_contacts[".orderindexes"] = array();

$tdataops_contacts[".sqlHead"] = "SELECT id,  	contact_name,  	contact_tel,  	contact_email";
$tdataops_contacts[".sqlFrom"] = "FROM ops_contacts";
$tdataops_contacts[".sqlWhereExpr"] = "";
$tdataops_contacts[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataops_contacts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataops_contacts[".arrGroupsPerPage"] = $arrGPP;

$tdataops_contacts[".highlightSearchResults"] = true;

$tableKeysops_contacts = array();
$tableKeysops_contacts[] = "id";
$tdataops_contacts[".Keys"] = $tableKeysops_contacts;

$tdataops_contacts[".listFields"] = array();
$tdataops_contacts[".listFields"][] = "contact_name";
$tdataops_contacts[".listFields"][] = "contact_tel";
$tdataops_contacts[".listFields"][] = "contact_email";

$tdataops_contacts[".hideMobileList"] = array();


$tdataops_contacts[".viewFields"] = array();
$tdataops_contacts[".viewFields"][] = "contact_name";
$tdataops_contacts[".viewFields"][] = "contact_tel";
$tdataops_contacts[".viewFields"][] = "contact_email";

$tdataops_contacts[".addFields"] = array();
$tdataops_contacts[".addFields"][] = "contact_name";
$tdataops_contacts[".addFields"][] = "contact_tel";
$tdataops_contacts[".addFields"][] = "contact_email";

$tdataops_contacts[".masterListFields"] = array();
$tdataops_contacts[".masterListFields"][] = "id";
$tdataops_contacts[".masterListFields"][] = "contact_name";
$tdataops_contacts[".masterListFields"][] = "contact_tel";
$tdataops_contacts[".masterListFields"][] = "contact_email";

$tdataops_contacts[".inlineAddFields"] = array();

$tdataops_contacts[".editFields"] = array();
$tdataops_contacts[".editFields"][] = "contact_name";
$tdataops_contacts[".editFields"][] = "contact_tel";
$tdataops_contacts[".editFields"][] = "contact_email";

$tdataops_contacts[".inlineEditFields"] = array();

$tdataops_contacts[".updateSelectedFields"] = array();
$tdataops_contacts[".updateSelectedFields"][] = "contact_name";
$tdataops_contacts[".updateSelectedFields"][] = "contact_tel";
$tdataops_contacts[".updateSelectedFields"][] = "contact_email";


$tdataops_contacts[".exportFields"] = array();
$tdataops_contacts[".exportFields"][] = "id";
$tdataops_contacts[".exportFields"][] = "contact_name";
$tdataops_contacts[".exportFields"][] = "contact_tel";
$tdataops_contacts[".exportFields"][] = "contact_email";

$tdataops_contacts[".importFields"] = array();
$tdataops_contacts[".importFields"][] = "contact_name";
$tdataops_contacts[".importFields"][] = "contact_tel";
$tdataops_contacts[".importFields"][] = "contact_email";

$tdataops_contacts[".printFields"] = array();
$tdataops_contacts[".printFields"][] = "contact_name";
$tdataops_contacts[".printFields"][] = "contact_tel";
$tdataops_contacts[".printFields"][] = "contact_email";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "ops_contacts";
	$fdata["Label"] = GetFieldLabel("ops_contacts","id");
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








	$tdataops_contacts["id"] = $fdata;
//	contact_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "contact_name";
	$fdata["GoodName"] = "contact_name";
	$fdata["ownerTable"] = "ops_contacts";
	$fdata["Label"] = GetFieldLabel("ops_contacts","contact_name");
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




	$tdataops_contacts["contact_name"] = $fdata;
//	contact_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "contact_tel";
	$fdata["GoodName"] = "contact_tel";
	$fdata["ownerTable"] = "ops_contacts";
	$fdata["Label"] = GetFieldLabel("ops_contacts","contact_tel");
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




	$tdataops_contacts["contact_tel"] = $fdata;
//	contact_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "contact_email";
	$fdata["GoodName"] = "contact_email";
	$fdata["ownerTable"] = "ops_contacts";
	$fdata["Label"] = GetFieldLabel("ops_contacts","contact_email");
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




	$tdataops_contacts["contact_email"] = $fdata;


$tables_data["ops_contacts"]=&$tdataops_contacts;
$field_labels["ops_contacts"] = &$fieldLabelsops_contacts;
$fieldToolTips["ops_contacts"] = &$fieldToolTipsops_contacts;
$placeHolders["ops_contacts"] = &$placeHoldersops_contacts;
$page_titles["ops_contacts"] = &$pageTitlesops_contacts;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ops_contacts"] = array();
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
		
	$detailsTablesData["ops_contacts"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ops_contacts"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ops_contacts"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["ops_contacts"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ops_contacts"][$dIndex]["detailKeys"][]="ops_contact_id";

// tables which are master tables for current table (detail)
$masterTablesData["ops_contacts"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ops_contacts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	contact_name,  	contact_tel,  	contact_email";
$proto0["m_strFrom"] = "FROM ops_contacts";
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
	"m_strTable" => "ops_contacts",
	"m_srcTableName" => "ops_contacts"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "ops_contacts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_name",
	"m_strTable" => "ops_contacts",
	"m_srcTableName" => "ops_contacts"
));

$proto8["m_sql"] = "contact_name";
$proto8["m_srcTableName"] = "ops_contacts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_tel",
	"m_strTable" => "ops_contacts",
	"m_srcTableName" => "ops_contacts"
));

$proto10["m_sql"] = "contact_tel";
$proto10["m_srcTableName"] = "ops_contacts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_email",
	"m_strTable" => "ops_contacts",
	"m_srcTableName" => "ops_contacts"
));

$proto12["m_sql"] = "contact_email";
$proto12["m_srcTableName"] = "ops_contacts";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "ops_contacts";
$proto15["m_srcTableName"] = "ops_contacts";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "contact_name";
$proto15["m_columns"][] = "contact_tel";
$proto15["m_columns"][] = "contact_email";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "ops_contacts";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "ops_contacts";
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
$proto0["m_srcTableName"]="ops_contacts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ops_contacts = createSqlQuery_ops_contacts();


	
		;

				

$tdataops_contacts[".sqlquery"] = $queryData_ops_contacts;

include_once(getabspath("include/ops_contacts_events.php"));
$tableEvents["ops_contacts"] = new eventclass_ops_contacts;
$tdataops_contacts[".hasEvents"] = true;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasourcing_contacts = array();
	$tdatasourcing_contacts[".truncateText"] = true;
	$tdatasourcing_contacts[".NumberOfChars"] = 80;
	$tdatasourcing_contacts[".ShortName"] = "sourcing_contacts";
	$tdatasourcing_contacts[".OwnerID"] = "";
	$tdatasourcing_contacts[".OriginalTable"] = "sourcing_contacts";

//	field labels
$fieldLabelssourcing_contacts = array();
$fieldToolTipssourcing_contacts = array();
$pageTitlessourcing_contacts = array();
$placeHolderssourcing_contacts = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssourcing_contacts["English"] = array();
	$fieldToolTipssourcing_contacts["English"] = array();
	$placeHolderssourcing_contacts["English"] = array();
	$pageTitlessourcing_contacts["English"] = array();
	$fieldLabelssourcing_contacts["English"]["id"] = "Id";
	$fieldToolTipssourcing_contacts["English"]["id"] = "";
	$placeHolderssourcing_contacts["English"]["id"] = "";
	$fieldLabelssourcing_contacts["English"]["contact_name"] = "Contact Name";
	$fieldToolTipssourcing_contacts["English"]["contact_name"] = "";
	$placeHolderssourcing_contacts["English"]["contact_name"] = "";
	$fieldLabelssourcing_contacts["English"]["contact_tel"] = "Contact Tel";
	$fieldToolTipssourcing_contacts["English"]["contact_tel"] = "";
	$placeHolderssourcing_contacts["English"]["contact_tel"] = "";
	$fieldLabelssourcing_contacts["English"]["contact_email"] = "Contact Email";
	$fieldToolTipssourcing_contacts["English"]["contact_email"] = "";
	$placeHolderssourcing_contacts["English"]["contact_email"] = "";
	if (count($fieldToolTipssourcing_contacts["English"]))
		$tdatasourcing_contacts[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssourcing_contacts[""] = array();
	$fieldToolTipssourcing_contacts[""] = array();
	$placeHolderssourcing_contacts[""] = array();
	$pageTitlessourcing_contacts[""] = array();
	if (count($fieldToolTipssourcing_contacts[""]))
		$tdatasourcing_contacts[".isUseToolTips"] = true;
}


	$tdatasourcing_contacts[".NCSearch"] = true;



$tdatasourcing_contacts[".shortTableName"] = "sourcing_contacts";
$tdatasourcing_contacts[".nSecOptions"] = 0;
$tdatasourcing_contacts[".recsPerRowPrint"] = 1;
$tdatasourcing_contacts[".mainTableOwnerID"] = "";
$tdatasourcing_contacts[".moveNext"] = 1;
$tdatasourcing_contacts[".entityType"] = 0;

$tdatasourcing_contacts[".strOriginalTableName"] = "sourcing_contacts";

	



$tdatasourcing_contacts[".showAddInPopup"] = false;

$tdatasourcing_contacts[".showEditInPopup"] = false;

$tdatasourcing_contacts[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasourcing_contacts[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasourcing_contacts[".fieldsForRegister"] = array();

$tdatasourcing_contacts[".listAjax"] = false;

	$tdatasourcing_contacts[".audit"] = false;

	$tdatasourcing_contacts[".locking"] = false;

$tdatasourcing_contacts[".edit"] = true;
$tdatasourcing_contacts[".afterEditAction"] = 1;
$tdatasourcing_contacts[".closePopupAfterEdit"] = 1;
$tdatasourcing_contacts[".afterEditActionDetTable"] = "";

$tdatasourcing_contacts[".add"] = true;
$tdatasourcing_contacts[".afterAddAction"] = 1;
$tdatasourcing_contacts[".closePopupAfterAdd"] = 1;
$tdatasourcing_contacts[".afterAddActionDetTable"] = "";

$tdatasourcing_contacts[".list"] = true;



$tdatasourcing_contacts[".reorderRecordsByHeader"] = true;


$tdatasourcing_contacts[".exportFormatting"] = 2;
$tdatasourcing_contacts[".exportDelimiter"] = ",";
		
$tdatasourcing_contacts[".view"] = true;

$tdatasourcing_contacts[".import"] = true;

$tdatasourcing_contacts[".exportTo"] = true;

$tdatasourcing_contacts[".printFriendly"] = true;

$tdatasourcing_contacts[".delete"] = true;

$tdatasourcing_contacts[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasourcing_contacts[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasourcing_contacts[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasourcing_contacts[".searchSaving"] = false;
//

$tdatasourcing_contacts[".showSearchPanel"] = true;
		$tdatasourcing_contacts[".flexibleSearch"] = true;

$tdatasourcing_contacts[".isUseAjaxSuggest"] = true;

$tdatasourcing_contacts[".rowHighlite"] = true;





$tdatasourcing_contacts[".ajaxCodeSnippetAdded"] = false;

$tdatasourcing_contacts[".buttonsAdded"] = false;

$tdatasourcing_contacts[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasourcing_contacts[".isUseTimeForSearch"] = false;





$tdatasourcing_contacts[".allSearchFields"] = array();
$tdatasourcing_contacts[".filterFields"] = array();
$tdatasourcing_contacts[".requiredSearchFields"] = array();

$tdatasourcing_contacts[".allSearchFields"][] = "contact_name";
	$tdatasourcing_contacts[".allSearchFields"][] = "contact_tel";
	$tdatasourcing_contacts[".allSearchFields"][] = "contact_email";
	

$tdatasourcing_contacts[".googleLikeFields"] = array();
$tdatasourcing_contacts[".googleLikeFields"][] = "id";
$tdatasourcing_contacts[".googleLikeFields"][] = "contact_name";
$tdatasourcing_contacts[".googleLikeFields"][] = "contact_tel";
$tdatasourcing_contacts[".googleLikeFields"][] = "contact_email";


$tdatasourcing_contacts[".advSearchFields"] = array();
$tdatasourcing_contacts[".advSearchFields"][] = "contact_name";
$tdatasourcing_contacts[".advSearchFields"][] = "contact_tel";
$tdatasourcing_contacts[".advSearchFields"][] = "contact_email";

$tdatasourcing_contacts[".tableType"] = "list";

$tdatasourcing_contacts[".printerPageOrientation"] = 0;
$tdatasourcing_contacts[".nPrinterPageScale"] = 100;

$tdatasourcing_contacts[".nPrinterSplitRecords"] = 40;

$tdatasourcing_contacts[".nPrinterPDFSplitRecords"] = 40;



$tdatasourcing_contacts[".geocodingEnabled"] = false;





$tdatasourcing_contacts[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatasourcing_contacts[".pageSize"] = 20;

$tdatasourcing_contacts[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasourcing_contacts[".strOrderBy"] = $tstrOrderBy;

$tdatasourcing_contacts[".orderindexes"] = array();

$tdatasourcing_contacts[".sqlHead"] = "SELECT id,  	contact_name,  	contact_tel,  	contact_email";
$tdatasourcing_contacts[".sqlFrom"] = "FROM sourcing_contacts";
$tdatasourcing_contacts[".sqlWhereExpr"] = "";
$tdatasourcing_contacts[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasourcing_contacts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasourcing_contacts[".arrGroupsPerPage"] = $arrGPP;

$tdatasourcing_contacts[".highlightSearchResults"] = true;

$tableKeyssourcing_contacts = array();
$tableKeyssourcing_contacts[] = "id";
$tdatasourcing_contacts[".Keys"] = $tableKeyssourcing_contacts;

$tdatasourcing_contacts[".listFields"] = array();
$tdatasourcing_contacts[".listFields"][] = "contact_name";
$tdatasourcing_contacts[".listFields"][] = "contact_tel";
$tdatasourcing_contacts[".listFields"][] = "contact_email";

$tdatasourcing_contacts[".hideMobileList"] = array();


$tdatasourcing_contacts[".viewFields"] = array();
$tdatasourcing_contacts[".viewFields"][] = "contact_name";
$tdatasourcing_contacts[".viewFields"][] = "contact_tel";
$tdatasourcing_contacts[".viewFields"][] = "contact_email";

$tdatasourcing_contacts[".addFields"] = array();
$tdatasourcing_contacts[".addFields"][] = "contact_name";
$tdatasourcing_contacts[".addFields"][] = "contact_tel";
$tdatasourcing_contacts[".addFields"][] = "contact_email";

$tdatasourcing_contacts[".masterListFields"] = array();
$tdatasourcing_contacts[".masterListFields"][] = "id";
$tdatasourcing_contacts[".masterListFields"][] = "contact_name";
$tdatasourcing_contacts[".masterListFields"][] = "contact_tel";
$tdatasourcing_contacts[".masterListFields"][] = "contact_email";

$tdatasourcing_contacts[".inlineAddFields"] = array();

$tdatasourcing_contacts[".editFields"] = array();
$tdatasourcing_contacts[".editFields"][] = "contact_name";
$tdatasourcing_contacts[".editFields"][] = "contact_tel";
$tdatasourcing_contacts[".editFields"][] = "contact_email";

$tdatasourcing_contacts[".inlineEditFields"] = array();

$tdatasourcing_contacts[".updateSelectedFields"] = array();
$tdatasourcing_contacts[".updateSelectedFields"][] = "contact_name";
$tdatasourcing_contacts[".updateSelectedFields"][] = "contact_tel";
$tdatasourcing_contacts[".updateSelectedFields"][] = "contact_email";


$tdatasourcing_contacts[".exportFields"] = array();
$tdatasourcing_contacts[".exportFields"][] = "id";
$tdatasourcing_contacts[".exportFields"][] = "contact_name";
$tdatasourcing_contacts[".exportFields"][] = "contact_tel";
$tdatasourcing_contacts[".exportFields"][] = "contact_email";

$tdatasourcing_contacts[".importFields"] = array();
$tdatasourcing_contacts[".importFields"][] = "contact_name";
$tdatasourcing_contacts[".importFields"][] = "contact_tel";
$tdatasourcing_contacts[".importFields"][] = "contact_email";

$tdatasourcing_contacts[".printFields"] = array();
$tdatasourcing_contacts[".printFields"][] = "contact_name";
$tdatasourcing_contacts[".printFields"][] = "contact_tel";
$tdatasourcing_contacts[".printFields"][] = "contact_email";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sourcing_contacts";
	$fdata["Label"] = GetFieldLabel("sourcing_contacts","id");
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








	$tdatasourcing_contacts["id"] = $fdata;
//	contact_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "contact_name";
	$fdata["GoodName"] = "contact_name";
	$fdata["ownerTable"] = "sourcing_contacts";
	$fdata["Label"] = GetFieldLabel("sourcing_contacts","contact_name");
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




	$tdatasourcing_contacts["contact_name"] = $fdata;
//	contact_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "contact_tel";
	$fdata["GoodName"] = "contact_tel";
	$fdata["ownerTable"] = "sourcing_contacts";
	$fdata["Label"] = GetFieldLabel("sourcing_contacts","contact_tel");
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




	$tdatasourcing_contacts["contact_tel"] = $fdata;
//	contact_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "contact_email";
	$fdata["GoodName"] = "contact_email";
	$fdata["ownerTable"] = "sourcing_contacts";
	$fdata["Label"] = GetFieldLabel("sourcing_contacts","contact_email");
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




	$tdatasourcing_contacts["contact_email"] = $fdata;


$tables_data["sourcing_contacts"]=&$tdatasourcing_contacts;
$field_labels["sourcing_contacts"] = &$fieldLabelssourcing_contacts;
$fieldToolTips["sourcing_contacts"] = &$fieldToolTipssourcing_contacts;
$placeHolders["sourcing_contacts"] = &$placeHolderssourcing_contacts;
$page_titles["sourcing_contacts"] = &$pageTitlessourcing_contacts;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sourcing_contacts"] = array();
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
		
	$detailsTablesData["sourcing_contacts"][$dIndex] = $detailsParam;

	
		$detailsTablesData["sourcing_contacts"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["sourcing_contacts"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["sourcing_contacts"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["sourcing_contacts"][$dIndex]["detailKeys"][]="sourcing_contact_id";

// tables which are master tables for current table (detail)
$masterTablesData["sourcing_contacts"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_sourcing_contacts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	contact_name,  	contact_tel,  	contact_email";
$proto0["m_strFrom"] = "FROM sourcing_contacts";
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
	"m_strTable" => "sourcing_contacts",
	"m_srcTableName" => "sourcing_contacts"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sourcing_contacts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_name",
	"m_strTable" => "sourcing_contacts",
	"m_srcTableName" => "sourcing_contacts"
));

$proto8["m_sql"] = "contact_name";
$proto8["m_srcTableName"] = "sourcing_contacts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_tel",
	"m_strTable" => "sourcing_contacts",
	"m_srcTableName" => "sourcing_contacts"
));

$proto10["m_sql"] = "contact_tel";
$proto10["m_srcTableName"] = "sourcing_contacts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_email",
	"m_strTable" => "sourcing_contacts",
	"m_srcTableName" => "sourcing_contacts"
));

$proto12["m_sql"] = "contact_email";
$proto12["m_srcTableName"] = "sourcing_contacts";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "sourcing_contacts";
$proto15["m_srcTableName"] = "sourcing_contacts";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "contact_name";
$proto15["m_columns"][] = "contact_tel";
$proto15["m_columns"][] = "contact_email";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "sourcing_contacts";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "sourcing_contacts";
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
$proto0["m_srcTableName"]="sourcing_contacts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sourcing_contacts = createSqlQuery_sourcing_contacts();


	
		;

				

$tdatasourcing_contacts[".sqlquery"] = $queryData_sourcing_contacts;

include_once(getabspath("include/sourcing_contacts_events.php"));
$tableEvents["sourcing_contacts"] = new eventclass_sourcing_contacts;
$tdatasourcing_contacts[".hasEvents"] = true;

?>
<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/renewals_variables.php");

$mode = postvalue("mode");

if(!isLogged())
{ 
	return;
}
if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{
	return;
}

require_once("classes/searchclause.php");

$cipherer = new RunnerCipherer($strTableName);

require_once('include/xtempl.php');
$xt = new Xtempl();





$layout = new TLayout("detailspreview", "Coral1Coral", "MobileCoral");
$layout->version = 2;
$layout->blocks["bare"] = array();
$layout->containers["dcount"] = array();
$layout->container_properties["dcount"] = array(  );
$layout->containers["dcount"][] = array("name"=>"detailspreviewheader",
	"block"=>"", "substyle"=>1  );

$layout->containers["dcount"][] = array("name"=>"detailspreviewdetailsfount",
	"block"=>"", "substyle"=>1  );

$layout->containers["dcount"][] = array("name"=>"detailspreviewdispfirst",
	"block"=>"display_first", "substyle"=>1  );

$layout->skins["dcount"] = "empty";

$layout->blocks["bare"][] = "dcount";
$layout->containers["detailspreviewgrid"] = array();
$layout->container_properties["detailspreviewgrid"] = array(  );
$layout->containers["detailspreviewgrid"][] = array("name"=>"detailspreviewfields",
	"block"=>"details_data", "substyle"=>1  );

$layout->skins["detailspreviewgrid"] = "grid";

$layout->blocks["bare"][] = "detailspreviewgrid";
$page_layouts["renewals_detailspreview"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button1");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



$recordsCounter = 0;

//	process masterkey value
$mastertable = postvalue("mastertable");
$masterKeys = my_json_decode(postvalue("masterKeys"));
$sessionPrefix = "_detailsPreview";
if($mastertable != "")
{
	$_SESSION[$sessionPrefix."_mastertable"]=$mastertable;
//	copy keys to session
	$i = 1;
	if(is_array($masterKeys) && count($masterKeys) > 0)
	{
		while(array_key_exists ("masterkey".$i, $masterKeys))
		{
			$_SESSION[$sessionPrefix."_masterkey".$i] = $masterKeys["masterkey".$i];
			$i++;
		}
	}
	if(isset($_SESSION[$sessionPrefix."_masterkey".$i]))
		unset($_SESSION[$sessionPrefix."_masterkey".$i]);
}
else
	$mastertable = $_SESSION[$sessionPrefix."_mastertable"];

$params = array();
$params['id'] = 1;
$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['pageType'] = "detailspreview";
$pageObject = new DetailsPreview($params);

$pSet = new ProjectSettings($strTableName, PAGE_LIST);


$whereClauses = array();
if($mastertable == "vendors")
{
	$formattedValue = make_db_value("vendor_id",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("vendor_id") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("vendor_id") . "=" . $formattedValue;
}
if($mastertable == "vendor_contacts")
{
	$formattedValue = make_db_value("vendor_contact_id",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("vendor_contact_id") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("vendor_contact_id") . "=" . $formattedValue;
}
if($mastertable == "sourcing_contacts")
{
	$formattedValue = make_db_value("sourcing_contact_id",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("sourcing_contact_id") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("sourcing_contact_id") . "=" . $formattedValue;
}
if($mastertable == "ops_contacts")
{
	$formattedValue = make_db_value("ops_contact_id",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("ops_contact_id") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("ops_contact_id") . "=" . $formattedValue;
}
if($mastertable == "renewal_types")
{
	$formattedValue = make_db_value("service_type_id",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("service_type_id") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("service_type_id") . "=" . $formattedValue;
}
if($mastertable == "customers")
{
	$formattedValue = make_db_value("sold_to_id",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("sold_to_id") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("sold_to_id") . "=" . $formattedValue;
}
if($mastertable == "terms")
{
	$formattedValue = make_db_value("term_id",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("term_id") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("term_id") . "=" . $formattedValue;
}
if($mastertable == "status")
{
	$formattedValue = make_db_value("status_id",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("status_id") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("status_id") . "=" . $formattedValue;
}

$whereClauses[] = SecuritySQL("Search", $strTableName);
$query = $pSet->getSQLQuery();

$strSQL = $query->buildSQL_default( $whereClauses );
$rowcount = $pageObject->connection->getFetchedRowsNumber( $strSQL );

$strSQL .= $pageObject->getOrderByClause();

$xt->assign("row_count",$rowcount);
if($rowcount) 
{
	$xt->assign("details_data",true);

	$display_count = 10;
	if($mode == "inline")
		$display_count*=2;
		
	if($rowcount>$display_count+2)
	{
		$xt->assign("display_first",true);
		$xt->assign("display_count",$display_count);
	}
	else
		$display_count = $rowcount;

	$rowinfo = array();
	
	require_once getabspath('classes/controls/ViewControlsContainer.php');
	$viewContainer = new ViewControlsContainer($pSet, PAGE_LIST);
	$viewContainer->isDetailsPreview = true;

	$b = true;
	$qResult = $pageObject->connection->query( $strSQL );
	$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	while($data && $recordsCounter<$display_count) {
		$recordsCounter++;
		$row = array();
		$keylink = "";
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["id"]));
	
	
	//	id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("id", $data, $keylink);
			$row["id_value"] = $value;
			$format = $pSet->getViewFormat("id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("id")))
				$class = ' rnr-field-number';
			$row["id_class"] = $class;
	//	vendor_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("vendor_id", $data, $keylink);
			$row["vendor_id_value"] = $value;
			$format = $pSet->getViewFormat("vendor_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("vendor_id")))
				$class = ' rnr-field-number';
			$row["vendor_id_class"] = $class;
	//	order_description - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("order_description", $data, $keylink);
			$row["order_description_value"] = $value;
			$format = $pSet->getViewFormat("order_description");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("order_description")))
				$class = ' rnr-field-number';
			$row["order_description_class"] = $class;
	//	sold_to_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("sold_to_id", $data, $keylink);
			$row["sold_to_id_value"] = $value;
			$format = $pSet->getViewFormat("sold_to_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("sold_to_id")))
				$class = ' rnr-field-number';
			$row["sold_to_id_class"] = $class;
	//	ops_contact_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ops_contact_id", $data, $keylink);
			$row["ops_contact_id_value"] = $value;
			$format = $pSet->getViewFormat("ops_contact_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ops_contact_id")))
				$class = ' rnr-field-number';
			$row["ops_contact_id_class"] = $class;
	//	sourcing_contact_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("sourcing_contact_id", $data, $keylink);
			$row["sourcing_contact_id_value"] = $value;
			$format = $pSet->getViewFormat("sourcing_contact_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("sourcing_contact_id")))
				$class = ' rnr-field-number';
			$row["sourcing_contact_id_class"] = $class;
	//	previous_po - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("previous_po", $data, $keylink);
			$row["previous_po_value"] = $value;
			$format = $pSet->getViewFormat("previous_po");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("previous_po")))
				$class = ' rnr-field-number';
			$row["previous_po_class"] = $class;
	//	previous_lbg_pp - Currency
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("previous_lbg_pp", $data, $keylink);
			$row["previous_lbg_pp_value"] = $value;
			$format = $pSet->getViewFormat("previous_lbg_pp");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("previous_lbg_pp")))
				$class = ' rnr-field-number';
			$row["previous_lbg_pp_class"] = $class;
	//	impacted_by_dollar - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("impacted_by_dollar", $data, $keylink);
			$row["impacted_by_dollar_value"] = $value;
			$format = $pSet->getViewFormat("impacted_by_dollar");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("impacted_by_dollar")))
				$class = ' rnr-field-number';
			$row["impacted_by_dollar_class"] = $class;
	//	improvement_last_year - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("improvement_last_year", $data, $keylink);
			$row["improvement_last_year_value"] = $value;
			$format = $pSet->getViewFormat("improvement_last_year");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("improvement_last_year")))
				$class = ' rnr-field-number';
			$row["improvement_last_year_class"] = $class;
	//	improvement_comments - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("improvement_comments", $data, $keylink);
			$row["improvement_comments_value"] = $value;
			$format = $pSet->getViewFormat("improvement_comments");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("improvement_comments")))
				$class = ' rnr-field-number';
			$row["improvement_comments_class"] = $class;
	//	percent_product_sales - Percent
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("percent_product_sales", $data, $keylink);
			$row["percent_product_sales_value"] = $value;
			$format = $pSet->getViewFormat("percent_product_sales");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("percent_product_sales")))
				$class = ' rnr-field-number';
			$row["percent_product_sales_class"] = $class;
	//	service_type_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("service_type_id", $data, $keylink);
			$row["service_type_id_value"] = $value;
			$format = $pSet->getViewFormat("service_type_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("service_type_id")))
				$class = ' rnr-field-number';
			$row["service_type_id_class"] = $class;
	//	term_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("term_id", $data, $keylink);
			$row["term_id_value"] = $value;
			$format = $pSet->getViewFormat("term_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("term_id")))
				$class = ' rnr-field-number';
			$row["term_id_class"] = $class;
	//	support_start_date - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("support_start_date", $data, $keylink);
			$row["support_start_date_value"] = $value;
			$format = $pSet->getViewFormat("support_start_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("support_start_date")))
				$class = ' rnr-field-number';
			$row["support_start_date_class"] = $class;
	//	support_end_date - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("support_end_date", $data, $keylink);
			$row["support_end_date_value"] = $value;
			$format = $pSet->getViewFormat("support_end_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("support_end_date")))
				$class = ' rnr-field-number';
			$row["support_end_date_class"] = $class;
	//	comment_actions - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("comment_actions", $data, $keylink);
			$row["comment_actions_value"] = $value;
			$format = $pSet->getViewFormat("comment_actions");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("comment_actions")))
				$class = ' rnr-field-number';
			$row["comment_actions_class"] = $class;
	//	last_update - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("last_update", $data, $keylink);
			$row["last_update_value"] = $value;
			$format = $pSet->getViewFormat("last_update");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("last_update")))
				$class = ' rnr-field-number';
			$row["last_update_class"] = $class;
	//	alert_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("alert_id", $data, $keylink);
			$row["alert_id_value"] = $value;
			$format = $pSet->getViewFormat("alert_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("alert_id")))
				$class = ' rnr-field-number';
			$row["alert_id_class"] = $class;
	//	vendor_contact_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("vendor_contact_id", $data, $keylink);
			$row["vendor_contact_id_value"] = $value;
			$format = $pSet->getViewFormat("vendor_contact_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("vendor_contact_id")))
				$class = ' rnr-field-number';
			$row["vendor_contact_id_class"] = $class;
	//	erf - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("erf", $data, $keylink);
			$row["erf_value"] = $value;
			$format = $pSet->getViewFormat("erf");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("erf")))
				$class = ' rnr-field-number';
			$row["erf_class"] = $class;
	//	guid - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("guid", $data, $keylink);
			$row["guid_value"] = $value;
			$format = $pSet->getViewFormat("guid");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("guid")))
				$class = ' rnr-field-number';
			$row["guid_class"] = $class;
	//	documents - Document Download
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("documents", $data, $keylink);
			$row["documents_value"] = $value;
			$format = $pSet->getViewFormat("documents");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("documents")))
				$class = ' rnr-field-number';
			$row["documents_class"] = $class;
	//	status_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("status_id", $data, $keylink);
			$row["status_id_value"] = $value;
			$format = $pSet->getViewFormat("status_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("status_id")))
				$class = ' rnr-field-number';
			$row["status_id_class"] = $class;
	//	cost - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("cost", $data, $keylink);
			$row["cost_value"] = $value;
			$format = $pSet->getViewFormat("cost");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("cost")))
				$class = ' rnr-field-number';
			$row["cost_class"] = $class;
	//	request_date - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("request_date", $data, $keylink);
			$row["request_date_value"] = $value;
			$format = $pSet->getViewFormat("request_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("request_date")))
				$class = ' rnr-field-number';
			$row["request_date_class"] = $class;
	//	quote_ref - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("quote_ref", $data, $keylink);
			$row["quote_ref_value"] = $value;
			$format = $pSet->getViewFormat("quote_ref");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("quote_ref")))
				$class = ' rnr-field-number';
			$row["quote_ref_class"] = $class;
	//	po - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("po", $data, $keylink);
			$row["po_value"] = $value;
			$format = $pSet->getViewFormat("po");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("po")))
				$class = ' rnr-field-number';
			$row["po_class"] = $class;
	//	cc_so - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("cc_so", $data, $keylink);
			$row["cc_so_value"] = $value;
			$format = $pSet->getViewFormat("cc_so");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("cc_so")))
				$class = ' rnr-field-number';
			$row["cc_so_class"] = $class;
	//	supplier_ref - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("supplier_ref", $data, $keylink);
			$row["supplier_ref_value"] = $value;
			$format = $pSet->getViewFormat("supplier_ref");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("supplier_ref")))
				$class = ' rnr-field-number';
			$row["supplier_ref_class"] = $class;
	//	supplier_order_ref - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("supplier_order_ref", $data, $keylink);
			$row["supplier_order_ref_value"] = $value;
			$format = $pSet->getViewFormat("supplier_order_ref");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("supplier_order_ref")))
				$class = ' rnr-field-number';
			$row["supplier_order_ref_class"] = $class;
	//	pod - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("pod", $data, $keylink);
			$row["pod_value"] = $value;
			$format = $pSet->getViewFormat("pod");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("pod")))
				$class = ' rnr-field-number';
			$row["pod_class"] = $class;
	//	task_number - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("task_number", $data, $keylink);
			$row["task_number_value"] = $value;
			$format = $pSet->getViewFormat("task_number");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("task_number")))
				$class = ' rnr-field-number';
			$row["task_number_class"] = $class;
	//	tracking_ref - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("tracking_ref", $data, $keylink);
			$row["tracking_ref_value"] = $value;
			$format = $pSet->getViewFormat("tracking_ref");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("tracking_ref")))
				$class = ' rnr-field-number';
			$row["tracking_ref_class"] = $class;
	//	delivery_code - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("delivery_code", $data, $keylink);
			$row["delivery_code_value"] = $value;
			$format = $pSet->getViewFormat("delivery_code");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("delivery_code")))
				$class = ' rnr-field-number';
			$row["delivery_code_class"] = $class;
	//	pulse_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("pulse_id", $data, $keylink);
			$row["pulse_id_value"] = $value;
			$format = $pSet->getViewFormat("pulse_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("pulse_id")))
				$class = ' rnr-field-number';
			$row["pulse_id_class"] = $class;
	//	date_billed - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("date_billed", $data, $keylink);
			$row["date_billed_value"] = $value;
			$format = $pSet->getViewFormat("date_billed");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("date_billed")))
				$class = ' rnr-field-number';
			$row["date_billed_class"] = $class;
	//	product_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("product_id", $data, $keylink);
			$row["product_id_value"] = $value;
			$format = $pSet->getViewFormat("product_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("product_id")))
				$class = ' rnr-field-number';
			$row["product_id_class"] = $class;
	//	renewal_date - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("renewal_date", $data, $keylink);
			$row["renewal_date_value"] = $value;
			$format = $pSet->getViewFormat("renewal_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("renewal_date")))
				$class = ' rnr-field-number';
			$row["renewal_date_class"] = $class;
	//	recurrence - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("recurrence", $data, $keylink);
			$row["recurrence_value"] = $value;
			$format = $pSet->getViewFormat("recurrence");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("recurrence")))
				$class = ' rnr-field-number';
			$row["recurrence_class"] = $class;
		$rowinfo[] = $row;
		if ($b) {
			$rowinfo2[] = $row;
			$b = false;
		}
		$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	}
	$xt->assign_loopsection("details_row",$rowinfo);
	$xt->assign_loopsection("details_row_header",$rowinfo2); // assign class for header
}
$returnJSON = array("success" => true);
$xt->load_template(GetTemplateName("renewals", "detailspreview"));
$returnJSON["body"] = $xt->fetch_loaded();

if($mode!="inline")
{
	$returnJSON["counter"] = postvalue("counter");
	$layout = GetPageLayout(GoodFieldName($strTableName), 'detailspreview');
	if($layout)
	{
		foreach($layout->getCSSFiles(isRTL(), mobileDeviceDetected() && $layout->version != BOOTSTRAP_LAYOUT) as $css)
		{
			$returnJSON['CSSFiles'][] = $css;
		}
	}	
}	

echo printJSON($returnJSON);
exit();
?>
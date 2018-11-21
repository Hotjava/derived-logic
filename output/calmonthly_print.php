<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/searchclause.php");
require_once('include/xtempl.php');
require_once('classes/printpage.php');
require_once('classes/printpage_details.php');
require_once('classes/reportpage.php');
require_once('classes/reportprintpage.php');

add_nocache_headers();

require_once("include/calmonthly_variables.php");

if( !Security::processPageSecurity( $strtablename, 'P' ) )
	return;




$layout = new TLayout("Calendarcalmonthly_print", "Coral1Coral", "MobileCoral");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["form"] = array();
$layout->container_properties["form"] = array(  );
$layout->containers["form"][] = array("name"=>"",
	"block"=>"", "substyle"=>1  );

$layout->skins["form"] = "empty";

$layout->blocks["center"][] = "form";
$layout->blocks["top"] = array();
$layout->containers["add_css"] = array();
$layout->container_properties["add_css"] = array(  );
$layout->containers["add_css"][] = array("name"=>"",
	"block"=>"", "substyle"=>1  );

$layout->skins["add_css"] = "empty";

$layout->blocks["top"][] = "add_css";
$layout->containers["printheader"] = array();
$layout->container_properties["printheader"] = array(  );
$layout->containers["printheader"][] = array("name"=>"printheader",
	"block"=>"printheader", "substyle"=>1  );

$layout->skins["printheader"] = "empty";

$layout->blocks["top"][] = "printheader";
$page_layouts["calmonthly_print"] = $layout;

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





$xt = new Xtempl();
$id = postvalue("id"); 
$id = $id != "" ? $id : 1;

//array of params for classes
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["pageType"] = PAGE_PRINT;
$params["tName"] = $strTableName;
$params["selection"] = postvalue("selection"); //PrintPage::readSelectedRecordsFromRequest( "calmonthly" );
$params["allPagesMode"] = postvalue("all");
$params["pdfMode"] = postvalue("pdf");
$params["pdfContent"] = postvalue("htmlPdfContent");
$params["pdfWidth"] = postvalue("width");
$params["detailTables"] = postvalue("details");
$params["splitByRecords"] = postvalue("records");


$pageObject = new PrintPage($params);
$pageObject->init();
$pageObject->process();
?>
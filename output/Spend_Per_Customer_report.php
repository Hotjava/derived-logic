<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
require_once("include/dbcommon.php");
require_once('include/xtempl.php');

add_nocache_headers();

require_once('classes/reportpage.php');
require_once('classes/searchclause.php');
require_once("include/Spend_Per_Customer_variables.php");

if( !Security::processPageSecurity( $strTableName, 'S' ) )
	return;





$layout = new TLayout("report_bootstrap", "Coral1Coral", "MobileCoral");
$layout->version = 3;
	$layout->bootstrapTheme = "spacelab";
		$layout->customCssPageName = "Spend_Per_Customer_report";
$layout->blocks["center"] = array();
$layout->containers["tabs"] = array();
$layout->container_properties["tabs"] = array(  );
$layout->containers["tabs"][] = array("name"=>"bsgrid_tabs",
	"block"=>"grid_tabs", "substyle"=>1  );

$layout->skins["tabs"] = "";

$layout->blocks["center"][] = "tabs";
$layout->containers["grid"] = array();
$layout->container_properties["grid"] = array(  );
$layout->containers["grid"][] = array("name"=>"bsreport",
	"block"=>"", "substyle"=>1  );

$layout->skins["grid"] = "";

$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();
$layout->container_properties["pagination"] = array(  );
$layout->containers["pagination"][] = array("name"=>"pagination",
	"block"=>"pagination_block", "substyle"=>1  );

$layout->skins["pagination"] = "";

$layout->blocks["center"][] = "pagination";
$layout->blocks["left"] = array();
$layout->containers["filt"] = array();
$layout->container_properties["filt"] = array(  );
$layout->containers["filt"][] = array("name"=>"searchpanel",
	"block"=>"searchPanel", "substyle"=>1  );

$layout->skins["filt"] = "";

$layout->blocks["left"][] = "filt";
$layout->blocks["top"] = array();
$layout->containers["top"] = array();
$layout->container_properties["top"] = array(  );
$layout->containers["top"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"menu" );
$layout->containers["menu"] = array();
$layout->container_properties["menu"] = array(  );
$layout->containers["menu"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"hdr" );
$layout->containers["hdr"] = array();
$layout->container_properties["hdr"] = array(  );
$layout->containers["hdr"][] = array("name"=>"logo",
	"block"=>"logo_block", "substyle"=>1  );

$layout->containers["hdr"][] = array("name"=>"bsnavbarcollapse",
	"block"=>"collapse_block", "substyle"=>1  );

$layout->skins["hdr"] = "";


$layout->containers["menu"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"menu_1" );
$layout->containers["menu_1"] = array();
$layout->container_properties["menu_1"] = array(  );
$layout->containers["menu_1"][] = array("name"=>"hmenu",
	"block"=>"menu_block", "substyle"=>1  );

$layout->containers["menu_1"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"more" );
$layout->containers["more"] = array();
$layout->container_properties["more"] = array(  );
$layout->containers["more"][] = array("name"=>"morebutton",
	"block"=>"more_list", "substyle"=>1  );

$layout->containers["more"][] = array("name"=>"loggedas",
	"block"=>"security_block", "substyle"=>1  );

$layout->skins["more"] = "";


$layout->containers["menu_1"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"more_1" );
$layout->containers["more_1"] = array();
$layout->container_properties["more_1"] = array(  );
$layout->containers["more_1"][] = array("name"=>"search",
	"block"=>"searchform_block", "substyle"=>1  );

$layout->skins["more_1"] = "";


$layout->skins["menu_1"] = "";


$layout->skins["menu"] = "";


$layout->containers["top"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"breadcrumbs" );
$layout->containers["breadcrumbs"] = array();
$layout->container_properties["breadcrumbs"] = array(  );
$layout->containers["breadcrumbs"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"bc" );
$layout->containers["bc"] = array();
$layout->container_properties["bc"] = array(  );
$layout->containers["bc"][] = array("name"=>"breadcrumbs",
	"block"=>"breadcrumbs", "substyle"=>1  );

$layout->skins["bc"] = "";


$layout->skins["breadcrumbs"] = "";


$layout->containers["top"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"gridcontrols" );
$layout->containers["gridcontrols"] = array();
$layout->container_properties["gridcontrols"] = array(  );
$layout->containers["gridcontrols"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"gridinfo" );
$layout->containers["gridinfo"] = array();
$layout->container_properties["gridinfo"] = array(  );
$layout->containers["gridinfo"][] = array("name"=>"details_found",
	"block"=>"details_found", "substyle"=>1  );

$layout->containers["gridinfo"][] = array("name"=>"printpanel",
	"block"=>"print_friendly", "substyle"=>1  );

$layout->skins["gridinfo"] = "";


$layout->skins["gridcontrols"] = "";


$layout->containers["top"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"messagerow" );
$layout->containers["messagerow"] = array();
$layout->container_properties["messagerow"] = array(  );
$layout->containers["messagerow"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"message" );
$layout->containers["message"] = array();
$layout->container_properties["message"] = array(  );
$layout->containers["message"][] = array("name"=>"message",
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "";


$layout->skins["messagerow"] = "";


$layout->skins["top"] = "";

$layout->blocks["top"][] = "top";
$page_layouts["Spend_Per_Customer_report"] = $layout;



// add master layouts 

$pageMode = ReportPage::readReportModeFromRequest();
$xt = new Xtempl( $pageMode != REPORT_SIMPLE ); //#9607 1. Temporary fix

//array of params for ReportPage constructor
$params = array();
$params["id"] = postvalue("id");
$params["xt"] = &$xt;
$params["mode"] = $pageMode;
$params["tName"] = $strTableName;
$params["pageType"] = PAGE_REPORT;
$params["masterTable"] = postvalue("mastertable");
$params["isGroupSecurity"] = $isGroupSecurity;
$params["arrRecsPerPage"] = $gSettings->getRecordsPerPageArray();
$params["arrGroupsPerPage"] = $gSettings->getGroupsPerPageArray();
$params["masterPageType"] = postvalue("masterpagetype");

//crosstable params
$params["x"] = postvalue("x");
$params["y"] = postvalue("y");
$params["dataField"] = postvalue("data");
$params["operation"] = postvalue("op");
$params["xType"] = postvalue("xtype");
$params["yType"] = postvalue("ytype");

if( postvalue("crosstable_refresh") )
	$params["crosstableRefresh"] = true;
//

$params["masterKeysReq"] = ReportPage::getMasterKeysFromRequest();


if( $pageMode = REPORT_DASHBOARD )
{
	$params["dashElementName"] = postvalue("dashelement");
	$params["dashTName"] = postvalue("table");
}

$pageObject = new ReportPage( $params );
$pageObject->init();

if( $pageObject->processSaveSearch() )
	exit();

$pageObject->process();
?>
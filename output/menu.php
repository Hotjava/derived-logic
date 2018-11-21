<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");


Security::processLogoutRequest();
if(!isLogged())
{
	HeaderRedirect("login");
	return;
}


if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}




$layout = new TLayout("menu_bootstrap", "Coral1Coral", "MobileCoral");
$layout->version = 3;
	$layout->bootstrapTheme = "spacelab";
		$layout->customCssPageName = "_menu";
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
	"block"=>"", "substyle"=>1 , "container"=>"login" );
$layout->containers["login"] = array();
$layout->container_properties["login"] = array(  );
$layout->containers["login"][] = array("name"=>"morebutton",
	"block"=>"more_list", "substyle"=>1  );

$layout->containers["login"][] = array("name"=>"loggedas",
	"block"=>"security_block", "substyle"=>1  );

$layout->skins["login"] = "";


$layout->skins["menu_1"] = "";


$layout->skins["menu"] = "";


$layout->containers["top"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"center" );
$layout->containers["center"] = array();
$layout->container_properties["center"] = array(  );
$layout->containers["center"][] = array("name"=>"welcome",
	"block"=>"", "substyle"=>1  );

$layout->skins["center"] = "";


$layout->skins["top"] = "";

$layout->blocks["top"][] = "top";
$page_layouts["menu"] = $layout;




require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/calcalendar_events.php"));
$tableEvents["calcalendar"] = new eventclass_calcalendar;
include_once(getabspath("include/calcategory_events.php"));
$tableEvents["calcategory"] = new eventclass_calcategory;
include_once(getabspath("include/caldaily_events.php"));
$tableEvents["caldaily"] = new eventclass_caldaily;
include_once(getabspath("include/calmonthly_events.php"));
$tableEvents["calmonthly"] = new eventclass_calmonthly;
include_once(getabspath("include/calweekly_events.php"));
$tableEvents["calweekly"] = new eventclass_calweekly;
include_once(getabspath("include/calglobals_events.php"));
$tableEvents["calglobals"] = new eventclass_calglobals;
include_once(getabspath("include/calyearly_events.php"));
$tableEvents["calyearly"] = new eventclass_calyearly;
include_once(getabspath("include/calholidays_events.php"));
$tableEvents["calholidays"] = new eventclass_calholidays;
include_once(getabspath("include/vendors_events.php"));
$tableEvents["vendors"] = new eventclass_vendors;
include_once(getabspath("include/terms_events.php"));
$tableEvents["terms"] = new eventclass_terms;
include_once(getabspath("include/customers_events.php"));
$tableEvents["customers"] = new eventclass_customers;
include_once(getabspath("include/renewal_types_events.php"));
$tableEvents["renewal_types"] = new eventclass_renewal_types;
include_once(getabspath("include/vendor_contacts_events.php"));
$tableEvents["vendor_contacts"] = new eventclass_vendor_contacts;
include_once(getabspath("include/sourcing_contacts_events.php"));
$tableEvents["sourcing_contacts"] = new eventclass_sourcing_contacts;
include_once(getabspath("include/ops_contacts_events.php"));
$tableEvents["ops_contacts"] = new eventclass_ops_contacts;
include_once(getabspath("include/renewals_events.php"));
$tableEvents["renewals"] = new eventclass_renewals;
include_once(getabspath("include/products_events.php"));
$tableEvents["products"] = new eventclass_products;
include_once(getabspath("include/product_types_events.php"));
$tableEvents["product_types"] = new eventclass_product_types;
include_once(getabspath("include/status_events.php"));
$tableEvents["status"] = new eventclass_status;

$xt = new Xtempl();

$id = postvalue("id")!=="" ? postvalue("id") : 1;

//array of params for classes
$params = array();
$params["id"] = $id; 
$params["xt"] = &$xt;
$params["tName"] = NOT_TABLE_BASED_TNAME;
$params["pageType"] = PAGE_MENU;
$params["templatefile"] = "menu.htm";
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);
$pageObject->init();
$pageObject->commonAssign();
// button handlers file names

//	Before Process event
if($globalEvents->exists("BeforeProcessMenu"))
	$globalEvents->BeforeProcessMenu( $pageObject );

$pageObject->body["begin"] .= GetBaseScriptsForPage(false);

$pageObject->addCommonJs();

//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();
$pageObject->setLangParams();
$xt->assign("id", $id);
// The user might rewrite $_SESSION["UserName"] value with HTML code in an event, so no encoding will be performed while printing this value.
$xt->assign("username", $_SESSION["UserName"]);
$xt->assign("changepwd_link",$_SESSION["AccessLevel"] != ACCESS_LEVEL_GUEST && $_SESSION["fromFacebook"] == false);
$xt->assign("changepwdlink_attrs","onclick=\"window.location.href='".GetTableLink("changepwd")."';return false;\"");

$xt->assign("logoutlink_attrs", 'id="logoutButton'.$id.'"');
$xt->assign("guestloginlink_attrs", 'id="loginButton'.$id.'"');

$xt->assign("loggedas_block", !isLoggedAsGuest());
$xt->assign("loggedas_message", !isLoggedAsGuest());

$xt->assign("logout_link", true);
$xt->assign("guestloginbutton", isLoggedAsGuest());
$xt->assign("logoutbutton", isSingleSign() && !isLoggedAsGuest());


// get redirect location for menu page
$redirect = $pageObject->getRedirectForMenuPage();
if($redirect)
{
	header("Location: ".$redirect); 
	exit();
}

$xt->assign("menu_block",true);
if($globalEvents->exists("BeforeShowMenu"))
	$globalEvents->BeforeShowMenu($xt, $pageObject->templatefile, $pageObject);

$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "Runner.applyPagesData( ".my_json_encode( $pagesData )." );";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";</script>";
$pageObject->body["end"] .= "<script type=\"text/javascript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>";
$pageObject->body["end"] .= '<script>'.$pageObject->PrepareJS()."</script>";
$xt->assignbyref("body",$pageObject->body);

$pageObject->display($pageObject->templatefile);
?>
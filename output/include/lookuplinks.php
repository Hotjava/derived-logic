<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["calperiod"]["calcalendar.Period"]["edit"] = array("table" => "calcalendar", "field" => "Period", "page" => "edit");
	$lookupTableLinks["calcategory"]["calcalendar.Category"]["edit"] = array("table" => "calcalendar", "field" => "Category", "page" => "edit");
	$lookupTableLinks["calweekdays"]["calcalendar.PeriodDays"]["edit"] = array("table" => "calcalendar", "field" => "PeriodDays", "page" => "edit");
	$lookupTableLinks["calglobals"]["caldaily.TimeField"]["edit"] = array("table" => "caldaily", "field" => "TimeField", "page" => "edit");
	$lookupTableLinks["calglobals"]["caldaily.EndTime"]["edit"] = array("table" => "caldaily", "field" => "EndTime", "page" => "edit");
	$lookupTableLinks["calperiod"]["caldaily.Period"]["edit"] = array("table" => "caldaily", "field" => "Period", "page" => "edit");
	$lookupTableLinks["calcategory"]["caldaily.Category"]["edit"] = array("table" => "caldaily", "field" => "Category", "page" => "edit");
	$lookupTableLinks["calweekdays"]["caldaily.PeriodDays"]["edit"] = array("table" => "caldaily", "field" => "PeriodDays", "page" => "edit");
	$lookupTableLinks["calglobals"]["calmonthly.TimeField"]["edit"] = array("table" => "calmonthly", "field" => "TimeField", "page" => "edit");
	$lookupTableLinks["calglobals"]["calmonthly.EndTime"]["edit"] = array("table" => "calmonthly", "field" => "EndTime", "page" => "edit");
	$lookupTableLinks["calperiod"]["calmonthly.Period"]["edit"] = array("table" => "calmonthly", "field" => "Period", "page" => "edit");
	$lookupTableLinks["calcategory"]["calmonthly.Category"]["edit"] = array("table" => "calmonthly", "field" => "Category", "page" => "edit");
	$lookupTableLinks["calweekdays"]["calmonthly.PeriodDays"]["edit"] = array("table" => "calmonthly", "field" => "PeriodDays", "page" => "edit");
	$lookupTableLinks["calglobals"]["calweekly.TimeField"]["edit"] = array("table" => "calweekly", "field" => "TimeField", "page" => "edit");
	$lookupTableLinks["calglobals"]["calweekly.EndTime"]["edit"] = array("table" => "calweekly", "field" => "EndTime", "page" => "edit");
	$lookupTableLinks["calperiod"]["calweekly.Period"]["edit"] = array("table" => "calweekly", "field" => "Period", "page" => "edit");
	$lookupTableLinks["calcategory"]["calweekly.Category"]["edit"] = array("table" => "calweekly", "field" => "Category", "page" => "edit");
	$lookupTableLinks["calweekdays"]["calweekly.PeriodDays"]["edit"] = array("table" => "calweekly", "field" => "PeriodDays", "page" => "edit");
	$lookupTableLinks["calfirstday"]["calglobals.FirstDayOfWeek"]["edit"] = array("table" => "calglobals", "field" => "FirstDayOfWeek", "page" => "edit");
	$lookupTableLinks["calcategory"]["calyearly.Category"]["edit"] = array("table" => "calyearly", "field" => "Category", "page" => "edit");
	$lookupTableLinks["vendors"]["vendor_contacts.vendor_id"]["edit"] = array("table" => "vendor_contacts", "field" => "vendor_id", "page" => "edit");
	$lookupTableLinks["vendors"]["renewals.vendor_id"]["edit"] = array("table" => "renewals", "field" => "vendor_id", "page" => "edit");
	$lookupTableLinks["customers"]["renewals.sold_to_id"]["edit"] = array("table" => "renewals", "field" => "sold_to_id", "page" => "edit");
	$lookupTableLinks["ops_contacts"]["renewals.ops_contact_id"]["edit"] = array("table" => "renewals", "field" => "ops_contact_id", "page" => "edit");
	$lookupTableLinks["sourcing_contacts"]["renewals.sourcing_contact_id"]["edit"] = array("table" => "renewals", "field" => "sourcing_contact_id", "page" => "edit");
	$lookupTableLinks["renewal_types"]["renewals.service_type_id"]["edit"] = array("table" => "renewals", "field" => "service_type_id", "page" => "edit");
	$lookupTableLinks["terms"]["renewals.term_id"]["edit"] = array("table" => "renewals", "field" => "term_id", "page" => "edit");
	$lookupTableLinks["vendor_contacts"]["renewals.vendor_contact_id"]["edit"] = array("table" => "renewals", "field" => "vendor_contact_id", "page" => "edit");
	$lookupTableLinks["status"]["renewals.status_id"]["edit"] = array("table" => "renewals", "field" => "status_id", "page" => "edit");
	$lookupTableLinks["products"]["renewals.product_id"]["edit"] = array("table" => "renewals", "field" => "product_id", "page" => "edit");
	$lookupTableLinks["renewals"]["license_keys.renewal_id"]["edit"] = array("table" => "license_keys", "field" => "renewal_id", "page" => "edit");
	$lookupTableLinks["vendors"]["products.vendor_id"]["edit"] = array("table" => "products", "field" => "vendor_id", "page" => "edit");
	$lookupTableLinks["product_types"]["products.product_types_id"]["edit"] = array("table" => "products", "field" => "product_types_id", "page" => "edit");
}

?>
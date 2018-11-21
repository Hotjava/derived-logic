<?php
$dalTablecalcalendar = array();
$dalTablecalcalendar["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablecalcalendar["DateField"] = array("type"=>7,"varname"=>"DateField", "name" => "DateField");
$dalTablecalcalendar["Description"] = array("type"=>201,"varname"=>"Description", "name" => "Description");
$dalTablecalcalendar["Subject"] = array("type"=>200,"varname"=>"Subject", "name" => "Subject");
$dalTablecalcalendar["TimeField"] = array("type"=>200,"varname"=>"TimeField", "name" => "TimeField");
$dalTablecalcalendar["EndTime"] = array("type"=>200,"varname"=>"EndTime", "name" => "EndTime");
$dalTablecalcalendar["DayEvent"] = array("type"=>3,"varname"=>"DayEvent", "name" => "DayEvent");
$dalTablecalcalendar["EndDate"] = array("type"=>7,"varname"=>"EndDate", "name" => "EndDate");
$dalTablecalcalendar["Period"] = array("type"=>200,"varname"=>"Period", "name" => "Period");
$dalTablecalcalendar["PeriodDays"] = array("type"=>200,"varname"=>"PeriodDays", "name" => "PeriodDays");
$dalTablecalcalendar["Recurrence"] = array("type"=>3,"varname"=>"Recurrence", "name" => "Recurrence");
$dalTablecalcalendar["Category"] = array("type"=>3,"varname"=>"Category", "name" => "Category");
$dalTablecalcalendar["OwnerID"] = array("type"=>200,"varname"=>"OwnerID", "name" => "OwnerID");
	$dalTablecalcalendar["id"]["key"]=true;

$dal_info["Tables__calcalendar"] = &$dalTablecalcalendar;
?>
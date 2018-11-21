<?php
$dalTablecalweekdays = array();
$dalTablecalweekdays["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablecalweekdays["daynum"] = array("type"=>3,"varname"=>"daynum", "name" => "daynum");
$dalTablecalweekdays["dayname"] = array("type"=>200,"varname"=>"dayname", "name" => "dayname");
	$dalTablecalweekdays["id"]["key"]=true;

$dal_info["Tables__calweekdays"] = &$dalTablecalweekdays;
?>
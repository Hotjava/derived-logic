<?php
$dalTablevendors = array();
$dalTablevendors["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablevendors["vendor_name"] = array("type"=>200,"varname"=>"vendor_name", "name" => "vendor_name");
$dalTablevendors["website"] = array("type"=>200,"varname"=>"website", "name" => "website");
	$dalTablevendors["id"]["key"]=true;

$dal_info["Tables__vendors"] = &$dalTablevendors;
?>
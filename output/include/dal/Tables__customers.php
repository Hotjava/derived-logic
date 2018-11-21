<?php
$dalTablecustomers = array();
$dalTablecustomers["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablecustomers["customer"] = array("type"=>3,"varname"=>"customer", "name" => "customer");
$dalTablecustomers["customer_name"] = array("type"=>200,"varname"=>"customer_name", "name" => "customer_name");
	$dalTablecustomers["id"]["key"]=true;

$dal_info["Tables__customers"] = &$dalTablecustomers;
?>
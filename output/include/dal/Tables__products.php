<?php
$dalTableproducts = array();
$dalTableproducts["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableproducts["vendor_id"] = array("type"=>3,"varname"=>"vendor_id", "name" => "vendor_id");
$dalTableproducts["product_name"] = array("type"=>200,"varname"=>"product_name", "name" => "product_name");
$dalTableproducts["product_types_id"] = array("type"=>3,"varname"=>"product_types_id", "name" => "product_types_id");
	$dalTableproducts["id"]["key"]=true;

$dal_info["Tables__products"] = &$dalTableproducts;
?>
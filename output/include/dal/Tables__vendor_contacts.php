<?php
$dalTablevendor_contacts = array();
$dalTablevendor_contacts["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablevendor_contacts["vendor_id"] = array("type"=>3,"varname"=>"vendor_id", "name" => "vendor_id");
$dalTablevendor_contacts["contact_name"] = array("type"=>200,"varname"=>"contact_name", "name" => "contact_name");
$dalTablevendor_contacts["contact_tel"] = array("type"=>200,"varname"=>"contact_tel", "name" => "contact_tel");
$dalTablevendor_contacts["contact_email"] = array("type"=>200,"varname"=>"contact_email", "name" => "contact_email");
	$dalTablevendor_contacts["id"]["key"]=true;

$dal_info["Tables__vendor_contacts"] = &$dalTablevendor_contacts;
?>
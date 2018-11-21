<?php
$dalTableops_contacts = array();
$dalTableops_contacts["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableops_contacts["contact_name"] = array("type"=>200,"varname"=>"contact_name", "name" => "contact_name");
$dalTableops_contacts["contact_tel"] = array("type"=>200,"varname"=>"contact_tel", "name" => "contact_tel");
$dalTableops_contacts["contact_email"] = array("type"=>200,"varname"=>"contact_email", "name" => "contact_email");
	$dalTableops_contacts["id"]["key"]=true;

$dal_info["Tables__ops_contacts"] = &$dalTableops_contacts;
?>
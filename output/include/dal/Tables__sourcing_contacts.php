<?php
$dalTablesourcing_contacts = array();
$dalTablesourcing_contacts["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablesourcing_contacts["contact_name"] = array("type"=>200,"varname"=>"contact_name", "name" => "contact_name");
$dalTablesourcing_contacts["contact_tel"] = array("type"=>200,"varname"=>"contact_tel", "name" => "contact_tel");
$dalTablesourcing_contacts["contact_email"] = array("type"=>200,"varname"=>"contact_email", "name" => "contact_email");
	$dalTablesourcing_contacts["id"]["key"]=true;

$dal_info["Tables__sourcing_contacts"] = &$dalTablesourcing_contacts;
?>
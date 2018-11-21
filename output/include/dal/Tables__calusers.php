<?php
$dalTablecalusers = array();
$dalTablecalusers["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablecalusers["username"] = array("type"=>200,"varname"=>"username", "name" => "username");
$dalTablecalusers["password"] = array("type"=>200,"varname"=>"password", "name" => "password");
$dalTablecalusers["group_id"] = array("type"=>3,"varname"=>"group_id", "name" => "group_id");
	$dalTablecalusers["id"]["key"]=true;

$dal_info["Tables__calusers"] = &$dalTablecalusers;
?>
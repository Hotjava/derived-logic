<?php
class eventclass_ops_contacts  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeInsert"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before Insert Record
function BeforeInsert(&$rawvalues, &$values, &$pageObject, &$message)
{

		
$values['contact_email'] = trim($values['contact_email']);
$values['contact_name'] = trim($values['contact_name']);
$values['contact_tel'] = trim($values['contact_tel']);


//**********  Check if specific record exists  ************
global $conn;
$strSQLExists = "select * from ops_contacts where contact_name = '" . $values['contact_name'] . "'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
 return false;
}
else
{
 return true;
}

;		
} // function BeforeInsert

		
		
		
		
		
		
		
		
//	onscreen events







}
?>

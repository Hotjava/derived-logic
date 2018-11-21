<?php
class eventclass_vendor_contacts  extends eventsBase
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
$rawvalues['vendor_id'] = trim($rawvalues['vendor_id']);


//**********  Check if specific record exists  ************
global $conn;
$strSQLExists = "select * from vendor_contacts where contact_name = '" . $values['contact_name'] . "'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
 return false;
}
else
{
$strSQLExists = "select * from vendors where vendor_name = '" . $rawvalues['vendor_id'] . "'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
$values['vendor_id'] = $data['id'];

return true;
}

;		
} // function BeforeInsert

		
		
		
		
		
		
		
		
//	onscreen events







}
?>

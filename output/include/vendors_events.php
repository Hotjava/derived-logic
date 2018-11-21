<?php
class eventclass_vendors  extends eventsBase
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

		
$values['vendor_name'] = trim($values['vendor_name']);

//**********  Check if specific record exists  ************
global $conn;
$strSQLExists = "select * from vendors where vendor_name='" . $values['vendor_name'] . "'";
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

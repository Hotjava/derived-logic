<?php
class eventclass_renewal_types  extends eventsBase
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

		
$values['renewal_type'] = trim($values['renewal_type']);



//**********  Check if specific record exists  ************
global $conn;
$strSQLExists = "select * from renewal_types where renewal_type = '". $values['renewal_type'] . "'";
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

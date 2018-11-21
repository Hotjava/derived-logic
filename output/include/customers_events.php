<?php
class eventclass_customers  extends eventsBase
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

		

$values['customer'] = trim($values['customer']);
$values['customer_name'] = trim($values['customer_name']);




//**********  Check if specific record exists  ************
global $conn;
$strSQLExists = "select * from customers where customer = '" . $values['customer'] . "'";
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

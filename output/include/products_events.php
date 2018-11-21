<?php
class eventclass_products  extends eventsBase
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

		$values['product_name'] = trim($values['product_name']);
$values['product_types_id'] = trim($values['product_types_id']);

//**********  Check if vendor record exists  ************
global $conn;
$strSQLExists = "select * from vendors where vendor_name = '" . $rawvalues['vendor_id'] ."'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
  $values['vendor_id'] = $data['id'];
}
else
{
$message = "No Vendor by that name";
  return false;
}


//**********  Check if type record exists  ************
$strSQLExists = "select * from product_types where product_type ='" . $rawvalues['product_types_id'] . "'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
  $values['product_types_id'] = $data	['id'];
}
else
{
$message = "No such product type";
  return false;
}


//**********  Check if product record exists  ************
$strSQLExists = "select * from products where product_name ='" . $rawvalues['product_name'] . "'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
$message = "Product already exists";
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

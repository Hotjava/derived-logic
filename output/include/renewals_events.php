<?php
class eventclass_renewals  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeInsert"]=true;

		$this->events["BeforeAdd"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before Insert Record
function BeforeInsert(&$rawvalues, &$values, &$pageObject, &$message)
{

		//Listing each $value array. Use array_map when validated
$values['alert_id'] = trim($values['alert_id']);
$values['comment_actions'] = trim($values['comment_actions']);
$values['erf'] = trim($values['erf']);
$values['impacted_by_dollar'] = trim($values['impacted_by_dollar']);
$values['improvement_comments'] = trim($values['improvement_comments']);
$values['improvement_last_year'] = trim($values['improvement_last_year']);
$values['last_update'] = trim($values['last_update']);
$values['ops_contact_id'] = trim($values['ops_contact_id']);
$values['order_description'] = trim($values['order_description']);
$values['percent_product_sales'] = trim($values['percent_product_sales']);
$values['previous_lbg_pp'] = trim($values['previous_lbg_pp']);
$values['previous_po'] = trim($values['previous_po']);
$values['service_type_id'] = trim($values['service_type_id']);
$values['sold_to_id'] = trim($values['sold_to_id']);
$values['sourcing_contact_id'] = trim($values['sourcing_contact_id']);
$values['support_end_date'] = trim($values['support_end_date']);
$values['support_start_date'] = trim($values['support_start_date']);
$values['term_id'] = trim($values['term_id']);
$values['vendor_contact_id'] = trim($values['vendor_contact_id']);
$values['vendor_id'] = trim($values['vendor_id']);
$values['status_id'] = trim($values['status_id']);
$values['po'] = trim($values['po']);
$rawvalues['sold_to_id'] = trim($rawvalues['sold_to_id']);
$rawvalues['vendor_id'] = trim($rawvalues['vendor_id']);

//There's no UID for renewals. For import, create a string for GUID with two fields. 
$guid = $values['order_description'] . $values['sold_to_id'] . $values['po'];
$values['guid'] = md5($guid);



//**********  Check if specific record exists  ************
global $conn;
$strSQLExists = "select * from renewals where guid = '" . $values['guid'] . "'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
$message = "Renewal record already exists";
	return false;
}
else
{

//**********  Get ops contact id  ************
$strSQLExists = "select * from ops_contacts where contact_name = '" . $rawvalues['ops_contact_id'] . "'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
	$values['ops_contact_id'] = $data['id'];
}
else
{
$message = "No matching OP's contact in database";
 $values['ops_contact_id'] = '';
}

//**********  Get service type id  ************
$strSQLExists = "select * from renewal_types where renewal_type ='" . $rawvalues['service_type_id'] . "'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
 $values['service_type_id'] = $data['id'];
}
else
{
$message = "No matching service type in database";
 $values['service_type_id'] = '';
}

//**********  Get customer id  ************
$strSQLExists = "select * from customers where customer_name = '" . $rawvalues['sold_to_id'] . "'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
 $values['sold_to_id'] = $data['id'];
}
else
{
$message = "No matching customer in database";
 $values['sold_to_id'] = '';
}



//**********  Get sourcing contact ID ************
$strSQLExists = "select * from sourcing_contacts where contact_name = '" . $rawvalues['sourcing_contact_id'] ."'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
 $values['sourcing_contact_id'] = $data['id'];
}
else
{
$message = "No matching sourcing contact in database";
 $values['sourcing_contact_id'] = '';
}



//**********  Get term ID  ************
$strSQLExists = "select * from terms where term_description = '" . $rawvalues['term_id'] . "'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
	$values['term_id'] = $data['id'];
}
else
{
$message = "No matching term in daabase";
 $values['term_id'] = '';
}



//**********  Get vendor contact ID  ************
$strSQLExists = "select * from vendor_contacts where contact_name = '" . $rawvalues['vendor_contact_id'] . "'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
	$values['vendor_contact_id'] = $data['id'];
}
else
{
$message = "No matching vendor contact in database";
	$values['vendor_contact_id'] = '';
}



//**********  Get status id  ************
$strSQLExists = "select * from status where status = '" . $rawvalues['status_id'] . "'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
	$values['status_id'] = $data['id'];
}
else
{
$message = "No matching status in database";
	$values['status_id'] = '';
}





//**********  Get vendor ID  ************
$strSQLExists = "select * from vendors where vendor_name = '" . $rawvalues['vendor_id'] . "'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
	$values['vendor_id'] = $data['id'];
}
else
{
$message = "No matching vendor in database";
	$values['vendor_id'] = '';
}





//**********  Check if specific record exists  ************
$strSQLExists = "select * from products where product_name = '" . $rawvalues['product_id'] . "'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
  $values['product_id'] = $data['id'];
}
else
{
$message = "No matching product in database";
	$values['product_id'] = '';
}


return true;



}    
;		
} // function BeforeInsert

		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		
$values['last_update'] = now();

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>

<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeProcessMenu"]=true;


		$this->events["ModifyMenuItem"]=true;

		$this->events["AfterSuccessfulLogin"]=true;


//	onscreen events



		}

//	handlers

		
		
				// Welcome page: Before process
function BeforeProcessMenu(&$pageObject)
{

		//**********  Redirect to another page  ************
if( strpos(GetUserPermissions("calmonthly"),"S") !== false )
{
	header("Location: calmonthly_list.php");
	exit();
}	  

;		
} // function BeforeProcessMenu

		
		
		
		
				
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
				
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
				
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Menu item: Modify
function ModifyMenuItem(&$menuItem)
{

		

if( isClanedarTableUserDefined() )
{
	$table = $menuItem->getTable();
	if( $table == "calcalendar" || $table == "caldaily" )
		return false;
}
			
			
if( !calendarFieldIsset(calendarGetSetting("calendarCategory")) ) 
{
	$table = $menuItem->getTable();
	if( $table == "calcategory" )
		return false;
}
return true;
;		
} // function ModifyMenuItem

		

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, &$pageObject)
{

		calendar_getGlobalSettings();


//**********  Redirect to another page  ************
header("Location: Dashboard_dashboard.php");
exit();


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterSuccessfulLogin

				
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events

}
?>

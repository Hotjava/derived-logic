<?php
class eventclass_calweekly  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeProcessList"]=true;

		$this->events["BeforeShowList"]=true;

		$this->events["BeforeProcessPrint"]=true;

		$this->events["BeforeQueryList"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["BeforeProcessEdit"]=true;


		$this->events["BeforeShowEdit"]=true;

		$this->events["BeforeEdit"]=true;

		$this->events["BeforeProcessView"]=true;

		$this->events["BeforeShowView"]=true;



		$this->events["ProcessValuesView"]=true;

		$this->events["ProcessValuesEdit"]=true;

		$this->events["BeforeShowPrint"]=true;

		$this->events["CustomAdd"]=true;

		$this->events["CustomEdit"]=true;

		$this->events["ProcessValuesAdd"]=true;

		$this->events["BeforeQueryEdit"]=true;

		$this->events["BeforeQueryView"]=true;

		$this->events["BeforeProcessAdd"]=true;


//	onscreen events
		$this->events["calweekly_snippet1"] = true;
		$this->events["calweekly_snippet2"] = true;
		$this->events["Weekly_Next_Prev"] = true;

	}

//	handlers

				// List page: Before process
function BeforeProcessList(&$pageObject)
{

		calendar_initSessionVariable();

;		
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, &$pageObject)
{

		$pageObject->AddJSFile("include/runnerJS/calendar_buttons.js", "include/runnerJS/pages/AddPage.js");
$pageObject->AddJSFile("include/runnerJS/calendar_add_edit.js", "include/runnerJS/pages/AddPage.js");

global $calendarSettings;
if( isClanedarTableUserDefined() ) 
{
	$userTablepSet = new ProjectSettings( $calendarSettings["calendarTable"] );
	$pageObject->settingsMap["globalSettings"]["shortTNames"][ $calendarSettings["calendarTable"] ] = $userTablepSet->getShortTableName();
	
	$pageObject->setProxyValue( "userDefined", true );
	$pageObject->setProxyValue( "calendarTName", $calendarSettings["calendarTable"] );
	$pageObject->setProxyValue( "calendarKey", $calendarSettings["calendarKeys"]["calendarid"] ); 
	$pageObject->setProxyValue( "calendarDateField", $calendarSettings["calendarFields"]["calendarDateField"] );
	$pageObject->setProxyValue( "calendarEndDate",$calendarSettings["calendarFields"]["calendarEndDate"] );	
	$pageObject->setProxyValue( "calendarSubjField", $calendarSettings["calendarFields"]["calendarSubject"] );
	$pageObject->setProxyValue( "calendarRecurrence", $calendarSettings["calendarFields"]["calendarRecurrence"] );
}

$strWhereClause=$_SESSION["strWhereClause"];

$xt->assign("grid_block",true);
if($_SESSION["UserID"]!="Guest" && CheckTablePermissions("calmonthly","A"))
	$xt->assign("allow_add",true);


//	read settings
if ($_SESSION["calendar_FirstDayOfWeek"]) {
	// we need 0-Monday, 6-Sunday
	$firstWeekDay = ( $_SESSION["calendar_FirstDayOfWeek"]  + 6 ) % 7; 
}
else 
	$firstWeekDay = 6; //	6 - sunday

if ($_SESSION["calendar_EditInPast"]) {
	$allowEditInPast = $_SESSION["calendar_EditInPast"];
}
else 
	$allowEditInPast = 0; //edit events in past 0 - No, 1 - Yes

if ($_SESSION["calendar_DefaultColor"])	{
	$defaultColor = $_SESSION["calendar_DefaultColor"];
}
else 
	$defaultColor = "#FFF";

if ($_SESSION["calendar_WeekendColor"]){
	$WeekendColor = $_SESSION["calendar_WeekendColor"];
}
else 
	$WeekendColor = "#FFF";

$thisMoment = db2time(now());

$currentDate = array( $_SESSION["yr"], $_SESSION["mon"], $_SESSION["days"], 0, 0, 0 );
$weekStart = getweekstart( $currentDate, $firstWeekDay );
$weekEnd = calendar_adddays($weekStart, 7);

//get holidais
$dataHolidais = calendar_getHolidais($weekStart, $weekEnd, $pageObject->connection );

$rawevents = calendar_getListOfEventsInRange( $weekStart, $weekEnd, $strWhereClause, $pageObject->connection );

$events = calendar_sortEvents($weekStart, $weekEnd, $rawevents );

//	process refresh request
if($_REQUEST["a"]=="refresh") 
{
	echo calendar_outputDayEventsHTML( $events, $currentDate, $allowEditInPast, $dataHolidais, "list", "weekly");
	exit();
}

//	assign events

$today = getDatePart( db2time( now() ) );
$weekDay = $weekStart;

for ($i=1; $i<=7; $i++) 
{
	//input events
	$eventsHTML = calendar_outputDayEventsHTML( $events, $weekDay, $allowEditInPast, $dataHolidais, "list", "weekly");
		
	if ( comparedates( $weekDay, $today ) < 0 && !$allowEditInPast )
	{
		$xt->assign("row00AddHideW".($i)."value","style=\"display:none;\"");
	}
	$xt->assign("row00".$i."Datevisible",true);
	$xt->assign("addAttr".$i,"days=" . $weekDay[2] . " mon=" . $weekDay[1] . " yr=" . $weekDay[0] );
	$xt->assign("row00Dateadd".$i."value","yr=" . $weekDay[0] . "&mon=" . $weekDay[1] . "&days=" . $weekDay[2] );
	if ( 0 == comparedates( $today, $weekDay ) )
	{
		$xt->assign("row00".$i."TableNowvalue","style=\"border:2px solid #990000\"");
		$xt->assign("row00".$i."Datevalue","<b>" . calendar_format_datetime_custom( $weekDay, "dddd, MMMM d yyyy" ) . "</b>");
	}
	else
	{
		$xt->assign("row00".$i."TableNowvalue","style=\"border:1px solid #CCCCCC\"");
		$xt->assign("row00".$i."Datevalue", calendar_format_datetime_custom( $weekDay, "dddd, MMMM d yyyy" ) );
	}
	if (getdayofweek($weekDay)==6 || getdayofweek($weekDay)==7){
			$xt->assign("row00".$i."Daystyle","style='background-color:".$WeekendColor.";'");
	} 
	else {
			$xt->assign("row00".$i."Daystyle","style='background-color:".$defaultColor.";'");
	}
	$xt->assign("row00".$i."sDayvalue", $weekDay[0].'_'.$weekDay[1].'_'.$weekDay[2]);
	$xt->assign("row00".$i."Dayvalue", $eventsHTML);

	$weekDay = calendar_adddays( $weekDay, 1 );
}

;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
				// Print page: Before process
function BeforeProcessPrint(&$pageObject)
{

		calendar_initSessionVariable();
;		
} // function BeforeProcessPrint

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before SQL query
function BeforeQueryList(&$strSQL, &$strWhereClause, &$strOrderBy, &$pageObject)
{

		$_SESSION["strWhereClause"]=$strWhereClause;

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeQueryList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		$ret = true;
calendar_tempValidateEvent($values, $ret, $message);

$values["OwnerID"] = $_SESSION["UserID"];

return $ret;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
				// Edit page: Before process
function BeforeProcessEdit(&$pageObject)
{

		


if($_REQUEST["delete1"])
{
	calendar_deleteOneEvent($_REQUEST["editid1"]);
	exit();
}
;		
} // function BeforeProcessEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, &$pageObject)
{

		$dbDate = db2time( $values["DateField"] );
$dbEndDate = db2time( $values["EndDate"] );
$recur = 0; 
if (comparedates( $dbEndDate, $dbDate) != 0) {
			$recur = 1;
}
$eid=$_REQUEST["editid1"];
$xt->assign("delete_button",true);
$xt->assign("hshow",false);
$xt->assign("deleteAttr","recid=".$eid." days=".$_SESSION["days"]." mon=".$_SESSION["mon"]." yr=".$_SESSION["yr"]." recur=".$recur);


;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		$ret = true;
calendar_tempValidateEvent($values, $ret, $message);

return $ret;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
				// View page: Before process
function BeforeProcessView(&$pageObject)
{

		calendar_initSessionVariable();

;		
} // function BeforeProcessView

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowView(&$xt, &$templatefile, &$values, &$pageObject)
{

		if ($values['Color']) {
	$xt->assign("bgc_category",'style="background:'.$values['Color'].';" ');
}
;		
} // function BeforeShowView

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesView(&$values, &$pageObject)
{

		
$tmpColor = $values["Color"];
$values = calendar_convertValues($values);
$values["Color"] = $tmpColor;
if ($values["DayEvent"] == 1) {
	$values["TimeField"]="";
	$values["EndTime"]="";
}
calendar_hideEmptyFields($pageObject, $values);
;		
} // function ProcessValuesView

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesEdit(&$values, &$pageObject)
{

		calendar_initSessionVariable();

$values = calendar_convertValues($values);

if($values["Recurrence"]==0 && !($values["EndDate"]))
	$values["EndDate"] = ($_SESSION["yr"]+1)."-".$_SESSION["mon"]."-".$_SESSION["days"];
if($values["Recurrence"]==0 && !($values["Period"])) {
	$values["Period"]="d";
	$values["PeriodDays"] = calendar_setUpdatePeriodDay($pageObject->connection);
}

calendar_hideFields($pageObject);
;		
} // function ProcessValuesEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowPrint(&$xt, &$templatefile, &$pageObject)
{

		$strWhereClause=$_SESSION["strWhereClause"];

//	read settings
if ($_SESSION["calendar_FirstDayOfWeek"]) {
	// we need 0-Monday, 6-Sunday
	$firstWeekDay = ( $_SESSION["calendar_FirstDayOfWeek"]  + 6 ) % 7; 
}
else 
	$firstWeekDay = 6; //	6 - sunday

if ($_SESSION["calendar_EditInPast"]) {
	$allowEditInPast = $_SESSION["calendar_EditInPast"];
}
else 
	$allowEditInPast = 0; //edit events in past 0 - No, 1 - Yes

$thisMoment = db2time(now());

$currentDate = array( $_SESSION["yr"], $_SESSION["mon"], $_SESSION["days"], 0, 0, 0 );
$weekStart = getweekstart( $currentDate, $firstWeekDay );
$weekEnd = calendar_adddays($weekStart, 7);

$rawevents = calendar_getListOfEventsInRange( $weekStart, $weekEnd, $strWhereClause, $pageObject->connection );
$events = calendar_sortEvents($weekStart, $weekEnd, $rawevents );

//	assign events
$today = getDatePart( db2time( now() ) );

$weekDay = $weekStart;
for ($i=1; $i<=7; $i++) 
{
	$eventsHTML = "";
	//input events
	$weekDayKey = date2db( $weekDay );
	if( isset( $events[ $weekDayKey ] ) )
	{
		foreach( $events[ $weekDayKey ] as $event )
		{
			$eventsHTML .= calendar_getEventHTML( $event, $weekDayKey, $allowEditInPast, $pageObject->pageType );
		}
	
	}
	
	$xt->assign("row00".$i."Datevisible",true);
	$xt->assign("row00".$i."Datevalue","<b>" . calendar_format_datetime_custom( $weekDay, "dddd, MMMM d yyyy" ) . "</b>");
	$xt->assign("row00".$i."Dayvalue", $eventsHTML );

	$weekDay = calendar_adddays( $weekDay, 1 );
}

;		
} // function BeforeShowPrint

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Custom add
function CustomAdd(&$values, &$keys, &$error, $inline, &$pageObject)
{

		calendar_AddRecord($values);

return false;
;		
} // function CustomAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Custom record update
function CustomEdit(&$values, $where, &$oldvalues, &$keys, &$error, $inline, &$pageObject)
{

		calendar_UpdateRecord($values, $oldvalues, $keys);

return false;
;		
} // function CustomEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesAdd(&$values, &$pageObject)
{

		
calendar_hideFields($pageObject);
;		
} // function ProcessValuesAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Edit page: Before SQL query
function BeforeQueryEdit(&$strSQL, &$strWhereClause, &$pageObject)
{

		$strSQL = calendar_getDbValuesById($_REQUEST["editid1"], $pageObject->connection);
;		
} // function BeforeQueryEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// View page: Before SQL query
function BeforeQueryView(&$strSQL, &$strWhereClause, &$pageObject)
{

		$strSQL = calendar_getDbValuesById($_REQUEST["editid1"], $pageObject->connection);
;		
} // function BeforeQueryView

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
				// Add page: Before process
function BeforeProcessAdd(&$pageObject)
{

		calendar_initSessionVariable();
;		
} // function BeforeProcessAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events
function calweekly_snippet1(&$params)
{
echo "<textarea id='calweekly_snippet_add' style='display:none;'>";
calendar_getDataOfCategoryLookup();
calendar_outputTimeFieldsAdd();
echo "</textarea>";


;
}
function calweekly_snippet2(&$params)
{

echo "<textarea id='calweekly_snippet_edit' style='display:none;'>";
calendar_getDataOfCategoryLookup();
calendar_outputTimeFieldsEdit($_REQUEST["editid1"]);
echo "</textarea>";



;
}
function Weekly_Next_Prev(&$params)
{
global $dal;

$days=$_SESSION["days"];
$mon=$_SESSION["mon"];
$yr=$_SESSION["yr"];


//	read settings
$firstWeekDay = 6; //	6 - sunday
$dal_calglobals=$dal->Table("calglobals");
$myrs = $dal_calglobals->QueryAll();
if ($data = db_fetch_array($myrs)) 
{
	// $data["FirstDayOfWeek"] has 0-Sunday, 1-Monday 	
	// we need 0-Monday, 6-Sunday
	$firstWeekDay = ( $data["FirstDayOfWeek"] + 6 ) % 7; 
}

$selectDate = array($yr, $mon, $days, 0, 0, 0);

$weekStart = getweekstart( $selectDate, $firstWeekDay );
$weekEnd = calendar_adddays($weekStart, 6);

$yr1 = addyears($selectDate,-1);
$yr2 = addyears($selectDate,1);

$days1 = calendar_adddays($selectDate,-7);
$days2 = calendar_adddays($selectDate,7); 

$YearFrom = addyears($selectDate,-10);
$YearTo = addyears($selectDate,10);

echo "<div align=center class=calendar_navigation style='display:none'>";
if( $yr1[0] >= $YearFrom[0])
echo "<a href=\"calweekly_list.php?mon=".$days1[1]."&yr=".$days1[0]."&days=".$days1[2]."\"><img src=\"images/arrow_left.png\" alt=prev></a>&nbsp;";
$strNav = "<span> ".calendar_format_datetime_custom( $weekStart, " MMM d " )." - ";
if ($weekStart[1]!=$weekEnd[1]){
	$strNav .= calendar_format_datetime_custom( $weekEnd, "MMM d, yyyy" );
}
else {
	$strNav .= calendar_format_datetime_custom( $weekEnd, " d, yyyy" );
}
$strNav .= "</span>";
echo $strNav;

if( $yr2[0] <= $YearTo[0]) {
	echo "&nbsp;<a href=\"calweekly_list.php?mon=".$days2[1]."&yr=".$days2[0]."&days=".$days2[2]."\"><img src=\"images/arrow_right.png\" alt=next></a>";
}
echo "</div>";


;
}







}
?>

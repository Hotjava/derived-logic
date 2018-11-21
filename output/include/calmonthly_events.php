<?php
class eventclass_calmonthly  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeShowList"]=true;

		$this->events["BeforeProcessList"]=true;

		$this->events["BeforeProcessPrint"]=true;

		$this->events["BeforeShowPrint"]=true;

		$this->events["BeforeQueryList"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["BeforeProcessEdit"]=true;

		$this->events["BeforeEdit"]=true;

		$this->events["BeforeShowEdit"]=true;

		$this->events["BeforeProcessView"]=true;

		$this->events["BeforeShowView"]=true;




		$this->events["ProcessValuesView"]=true;

		$this->events["ProcessValuesEdit"]=true;

		$this->events["CustomAdd"]=true;

		$this->events["CustomEdit"]=true;

		$this->events["ProcessValuesAdd"]=true;

		$this->events["BeforeQueryEdit"]=true;

		$this->events["BeforeQueryView"]=true;


		$this->events["BeforeProcessAdd"]=true;


//	onscreen events
		$this->events["calmonthly_snippet2"] = true;
		$this->events["calmonthly_snippet1"] = true;
		$this->events["Monthly_Next_Prev"] = true;

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, &$pageObject)
{

		$pageObject->AddJSFile("include/runnerJS/calendar_lib.js");
$pageObject->AddJSFile("include/runnerJS/calendar_DragManager.js");
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
	$pageObject->setProxyValue( "calendarDateField",$calendarSettings["calendarFields"]["calendarDateField"] ); 
	$pageObject->setProxyValue( "calendarEndDate",$calendarSettings["calendarFields"]["calendarEndDate"] ); 
	$pageObject->setProxyValue( "calendarSubjField",$calendarSettings["calendarFields"]["calendarSubject"] ); 
}


global $dal;
$strWhereClause=$_SESSION["strWhereClause"];

$xt->assign("grid_block",true);

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

$monthStart = array( $_SESSION["yr"], $_SESSION["mon"], 1, 0, 0, 0 );
$monthDays = calendar_getMonthDays($_SESSION["yr"], $_SESSION["mon"]);
$monthEnd = calendar_adddays($monthStart, $monthDays);
$monthFirstDay = getdayofweek($monthStart);
if ($firstWeekDay == 6 && $monthFirstDay == 7){
	$monthFirstDay = 0;
}

//output header Monday Tuesday ...
if ($firstWeekDay==6){
	$monthFirstDay++;
	$xt->assign("row00sdname1", getDayNameByNumber(7,"dddd"));
	for($j=2; $j<=7; $j++){
		$xt->assign("row00sdname".($j), getDayNameByNumber($j-1,"dddd"));
	}
}
else {
	for($j=1; $j<=7; $j++){
		$xt->assign("row00sdname".($j), getDayNameByNumber($j,"dddd"));
	}
}
//week_link
$weekStart = getweekstart( $monthStart, $firstWeekDay );
for($i=1; $i<=6; $i++){
	if (comparedates( $weekStart, $monthEnd ) < 0 ) {
		$xt->assign("week_link".$i,"<a href=\"calweekly_list.php?yr=".$weekStart[0]."&mon=".$weekStart[1]."&days=".$weekStart[2]."\"><b>>></b></a>");
		$weekStart = calendar_adddays($weekStart,7);
	}
}


//end calendar grid
$endTable = 42;
if (($monthDays+$monthFirstDay)<=36){
	$endTable = 35;
}
$monthStartGrid = calendar_adddays($monthStart,-$monthFirstDay);
$monthEndGrid = calendar_adddays($monthEnd,($endTable-($monthDays+$monthFirstDay)));

//get holidais
$dataHolidais = calendar_getHolidais($monthStartGrid, $monthEndGrid, $pageObject->connection );

$rawevents = calendar_getListOfEventsInRange( $monthStartGrid, $monthEndGrid, $strWhereClause, $pageObject->connection );
$events = calendar_sortEvents($monthStartGrid, $monthEndGrid, $rawevents );

//	process refresh request
if($_REQUEST["a"]=="refresh") 
{
	echo calendar_outputDayEventsHTML( $events, $currentDate, $allowEditInPast, $dataHolidais, "list", "monthly");
	exit();
}

//	assign events
$today = getDatePart( db2time( now() ) );
$monthDay = $monthStartGrid;	

for ($i=0; $i<=$endTable; $i++) 
{
	//input events
	$eventsHTML = calendar_outputDayEventsHTML( $events, $monthDay, $allowEditInPast, $dataHolidais, "list", "monthly");
	
	if ( (comparedates( $monthDay, $today ) >= 0 || $allowEditInPast) && ($_SESSION["UserID"]!="Guest") && CheckTablePermissions("calmonthly","A"))
	{
		$xt->assign("buttonAttr".$i, " id = addButton".$i." ");
		$xt->assign("addAttr".$i,"days=" . $monthDay[2] . " mon=" . $monthDay[1] . " yr=" . $monthDay[0] );
		$xt->assign("onmouseovervalue".($i), "droppable");
	}

	$xt->assign("row00".$i."Datevisible",true);
	$xt->assign("row00Dateadd".$i."value","yr=" . $monthDay[0] . "&mon=" . $monthDay[1] . "&days=" . $monthDay[2] );
	if ( 0 == comparedates( $today, $monthDay ) )
	{
		$xt->assign("row00".$i."TableNowvalue","class='calendar-cellday calendar-td-today'");
		$xt->assign("row00".$i."Datevalue","<b>" . calendar_format_datetime_custom( $monthDay, "d" ) . "</b>");
	}
	else if ($monthDay[1] < $currentDate[1]){
		$xt->assign("row00".$i."TableNowvalue","class='calendar-cellday calendar-td-nonmonth'");
		$xt->assign("row00".$i."Datevalue", calendar_format_datetime_custom( $monthDay, "d MMM" ) );
	}
	else if ($monthDay[1] > $currentDate[1]){
		$xt->assign("row00".$i."TableNowvalue","class='calendar-cellday calendar-td-nonmonth-bottom'");
		$xt->assign("row00".$i."Datevalue", calendar_format_datetime_custom( $monthDay, "d MMM" ) );
	}
	else 
	{
		$xt->assign("row00".$i."TableNowvalue","class='calendar-cellday calendar-td'");
		$xt->assign("row00".$i."Datevalue", calendar_format_datetime_custom( $monthDay, "d" ) );
	}

	if (getdayofweek($monthDay)==6 || getdayofweek($monthDay)==7){
			$xt->assign("row00".$i."Daystyle","style='background-color:".$WeekendColor.";'");
	} 
	else {
			$xt->assign("row00".$i."Daystyle","style='background-color:".$defaultColor.";'");
	}

	$xt->assign("row00".$i."sDayvalue", $monthDay[0].'_'.$monthDay[1].'_'.$monthDay[2]);
	$xt->assign("row00".$i."Dayvalue", $eventsHTML);

	$monthDay = calendar_adddays( $monthDay, 1 );
}

;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

				// List page: Before process
function BeforeProcessList(&$pageObject)
{

		calendar_initSessionVariable();
if($_REQUEST["a"]=="copy")
{
	calendar_copyRecord($_REQUEST["id"], $_REQUEST["day"]);
	exit();
}
;		
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
				// Print page: Before process
function BeforeProcessPrint(&$pageObject)
{

		calendar_initSessionVariable();

;		
} // function BeforeProcessPrint

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowPrint(&$xt, &$templatefile, &$pageObject)
{

		global $dal;
$strWhereClause=$_SESSION["strWhereClause"];
//**********************************************

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

$monthStart = array( $_SESSION["yr"], $_SESSION["mon"], 1, 0, 0, 0 );
$monthDays = calendar_getMonthDays($_SESSION["yr"], $_SESSION["mon"]);
$monthEnd = calendar_adddays($monthStart, $monthDays);
$monthFirstDay = getdayofweek($monthStart);
 

$rawevents = calendar_getListOfEventsInRange( $monthStart, $monthEnd, $strWhereClause, $pageObject->connection );
$events = calendar_sortEvents($monthStart, $monthEnd, $rawevents );

//output header Monday Tuesday ...
$xt->assign("Monthly_month_year",calendar_format_datetime_custom( $currentDate, " MMMM yyyy" ));
if ($firstWeekDay==6){
	$monthFirstDay++;
	$xt->assign("row00sdname1", getDayNameByNumber(7,"dddd"));
	for($j=2; $j<=7; $j++){
		$xt->assign("row00sdname".($j), getDayNameByNumber($j-1,"dddd"));
	}
}
else {
	for($j=1; $j<=7; $j++){
		$xt->assign("row00sdname".($j), getDayNameByNumber($j,"dddd"));
	}
}
//	assign events

$today = getDatePart( db2time( now() ) );
$monthDay = $monthStart;
	
for ($i=$monthFirstDay; $i<$monthDays+$monthFirstDay; $i++) 
{
	$eventsHTML = "";
	//input events
	$monthDayKey = date2db( $monthDay );
	
	if( isset( $events[ $monthDayKey ] ) )
	{
		foreach( $events[ $monthDayKey ] as $event )
		{
			$eventsHTML .= calendar_getEventHTML( $event, $monthDayKey, $allowEditInPast, $pageObject->pageType );
		}
	
	}
	
	$xt->assign("row00".$i."Datevisible",true);
	$xt->assign("row00".$i."Datevalue", calendar_format_datetime_custom( $monthDay, "d" ) );
	$xt->assign("row00".$i."Dayvalue", $eventsHTML );

	$monthDay = calendar_adddays( $monthDay, 1 );
}


;		
} // function BeforeShowPrint

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before SQL query
function BeforeQueryList(&$strSQL, &$strWhereClause, &$strOrderBy, &$pageObject)
{

		$_SESSION["strWhereClause"]=$strWhereClause;


;		
} // function BeforeQueryList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		
$ret = true;

calendar_tempValidateEvent($values, $ret, $message);

$values["OwnerID"]=$_SESSION["UserID"];

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

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		$ret = true;
calendar_tempValidateEvent($values, $ret, $message);

$values["OwnerID"]=$_SESSION["UserID"];


return $ret;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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

if($values["DayEvent"]==1)
{
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
calendar_hideFields($pageObject);

$values = calendar_convertValues($values);

if($values["Recurrence"]==0 && !($values["EndDate"]))
	$values["EndDate"] = ($_SESSION["yr"]+1)."-".$_SESSION["mon"]."-".$_SESSION["days"];
if($values["Recurrence"]==0 && !($values["Period"])) {
	$values["Period"]="d";
	$values["PeriodDays"] = calendar_setUpdatePeriodDay($pageObject->connection);
}

;		
} // function ProcessValuesEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
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
function calmonthly_snippet2(&$params)
{
echo "<textarea id='calmonthly_snippet_edit' style='display:none;'>";
calendar_getDataOfCategoryLookup();
calendar_outputTimeFieldsEdit($_REQUEST["editid1"]);
echo "</textarea>";



;
}
function calmonthly_snippet1(&$params)
{
echo "<textarea id='calmonthly_snippet_add' style='display:none;'>";
calendar_getDataOfCategoryLookup();
calendar_outputTimeFieldsAdd();
echo "</textarea>";


;
}
function Monthly_Next_Prev(&$params)
{

$today = getDatePart( db2time( now() ) );
$days=$_SESSION["days"];
$mon=$_SESSION["mon"];
$yr=$_SESSION["yr"];

$selectDate = array($yr, $mon, $days, 0, 0, 0);
$yr1 = addyears($selectDate,-1);
$yr2 = addyears($selectDate,1);

$mon1 = addmonths($selectDate,-1);
$mon2 = addmonths($selectDate,1);

$todayYearFrom = addyears($today,-10);
$todayYearTo = addyears($today,10);
echo "<div class='calendar_navigation form-contrl' style='display:none'>";
if( $yr1[0] >= $todayYearFrom[0]){
	echo "<a href=\"calmonthly_list.php?mon=".$mon1[1]."&yr=".$mon1[0]."\"><img src=\"images/arrow_left.png\" alt=prev></a>&nbsp;";
}
echo "<select id=mselect onchange=\"window.location.href='calmonthly_list.php?mon='+$('#mselect').val()+'&yr='+$('#yselect').val()\">";
for($i=1;$i<=12;$i++)
{
	$s="";
	if($i==$mon)
		$s=" selected";
	echo "<option style=\"color:#000;\" value=" . $i . " " . $s . ">" . getMonthNameByNumber ($i, "MMMM") . "</option>";
}
echo "</select>&nbsp;&nbsp;";

echo "<select id=yselect onchange=\"window.location.href='calmonthly_list.php?mon='+$('#mselect').val()+'&yr='+$('#yselect').val()\">";
for($i=$todayYearFrom[0]; $i<=$todayYearTo[0]; $i++ )
{
	$s="";
	if($i==$yr)
		$s=" selected";
	echo "<option style=\"color:#000;\" value=" . $i . " " . $s . ">" . $i . "</option>";
}
echo "</select>";

if( $yr2[0] <= $todayYearTo[0]){
	echo "&nbsp;<a href=\"calmonthly_list.php?mon=".$mon2[1]."&yr=".$mon2[0]."\"><img src=\"images/arrow_right.png\" alt=next></a>";
}
echo "</div>";


;
}







}
?>

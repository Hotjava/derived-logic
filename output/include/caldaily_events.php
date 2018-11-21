<?php
class eventclass_caldaily  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeProcessAdd"]=true;

		$this->events["BeforeProcessEdit"]=true;

		$this->events["BeforeShowEdit"]=true;

		$this->events["BeforeProcessList"]=true;

		$this->events["BeforeProcessPrint"]=true;

		$this->events["BeforeProcessView"]=true;

		$this->events["BeforeShowView"]=true;

		$this->events["BeforeProcessExport"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["BeforeShowList"]=true;

		$this->events["BeforeEdit"]=true;

		$this->events["BeforeMoveNextList"]=true;

		$this->events["ListGetRowCount"]=true;

		$this->events["ListQuery"]=true;

		$this->events["ListFetchArray"]=true;



		$this->events["BeforeShowAdd"]=true;

		$this->events["BeforeMoveNextPrint"]=true;

		$this->events["ProcessValuesView"]=true;

		$this->events["ProcessValuesEdit"]=true;

		$this->events["CustomAdd"]=true;

		$this->events["CustomEdit"]=true;

		$this->events["BeforeProcessRowList"]=true;

		$this->events["ProcessValuesAdd"]=true;

		$this->events["BeforeQueryView"]=true;

		$this->events["BeforeQueryEdit"]=true;

		$this->events["BeforeProcessRowPrint"]=true;

		$this->events["BeforeShowPrint"]=true;

		$this->events["BeforeOut"]=true;

		$this->events["BeforeProcessSearch"]=true;


//	onscreen events
		$this->events["Daily_Next_Prev"] = true;
		$this->events["caldaily_snippet1"] = true;
		$this->events["caldaily_snippet2"] = true;

	}

//	handlers

		
		
				// Add page: Before process
function BeforeProcessAdd(&$pageObject)
{

		$pageObject->AddJSFile("include/runnerJS/calendar_add_edit.js", "include/runnerJS/pages/AddPage.js");
$id=@$_REQUEST["id"];
if(intval($id)==0)
		$id = 1;
$_SESSION["id"]=$id;

calendar_initSessionVariable();



;		
} // function BeforeProcessAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
				// Edit page: Before process
function BeforeProcessEdit(&$pageObject)
{

		$pageObject->AddJSFile("include/runnerJS/calendar_add_edit.js", "include/runnerJS/pages/AddPage.js");




;		
} // function BeforeProcessEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, &$pageObject)
{

		$xt->assign("windvalue","<input type=hidden name=wind value=" . $_SESSION["row00window_value"] . ">");
$xt->assign("row00windowvalue",$_SESSION["row00window_value"]);
$xt->assign("row00headervalue","");
$xt->assign("row00formvalue","");
$xt->assign("hshow",true);
$xt->assign("delete_button",false);


if($_SESSION["row00window_value"]=="calendar")
	$xt->assign("my_backbutton_attrs","onclick=\"window.location.href='calcalendar_list.php?a=return'\"");
else
	$xt->assign("my_backbutton_attrs","onclick=\"window.location.href='caldaily_list.php?a=return'\"");

;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

				// List page: Before process
function BeforeProcessList(&$pageObject)
{

		
calendar_initSessionVariable();

if($_REQUEST["a"]="delete")
{
	calendar_deleteEvents($_REQUEST["selection"]);
}

if( isClanedarTableUserDefined() && strlen($_REQUEST["days"]) && strlen($_REQUEST["mon"]) && strlen($_REQUEST["yr"]) )
{
	global $calendarSettings;
	$calendarField = calendarGetSetting( calendarGetDateOrTimeKey("date") );
	$gcalendarField = GoodFieldName( $calendarField );	
	$userTablepSet = new ProjectSettings( $calendarSettings["calendarTable"] );

	$dateType = $userTablepSet->getDateEditType( $calendarField );
	$searchParams = "q=(".$gcalendarField."~equals~".$_REQUEST["yr"]."-".$_REQUEST["mon"]."-".$_REQUEST["days"]."~date".$dateType.")";
	
	HeaderRedirect( GetTableURL($calendarSettings["calendarTable"]), PAGE_LIST, $searchParams);
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

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
				// View page: Before process
function BeforeProcessView(&$pageObject)
{

		calendar_initSessionVariable();


;		
} // function BeforeProcessView

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowView(&$xt, &$templatefile, &$values, &$pageObject)
{

		$xt->assign("row00headervalue","");
$xt->assign("windvalue","<input type=hidden name=wind value=".$_SESSION["row00window_value"].">");
if ($_SESSION["row00window_value"]!="daily" && $_SESSION["row00window_value"]!="calendar")
{
	$xt->assign("row00headervalue","cursor:move;");
	$xt->assign("row00headervalue2","onmousedown=\"omd(event);\" onmouseup=\"mclick=0;\"");
}

if($_SESSION["row00window_value"]=="monthly" || $_SESSION["row00window_value"]=="weekly")
	$xt->assign("hshow",false);
else
	$xt->assign("hshow",true);


if($_SESSION["row00window_value"]!="daily")
{
	if($_SESSION["row00window_value"]!="calendar")
		$xt->assign("my_backbutton_attrs","onclick=\"$('#addiframe').hide();$('#addnew').hide();$('#addnew1').html('');return false;\"");
	else
		$xt->assign("my_backbutton_attrs","onclick=\"window.location.href='calcalendar_list.php?a=return'\"");
}
else
	$xt->assign("my_backbutton_attrs","onclick=\"window.location.href='caldaily_list.php?a=return'\"");

if ($values['Color']) {
	$xt->assign("bgc_category",'style="background:'.$values['Color'].';" ');
}
 

;		
} // function BeforeShowView

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
				// Export page: Before process
function BeforeProcessExport(&$pageObject)
{

		calendar_initSessionVariable();


;		
} // function BeforeProcessExport

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		$ret = true;
calendar_tempValidateEvent($values, $ret, $message);

$values["OwnerID"]=$_SESSION["UserID"];

return $ret;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, &$pageObject)
{

		
global $calendarSettings;					
					
if ( !isClanedarTableUserDefined() ) 					
	$xt->assign("my_addlink_attrs","href=\"caldaily_add.php?wind=daily\"");
else
	$xt->assign("my_addlink_attrs","href=\"".GetTableURL($calendarSettings["calendarTable"]).".php?wind=daily\"");
	

$allowEditInPast = 0; //edit events in past 0 - No, 1 - Yes
if ($_SESSION["calendar_EditInPast"]){
	$allowEditInPast = $_SESSION["calendar_EditInPast"];
}
else {
	global $dal;
	//	read settings
	$dal_calglobals=$dal->Table("calglobals");
	$myrs = $dal_calglobals->QueryAll();
	if ($mydata = db_fetch_array($myrs)) 
	{
		$allowEditInPast = $mydata["EditInPast"];
	}
}

$today = getDatePart( db2time( now() ) );
$currentDate = array( $_SESSION["yr"], $_SESSION["mon"], $_SESSION["days"], 0, 0, 0 );
if (comparedates($today, $currentDate) >=0  && $allowEditInPast==0) {
	$xt->assign("add_link", false);
}

calendar_hideGridColumn($xt);
;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		$ret = true;
calendar_tempValidateEvent($values, $ret, $message);

return $ret;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject)
{

		calendar_validateAfterProcessed($data, $record, "daily");

;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Get Row Count
function ListGetRowCount($searchObj, $masterTable, $masterKeysReq, $selectedRecords, &$pageObject)
{

		$dateStart = array( $_SESSION["yr"], $_SESSION["mon"], $_SESSION["days"], 0, 0, 0 );
$dateEnd = calendar_adddays($dateStart, 1);
$strWhereClause = calendar_getSearchWhereClause($pageObject);
$rawevents = calendar_getListOfEventsInRange( $dateStart, $dateEnd, $strWhereClause, $pageObject->connection );
$events = calendar_sortEvents($dateStart, $dateEnd, $rawevents );
$DayKey = date2db( $dateStart );
$event = $events[$DayKey];
return count($event);


;		
} // function ListGetRowCount

		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Custom Query
function ListQuery($searchObj, $orderBy, $howOrderBy, $masterTable, $masterKeysReq, $selectedRecord, $pageSize, $myPage, &$pageObject)
{

		$dateStart = array( $_SESSION["yr"], $_SESSION["mon"], $_SESSION["days"], 0, 0, 0 );
$dateEnd = calendar_adddays($dateStart, 1);
$strWhereClause = calendar_getSearchWhereClause($pageObject);
$rawevents = calendar_getListOfEventsInRange( $dateStart, $dateEnd, $strWhereClause, $pageObject->connection );
$events = calendar_sortEvents($dateStart, $dateEnd, $rawevents );
$DayKey = date2db( $dateStart );
$event = $events[$DayKey];
return $event;
;		
} // function ListQuery

		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Fetch records
function ListFetchArray(&$rs, &$pageObject)
{

		if (count($rs) > 0){
	return array_shift($rs);
}
;		
} // function ListFetchArray

		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, &$pageObject)
{

		$xt->assign("row00headervalue","");
$xt->assign("row00formvalue","");
$xt->assign("hshow",true);


if($_SESSION["row00window_value"]=="calendar")
	$xt->assign("my_backbutton_attrs","onclick=\"window.location.href='calcalendar_list.php?a=return'\"");
else
	$xt->assign("my_backbutton_attrs","onclick=\"window.location.href='caldaily_list.php?a=return'\"");


;		
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Print page: After record processed
function BeforeMoveNextPrint(&$data, &$row, &$record, &$pageObject)
{

		calendar_validateAfterProcessed($data, $record, "calendar", $pageObject->pageType);



;		
} // function BeforeMoveNextPrint

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before record processed
function BeforeProcessRowList(&$data, &$pageObject)
{

		$data = calendar_convertValues($data);
return true;
;		
} // function BeforeProcessRowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesAdd(&$values, &$pageObject)
{

		calendar_hideFields($pageObject);
;		
} // function ProcessValuesAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// View page: Before SQL query
function BeforeQueryView(&$strSQL, &$strWhereClause, &$pageObject)
{

		$strSQL = calendar_getDbValuesById($_REQUEST["editid1"], $pageObject->connection);



;		
} // function BeforeQueryView

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Edit page: Before SQL query
function BeforeQueryEdit(&$strSQL, &$strWhereClause, &$pageObject)
{

		
$strSQL = calendar_getDbValuesById($_REQUEST["editid1"], $pageObject->connection);

;		
} // function BeforeQueryEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Print page: Before record processed
function BeforeProcessRowPrint(&$data, &$pageObject)
{

		$data = calendar_convertValues($data);

return true;
;		
} // function BeforeProcessRowPrint

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowPrint(&$xt, &$templatefile, &$pageObject)
{

		calendar_hideFields($pageObject);
;		
} // function BeforeShowPrint

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before Export Record
function BeforeOut(&$data, &$values, &$pageObject)
{

		$values = calendar_convertValues($data);

return true;
;		
} // function BeforeOut

		
		
		
		
		
		

		
		
		
		
		
		
				// Search page: Before process
function BeforeProcessSearch(&$pageObject)
{

		calendar_hideFields($pageObject);
;		
} // function BeforeProcessSearch

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events
function Daily_Next_Prev(&$params)
{
global $dal;

$days=$_SESSION["days"];
$mon=$_SESSION["mon"];
$yr=$_SESSION["yr"];

$selectDate = array($yr, $mon, $days, 0, 0, 0);
$monthStart = array($yr, $mon, 1, 0, 0, 0);
$monthDays = calendar_getMonthDays($yr, $mon);

$yr1 = addyears($selectDate,-1);
$yr2 = addyears($selectDate,1);

$days1 = calendar_adddays($selectDate,-1);
$days2 = calendar_adddays($selectDate,1); 

$YearFrom = addyears($selectDate,-10);
$YearTo = addyears($selectDate,10);

echo "<div align=center class=calendar_navigation>";
if( $yr1[0] >= $YearFrom[0])
echo "<a href=\"caldaily_list.php?mon=".$days1[1]."&yr=".$days1[0]."&days=".$days1[2]."\"><img src=\"images/arrow_left.png\" alt=prev></a>&nbsp;";
echo "<span> ".calendar_format_datetime_custom( $selectDate, "dddd, MMMM d yyyy" )."</span>";

if( $yr2[0] <= $YearTo[0])
	echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"caldaily_list.php?mon=".$days2[1]."&yr=".$days2[0]."&days=".$days2[2]."\"><img src=\"images/arrow_right.png\" alt=next></a>";
echo "</div>";

;
}
function caldaily_snippet1(&$params)
{
?>
<script>
<?php
calendar_getDataOfCategoryLookup();
calendar_outputTimeFieldsAdd();
?>
</script>
<?php




;
}
function caldaily_snippet2(&$params)
{
?>
<script>
<?php
calendar_getDataOfCategoryLookup();
calendar_outputTimeFieldsEdit($_REQUEST["editid1"]);
?>
</script>
<?php

;
}







}
?>

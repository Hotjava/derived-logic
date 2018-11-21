<?php
class eventclass_calcalendar  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeMoveNextList"]=true;

		$this->events["BeforeShowList"]=true;

		$this->events["BeforeProcessList"]=true;

		$this->events["BeforeMoveNextPrint"]=true;

		$this->events["ListGetRowCount"]=true;

		$this->events["ListQuery"]=true;

		$this->events["ListFetchArray"]=true;

		$this->events["BeforeProcessRowList"]=true;

		$this->events["BeforeShowPrint"]=true;

		$this->events["BeforeProcessRowPrint"]=true;

		$this->events["BeforeOut"]=true;

		$this->events["BeforeProcessSearch"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject)
{

		calendar_validateAfterProcessed($data, $record, "calendar");

;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, &$pageObject)
{

		
global $calendarSettings;					
					
if ( !isClanedarTableUserDefined() ) 					
	$xt->assign("my_addlink_attrs","href=\"caldaily_add.php?wind=calendar\"");
else
	$xt->assign("my_addlink_attrs","href=\"".GetTableURL($calendarSettings["calendarTable"])."_add.php?wind=calendar\"");
	
calendar_hideGridColumn($xt);
;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

				// List page: Before process
function BeforeProcessList(&$pageObject)
{

		$pageObject->AddCSSFile("styles/calendar.css");
$today = getDatePart( db2time( now() ) );
$_SESSION["days"] = $today[2];
$_SESSION["mon"] = $today[1];
$_SESSION["yr"] = $today[0];


if($_REQUEST["a"]="delete")
{
	calendar_deleteEvents($_REQUEST["selection"]);
}
;		
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Print page: After record processed
function BeforeMoveNextPrint(&$data, &$row, &$record, &$pageObject)
{

		calendar_validateAfterProcessed($data, $record, "calendar", $pageObject->pageType);

;		
} // function BeforeMoveNextPrint

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Get Row Count
function ListGetRowCount($searchObj, $masterTable, $masterKeysReq, $selectedRecords, &$pageObject)
{

		$dateStart = db2time(calendar_getMinDateField($pageObject->connection));
if (!$dateStart)
	return 0;
$dateEnd = db2time(calendar_getMaxDateField($pageObject->connection)); 
$dateEnd = calendar_adddays($dateEnd,1);
$strWhereClause = calendar_getSearchWhereClause($pageObject);
$rawevents = calendar_getListOfEventsInRange( $dateStart, $dateEnd, $strWhereClause, $pageObject->connection );
return count($rawevents);
;		
} // function ListGetRowCount

		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Custom Query
function ListQuery($searchObj, $orderBy, $howOrderBy, $masterTable, $masterKeysReq, $selectedRecord, $pageSize, $myPage, &$pageObject)
{

		$dateStart = db2time(calendar_getMinDateField($pageObject->connection));
if (!$dateStart)
		return array();
$dateEnd = db2time(calendar_getMaxDateField($pageObject->connection));
$dateEnd = calendar_adddays($dateEnd,1);
$strWhereClause = calendar_getSearchWhereClause($pageObject);
$rawevents = calendar_getListOfEventsInRange( $dateStart, $dateEnd, $strWhereClause, $pageObject->connection );
return $rawevents;
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

		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before record processed
function BeforeProcessRowList(&$data, &$pageObject)
{

		$data = calendar_convertValues($data);


return true;
;		
} // function BeforeProcessRowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowPrint(&$xt, &$templatefile, &$pageObject)
{

		calendar_hideFields($pageObject);
;		
} // function BeforeShowPrint

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Print page: Before record processed
function BeforeProcessRowPrint(&$data, &$pageObject)
{

		$data = calendar_convertValues($data);

return true;
;		
} // function BeforeProcessRowPrint

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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







}
?>

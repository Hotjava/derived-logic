<?php
class eventclass_calyearly  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeShowList"]=true;

		$this->events["BeforeProcessList"]=true;



//	onscreen events
		$this->events["Yearly_Next_Prev"] = true;

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, &$pageObject)
{

		
$pageObject->AddJSFile("include/runnerJS/calendar_function.js");
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

if ($_SESSION["calendar_HolidayColor"]){
	$holidayColor = $_SESSION["calendar_HolidayColor"];
}
else 
	$holidayColor = "#FFF";

if ($_SESSION["calendar_WeekendColor"]){
	$WeekendColor = $_SESSION["calendar_WeekendColor"];
}
else 
	$WeekendColor = "#FFF";

$currentYear = $_SESSION["yr"];
$today = getDatePart( db2time( now() ) );

//get holidais
$beginYear = array( $currentYear, 1, 1, 0, 0, 0 );
$endYear = addyears($beginYear,1);
$myHolidais = calendar_getHolidais($beginYear, $endYear,  $pageObject->connection );

//output header days Monday Tuesday ...
if ($firstWeekDay==6){
	$xt->assign("row00sdname1", getDayNameByNumber(7, "ddd"));
	for($j=2; $j<=7; $j++){
		$xt->assign("row00sdname".($j), getDayNameByNumber($j-1, "ddd"));
	}
}
else {
	for($j=1; $j<=7; $j++){
		$xt->assign("row00sdname".($j), getDayNameByNumber($j, "ddd"));
	}
}

//output events
for ($mon=1; $mon<=12; $mon++){
	$monthStart = array( $currentYear, $mon, 1, 0, 0, 0 );
	$monthDays = calendar_getMonthDays($currentYear, $mon);
	$monthEnd = calendar_adddays($monthStart, $monthDays);
	$monthFirstDay = getdayofweek($monthStart);
	if ($firstWeekDay == 6 && $monthFirstDay == 7){
		$monthFirstDay = 0;
	}
	if ($firstWeekDay==6){
		$monthFirstDay++;
	}
	
	

	//output month name
	$xt->assign("row00MonthName".$mon, getMonthNameByNumber($mon,"MMMM"));
	$xt->assign("linkMonthly" . $mon,"calmonthly_list.php?yr=" . $currentYear . "&mon=" . $mon);
	
	$rawdates = calendar_getListOfDatesInRange( $monthStart, $monthEnd, $strWhereClause, $pageObject->connection );
	$dates = calendar_sortDates($monthStart, $monthEnd, $rawdates );

	$monthDay = $monthStart;
	$weekStart = getweekstart( $monthStart, $firstWeekDay );
	$weekIndex = 1;
	
	for ($i=$monthFirstDay; $i<$monthDays+$monthFirstDay; $i++) 
	{
		if (comparedates( $weekStart, $monthEnd ) < 0 ) {
			$xt->assign("week_linkMon" . $mon . "Week" . $weekIndex,"<a href='calweekly_list.php?yr=".$weekStart[0]."&mon=".$weekStart[1]."&days=".$weekStart[2]."'>></a>");
			$weekStart = calendar_adddays($weekStart,7);
			$weekIndex++;
		}
	
		//input events
		$monthDayKey = date2db( $monthDay );
	
		if(!in_array($monthDayKey,$dates) && !array_key_exists($monthDayKey, $myHolidais)) {
			$xt->assign("row00Month".$mon."Day".$i, $monthDay[2]);
		}
			else {
			if(in_array($monthDayKey,$dates)) {
               // $xt->assign("divview" . $mon . "Day" . $i, "class='views-popup badge badge-primary' url='" . GetTableLink("calyearly", "list", "") . "' yr=" . $monthDay[0] . " mon=" . $monthDay[1] . " days=" . $monthDay[2]);
                $xt->assign("divview".$mon."Day".$i,"class='views-popup' url='".GetTableLink("calyearly", "list", "")."' yr=".$monthDay[0]." mon=".$monthDay[1]." days=".$monthDay[2]);
                $xt->assign("row00Month".$mon."Day".$i, "<span class ='badge badge-primary'>".$monthDay[2]."</span>");
            }
            else{
                $xt->assign("divview".$mon."Day".$i,"class='views-popup' url='".GetTableLink("calyearly", "list", "")."' yr=".$monthDay[0]." mon=".$monthDay[1]." days=".$monthDay[2]);
                $xt->assign("row00Month".$mon."Day".$i, "<b>".$monthDay[2]."</b>");

            }


			
		}

		//set holiday color
		if (array_key_exists($monthDayKey, $myHolidais)) 
		{
			$xt->assign("style_m".$mon."d".$i,"style='background-color:".$holidayColor.";'");
		} else if (getdayofweek($monthDay)==6 || getdayofweek($monthDay)==7){
			$xt->assign("style_m".$mon."d".$i,"style='background-color:".$WeekendColor.";'");
		}
		else 
		{
			$xt->assign("style_m".$mon."d".$i,"style='background-color:".$defaultColor.";'");
		}
		
		if( isClanedarTableUserDefined() )
		{
			global $calendarSettings;
			$calendarField = calendarGetSetting( calendarGetDateOrTimeKey("date") );
			$gcalendarField = GoodFieldName( $calendarField );
			$userTablepSet = new ProjectSettings( $calendarSettings["calendarTable"] );

			$dateType = $userTablepSet->getDateEditType( $calendarField  );
			
			$linkDay = GetTableLink( GetTableURL($calendarSettings["calendarTable"]), PAGE_LIST, "q=(".$gcalendarField."~equals~".$monthDay[0]."-".$monthDay[1]."-".$monthDay[2]."~date".$dateType.")" );		
			$linkDay = refineHref( $linkDay );
		}
		else
			$linkDay = "caldaily_list.php?yr=".$monthDay[0]. "&mon=" . $monthDay[1] . "&days=" .$monthDay[2]."&qq=qq";		
		
		$xt->assign( "linkDayM". $mon ."Day".$i, $linkDay );
		
		if ( 0 == comparedates( $today, $monthDay ) ) {
			$xt->assign("NowM" . $mon . "D" . $i,"font-weight:normal;border:2px solid #990000");
		}
	 	$monthDay = calendar_adddays( $monthDay, 1 );
	}
}



;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

				// List page: Before process
function BeforeProcessList(&$pageObject)
{

		calendar_initSessionVariable();

if($_REQUEST["a"]=="year") 
	{	
		
		$monthStart = array($_SESSION["yr"], $_SESSION["mon"], $_SESSION["days"], 0, 0, 0);
		$monthEnd = calendar_adddays($monthStart, 1);
		$rawevents = calendar_getListOfEventsInRange( $monthStart, $monthEnd, '', $pageObject->connection );
		$events = calendar_sortEvents($monthStart, $monthEnd, $rawevents );
		$dataHolidais = calendar_getHolidais($monthStart, $monthEnd, $pageObject->connection );
	
		$eventsHTML = calendar_outputDayEventsHTML( $events, $monthStart, $allowEditInPast, $dataHolidais, "list", "yearly");
	
		$respObj = array('success'=>true, 'calevents'=>$eventsHTML);
		echo printJSON($respObj);
		exit();
	}


;		
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events
function Yearly_Next_Prev(&$params)
{
$today = getDatePart( db2time( now() ) );
$days=$_SESSION["days"];
$mon=$_SESSION["mon"];
$yr=$_SESSION["yr"];

$yr1=$yr-1;
$yr2=$yr+1;

$todayYearFrom = addyears($today,-10);
$todayYearTo = addyears($today,10);
echo "<div align=center class=calendar_navigation>";
if( $yr1 >= $todayYearFrom[0])
echo "<a href=\"calyearly_list.php?yr=" . $yr1 . "\"><img src=\"images/arrow_left.png\" alt=prev></a>&nbsp;";
echo "<select id=yselect onchange=\"window.location.href='calyearly_list.php?yr='+$('#yselect').val()\">";
for($i=$todayYearFrom[0];$i<=$todayYearTo[0];$i++)
{
	$s="";
	if($i==$yr+0)
		$s=" selected";
	echo "<option style=\"color:#000;\" value=" . $i . " " . $s . ">" . $i . "</option>";
}
echo "</select>";
if( $yr2 <= $todayYearTo[0])
echo "&nbsp;<a href=\"calyearly_list.php?yr=" . $yr2 . "\"><img src=\"images/arrow_right.png\" alt=next></a>";
echo "</div>";



;
}







}
?>

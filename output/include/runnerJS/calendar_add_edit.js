/**
*
*/
function initPeriod(periodVal, pageObj){

	if(periodVal == 'd')
	{
		$('#PeriodDays').show();
		if (pageObj.win)
			pageObj.win.set('height', $(".fieldGrid").height()+124);
	}
	else
	{
		$('#PeriodDays').hide();
		if (pageObj.win)
			pageObj.win.set('height', $(".fieldGrid").height()+124);
	}
};
/**
*
*/
function initRecurrence(recVal, ctrlPeriod, pageObj){
	
	if(recVal == '')
	{
		//$('#EndDate').hide();
		$('#Period').hide();
		$('#PeriodDays').hide();
		if (pageObj.win){
			pageObj.win.set('height',  $(".fieldGrid").height()+124);
		}
	}
	else
	{
		//$('#EndDate').show();
		$('#Period').show();
		if(ctrlPeriod && ctrlPeriod.getValue()=='d')
		{
			$('#PeriodDays').show();
			if (pageObj.win) {
				pageObj.win.set('height', $(".fieldGrid").height()+124); 
			}
		}
		else {
			if (pageObj.win){
				pageObj.win.set('height',  $(".fieldGrid").height()+124); 
			}
		}
		
	}
};
/**
*
*/
function initCategory(CategoryVal){
	if(CategoryVal == undefined){
		$("#bgc").removeAttr("style");
	}
	else
	{  
		$("#bgc").attr("style","background-color:" + CategoryVal);
	}
};
/**
*
*/
function initDayEvent(DayEventVal, pageid){
	if(DayEventVal == 'on')
	{
		$('#value_TimeField_'+pageid).prop( "disabled", true);
		$('#value_EndTime_'+pageid).prop( "disabled", true);
	}
	else
	{
		$('#value_TimeField_'+pageid).prop( "disabled",false);
		$('#value_EndTime_'+pageid).prop( "disabled",false);
	}
};
/**
*
*/
function initAddPage(pageid, ctrlDayEvent, ctrlRecurrence){
	//$('#EndDate').hide();
	$('#Period').hide();
	$('#PeriodDays').hide();
	
	if(ctrlDayEvent && ctrlDayEvent.getValue()=='on')
	{
		$('#value_TimeField_'+pageid).prop("disabled", true);
		$('#value_EndTime_'+pageid).prop("disabled", true);
	}
	else
	{
		$('#value_TimeField_'+pageid).prop("disabled", false);
		$('#value_EndTime_'+pageid).prop("disabled", false);
	}
}

/**
*
*/
function initEditPage(pageid, ctrlDayEvent, ctrlRecurrence, ctrlPeriod, pageObj){
	
	if(ctrlDayEvent && ctrlDayEvent.getValue()=='on')
	{
		$('#value_TimeField_'+pageid).prop("disabled", true);
		$('#value_EndTime_'+pageid).prop("disabled", true);
	}
	else
	{
		$('#value_TimeField_'+pageid).prop('disabled',false);
		$('#value_EndTime_'+pageid).prop('disabled',false);
	}
	if(!ctrlRecurrence || ctrlRecurrence.getValue()=='')
	{
		//$('#EndDate').hide();
		$('#Period').hide();
		$('#PeriodDays').hide();
	}
	else
	{
		//$('#EndDate').show();
		$('#Period').show();
		if(ctrlPeriod && ctrlPeriod.getValue()=='d')
		{
			$('#PeriodDays').show();
			if (pageObj.win)
				pageObj.win.set('height', $(".fieldGrid").height()+124);
		}
		else {
			$('#PeriodDays').hide();
			if (pageObj.win)
				pageObj.win.set('height', $(".fieldGrid").height()+124);
		}
	}
}

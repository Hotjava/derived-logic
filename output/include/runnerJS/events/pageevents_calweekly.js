

	

Runner.pages.PageSettings.addPageEvent('calweekly', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	eval($('#calweekly_snippet_edit').val());
$(".rnr-horizontal-lookup").css('width', '400px');

var ctrlDayEvent = Runner.getControl(pageid,'DayEvent'),
	ctrlTimeField = Runner.getControl(pageid, 'TimeField'),
	ctrlEndTime = Runner.getControl(pageid, 'EndTime'),
	ctrlRecurrence = Runner.getControl(pageid, 'Recurrence'),
	ctrlCategory = Runner.getControl(pageid, 'Category'),
	ctrlSubject = Runner.getControl(pageid, 'Subject'),
	ctrlPeriod = Runner.getControl(pageid, 'Period'),
	i;

if(ctrlSubject)
	ctrlSubject.setFocus();

$("#bgc").attr("style", "background-color:" + catLookup[ ctrlCategory.getValue() ]);

if(ctrlTimeField && ctrlEndTime){
	ctrlTimeField.removeOptions();
	ctrlEndTime.removeOptions();

	for (i = 0; i < times.length; i++) {
		ctrlTimeField.addOption(times[i].display, times[i].value);
	}
	for (i = 0; i < timesEnd.length; i++) {
		ctrlEndTime.addOption(timesEnd[i].display, timesEnd[i].value);
	}
	ctrlTimeField.valueElem[0].selectedIndex = selectedTimeField; //?
	ctrlEndTime.valueElem[0].selectedIndex = selectedEndTime; //?
}

initEditPage(pageid, ctrlDayEvent, ctrlRecurrence, ctrlPeriod, pageObj);

pageObj.win.set('width', 620);
pageObj.win.set('height', $(".fieldGrid").height() + 124);

if(ctrlRecurrence){
	ctrlRecurrence.on('click', function(e) {
		initRecurrence(ctrlRecurrence.getValue(), ctrlPeriod,pageObj);
	});
}

if(ctrlPeriod)
	ctrlPeriod.on('click', function(e) {
		initPeriod(ctrlPeriod.getValue(), pageObj);
	});

if(ctrlCategory)
	ctrlCategory.on('change', function(e){
		initCategory( catLookup[ ctrlCategory.getValue() ] );
	});

if(ctrlDayEvent)
	ctrlDayEvent.on('click', function(e) {
		initDayEvent(ctrlDayEvent.getValue(), pageid);
	});

$("#deleteButton").on("click", function(e) {
	Runner.Calendar.deleteEventHandler(this, pageObj);
});

;
});
	

Runner.pages.PageSettings.addPageEvent('calweekly', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
Runner.Calendar.overridePagesGetParamsMethods();

if ( proxy["userDefined"] ) {
	Runner.Calendar.basicCalendarData = {
		userDefined: true,
		tName: proxy["calendarTName"],
		dateF: proxy["calendarDateField"],
		dateEndF: proxy["calendarEndDate"],
		recurF: proxy["calendarRecurrence"],
		keyF: proxy["calendarKey"],
		calendarTName: Runner.Calendar.weeklyTName
	};
}
					
$("a[id^=addButton]").unbind("click")
	.on("click", function(e) {
		var $link = $(this),
			calendarData = {
				mon: $link.attr("mon"),
				yr: $link.attr("yr"),
				days: $link.attr("days"),
				calendarTName: pageObj.tName
			},
			pageParams = Runner.pages.AddPage.prototype.getOpenPageParams.call( pageObj, pageObj.id, null, calendarData );

		Runner.pages.PageManager.openPage( pageParams );
		return false;
	});

$("div[type^=viewButton]").unbind("click")
	.on("click", function(e) {
		var $link = $(this),
			calendarData = {
				mon: $link.attr("mon"),
				yr: $link.attr("yr"),
				days: $link.attr("days"),
				calendarTName: pageObj.tName
			}
			pageParams = Runner.pages.ViewPage.prototype.getOpenPageParams.call( pageObj, [$link.attr("idrec")], -1, null, calendarData );  
 
		Runner.pages.PageManager.openPage(pageParams);
		return false;
	});


$("div[type^=editButton]").unbind("click")
	.on("click", {pageObj: pageObj}, Runner.Calendar.editButtonsClickHandler);
	

$("a[id^=moreButton]")
	.unbind("click")
	.on("click", Runner.Calendar.moreButtonsClickHandler );


;
});
	

Runner.pages.PageSettings.addPageEvent('calweekly', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	eval($('#calweekly_snippet_add').val());
$(".rnr-horizontal-lookup").css('width', '400px');

var ctrlDayEvent = Runner.getControl(pageid,'DayEvent'),
	ctrlTimeField = Runner.getControl(pageid,'TimeField'),
	ctrlEndTime = Runner.getControl(pageid,'EndTime'),
	ctrlRecurrence = Runner.getControl(pageid,'Recurrence'),
	ctrlCategory = Runner.getControl(pageid,'Category'),
	ctrlSubject = Runner.getControl(pageid,'Subject'),
	ctrlPeriod = Runner.getControl(pageid,'Period'),
	i;
	
if(ctrlSubject)
	ctrlSubject.setFocus();

$("#bgc").attr("style", "background-color:" + catLookup[ ctrlCategory.getValue() ]);

if(ctrlTimeField && ctrlEndTime){
	ctrlTimeField.removeOptions();
	ctrlEndTime.removeOptions();
	for (i = 0; i < times.length; i++) {
		ctrlTimeField.addOption(times[i].display, times[i].value);
		ctrlEndTime.addOption(times[i].display, times[i].value);
	}

	ctrlTimeField.valueElem[0].selectedIndex = selectedTime;
	ctrlEndTime.valueElem[0].selectedIndex = $('#value_TimeField_' + pageid).prop('selectedIndex')+1;
}

initAddPage(pageid, ctrlDayEvent, ctrlRecurrence);

pageObj.win.set('width', 620);
pageObj.win.set('height', $(".fieldGrid").height() + 124);


if(ctrlRecurrence){
	ctrlRecurrence.on('click',function(e){
		initRecurrence(ctrlRecurrence.getValue(),ctrlPeriod,pageObj);
	});
}

if(ctrlPeriod){
	ctrlPeriod.on('click',function(e){
		initPeriod(ctrlPeriod.getValue(),pageObj);
	});
}

if(ctrlCategory){
	ctrlCategory.on('change',function(e){
			initCategory(catLookup[ctrlCategory.getValue()]);
	});
}

if(ctrlDayEvent){
	ctrlDayEvent.on('click', function(e){
		initDayEvent(ctrlDayEvent.getValue(), pageid);
	});
}

;
});

//	AJAX snippets

// fields events

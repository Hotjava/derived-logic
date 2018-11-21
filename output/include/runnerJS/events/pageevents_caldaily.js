

	

Runner.pages.PageSettings.addPageEvent('caldaily', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
					
$(".rnr-horizontal-lookup").css('width', '400px');

var ctrlDayEvent = Runner.getControl(pageid, 'DayEvent'),
	ctrlTimeField = Runner.getControl(pageid, 'TimeField'),
	ctrlEndTime = Runner.getControl(pageid,'EndTime'),
	ctrlRecurrence = Runner.getControl(pageid, 'Recurrence'),
	ctrlCategory = Runner.getControl(pageid, 'Category'),
	ctrlSubject = Runner.getControl(pageid, 'Subject')
	ctrlPeriod = Runner.getControl(pageid, 'Period');

if(ctrlSubject)
	ctrlSubject.setFocus();

$("#bgc")
	.attr("style", "background-color:" + catLookup[ ctrlCategory.getValue() ]);

if(ctrlTimeField && ctrlEndTime){
	ctrlTimeField.removeOptions();
	ctrlEndTime.removeOptions();
	for(var i = 0; i < times.length; i++) {
		ctrlTimeField.addOption( times[i].display, times[i].value );
		ctrlEndTime.addOption( times[i].display, times[i].value );
	}

	ctrlTimeField.valueElem[0].selectedIndex = selectedTime; //?
	ctrlEndTime.valueElem[0].selectedIndex = $('#value_TimeField_' + pageid).prop('selectedIndex') + 1;
}

initAddPage(pageid, ctrlDayEvent, ctrlRecurrence);

if(ctrlRecurrence){
	ctrlRecurrence.on('click', function(e) {
		initRecurrence( ctrlRecurrence.getValue(), ctrlPeriod,pageObj );
	});
}

if(ctrlPeriod){
	ctrlPeriod.on('click', function(e) {
		initPeriod( ctrlPeriod.getValue(), pageObj );
	});
}

if(ctrlCategory){
	ctrlCategory.on('change', function(e) {
		initCategory( catLookup[ ctrlCategory.getValue() ] );
	});
}

if(ctrlDayEvent){
	ctrlDayEvent.on('click', function(e) {
		initDayEvent(ctrlDayEvent.getValue(), pageid);
	});
}
;
});
	

Runner.pages.PageSettings.addPageEvent('caldaily', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
					
$(".rnr-horizontal-lookup").css('width', '400px');

var ctrlDayEvent = Runner.getControl(pageid,'DayEvent'),
	ctrlTimeField = Runner.getControl(pageid,'TimeField'),
	ctrlEndTime = Runner.getControl(pageid,'EndTime'),
	ctrlRecurrence = Runner.getControl(pageid,'Recurrence'),
	ctrlCategory = Runner.getControl(pageid,'Category'),
	ctrlSubject = Runner.getControl(pageid,'Subject'),
	ctrlPeriod = Runner.getControl(pageid,'Period'),
	i;

if (document.getElementsByName('wind').value!='monthly' && document.getElementsByName('wind').value!='weekly' && ctrlSubject) {
	ctrlSubject.setFocus();
}

$("#bgc").attr("style", "background-color:" + catLookup[ ctrlCategory.getValue() ] );

if(ctrlTimeField && ctrlEndTime){
	ctrlTimeField.removeOptions();
	ctrlEndTime.removeOptions();
	for(i = 0; i < times.length; i++) {
		ctrlTimeField.addOption( times[i].display, times[i].value );
	}
	for(i = 0; i < timesEnd.length; i++) {
		ctrlEndTime.addOption( timesEnd[i].display, timesEnd[i].value );
	}

	ctrlTimeField.valueElem[0].selectedIndex = selectedTimeField;
	ctrlEndTime.valueElem[0].selectedIndex = selectedEndTime;
}

initEditPage(pageid, ctrlDayEvent, ctrlRecurrence, ctrlPeriod, pageObj);

if(ctrlRecurrence){
	ctrlRecurrence.on('click', function(e) {
		initRecurrence( ctrlRecurrence.getValue(), ctrlPeriod, pageObj );
	});
}

if(ctrlPeriod){
	ctrlPeriod.on('click',function(e) {
		initPeriod( ctrlPeriod.getValue(), pageObj );
	});
}

if(ctrlCategory){
	ctrlCategory.on('change', function(e) {
		initCategory( catLookup[ ctrlCategory.getValue() ] );
	});
}

if(ctrlDayEvent){
	ctrlDayEvent.on('click', function(e) {
		initDayEvent( ctrlDayEvent.getValue(), pageid );
	});
}
;
});

//	AJAX snippets

// fields events

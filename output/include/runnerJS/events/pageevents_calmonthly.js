

	

Runner.pages.PageSettings.addPageEvent('calmonthly', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	

Runner.Calendar.overridePagesGetParamsMethods();
 
if ( proxy["userDefined"] ) {
	Runner.Calendar.basicCalendarData = {
		userDefined: true,
		tName: proxy["calendarTName"],
		dateF: proxy["calendarDateField"],
		dateEndF: proxy["calendarEndDate"],
		recurF: proxy["calendarRecurrence"],
		keyF: proxy["calendarKey"],		
		calendarTName: Runner.Calendar.monthlyTName
	};
}					
					
					
//Darg and Drop event
dragManager.onDragCancel = function(dragObject) {
	dragObject.avatar.rollback();
};
dragManager.onDragEnd = function( dragObject, dropElem ) {
	$.get("calmonthly_list.php", {
		rndval: Math.random(),
		a: 'copy',
		id: dragObject.elem.getAttribute("idrec"),
		day: $(dropElem).attr("id")
	}, 
	function( txt ) {
		dragObject.elem.style.display = 'none';
		window.location.reload();
	});
 };




var $calendarGrid = $('.calendar-grid')
	.on('mousedown', function(e) {
		$(this).data('selectionInProc', true);
		e.preventDefault();
	})
	.on('mouseup', function(e) {
		$(this).data('selectionInProc', false);
	});
 
$('table.calendar-cellday', $calendarGrid)
	.on('mousedown', function(e) {
		if ( $(e.target).is( "div[type^=editButton]" ) || $(e.target).parent().is( "div[type^=editButton]" ) || $(e.target).is( "div[type^=viewButton]" ) || $(e.target).parent().is( "div[type^=viewButton]" ) ) {
			$calendarGrid.data('selectionInProc', false);
			return;
		}
   	var $cell = $(this),
			selected = $cell.hasClass('selected-day'),
			$addButtonCell = $('tr[id^=addButton] td', $cell);
			
		$calendarGrid.data('hasSelection', selected); 
		$cell.toggleClass( 'selected-day', !selected );
		
		$addButtonCell.data('cellColour', $addButtonCell.css('background-color'));
		$addButtonCell.css('background-color', 'inherit');
	})
	.on('mouseenter', function(e) {
		if ( !$calendarGrid.data('selectionInProc') ) {
			return;
		}

		var $cell = $(this),
			$addButtonCell = $('tr[id^=addButton] td', $cell),
			selectedStart, $selectedCellsTmp;
		
		$cell.toggleClass( 'selected-day', !$calendarGrid.data('hasSelection') );
		
		$addButtonCell.data('cellColour', $addButtonCell.css('background-color'));
		$addButtonCell.css('background-color', 'inherit');

		// fill the gap in the current selection
		$selectedCellsTmp = $('table.calendar-cellday.selected-day', $calendarGrid);
		$("table.calendar-cellday", $calendarGrid).each( function(i, el) {
			var $el = $(el),
				$_addButtonCell;
			
			if ( $selectedCellsTmp.first().is(el) ) {
				selectedStart = true;
				return;
			}
			
			if ( $selectedCellsTmp.last().is(el) ) {
				return false;
			}		
				
			if ( selectedStart && $calendarGrid.data('hasSelection') != $el.hasClass('selected-day') ) {				
				$el.toggleClass( 'selected-day', !$calendarGrid.data('hasSelection') );
				

				$_addButtonCell = $('tr[id^=addButton] td', $el);	
				$_addButtonCell.data('cellColour', $_addButtonCell.css('background-color'));
				$_addButtonCell.css('background-color', 'inherit');	
			}
		});
	})
	.on('mouseup', function(e) {
		if( !$calendarGrid.data('selectionInProc') ) {
			return;
		}		
			
		var $selectedCells = $('table.calendar-cellday.selected-day', $calendarGrid),
			calendarData, $endCell, $beginCell, pageParams;			
			
		$calendarGrid.data('selectionInProc', false);
		if ( !$selectedCells.length) {
			return;
		}
		
		$beginCell = $('tr[id^=addButton]', $selectedCells.first());
		$endCell = $('tr[id^=addButton]', $selectedCells.last()); 
		if ( !$beginCell.length || !$endCell.length ) {
			return;
		}
		
		calendarData = {
			mon: $beginCell.attr("mon"),
			yr: $beginCell.attr("yr"),
			days: $beginCell.attr("days"),
			monEnd: $endCell.attr("mon"),
			yrEnd:  $endCell.attr("yr"),
			daysEnd:  $endCell.attr("days")
		};

		pageParams = Runner.pages.AddPage.prototype.getOpenPageParams.call( pageObj, pageObj.id, null, calendarData );
		
		pageParams.y = e.pageY;
		pageParams.x = e.pageX;
		
		Runner.pages.PageManager.openPage( pageParams );
		return false; 
	})
	.on('mousemove', function(e) {
		if ( $(e.target).is( "div[type^=editButton]" ) || $(e.target).parent().is( "div[type^=editButton]" ) ) {
			$calendarGrid.data('selectionInProc', false);
			return;
		}
	});

	
	
$("div[type^=viewButton]").unbind("click")
	.on("click", {pageObj: pageObj}, Runner.Calendar.viewButtonsClickHandler);


$("div[type^=editButton]").unbind("click")
	.on("click", {pageObj: pageObj}, Runner.Calendar.editButtonsClickHandler)
	.on("mouseup", function(e) {
		$calendarGrid.data('selectionInProc', false);
	});



$("a[id^=moreButton]").unbind("click")
	.on("click", Runner.Calendar.moreButtonsClickHandler )
	.on("mouseup", function(e) {
		$calendarGrid.data('selectionInProc', false);
		return false;
	});	

$(".calendar-c-pos").each(function(){
	if($(this)[0].className.indexOf("te-holiday") == -1)
	{
		$(this).bind("mouseover",function(){
			$(this).addClass("dragBorder");
		});
		$(this).bind("mouseout",function(){
			$(this).removeClass("dragBorder");
		});
	}
	});;
});
	

Runner.pages.PageSettings.addPageEvent('calmonthly', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	eval($('#calmonthly_snippet_add').val());
$(".rnr-horizontal-lookup").css('width', '400px');

var ctrlDayEvent = Runner.getControl(pageid, 'DayEvent'),
	ctrlTimeField = Runner.getControl(pageid, 'TimeField'),
	ctrlEndTime = Runner.getControl(pageid, 'EndTime'),
	ctrlRecurrence = Runner.getControl(pageid, 'Recurrence'),
	ctrlCategory = Runner.getControl(pageid, 'Category'),
	ctrlSubject = Runner.getControl(pageid, 'Subject'),
	ctrlPeriod = Runner.getControl(pageid, 'Period'),
	ctrlPeriodDays = Runner.getControl(pageid, 'PeriodDays');

if(ctrlSubject)
	ctrlSubject.setFocus();

$("#bgc").attr("style", "background-color:" + catLookup[ ctrlCategory.getValue() ]);

if(ctrlTimeField && ctrlEndTime){
	ctrlTimeField.removeOptions();
	ctrlEndTime.removeOptions();
	for(var i = 0; i < times.length; i++)
	{
		ctrlTimeField.addOption( times[i].display, times[i].value );
		ctrlEndTime.addOption( times[i].display, times[i].value );
	}

	ctrlTimeField.valueElem[0].selectedIndex = selectedTime;
	ctrlEndTime.valueElem[0].selectedIndex = $('#value_TimeField_' + pageid).prop('selectedIndex') + 1;
}

initAddPage(pageid, ctrlTimeField, ctrlEndTime, ctrlDayEvent, ctrlRecurrence);

pageObj.win.set('width', 620);
pageObj.win.set('height', $(".fieldGrid").height() + 124);

Runner.Calendar.moveMonthlyPopupWin( this.win, this.x, this.y );

this.on("afterClose", function(e) {	
	Runner.Calendar.afterCloseCalendarPopup();
}, this);

if(ctrlRecurrence){
	ctrlRecurrence.on('click',function(e) {
		initRecurrence( ctrlRecurrence.getValue(), ctrlPeriod, pageObj );
	});
}

if(ctrlPeriod){
	ctrlPeriod.on('click',function(e){
		initPeriod(ctrlPeriod.getValue(), pageObj);
	});
}

if(ctrlCategory){
	ctrlCategory.on('change',function(e){
		initCategory( catLookup[ ctrlCategory.getValue() ] );
	});
}

if(ctrlDayEvent){
	ctrlDayEvent.on('click', function(e){
		initDayEvent(ctrlDayEvent.getValue(), pageid);
	});
};
});
	

Runner.pages.PageSettings.addPageEvent('calmonthly', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	eval($('#calmonthly_snippet_edit').val());
$(".rnr-horizontal-lookup").css('width', '400px');

var ctrlDayEvent = Runner.getControl(pageid, 'DayEvent'),
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
	for(i = 0; i < times.length; i++) {
		ctrlTimeField.addOption( times[i].display, times[i].value );
	}
	for(i = 0; i < timesEnd.length; i++) {
		ctrlEndTime.addOption( timesEnd[i].display, timesEnd[i].value );
	}

	ctrlTimeField.valueElem[0].selectedIndex = selectedTimeField;
	ctrlEndTime.valueElem[0].selectedIndex  =selectedEndTime;
}

initEditPage(pageid, ctrlDayEvent, ctrlRecurrence, ctrlPeriod, pageObj);

pageObj.win.set('width', 620);
pageObj.win.set('height', $(".fieldGrid").height()+ 124);

Runner.Calendar.moveMonthlyPopupWin( this.win, this.x, this.y );

if(ctrlRecurrence){
	ctrlRecurrence.on('click',function(e){
		initRecurrence(ctrlRecurrence.getValue(), ctrlPeriod, pageObj);
	});
}

if(ctrlPeriod){
	ctrlPeriod.on('click',function(e){
		initPeriod(ctrlPeriod.getValue(), pageObj);
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

$("#deleteButton").on("click", function(e){
	Runner.Calendar.deleteEventHandler(this, pageObj);
});

;
});
	

Runner.pages.PageSettings.addPageEvent('calmonthly', Runner.pages.constants.PAGE_VIEW, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
	Runner.Calendar.moveMonthlyPopupWin( this.win, this.x, this.y );
					;
});

//	AJAX snippets

// fields events

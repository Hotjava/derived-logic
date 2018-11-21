

	

Runner.pages.PageSettings.addPageEvent('calyearly', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	$('<div class="view_day" style="display:none; position: absolute; left: 0px; top: 0px;"> </div>').appendTo('body');
moreButtonsClickHandler = function(e){
	var link = $(this);
	window.location = "caldaily_list.php?yr=" + link.attr("yr")+ "&mon=" + link.attr("mon") + "&days=" + link.attr("days");
}

showPopupClickHandler = function(e){
	var link = $(this);
	showPopup(this, link.attr("url"), link.attr("yr"), link.attr("mon"), link.attr("days"));
}


hidePopupClickHandler = function(e){
	hidePopup();
	
}

$("a[class=views-popup]").unbind('mouseover').unbind('mouseout').bind({
	mouseover: showPopupClickHandler,
	mouseout: hidePopupClickHandler
});


;
});

//	AJAX snippets

// fields events

/**
 * Calendar buttons related functions
 */
Runner.Calendar = {
	monthlyTName: "calmonthly",
	
	weeklyTName: "calweekly",
	
	basicCalendarData: {},
	
	/**
	 * @param {object} pageObj
	 * @param {object} oldPageObj
	 */	
	resizeAndMoveWindow: function( pageObj, oldPageObj ) {
		if ( pageObj.openMode !== Runner.pages.constants.OPENMODE_POPUP || !pageObj.win || !oldPageObj.win ) {
			return;
		}
		
		var widget = oldPageObj.win.get("boundingBox"),
			$widgetNode = $( widget.getDOMNode() ),
			actualHeight = $widgetNode.outerHeight(); 
		
		oldPageObj.win.syncXY();
		pageObj.minHeight = oldPageObj.minHeight;
		pageObj.win.show();

		pageObj.minHeight = Math.max( actualHeight, pageObj.minHeight);
		pageObj.setWindowPositionAndSize( $widgetNode.outerWidth(), pageObj.minHeight, oldPageObj.win.get("xy") );
		
		pageObj.winIsAutomaticallyCorrected = true;	
	},

	/**
	 * @param {DOMelem} link
	 * @param {object} pageObj
	 */
	deleteEventHandler: function( link, pageObj ) {
		var $link = $(link);
			
		$.get( Runner.pages.getUrl( pageObj.tName, Runner.pages.constants.PAGE_EDIT ), {
			rndval: Math.random(),
			delete1: "delete",
			editid1: $link.attr("recid")
		}, function( txt ) {
			var url_list = Runner.pages.getUrl( pageObj.tName, Runner.pages.constants.PAGE_LIST ),
				days, mon, yr;
				
			if ( $link.attr("recur") != 0) {
				window.location.href = url_list;
				return;
			}
			
			days = $link.attr("days");
			mon = $link.attr("mon");
			yr = $link.attr("yr");		
			
			$.ajax({
				type: "GET",
				dataType: "text",
				url: url_list,
				data: {
					dataType: "text",
					rndval: Math.random(),
					a: "refresh",
					mon: mon,
					yr: yr,
					days: days
				},
				success: function( txt ) {
					$("#add" + yr + "_" + mon + "_" + days)
						.html( txt );
					Runner.Calendar.setBorderToEvents();
				}
			});	
			
		});
		
		pageObj.close();
	},	
	
	/**
	 *
	 */
	moreButtonsClickHandler: function(e) {
		var $link = $(this);
		
		if ( e.stopPropagation ) {
			e.stopPropagation();
		}
		
		window.location = "caldaily_list.php?yr=" + $link.attr("yr") + "&mon=" + $link.attr("mon") + "&days=" + $link.attr("days");
	},
	
	/**
	 * Usage
	 * 	this.on("afterClose", function(e) {	
			Runner.Calendar.afterCloseCalendarPopup();
		}, this);
	 */
	afterCloseCalendarPopup: function() {
		$('table.calendar-cellday.selected-day', '.calendar-grid')
			.removeClass('selected-day')
			.each( function( i, cell ) {
				var $addButtonCell = $('td[id^=add]', cell);		
				$addButtonCell.css('background-color', $addButtonCell.data('cellColour'));
			});	
	},

	/**
	 * @deprecated
	 */
	mouseGetHandler: function(e) {
		e = e || window.event;

		if ( e.pageX == null && e.clientX != null ) { 
			var html = document.documentElement;
			var body = document.body;
		
			e.pageX = e.clientX + (html && html.scrollLeft || body && body.scrollLeft || 0) - (html.clientLeft || 0);
			e.pageY = e.clientY + (html && html.scrollTop || body && body.scrollTop || 0) - (html.clientTop || 0);
		}

		return {
			x: e.pageX,
			y: e.pageY
		};
	},
	
	viewButtonsClickHandler: function(e) {
		if (e.stopPropagation) {
			e.stopPropagation();
		}
		
		var $link = $(this),
			pageObj = e.data.pageObj,
			calendarData = {
				mon: $link.attr("mon"),
				yr: $link.attr("yr"),
				days: $link.attr("days"),
				calendarTName: pageObj.tName
			},
			pageParams = Runner.pages.ViewPage.prototype.getOpenPageParams.call( pageObj, [$link.attr("idrec")], -1, null, calendarData );  

		pageParams.y = e.pageY;
		pageParams.x = e.pageX;
		
		Runner.pages.PageManager.openPage(pageParams);
		return false;
	},
	
	/**
	 * @param {jQuery Event object} e
	 */
	editButtonsClickHandler: function(e) {
		if ( e.stopImmediatePropagation ) {
			e.stopImmediatePropagation();
		}
		
		var $link = $(this),
			pageObj = e.data.pageObj,
			calendarData ={
				mon:  $link.attr("mon"),
				yr: $link.attr("yr"),
				days: $link.attr("days"), 
				recur: $link.attr("recur")
			},
			pageParams = Runner.pages.EditPage.prototype.getOpenPageParams.call( pageObj, [ $link.attr("idrec") ], -1, "" );		

		pageParams.y = e.pageY;
		pageParams.x = e.pageX;
			
		Runner.pages.PageManager.openPage( pageParams );
		return false;
	},

	/**
	 *
	 */
	moveMonthlyPopupWin: function( win, x, y ) {	
		if ( !win || !x || !y ) {
			return;
		}
		
		var curWindowSize = Runner.getWindowDimensions(),
			winHeight = win.get('height'),
			winWidth = win.get('width');
		
		x = x - win.get('width') / 2;	
		y =  y > winHeight ? y - winHeight - 10 : y + 10;

		
		if ( (y + winHeight) > curWindowSize.height ) {
			y = curWindowSize.height - winHeight - 10;
		}
		
		if ( ( x + winWidth ) > curWindowSize.width ) {
			x = curWindowSize.width - winWidth - 10;
		}
		
		x = x < 0 ? 0 : x;
	
		win.move( x, y );
	},
	
	setBorderToEvents: function()
	{
		$(".calendar-c-pos").each(function(){
			if($(this)[0].className.indexOf("te-holiday") == -1)
			{
				$(this).unbind("mouseover").bind("mouseover",function(){
					$(this).addClass("dragBorder");
				});
				$(this).unbind("mouseout").bind("mouseout",function(){
					$(this).removeClass("dragBorder");
				});
			}
		});
		
	}
};

/**
 *
 */
Runner.Calendar.overridePagesGetParamsMethods = function () {
	/**
	 * Override the ViewPage's getOpenPageParams using its original code
	 */
	Runner.pages.ViewPage.prototype.getOpenPageParams = ( function( _getOpenPageParams ) {
		return function( keys, rowId, pObj, calendarData ) {
			var pageObj = this, /* the context could be not only an view page instance */
				userDefined = Runner.Calendar.basicCalendarData.userDefined,
				inlineObj, params, i, j, keyFields, failed;

			calendarData = calendarData || {};	
			
			if ( !this.inlineObjectParams ) {
				this.inlineObjectParams = {
					getInlineObject: function() {
						// the context is a list page object
						return pageObj.inlineAdd;
					}
				}
			}
			
			inlineObj = this.inlineObjectParams.getInlineObject();

			if ( !userDefined && rowId === -1 || rowId === undefined ) {
				for ( i = 0; i < inlineObj.rows.length; i++ ) {
					failed = false;
					for ( j = 0; j < inlineObj.rows[ i ].keys.length; j++ ) {
						if ( keys[j] != inlineObj.rows[ i ].keys[j] ) {
							failed = true;
							break;
						}
					}
					if ( !failed ) {
						rowId = inlineObj.rows[ i ].id;
						keyFields = inlineObj.rows[ i ].keyFields;
						break;
					}
				}
			}
			
			this.inlineObjectParams.rowId = rowId;
			
			params = _getOpenPageParams.apply( this, arguments );
			
			params.keyFields = params.keyFields || keyFields;
			params.baseParams = Runner.apply( params.baseParams, {
					mon: calendarData.mon || this.baseParams.mon,
					yr: calendarData.yr || this.baseParams.yr,
					days: calendarData.days || this.baseParams.days			
				});
			
			if ( userDefined ) {
				params.tName = Runner.Calendar.basicCalendarData.tName;
				params.baseParams.table = Runner.Calendar.basicCalendarData.tName;
				params.keyFields = [ Runner.Calendar.basicCalendarData.keyF ];
			}
			
			params.afterCreateHn = function() {
				if ( pageObj.win ) {
					Runner.Calendar.resizeAndMoveWindow( this, pageObj );
					pageObj.win.destroy( true );
				}			
			};
			
			return params;	
		};
	}( Runner.pages.ViewPage.prototype.getOpenPageParams ));


	/**
	 * Override the EditPage's getOpenPageParams using its original code
	 */
	Runner.pages.EditPage.prototype.getOpenPageParams = ( function( _getOpenPageParams ) {
		return function( keys, rowId, message, inlineObj, calendarData ) { 
			var pageObj = this, /* the context could be not only an edit page instance */
				userDefined = Runner.Calendar.basicCalendarData.userDefined,
				calendarTName = userDefined ? Runner.Calendar.basicCalendarData.calendarTName : pageObj.tName,
				inlineObj, params, failed, keyFields;

			calendarData = calendarData || {};	
			
			if ( !this.inlineObjectParams ) {
				/* the context is a list page instance */
				this.inlineObjectParams = {
					getInlineObject: function() {
						return pageObj.inlineEdit;
					}
				}
			}		

			var inlineObj = inlineObj || this.inlineObjectParams.getInlineObject();
			
			if ( !userDefined && rowId === -1 || rowId === undefined ) {
				for ( i = 0; i < inlineObj.rows.length; i++ ) {
					failed = false;
					for ( j = 0; j < inlineObj.rows[ i ].keys.length; j++ ) {
						if ( keys[j] != inlineObj.rows[ i ].keys[j] ) {
							failed = true;
							break;
						}
					}
					if ( !failed ) {
						rowId = inlineObj.rows[ i ].id;
						keyFields = inlineObj.rows[ i ].keyFields;
						break;
					}
				}		
			}
			
			params = _getOpenPageParams.apply( this, arguments );	
					
			params.openMode = Runner.pages.constants.OPENMODE_POPUP;
			params.keyFields = params.keyFields || keyFields;
			params.baseParams = Runner.apply( params.baseParams, {
					mon: calendarData.mon,
					yr: calendarData.yr,
					days: calendarData.days,
					recur: calendarData.recur		
				});
			
			if ( userDefined ) {
				params.tName = Runner.Calendar.basicCalendarData.tName;
				params.baseParams.table = Runner.Calendar.basicCalendarData.tName;
				params.keyFields = [ Runner.Calendar.basicCalendarData.keyF ];
			}		
			
			params.afterSave = {
				fn: function( respObj, formObj, fieldControls, page ) {
					var i, dateFieldValue, url,
						dateFName = userDefined ? Runner.Calendar.basicCalendarData.dateF : "DateField",
						reccurFName = userDefined ? Runner.Calendar.basicCalendarData.recurF : "Recurrence";
					
					if ( !respObj.success ) {
						pageObj.showBrick("message");
						
						$("div.rnr-message")
							.html( respObj.message );
						
						if ( !userDefined ) {
							$('#Period')
								.toggle( Runner.getControl(page.id, 'Recurrence').getValue() != '' );
						}

						return false;				
					}
							
					url = Runner.pages.getUrl( calendarTName, Runner.pages.constants.PAGE_LIST );
					
					if ( !reccurFName || respObj.rawVals[ reccurFName ] == "0" && page.baseParams["recur"] != "1" ) {
						for ( i = 0; i < fieldControls.length; i++ ) {
							if ( fieldControls[i].fieldName === dateFName ) {
								dateFieldValue = fieldControls[i].getValue();
								break;
							}
						}						
						
						$.get( url, {
							rndval: Math.random(),
							a: "refresh",
							id: respObj.keys[0],
							days: page.baseParams.days,
							mon: page.baseParams.mon,
							yr: page.baseParams.yr							
						}, 
						function( txt ) {
							var new_day = dateFieldValue.getDate(),
								new_mon = dateFieldValue.getMonth() + 1,
								new_year = dateFieldValue.getFullYear();							
						
							if ( new_mon != page.baseParams.mon || new_year != page.baseParams.yr ) {
								window.location.href = url;
								return;
							} 
							
							$("#add"  + page.baseParams.yr + "_" + page.baseParams.mon + "_" + page.baseParams.days)
								.html( txt );
							
							$("div[type^=editButton]", $("#add" + page.baseParams.days) ).unbind("click")
								.on("click", {pageObj: page}, Runner.Calendar.editButtonsClickHandler);
							
							$("div[type^=viewButton]", $("#add" + page.baseParams.days) ).unbind("click")
								.on("click", {pageObj: page}, Runner.Calendar.viewButtonsClickHandler);							
							
							$.get( url, {
								rndval: Math.random(),
								a: "refresh",
								id: respObj.keys[0],
								days: new_day,
								mon: new_mon,
								yr: new_year										
							}, function( txt ) {
								var $addElem = $("#add" + new_year + "_" + new_mon + "_" + new_day)
									.html( txt );
								
								$("div[type^=editButton]", $addElem ).unbind("click")
									.on("click", {pageObj: page}, Runner.Calendar.editButtonsClickHandler);
									
								$("div[type^=viewButton]", $addElem ).unbind("click")
									.on("click", {pageObj: page}, Runner.Calendar.viewButtonsClickHandler);
									
								$("a[id=moreButton" + new_day + "]")
									.on("click", Runner.Calendar.moreButtonsClickHandler);
							});							
						});
					} else {
						window.location.href = url;
					}
				},
				scope: this
			};

			params.afterCreateHn = function() {				
				if ( message ) {
					this.displayHalfPreparedMessage( message );
					this.showBrick('message');
				}
				
				if ( pageObj.win ) {
					Runner.Calendar.resizeAndMoveWindow( this, pageObj );			
					pageObj.keepLocking = true;	
					pageObj.win.destroy( true );
					this.close();
				}			
			};				
					
			return params;			
		};
	}( Runner.pages.EditPage.prototype.getOpenPageParams ));


	/**
	 * Add getOpenPageParams method to Runner.pages.AddPage instances
	 * AddPage version 8.2 has no own getOpenPageParams method.
	 * the context could be not only an add page instance
	 */
	Runner.pages.AddPage.prototype.getOpenPageParams = function( parId, afterCreateHn, calendarData ) {
		var userDefined = Runner.Calendar.basicCalendarData.userDefined, 
			pageObj = Runner.pages.PageManager.getAt( this.tName, parId || this.baseParams.parId ),
			inlineObj =	pageObj.inlineAdd || this.inlineObjectParams.getInlineObject(),
			calendarTName = userDefined ? Runner.Calendar.basicCalendarData.calendarTName : pageObj.tName,
			pageParams = {
				modal: true, 
				tName: pageObj.tName, 
				pageType: Runner.pages.constants.PAGE_ADD, 
				editType: Runner.pages.constants.ADD_POPUP,
				baseParams: {
					parId: pageObj.id,
					table: pageObj.tName,
					editType: Runner.pages.constants.ADD_POPUP,
					mon: calendarData && calendarData.mon || this.baseParams.mon,
					yr: calendarData && calendarData.yr || this.baseParams.yr,
					days: calendarData && calendarData.days || this.baseParams.days,
					monEnd: calendarData && calendarData.monEnd || calendarData.mon || this.baseParams.monEnd,
					yrEnd: calendarData && calendarData.yrEnd || calendarData.yr || this.baseParams.yrEnd,
					daysEnd: calendarData && calendarData.daysEnd || calendarData.days || this.baseParams.daysEnd				
				},
				inlineObjectParams: {
					getInlineObject: function() {
						return pageObj.inlineAdd;
					}
				},
				afterSave: {
					fn: function( respObj, formObj, fieldControls, page ) {
						var dateFName = userDefined ? Runner.Calendar.basicCalendarData.dateF : "DateField",
							endDateFName = userDefined ? Runner.Calendar.basicCalendarData.dateEndF || Runner.Calendar.basicCalendarData.dateF : "EndDate",
							reccurFName = userDefined ? Runner.Calendar.basicCalendarData.recurF : "Recurrence",
							i, dateFieldValue, endDateValue,
							pYear, pMonth, pDay, endYear, endMonth, endDay, 
							url;
							
						if ( !respObj.success ) {
							pageObj.showBrick("message");
							
							$("div.rnr-message")
								.html( respObj.message );

							if ( !userDefined ) {
								$('#Period')
									.toggle( Runner.getControl(page.id, 'Recurrence').getValue() != '' );
							}
							
							return false;					
						}
						
						var addedRow = inlineObj.addRowToGrid( respObj, true );
						pageObj.initNewRowButtons( addedRow );
						
						url = Runner.pages.getUrl( calendarTName, Runner.pages.constants.PAGE_LIST );
						
						if ( reccurFName && respObj.rawVals[ reccurFName ] != "0" ) {
							window.location.href = url;
						}
						
						for (i = 0; i < fieldControls.length; i++) {
							if ( fieldControls[i].fieldName == dateFName ) {	
								dateFieldValue = fieldControls[i].getValue();
								pYear = dateFieldValue.getFullYear();
								pMonth = dateFieldValue.getMonth() + 1;
								pDay = dateFieldValue.getDate();
							}
							
							if ( fieldControls[i].fieldName == endDateFName && endDateFName !== dateFName ) {	
								endDateValue = fieldControls[i].getValue();
								
								if ( endDateValue ) {
									endYear = endDateValue.getFullYear();
									endMonth = endDateValue.getMonth() + 1;
									endDay = endDateValue.getDate();
								}
							}
						}
						
						if ( endDateFName !== dateFName && ( pYear != endYear || pMonth != endMonth || pDay != endDay ) ) {
							window.location.href = url;
							return;
						}
				
						if ( page.baseParams.yr == pYear 
							&& ( page.baseParams.mon == pMonth || page.baseParams.mon == pMonth + 1 && pDay > 20 || page.baseParams.mon == pMonth - 1 && pDay < 7 ) ) {														
							$.get( url, {
								rndval: Math.random(),
								a: "refresh",
								id: respObj.keys[0],
								days: pDay,
								mon: pMonth,
								yr: pYear								
							}, function( txt ) {
								var $addElem = $("#add" + pYear + "_" + pMonth + "_" + pDay)
									.html( txt );

								$("a[id=moreButton" + pDay + "]")
									.on("click", Runner.Calendar.moreButtonsClickHandler);
								
								$("div[type^=editButton]", $addElem ).unbind("click")
									.on("click", {pageObj: page}, Runner.Calendar.editButtonsClickHandler);
								
								$("div[type^=viewButton]", $addElem ).unbind("click")
									.on("click", {pageObj: page}, Runner.Calendar.viewButtonsClickHandler);
									
								Runner.Calendar.setBorderToEvents();
							});
						}
						
					},
					scope: pageObj
				}			
			};	

		if ( userDefined ) {
			pageParams.tName = Runner.Calendar.basicCalendarData.tName;
			pageParams.baseParams.table = Runner.Calendar.basicCalendarData.tName;		
			pageParams.afterCreateHn = function() {
				this.on("afterClose", function(e) {	
					Runner.Calendar.afterCloseCalendarPopup();
				}, this);

				this.on("afterPageReady", function( page ) {
					var dateCtrl = Runner.getControl( page.id, Runner.Calendar.basicCalendarData.dateF ),
						dateVal = new Date( page.baseParams.yr, page.baseParams.mon - 1, page.baseParams.days ),
						endDateCtrl, endDateVal;
					
					dateCtrl.setValue( dateVal );
					
					if ( Runner.Calendar.basicCalendarData.dateF !== Runner.Calendar.basicCalendarData.dateEndF ) {
						endDateCtrl = Runner.getControl( page.id, Runner.Calendar.basicCalendarData.dateEndF );
						endDateVal = new Date( page.baseParams.yrEnd, page.baseParams.monEnd - 1, page.baseParams.daysEnd );
						
						endDateCtrl.setValue( endDateVal );
					}
				});
				
				if ( typeof afterCreateHn === "function" ) {
					afterCreateHn.call( this );
				}
			}
		} else if ( typeof afterCreateHn === "function" ) {
			pageParams.afterCreateHn = afterCreateHn;
		}		

		return pageParams;
	};
}



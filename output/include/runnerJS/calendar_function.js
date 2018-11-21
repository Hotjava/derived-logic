/**
	 * showPopup
	 * Show  preview in popup
	 * @param {object} link 	popup link
	 * @param {string} url		request url
	 * @param {int} yr
	 * @param {int} mon
	 * @param {int} days
	 */
	function showPopup (link, url, yr, mon, days) {
		
		var pageObj = this;
		viewsPopupEl = $(".view_day");
		
		clearTimeout( viewsPopupEl.data("timeout") );

		if ( viewsPopupEl.css("display") == 'none' ) {
				
			this.timeout = setTimeout(function() {
							
				Runner.runnerAJAX( url, {
					rndval: Math.random(),
					a: "year",
					days: days,
					mon: mon,
					yr: yr
					}, 	
					function( respObj ) {
						var viewPopup, linkPosition;
							
						if (!respObj.success) {
							return;
						}
					
						//cash the jQuery object
						viewPopup = $(".view_day");
						
						if ( !viewPopup.length ) {
							
							viewPopup = $('<div class="view_day" style="display:none; position: absolute; left: 0px; top: 0px;"> </div>')
								.appendTo('body');
						}
						
						viewPopup.bind({
							mouseenter: function() {
								pageObj.showPopup();
								},
							mouseleave: function() {
									pageObj.hidePopup();
								}
							});					
						viewPopup.html( respObj.calevents );
						
						linkPosition = $(link).offset();
						viewPopup.css({
							top: linkPosition.top + "px",
							left: linkPosition.left + ( Runner.isDirRTL() ? -viewPopup.outerWidth() : $(link).outerWidth() ) + "px"
						})
						.show();
						$("a[id^=moreButton]").unbind("click").bind("click", moreButtonsClickHandler );
						}
				);
			}, 100);
			$(".view_day").data("timeout", this.timeout);
		}
	}
	
	/**
	 * hidePopup
	 * Hide popup with  preview 
	 */
	function hidePopup() {
		var viewPopup = $(".view_day");
		
		if ( viewPopup.css("display") == 'none' || !viewPopup.length ) {
			clearTimeout( viewPopup.data("timeout") );
			return;
		}

			this.timeout = setTimeout( function() {
				viewPopup.hide();
				viewPopup.html("");
			}, 100);
			viewPopup.data("timeout", this.timeout);
			$(".view_day").data("timeout", this.timeout);
		}


	
		

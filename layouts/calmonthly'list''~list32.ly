@version=3
@middle-align=center
beginblock top
	begincontainer container top
		begincontainer navbar menu
			begincontainer column class="navbar-header" hdr
				brick bslogo
				brick bsnavbarcollapse
			endcontainer
			begincontainer navbar_form class="bs-hidden-xs bs-navcontrolled" menu
				brick bsmenu
			begincontainer column class="navbar-right navbar-form" more
				brick bsmorebutton
				brick bsloggedas_h
			endcontainer
			begincontainer column class="navbar-right navbar-form" more
				brick bssearch
			endcontainer
			endcontainer
		endcontainer
		
		begincontainer column breadcrumbs
			begincontainer column bc
				brick breadcrumbs
			endcontainer
		endcontainer
		begincontainer column masterinfo
			brick bsmasterinfo
		endcontainer
		
		begincontainer row class="bs-navcontrolled bs-hidden-xs" gridcontrols
		
			begincontainer column align=right class=bottom-margin col-md=12 gridinfo_sort
				brick bsreorderrecords
			endcontainer
		endcontainer

		
	endcontainer
endblock
beginblock width=100% center    
    begincontainer horizontal style=grid width=100% form
        brick calmonthly_list
    endcontainer
endblock

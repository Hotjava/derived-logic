@version=2
beginblock width=100 left
	begincontainer style=empty add_css
 		brick add_css
	endcontainer
	begincontainer vertical style=menu width=100% lang
		brick color1 languages
	endcontainer 
	begincontainer vertical style=menu width=100% logg
		brick color1 loggedas
	endcontainer 
    begincontainer vertical style=menu width=100% left
		brick color1 vmenu
	endcontainer 
endblock 

beginblock width=100% center
    begincontainer horizontal style=2 width=100% form
        brick calyearly_list
    endcontainer
endblock
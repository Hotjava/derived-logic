@version=2
beginblock width=100% top
	begincontainer style=empty add_css
 		brick add_css
	endcontainer
	begincontainer horizontal bmargin=0 style=2 width=100% hmenu
		brick calyearly_nav
		brick right hmenu
		brick right languages
		brick right loggedas
	endcontainer
endblock 

beginblock width=100% center    
     begincontainer grid delimx=10 delimy=10 width=800 style=grid grid
        brick calyearly_list
    endcontainer
endblock

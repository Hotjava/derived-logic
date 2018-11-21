@version=2
beginblock width=100% top
	begincontainer style=empty add_css
 		brick add_css
	endcontainer
    begincontainer horizontal  bmargin=0 style=2 width=100% hmenu
		brick calmonthly_nav
		brick right hmenu
		brick right toplinks_hidden
		brick right languages
		brick right loggedas
    endcontainer
endblock 

beginblock width=100% center    
    begincontainer horizontal style=grid width=100% form
        brick calmonthly_list
    endcontainer
endblock

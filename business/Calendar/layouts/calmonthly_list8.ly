@version=2
beginblock top
	begincontainer style=empty add_css
 		brick add_css
	endcontainer
	begincontainer horizontal  style=empty master
 		brick masterinfo
	endcontainer	
    begincontainer horizontal style=2 width=100%  toplinks
		brick left loggedas
        brick right languages
    endcontainer
endblock 

beginblock width=260 left
    begincontainer vertical style=menu rmargin=5  width=100% left
		brick vmenu 
	endcontainer 
endblock 

beginblock width=100% center
	begincontainer horizontal color=1 style=2 width=100% recordcontrols
		brick left toplinks_hidden
	endcontainer 
	begincontainer vertical style=2 width=100% form
		brick calmonthly_list
	endcontainer
endblock
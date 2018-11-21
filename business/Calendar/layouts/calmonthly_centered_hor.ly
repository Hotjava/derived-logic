@version=2
@align=center
@vspacing=0
@hspacing=0
beginblock top
    begincontainer horizontal  style=empty toplinks
		brick right loggedas
		brick right languages
    endcontainer
	begincontainer horizontal bmargin=0 style=undermenu hmenu
		brick hmenu
	endcontainer

endblock 

beginblock width=100% center    
	begincontainer horizontal style=2 width=100% recordcontrols
	brick left toplinks_hidden
    endcontainer 
	begincontainer horizontal style=2 width=100% form
        brick calmonthly_list
	endcontainer 
endblock

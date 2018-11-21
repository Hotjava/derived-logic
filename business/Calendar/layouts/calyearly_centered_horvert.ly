@version=2
@align=center
@vspacing=0
@hspacing=0
beginblock top

    begincontainer horizontal  style=empty  toplinks
		brick right loggedas
		brick right languages
    endcontainer
	begincontainer horizontal bmargin=0 style=undermenu  hmenu
		brick hmenu
	endcontainer
	
endblock 

beginblock width=260 left
    begincontainer vertical style=menu width=100% left
		brick vmenu
  endcontainer 
endblock 

beginblock width=100% center    
    begincontainer horizontal style=2 width=100% message
       brick center align=center width=100% filename=message_bare.htm message
    endcontainer
begincontainer horizontal style=2 width=100% form
        brick calyearly_list
    endcontainer
endblock

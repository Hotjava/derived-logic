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
	    brick color1 vsearch1
		brick color1 vsearch2
		brick search_saving_buttons		
        brick color2 vdetails_found
        brick color1 vpage_of
        brick color1 vrecsperpage
		brick searchpanel
		brick filterpanel
	endcontainer 
endblock 

beginblock center
	begincontainer vertical style=1 width=100% bigblock
		begincontainer horizontal color=1 style=2 width=100% recordcontrols
			brick left recordcontrols_new
			brick left recordcontrol_hidden
			brick left toplinks_hidden
		endcontainer 
		begincontainer horizontal color=1 style=2 width=100% eventdaily
			brick center eventdailylist
		endcontainer
		begincontainer horizontal color=1 style=2 width=100% message
		   brick center filename=message_bare.htm message
		endcontainer
		begincontainer grid delimx=10 delimy=10 color=1 style=grid  grid
			brick grid
		endcontainer
		begincontainer horizontal color=1 style=2 width=100%  pagination
			brick center pagination
		endcontainer
	endcontainer
endblock
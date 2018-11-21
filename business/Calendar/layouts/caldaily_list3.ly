@version=2
beginblock top
	begincontainer style=empty add_css
 		brick add_css
	endcontainer
	begincontainer horizontal  style=empty master
 		brick masterinfo
	endcontainer	

	begincontainer horizontal bmargin=0 style=2 width=100% hmenu
		brick caldaily_nav
		brick right hmenu
		brick right languages
		brick right loggedas
	endcontainer
	begincontainer horizontal style=1 width=100% recordcontrols
        brick left recordcontrols_new
		brick left recordcontrol_hidden
		brick left toplinks_hidden
    endcontainer 
endblock 

beginblock width=260 left
    begincontainer vertical style=menu rmargin=5  width=100% left
		brick color2 vsearch1
		brick color1 vsearch2
		brick search_saving_buttons
		brick searchpanel
		brick filterpanel
        brick color2 vdetails_found
        brick color1 vpage_of
        brick color1 vrecsperpage
   endcontainer 
endblock 

beginblock center    
	begincontainer horizontal style=2 width=100% message
       brick center width=100% filename=message_bare.htm message
    endcontainer
    begincontainer grid delimx=10 delimy=10 style=grid grid
        brick grid
    endcontainer
   begincontainer horizontal style=2 width=100% pagination
        brick center pagination
    endcontainer
endblock

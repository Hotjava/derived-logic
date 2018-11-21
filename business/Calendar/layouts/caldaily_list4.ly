@version=2
beginblock top
	begincontainer style=empty add_css
 		brick add_css
	endcontainer
	begincontainer horizontal  style=empty master
 		brick masterinfo
	endcontainer	

    begincontainer horizontal style=2 width=100% toplinks
        brick right loggedas
		brick right languages
    endcontainer
endblock 

beginblock width=260 right
    begincontainer vertical style=3 width=100% searchpanel
		brick vsearch1
		brick vsearch2
		brick search_saving_buttons
		brick searchpanel
		brick filterpanel
	endcontainer 
   	begincontainer vertical style=menu width=100% menu
		brick vmenu
	endcontainer
endblock 


beginblock center
    begincontainer horizontal style=2 width=100% recordcontrols
        brick left recordcontrols_new
		brick left recordcontrol_hidden
		brick left toplinks_hidden
    endcontainer 
		begincontainer horizontal color=1 style=2 width=100% eventdaily
			brick center eventdailylist
		endcontainer
	begincontainer horizontal style=2  width=100% message
       brick center filename=message_bare.htm message
    endcontainer
	begincontainer horizontal style=1 width=100% pageinfo
	    brick color1 details_found
        brick color1 page_of
        brick color1 recsperpage
	endcontainer
    begincontainer grid style=grid delimx=10 delimy=10  width=100% grid
        brick grid
    endcontainer
   begincontainer horizontal style=2  width=100% pagination
        brick center pagination
    endcontainer
endblock

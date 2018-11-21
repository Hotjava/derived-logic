@version=2
beginblock top
	begincontainer style=empty add_css
 		brick add_css
	endcontainer
	begincontainer horizontal  style=empty master
 		brick masterinfo
	endcontainer	

    begincontainer horizontal  style=2 width=100% toplinks
		brick left loggedas
        brick left toplinks_print
		brick left toplinks_advsearch
		brick left toplinks_import
		brick left toplinks_export
		brick left toplinks_export_links
		brick color1 languages
    endcontainer
	begincontainer horizontal bmargin=0 style=hmenu width=100% hmenu
		brick hmenu
	endcontainer
 	begincontainer horizontal style=1 width=100% search
 		brick left search
		brick left search_buttons
		brick left search_saving_buttons
		brick right details_found
		brick right page_of
		brick right recsperpage
    endcontainer
	
	begincontainer horizontal style=2 width=100% recordcontrols
        brick left recordcontrols_new
	brick left recordcontrol
    endcontainer 
endblock 

beginblock width=260 left
    begincontainer vertical style=menu rmargin=5  width=100% left
		brick searchpanel
		brick filterpanel
  endcontainer 
endblock 

beginblock center    
		begincontainer horizontal color=1 style=2 width=100% eventdaily
			brick center eventdailylist
		endcontainer
    begincontainer horizontal style=2 width=100% message
       brick center align=center width=100% filename=message_bare.htm message
    endcontainer
    begincontainer grid delimx=10 delimy=10 style=grid grid
        brick grid
    endcontainer 
    begincontainer horizontal style=2 width=100% pagination
        brick center pagination
    endcontainer
endblock

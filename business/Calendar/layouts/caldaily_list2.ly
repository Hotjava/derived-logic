@version=2
beginblock top
	begincontainer style=empty add_css
 		brick add_css
	endcontainer
	begincontainer horizontal  style=empty master
 		brick masterinfo
	endcontainer	

    begincontainer horizontal style=empty width=100% toplinks
        brick right toplinks_print
		brick right toplinks_advsearch
		brick right toplinks_import
		brick right toplinks_export
		brick right toplinks_export_links
    endcontainer
 	begincontainer horizontal style=2 width=100% search
 		brick left search
		brick left search_buttons
		brick left search_saving_buttons
		brick right details_found
		brick right page_of
		brick right recsperpage
    endcontainer

endblock 


beginblock width=260 left
	begincontainer vertical style=menu width=100% lang
		brick color1 languages
	endcontainer 
	begincontainer vertical style=menu width=100% logg
		brick color1 loggedas
	endcontainer 
    begincontainer vertical style=menu width=100% left
		brick searchpanel
		brick filterpanel
		brick color1 vmenu
	endcontainer 
endblock 

beginblock center
     begincontainer horizontal style=1 width=100% recordcontrols
        brick left recordcontrols_new
		brick left recordcontrol
    endcontainer 
    begincontainer horizontal color=1 style=2 width=100% eventdaily
	brick center eventdailylist
    endcontainer
    begincontainer horizontal style=2  width=100% message
	brick center filename=message_bare.htm message
    endcontainer
    begincontainer grid delimx=10 delimy=10  style=grid grid
        brick grid
    endcontainer
   begincontainer horizontal style=2  width=100% pagination
        brick center pagination
    endcontainer
endblock
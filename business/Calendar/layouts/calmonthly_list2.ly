@version=2
beginblock width=100% top
	begincontainer style=empty add_css
 		brick add_css
	endcontainer
    begincontainer horizontal style=empty width=100% toplinks
        brick right toplinks_print
		brick right toplinks_advsearch
		brick right toplinks_import
		brick right toplinks_export
		brick right toplinks_export_links
    endcontainer

endblock 


beginblock width=100 left
	begincontainer vertical style=menu width=100% lang
		brick color1 languages
	endcontainer 
	begincontainer vertical style=menu width=100% logg
		brick color1 loggedas
	endcontainer 
    begincontainer vertical style=menu width=100% left
		brick color1 vmenu
	endcontainer 
endblock 

beginblock width=100% center
    begincontainer horizontal style=2 width=100% form
        brick calmonthly_list
    endcontainer
endblock
@version=2
beginblock width=100% top
	begincontainer style=empty add_css
 		brick add_css
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
endblock 

beginblock width=100% center    
    begincontainer horizontal style=2 width=100% form
        brick calmonthly_list
    endcontainer
endblock

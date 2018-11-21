@version=2
beginblock width=100% top
	begincontainer style=empty add_css
 		brick add_css
	endcontainer
    begincontainer horizontal style=empty width=100%  controlpanel
		brick left tableinfo
		brick left loggedas
		brick toplinks_print
		brick toplinks_advsearch
		brick toplinks_import
		brick toplinks_export
		brick toplinks_export_links
		brick right languages
		brick right quickjump
    endcontainer
	
endblock 

beginblock width=100% center
    begincontainer horizontal style=2 width=100% form
        brick width=100% calmonthly_list
    endcontainer
endblock
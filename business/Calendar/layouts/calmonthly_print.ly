@version=2
beginblock top
	begincontainer style=empty add_css
 		brick add_css
	endcontainer
	begincontainer horizontal  style=empty printheader
 		brick printheader
    endcontainer
endblock 

beginblock center
    begincontainer horizontal  style=empty form
        brick calmonthly_print
    endcontainer
endblock
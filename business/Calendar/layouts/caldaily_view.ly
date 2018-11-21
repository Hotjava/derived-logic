@version=2
beginblock top
	begincontainer horizontal  style=empty pdf
 		brick viewpdf
	endcontainer	
endblock
beginblock center
    begincontainer vertical columns=4 style=fields width=500 align=left fields
        header color2 viewheader
        brick viewfields
	    brick color2 viewbuttons
	endcontainer 
    begincontainer vertical style=empty align=left width=500 details
        brick viewdetails
    endcontainer
endblock
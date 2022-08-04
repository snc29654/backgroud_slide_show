<?php
$gazoudir = opendir("./jpg");
$len=0;
while (false !== ($file[] = readdir($gazoudir))){
    $len=$len+1;
};
closedir($gazoudir);
print "<!DOCTYPE html>";
print "<html lang=\"ja\">";
print "<head>";
$m=3;
print "<script language=\"JavaScript\">";
    print "i = 0;";
    print "url = \"./jpg/\";";                
                            
    print "img = new Array("; 
    for($m=3;$m<=$len;$m=$m+1){    
        print "\"$file[$m]\",";
    }
print ");";


    print "function change(){";                
        print "i++;";
        print "if(i >= img.length) {";
            print "i = 0;";
        print "}";
        print "document.body.background = url + img[i];";
    print "}";
    print "function tm(){";                    
        print "document.body.background = url + img[i];";
        print "tm = setInterval(\"change()\",1000);";
    print "}";
    print "</script>";
print "<body style=\"background-repeat: no-repeat;  background-size   : 40%;  \"> ";

print "</head>";
print "<body onLoad=\"tm()\">";

print "</body>";
print "</html>";

?>
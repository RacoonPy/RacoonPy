<?php
/*
 ____                             ____        
|  _ \ __ _  ___ ___   ___  _ __ |  _ \ _   _ 
| |_) / _` |/ __/ _ \ / _ \| '_ \| |_) | | | |
|  _ < (_| | (_| (_) | (_) | | | |  __/| |_| |
|_| \_\__,_|\___\___/ \___/|_| |_|_|    \__, |
                                        |___/ 
*/
trait RacoonPy_HTML{
    public function tag($tag_name,$prefix = NULL,$value = NULL){
        // Developed by RacoonPy
        $prefix[] = NULL; 
        if($tag_name == "input" || $tag_name == "img" || $tag_name == "hr" && $tag_name == "br"): 
            echo @$element = "\n<$tag_name";
            foreach($prefix as $key => $val):
                if($key != "0"):
                    echo " $key='$val'";
                endif;
            endforeach; 
           echo @$element = "/>\n";
        else: 
        // Developed by RacoonPy
           echo @$element = "\n<$tag_name";
            foreach($prefix as $key => $val):
                if($key != "value"):
                    echo " $key='$val'";
                endif;
            endforeach;
           echo @$element = ">$prefix[value]$value</$tag_name>\n";
        endif;
    }
}
?>
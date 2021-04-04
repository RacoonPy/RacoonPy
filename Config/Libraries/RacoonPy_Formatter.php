<?php
/*
 ____                             ____        
|  _ \ __ _  ___ ___   ___  _ __ |  _ \ _   _ 
| |_) / _` |/ __/ _ \ / _ \| '_ \| |_) | | | |
|  _ < (_| | (_| (_) | (_) | | | |  __/| |_| |
|_| \_\__,_|\___\___/ \___/|_| |_|_|    \__, |
                                        |___/ 
*/
trait RacoonPy_Formatter{
    public function pre($data = NULL){
        echo "<pre>";
        $format_str = $data;
        print_r($format_str);
        echo "</pre>";
    }
    public function code_format($data = NULL){
        echo "<pre>";
        $format_str = $data;
        print_r($format_str);
        echo "</pre>";
    }
    public function code($data = NULL){
        echo "<code>";
        echo $data;
        echo "</code>";
    }
}
?>
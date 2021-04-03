<?php
/*
____                             ____        
|  _ \ __ _  ___ ___   ___  _ __ |  _ \ _   _ 
| |_) / _` |/ __/ _ \ / _ \| '_ \| |_) | | | |
|  _ < (_| | (_| (_) | (_) | | | |  __/| |_| |
|_| \_\__,_|\___\___/ \___/|_| |_|_|    \__, |
                                        |___/ 
*/
trait RacoonPy_File{
    public function get_size($data){
        $base   = log(filesize($data)) / log(1024);
        $suffix = array("B", "KB", "MB", "GB", "TB");
        $f_base = floor($base);
        echo round(pow(1024, $base - floor($base)), 1)."".$suffix[$f_base];
    }
}
?>
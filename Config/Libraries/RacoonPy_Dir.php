<?php
/*
 ____                             ____        
|  _ \ __ _  ___ ___   ___  _ __ |  _ \ _   _ 
| |_) / _` |/ __/ _ \ / _ \| '_ \| |_) | | | |
|  _ < (_| | (_| (_) | (_) | | | |  __/| |_| |
|_| \_\__,_|\___\___/ \___/|_| |_|_|    \__, |
                                        |___/ 
*/
trait RacoonPy_Dir{
    public $dirname;
    public function list_dir($dir,$status = false){
        $dir_name = $this->dirname = $dir;
        $SDir     = scandir($dir_name);
        foreach($SDir as $key => $val){
            if(!in_array($val,array(".",".."))){
                $results[] = $val;
          }
        }
        if($status === true){
            return $this->pre($results);
        }elseif($status === false){
            return $this->pre($SDir);
        } 
    }
}
?>
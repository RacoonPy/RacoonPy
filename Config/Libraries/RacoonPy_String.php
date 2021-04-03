<?php
/*
____                             ____        
|  _ \ __ _  ___ ___   ___  _ __ |  _ \ _   _ 
| |_) / _` |/ __/ _ \ / _ \| '_ \| |_) | | | |
|  _ < (_| | (_| (_) | (_) | | | |  __/| |_| |
|_| \_\__,_|\___\___/ \___/|_| |_|_|    \__, |
                                        |___/ 
*/

trait RacoonPy_String{
  public function get_char($needle,$racoonpy_data){
      $str_chunk = str_split($racoonpy_data);
      if(in_array($needle,$str_chunk)):
        $this->pre($needle);
      else:
        echo "Sorry!";
      endif;
    }
}


?>
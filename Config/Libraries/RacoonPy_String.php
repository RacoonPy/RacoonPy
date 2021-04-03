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
  public function get_char($needle,string $racoonpy_data){
    $str_chunk = str_split($racoonpy_data);
    if(in_array($needle,$str_chunk) && $needle != "" && $needle != " "):
      $this->pre($needle);
    else:
      echo "Sorry!";
    endif;
  }
  public function get_word($needle,string $racoonpy_data){
    $str_chunk = explode(" ",$racoonpy_data);
    if(in_array($needle,$str_chunk) && $needle != "" && $needle != " "):
      $this->pre($needle);
    else:
      echo "Sorry!";
    endif;
  }
}
?>
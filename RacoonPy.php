<style type="text/css">
	::selection { background-color: #577AB6; color: white; }
	::-moz-selection { background-color: #577AB6; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}
	a {
		color: #294886;
		background-color: transparent;
		font-weight: normal;
	}
	h1 {
		color: #4F5155;
		background-color: transparent;
		border-bottom: 1px solid #4F5155;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #4F5155;;
		border: 1px solid #4F5155;;
		color: #4F5155;;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}
</style>
<?php
/*
 ____                             ____        
|  _ \ __ _  ___ ___   ___  _ __ |  _ \ _   _ 
| |_) / _` |/ __/ _ \ / _ \| '_ \| |_) | | | |
|  _ < (_| | (_| (_) | (_) | | | |  __/| |_| |
|_| \_\__,_|\___\___/ \___/|_| |_|_|    \__, |
                                        |___/ 
*/
require_once("Config/Config.php");
class RacoonPy{
    use 
	RacoonPy_Formatter,
    RacoonPy_File,
    RacoonPy_Dir,
    RacoonPy_HTML,
    RacoonPy_HTML_Entities,
	RacoonPy_HTML_Emoji,
	RacoonPy_String,
	RacoonPy_Magic_Txt;
    public function racoonpy_welcome(){
        echo "<center>";
        $heading['style'] = "color:#01050D;";
        $heading['value'] = "Welcome To RacoonPy";
        // echo $this->tag("h1",$heading);
		$volume = "Version: 1.2.0";
        $code = <<<RACOONPY
         ____                             ____        
        |  _ \ __ _  ___ ___   ___  _ __ |  _ \ _   _ 
        | |_) / _` |/ __/ _ \ / _ \| '_ \| |_) | | | |
        |  _ < (_| | (_| (_) | (_) | | | |  __/| |_| |
        |_| \_\__,_|\___\___/ \___/|_| |_|_|    \__, |
                                                |___/ 
        RACOONPY;
        $data['value'] = "\n\n\n\n".$code;
        $data['style'] = "color:#294886;font-size:22px;font-weight:bold;margin:auto;margin-bottom:16px;";
        echo $this->tag("pre",$data,"\n\nDeveloper : Mr Nikul Singh / Version: 1.2.0");
        echo "</center>";
    }
    public function test(){
        $this->color_generator();
    }
}
$formater = new RacoonPy;
$formater->test();
?>
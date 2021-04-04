<?php
/*
 ____                             ____        
|  _ \ __ _  ___ ___   ___  _ __ |  _ \ _   _ 
| |_) / _` |/ __/ _ \ / _ \| '_ \| |_) | | | |
|  _ < (_| | (_| (_) | (_) | | | |  __/| |_| |
|_| \_\__,_|\___\___/ \___/|_| |_|_|    \__, |
                                        |___/ 
*/
trait RacoonPy_HTML_Entities{
    public function html_entities($status = true){
    $HTML_ENTITIES = get_html_translation_table(HTML_ENTITIES);
    if($status == true):
		echo "<center>";
        echo "<table border='1' width='50%' style='border-collapse: collapse;'>";
        echo "<tr>";
        echo "<th>Entities</th>";
        echo "<th>Value</th>";
        echo "</tr>";
        foreach($HTML_ENTITIES as $key => $value):
            echo "<tr>";
            echo "<td>$value</td>";
            echo "<td>$key</td>";
            echo "</tr>";
        endforeach;
        echo "</table>";
        echo "</center>";
    endif;
    if($status == false):
        $this->pre($HTML_ENTITIES);
    endif;
    }
    public function html_entity_list(){
        echo '
		<center>
        <h2>ASCII Characters (Printable)</h2>
        <p>Only printable characters are displayed as control characters (0-31) shouldn\'t be present in HTML pages since they have no visual representations.</p>
        <table border="1" width="50%" style="border-collapse: collapse;">
				<thead>
					<tr>
						<th>Character</th>
						<th>Entity Name</th>
						<th>Entity Number</th>
						<th>Description</th>
					</tr>
				</thead>
					<tbody>
						<tr><td>&nbsp;</td><td></td><td>&amp;#32;</td><td>Space</td></tr>
						<tr><td>&#33;</td><td></td><td>&amp;#33;</td><td>Exclamation mark</td></tr>
						<tr><td>&#34;</td><td></td><td>&amp;#34;</td><td>Quotation mark</td></tr>
						<tr><td>&#35;</td><td></td><td>&amp;#35;</td><td>Number sign</td></tr>
						<tr><td>&#36;</td><td></td><td>&amp;#36;</td><td>Dollar sign</td></tr>
						<tr><td>&#37;</td><td></td><td>&amp;#37;</td><td>Percent sign</td></tr>
						<tr><td>&#38;</td><td>&amp;amp;</td><td>&amp;#38;</td><td>Ampersand</td></tr>
						<tr><td>&#39;</td><td></td><td>&amp;#39;</td><td>Apostrophe</td></tr>
						<tr><td>&#40;</td><td></td><td>&amp;#40;</td><td>Opening/Left Parenthesis</td></tr>
						<tr><td>&#41;</td><td></td><td>&amp;#41;</td><td>Closing/Right Parenthesis</td></tr>
						<tr><td>&#42;</td><td></td><td>&amp;#42;</td><td>Asterisk</td></tr>
						<tr><td>&#43;</td><td></td><td>&amp;#43;</td><td>Plus sign</td></tr>
						<tr><td>&#44;</td><td></td><td>&amp;#44;</td><td>Comma</td></tr>
						<tr><td>&#45;</td><td></td><td>&amp;#45;</td><td>Hyphen</td></tr>
						<tr><td>&#46;</td><td></td><td>&amp;#46;</td><td>Period</td></tr>
						<tr><td>&#47;</td><td></td><td>&amp;#47;</td><td>Slash</td></tr>
						<tr><td>&#48;</td><td></td><td>&amp;#48;</td><td>Digit 0</td></tr>
						<tr><td>&#49;</td><td></td><td>&amp;#49;</td><td>Digit 1</td></tr>
						<tr><td>&#50;</td><td></td><td>&amp;#50;</td><td>Digit 2</td></tr>
						<tr><td>&#51;</td><td></td><td>&amp;#51;</td><td>Digit 3</td></tr>
						<tr><td>&#52;</td><td></td><td>&amp;#52;</td><td>Digit 4</td></tr>
						<tr><td>&#53;</td><td></td><td>&amp;#53;</td><td>Digit 5</td></tr>
						<tr><td>&#54;</td><td></td><td>&amp;#54;</td><td>Digit 6</td></tr>
						<tr><td>&#55;</td><td></td><td>&amp;#55;</td><td>Digit 7</td></tr>
						<tr><td>&#56;</td><td></td><td>&amp;#56;</td><td>Digit 8</td></tr>
						<tr><td>&#57;</td><td></td><td>&amp;#57;</td><td>Digit 9</td></tr>
						<tr><td>&#58;</td><td></td><td>&amp;#58;</td><td>Colon</td></tr>
						<tr><td>&#59;</td><td></td><td>&amp;#59;</td><td>Semicolon</td></tr>
						<tr><td>&#60;</td><td>&amp;lt;</td><td>&amp;#60;</td><td>Less-than</td></tr>
						<tr><td>&#61;</td><td></td><td>&amp;#61;</td><td>Equals sign</td></tr>
						<tr><td>&#62;</td><td>&amp;gt;</td><td>&amp;#62;</td><td>Greater than</td></tr>
						<tr><td>&#63;</td><td></td><td>&amp;#63;</td><td>Question mark</td></tr>
						<tr><td>&#64;</td><td></td><td>&amp;#64;</td><td>At sign</td></tr>
						<tr><td>&#65;</td><td></td><td>&amp;#65;</td><td>Uppercase A</td></tr>
						<tr><td>&#66;</td><td></td><td>&amp;#66;</td><td>Uppercase B</td></tr>
						<tr><td>&#67;</td><td></td><td>&amp;#67;</td><td>Uppercase C</td></tr>
						<tr><td>&#68;</td><td></td><td>&amp;#68;</td><td>Uppercase D</td></tr>
						<tr><td>&#69;</td><td></td><td>&amp;#69;</td><td>Uppercase E</td></tr>
						<tr><td>&#70;</td><td></td><td>&amp;#70;</td><td>Uppercase F</td></tr>
						<tr><td>&#71;</td><td></td><td>&amp;#71;</td><td>Uppercase G</td></tr>
						<tr><td>&#72;</td><td></td><td>&amp;#72;</td><td>Uppercase H</td></tr>
						<tr><td>&#73;</td><td></td><td>&amp;#73;</td><td>Uppercase I</td></tr>
						<tr><td>&#74;</td><td></td><td>&amp;#74;</td><td>Uppercase J</td></tr>
						<tr><td>&#75;</td><td></td><td>&amp;#75;</td><td>Uppercase K</td></tr>
						<tr><td>&#76;</td><td></td><td>&amp;#76;</td><td>Uppercase L</td></tr>
						<tr><td>&#77;</td><td></td><td>&amp;#77;</td><td>Uppercase M</td></tr>
						<tr><td>&#78;</td><td></td><td>&amp;#78;</td><td>Uppercase N</td></tr>
						<tr><td>&#79;</td><td></td><td>&amp;#79;</td><td>Uppercase O</td></tr>
						<tr><td>&#80;</td><td></td><td>&amp;#80;</td><td>Uppercase P</td></tr>
						<tr><td>&#81;</td><td></td><td>&amp;#81;</td><td>Uppercase Q</td></tr>
						<tr><td>&#82;</td><td></td><td>&amp;#82;</td><td>Uppercase R</td></tr>
						<tr><td>&#83;</td><td></td><td>&amp;#83;</td><td>Uppercase S</td></tr>
						<tr><td>&#84;</td><td></td><td>&amp;#84;</td><td>Uppercase T</td></tr>
						<tr><td>&#85;</td><td></td><td>&amp;#85;</td><td>Uppercase U</td></tr>
						<tr><td>&#86;</td><td></td><td>&amp;#86;</td><td>Uppercase V</td></tr>
						<tr><td>&#87;</td><td></td><td>&amp;#87;</td><td>Uppercase W</td></tr>
						<tr><td>&#88;</td><td></td><td>&amp;#88;</td><td>Uppercase X</td></tr>
						<tr><td>&#89;</td><td></td><td>&amp;#89;</td><td>Uppercase Y</td></tr>
						<tr><td>&#90;</td><td></td><td>&amp;#90;</td><td>Uppercase Z</td></tr>
						<tr><td>&#91;</td><td></td><td>&amp;#91;</td><td>Opening/Left square bracket</td></tr>
						<tr><td>&#92;</td><td></td><td>&amp;#92;</td><td>Backslash</td></tr>
						<tr><td>&#93;</td><td></td><td>&amp;#93;</td><td>Closing/Right square bracket</td></tr>
						<tr><td>&#94;</td><td></td><td>&amp;#94;</td><td>Caret</td></tr>
						<tr><td>&#95;</td><td></td><td>&amp;#95;</td><td>Underscore</td></tr>
						<tr><td>&#96;</td><td></td><td>&amp;#96;</td><td>Grave accent</td></tr>
						<tr><td>&#97;</td><td></td><td>&amp;#97;</td><td>Lowercase a</td></tr>
						<tr><td>&#98;</td><td></td><td>&amp;#98;</td><td>Lowercase b</td></tr>
						<tr><td>&#99;</td><td></td><td>&amp;#99;</td><td>Lowercase c</td></tr>
						<tr><td>&#100;</td><td></td><td>&amp;#100;</td><td>Lowercase d</td></tr>
						<tr><td>&#101;</td><td></td><td>&amp;#101;</td><td>Lowercase e</td></tr>
						<tr><td>&#102;</td><td></td><td>&amp;#102;</td><td>Lowercase f</td></tr>
						<tr><td>&#103;</td><td></td><td>&amp;#103;</td><td>Lowercase g</td></tr>
						<tr><td>&#104;</td><td></td><td>&amp;#104;</td><td>Lowercase h</td></tr>
						<tr><td>&#105;</td><td></td><td>&amp;#105;</td><td>Lowercase i</td></tr>
						<tr><td>&#106;</td><td></td><td>&amp;#106;</td><td>Lowercase j</td></tr>
						<tr><td>&#107;</td><td></td><td>&amp;#107;</td><td>Lowercase k</td></tr>
						<tr><td>&#108;</td><td></td><td>&amp;#108;</td><td>Lowercase l</td></tr>
						<tr><td>&#109;</td><td></td><td>&amp;#109;</td><td>Lowercase m</td></tr>
						<tr><td>&#110;</td><td></td><td>&amp;#110;</td><td>Lowercase n</td></tr>
						<tr><td>&#111;</td><td></td><td>&amp;#111;</td><td>Lowercase o</td></tr>
						<tr><td>&#112;</td><td></td><td>&amp;#112;</td><td>Lowercase p</td></tr>
						<tr><td>&#113;</td><td></td><td>&amp;#113;</td><td>Lowercase q</td></tr>
						<tr><td>&#114;</td><td></td><td>&amp;#114;</td><td>Lowercase r</td></tr>
						<tr><td>&#115;</td><td></td><td>&amp;#115;</td><td>Lowercase s</td></tr>
						<tr><td>&#116;</td><td></td><td>&amp;#116;</td><td>Lowercase t</td></tr>
						<tr><td>&#117;</td><td></td><td>&amp;#117;</td><td>Lowercase u</td></tr>
						<tr><td>&#118;</td><td></td><td>&amp;#118;</td><td>Lowercase v</td></tr>
						<tr><td>&#119;</td><td></td><td>&amp;#119;</td><td>Lowercase w</td></tr>
						<tr><td>&#120;</td><td></td><td>&amp;#120;</td><td>Lowercase x</td></tr>
						<tr><td>&#121;</td><td></td><td>&amp;#121;</td><td>Lowercase y</td></tr>
						<tr><td>&#122;</td><td></td><td>&amp;#122;</td><td>Lowercase z</td></tr>
						<tr><td>&#123;</td><td></td><td>&amp;#123;</td><td>Opening/Left curly brace</td></tr>
						<tr><td>&#124;</td><td></td><td>&amp;#124;</td><td>Vertical bar</td></tr>
						<tr><td>&#125;</td><td></td><td>&amp;#125;</td><td>Closing/Right curly brace</td></tr>
						<tr><td>&#126;</td><td></td><td>&amp;#126;</td><td>Tilde</td></tr>						 							
					</tbody>
			</table>
			</center>';

        echo '
		<center>
        <h2>ISO-8859-1 Symbols</h2>
        <p>Full list of supported ISO-8859-1 characters. Notice that the names are case sensitive, hence if you want an uppercase letter, the name should
        also start with an uppercase letter.</p>
            <table border="1" width="50%" style="border-collapse: collapse;">
				<thead>
					<tr>
						<th>Character</th>
						<th>Entity Name</th>
						<th>Entity Number</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>&#192;</td><td>&amp;Agrave;</td><td>&amp;#192;</td><td>Capital a with grave accent</td></tr>
					<tr><td>&#193;</td><td>&amp;Aacute;</td><td>&amp;#193;</td><td>Capital a with acute accent</td></tr>
					<tr><td>&#194;</td><td>&amp;Acirc;</td><td>&amp;#194;</td><td>Capital a with circumflex accent</td></tr>
					<tr><td>&#195;</td><td>&amp;Atilde;</td><td>&amp;#195;</td><td>Capital a with tilde</td></tr>
					<tr><td>&#196;</td><td>&amp;Auml;</td><td>&amp;#196;</td><td>Capital a with umlaut</td></tr>							
					<tr><td>&#197;</td><td>&amp;Aring;</td><td>&amp;#197;</td><td>Capital a with ring</td></tr>
					<tr><td>&#198;</td><td>&amp;AElig;</td><td>&amp;#198;</td><td>Capital ae</td></tr>
					<tr><td>&#199;</td><td>&amp;Ccedil;</td><td>&amp;#199;</td><td>Capital c with cedilla</td></tr>							
					<tr><td>&#200;</td><td>&amp;Egrave;</td><td>&amp;#200;</td><td>Capital e with grave accent</td></tr>
					<tr><td>&#201;</td><td>&amp;Eacute;</td><td>&amp;#201;</td><td>Capital e with acute accent</td></tr>
					<tr><td>&#202;</td><td>&amp;Ecirc;</td><td>&amp;#202;</td><td>Capital e with circumflex accent</td></tr>
					<tr><td>&#203;</td><td>&amp;Euml;</td><td>&amp;#203;</td><td>Capital e with umlaut</td></tr>
					<tr><td>&#204;</td><td>&amp;Igrave;</td><td>&amp;#204;</td><td>Capital i with grave accent</td></tr>
					<tr><td>&#205;</td><td>&amp;Iacute;</td><td>&amp;#205;</td><td>Capital i with accute accent</td></tr>							
					<tr><td>&#206;</td><td>&amp;Icirc;</td><td>&amp;#206;</td><td>Capital i with circumflex accent</td></tr>
					<tr><td>&#207;</td><td>&amp;Iuml;</td><td>&amp;#207;</td><td>Capital i with umlaut</td></tr>
					<tr><td>&#208;</td><td>&amp;ETH;</td><td>&amp;#208;</td><td>Capital eth (Icelandic)</td></tr>
					<tr><td>&#209;</td><td>&amp;Ntilde;</td><td>&amp;#209;</td><td>Capital n with tilde</td></tr>
					<tr><td>&#210;</td><td>&amp;Ograve;</td><td>&amp;#210;</td><td>Capital o with grave accent</td></tr>
					<tr><td>&#211;</td><td>&amp;Oacute;</td><td>&amp;#211;</td><td>Capital o with accute accent</td></tr>
					<tr><td>&#212;</td><td>&amp;Ocirc;</td><td>&amp;#212;</td><td>Capital o with circumflex accent</td></tr>
					<tr><td>&#213;</td><td>&amp;Otilde;</td><td>&amp;#213;</td><td>Capital o with tilde</td></tr>
					<tr><td>&#214;</td><td>&amp;Ouml;</td><td>&amp;#214;</td><td>Capital o with umlaut</td></tr>
					<tr><td>&#216;</td><td>&amp;Oslash;</td><td>&amp;#216;</td><td>Capital o with slash</td></tr>
					<tr><td>&#217;</td><td>&amp;Ugrave;</td><td>&amp;#217;</td><td>Capital u with grave accent</td></tr>
					<tr><td>&#218;</td><td>&amp;Uacute;</td><td>&amp;#218;</td><td>Capital u with acute accent</td></tr>
					<tr><td>&#219;</td><td>&amp;Ucirc;</td><td>&amp;#219;</td><td>Capital u with circumflex accent</td></tr>
					<tr><td>&#220;</td><td>&amp;Uuml;</td><td>&amp;#220;</td><td>Capital u with umlaut</td></tr>
					<tr><td>&#221;</td><td>&amp;Yacute;</td><td>&amp;#221;</td><td>Capital y with acute accent</td></tr>
					<tr><td>&#222;</td><td>&amp;THORN;</td><td>&amp;#222;</td><td>Capital thorn (Icelandic)</td></tr>
					<tr><td>&#223;</td><td>&amp;szlig;</td><td>&amp;#223;</td><td>Lowercase sharp s (German)</td></tr>
					<tr><td>&#224;</td><td>&amp;agrave;</td><td>&amp;#224;</td><td>Lowercase a with grave accent</td></tr>
					<tr><td>&#225;</td><td>&amp;aacute;</td><td>&amp;#225;</td><td>Lowercase a with acute accent</td></tr>
					<tr><td>&#226;</td><td>&amp;acirc;</td><td>&amp;#226;</td><td>Lowercase a with circumflex accent</td></tr>
					<tr><td>&#227;</td><td>&amp;atilde;</td><td>&amp;#227;</td><td>Lowercase a with tilde</td></tr>
					<tr><td>&#228;</td><td>&amp;auml;</td><td>&amp;#228;</td><td>Lowercase a with umlaut</td></tr>
					<tr><td>&#229;</td><td>&amp;aring;</td><td>&amp;#229;</td><td>Lowercase a with ring</td></tr>
					<tr><td>&#230;</td><td>&amp;aelig;</td><td>&amp;#230;</td><td>Lowercase ae</td></tr>
					<tr><td>&#231;</td><td>&amp;ccedil;</td><td>&amp;#231;</td><td>Lowercase c with cedilla</td></tr>
					<tr><td>&#232;</td><td>&amp;egrave;</td><td>&amp;#232;</td><td>Lowercase e with grave accent</td></tr>
					<tr><td>&#233;</td><td>&amp;eacute;</td><td>&amp;#233;</td><td>Lowercase e with acute accent</td></tr>
					<tr><td>&#234;</td><td>&amp;ecirc;</td><td>&amp;#234;</td><td>Lowercase e with circumflex accent</td></tr>
					<tr><td>&#235;</td><td>&amp;euml;</td><td>&amp;#235;</td><td>Lowercase e with umlaut</td></tr>
					<tr><td>&#236;</td><td>&amp;igrave;</td><td>&amp;#236;</td><td>Lowercase i with grave accent</td></tr>
					<tr><td>&#237;</td><td>&amp;iacute;</td><td>&amp;#237;</td><td>Lowercase i with acute accent</td></tr>
					<tr><td>&#238;</td><td>&amp;icirc;</td><td>&amp;#238;</td><td>Lowercase i with circumflex accent</td></tr>
					<tr><td>&#239;</td><td>&amp;iuml;</td><td>&amp;#239;</td><td>Lowercase i with umlaut</td></tr>
					<tr><td>&#240;</td><td>&amp;eth;</td><td>&amp;#240;</td><td>Lowercase eth (Icelandic)</td></tr>
					<tr><td>&#241;</td><td>&amp;ntilde;</td><td>&amp;#241;</td><td>Lowercase n with tilde</td></tr>
					<tr><td>&#242;</td><td>&amp;ograve;</td><td>&amp;#242;</td><td>Lowercase o with grave accent</td></tr>
					<tr><td>&#243;</td><td>&amp;oacute;</td><td>&amp;#243;</td><td>Lowercase o with acute accent</td></tr>
					<tr><td>&#244;</td><td>&amp;ocirc;</td><td>&amp;#244;</td><td>Lowercase o with circumflex accent</td></tr>
					<tr><td>&#245;</td><td>&amp;otilde;</td><td>&amp;#245;</td><td>Lowercase o with tilde</td></tr>
					<tr><td>&#246;</td><td>&amp;ouml;</td><td>&amp;#246;</td><td>Lowercase o with umlaut</td></tr>
					<tr><td>&#248;</td><td>&amp;oslash;</td><td>&amp;#248;</td><td>Lowercase o with slash</td></tr>
					<tr><td>&#249;</td><td>&amp;ugrave;</td><td>&amp;#249;</td><td>Lowercase u with grave accent</td></tr>
					<tr><td>&#250;</td><td>&amp;uacute;</td><td>&amp;#250;</td><td>Lowercase u with acute accent</td></tr>
					<tr><td>&#251;</td><td>&amp;ucirc;</td><td>&amp;#251;</td><td>Lowercase u with circumflex accent</td></tr>
					<tr><td>&#252;</td><td>&amp;uuml;</td><td>&amp;#252;</td><td>Lowercase u with umlaut</td></tr>
					<tr><td>&#253;</td><td>&amp;yacute;</td><td>&amp;#253;</td><td>Lowercase y with acute accent</td></tr>
					<tr><td>&#254;</td><td>&amp;thorn;</td><td>&amp;#254;</td><td>Lowercase thorn (Icelandic)</td></tr>
					<tr><td>&#255;</td><td>&amp;yuml;</td><td>&amp;#255;</td><td>Lowercase y with umlaut</td></tr>				
				</tbody>
			</table>
			</center>';

            echo '
			<center>
            <h2>ISO-8859-1 Symbols</h2>
					<p>Full list of supported ISO-8859-1 symbols in HTML.</p>
					<table border="1" width="50%" style="border-collapse: collapse;">
						<thead>
							<tr>
								<th>Symbol</th>
								<th>Entity Name</th>
								<th>Entity Number</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr><td>&#160;</td><td>&amp;nbsp;</td><td>&amp;#160;</td><td>Non-breaking space</td></tr>
							<tr><td>&#161;</td><td>&amp;iexcl;</td><td>&amp;#161;</td><td>Inverted exclamation mark</td></tr>
							<tr><td>&#162;</td><td>&amp;cent;</td><td>&amp;#162;</td><td>Cent</td></tr>
							<tr><td>&#163;</td><td>&amp;pound;</td><td>&amp;#163;</td><td>Pound</td></tr>
							<tr><td>&#164;</td><td>&amp;curren;</td><td>&amp;#164;</td><td>Currency</td></tr>
							<tr><td>&#165;</td><td>&amp;yen;</td><td>&amp;#165;</td><td>Yen</td></tr>
							<tr><td>&#166;</td><td>&amp;brvbar;</td><td>&amp;#166;</td><td>Broken vertical bar</td></tr>
							<tr><td>&#167;</td><td>&amp;sect;</td><td>&amp;#167;</td><td>Section</td></tr>
							<tr><td>&#168;</td><td>&amp;uml;</td><td>&amp;#168;</td><td>Spacing diaeresis</td></tr>
							<tr><td>&#169;</td><td>&amp;copy;</td><td>&amp;#169;</td><td>Copyright</td></tr>
							<tr><td>&#170;</td><td>&amp;ordf;</td><td>&amp;#170;</td><td>Feminine ordinal indicator</td></tr>
							<tr><td>&#171;</td><td>&amp;laquo;</td><td>&amp;#171;</td><td>Opening/Left angle quotation mark</td></tr>
							<tr><td>&#172;</td><td>&amp;not;</td><td>&amp;#172;</td><td>Negation</td></tr>
							<tr><td>&#173;</td><td>&amp;shy;</td><td>&amp;#173;</td><td>Soft hyphen</td></tr>
							<tr><td>&#174;</td><td>&amp;reg;</td><td>&amp;#174;</td><td>Registered trademark</td></tr>
							<tr><td>&#175;</td><td>&amp;macr;</td><td>&amp;#175;</td><td>Spacing macron</td></tr>
							<tr><td>&#176;</td><td>&amp;deg;</td><td>&amp;#176;</td><td>Degree</td></tr>
							<tr><td>&#177;</td><td>&amp;plusmn;</td><td>&amp;#177;</td><td>Plus or minus</td></tr>
							<tr><td>&#178;</td><td>&amp;sup2;</td><td>&amp;#178;</td><td>Superscript 2</td></tr>
							<tr><td>&#179;</td><td>&amp;sup3;</td><td>&amp;#179;</td><td>Superscript 3</td></tr>
							<tr><td>&#180;</td><td>&amp;acute;</td><td>&amp;#180;</td><td>Spacing acute</td></tr>
							<tr><td>&#181;</td><td>&amp;micro;</td><td>&amp;#181;</td><td>Micro</td></tr>
							<tr><td>&#182;</td><td>&amp;para;</td><td>&amp;#182;</td><td>Paragraph</td></tr>
							<tr><td>&#184;</td><td>&amp;cedil;</td><td>&amp;#184;</td><td>Spacing cedilla</td></tr>
							<tr><td>&#185;</td><td>&amp;sup1;</td><td>&amp;#185;</td><td>Superscript 1</td></tr>
							<tr><td>&#186;</td><td>&amp;ordm;</td><td>&amp;#186;</td><td>Masculine ordinal indicator</td></tr>
							<tr><td>&#187;</td><td>&amp;raquo;</td><td>&amp;#187;</td><td>Closing/Right angle quotation mark</td></tr>
							<tr><td>&#188;</td><td>&amp;frac14;</td><td>&amp;#188;</td><td>Fraction 1/4</td></tr>
							<tr><td>&#189;</td><td>&amp;frac12;</td><td>&amp;#189;</td><td>Fraction 1/2</td></tr>
							<tr><td>&#190;</td><td>&amp;frac34;</td><td>&amp;#190;</td><td>Fraction 3/4</td></tr>
							<tr><td>&#191;</td><td>&amp;iquest;</td><td>&amp;#191;</td><td>Inverted question mark</td></tr>
							<tr><td>&#215;</td><td>&amp;times;</td><td>&amp;#215;</td><td>Multiplication</td></tr>
							<tr><td>&#247;</td><td>&amp;divide;</td><td>&amp;#247;</td><td>Divide</td></tr>
						</tbody>
					</table>
					</center>';

            echo '
			<center>
            <h2>Math Symbols</h2>
					<p>Full list of all supported math symbols in HTML.</p>
					<table border="1" width="50%" style="border-collapse: collapse;">
						<thead>
							<tr>
								<th>Symbol</th>
								<th>Entity Name</th>
								<th>Entity Number</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr><td>&#8704;</td><td>&amp;forall;</td><td>&amp;#8704;</td><td>For all</td></tr>
							<tr><td>&#8706;</td><td>&amp;part;</td><td>&amp;#8706;</td><td>Part</td></tr>
							<tr><td>&#8707;</td><td>&amp;exist;</td><td>&amp;#8707;</td><td>Exist</td></tr>
							<tr><td>&#8709;</td><td>&amp;empty;</td><td>&amp;#8709;</td><td>Empty</td></tr>
							<tr><td>&#8711;</td><td>&amp;nabla;</td><td>&amp;#8711;</td><td>Nabla</td></tr>
							<tr><td>&#8712;</td><td>&amp;isin;</td><td>&amp;#8712;</td><td>Is in</td></tr>
							<tr><td>&#8713;</td><td>&amp;notin;</td><td>&amp;#8713;</td><td>Not in</td></tr>
							<tr><td>&#8715;</td><td>&amp;ni;</td><td>&amp;#8715;</td><td>Ni</td></tr>
							<tr><td>&#8719;</td><td>&amp;prod;</td><td>&amp;#8719;</td><td>Product</td></tr>
							<tr><td>&#8721;</td><td>&amp;sum;</td><td>&amp;#8721;</td><td>Sum</td></tr>
							<tr><td>&#8722;</td><td>&amp;minus;</td><td>&amp;#8722;</td><td>Minus</td></tr>
							<tr><td>&#8727;</td><td>&amp;lowast;</td><td>&amp;#8727;</td><td>Asterisk (Lowast)</td></tr>
							<tr><td>&#8730;</td><td>&amp;radic;</td><td>&amp;#8730;</td><td>Square root</td></tr>
							<tr><td>&#8733;</td><td>&amp;prop;</td><td>&amp;#8733;</td><td>Proportional to</td></tr>
							<tr><td>&#8734;</td><td>&amp;infin;</td><td>&amp;#8734;</td><td>Infinity</td></tr>
							<tr><td>&#8736;</td><td>&amp;ang;</td><td>&amp;#8736;</td><td>Angle</td></tr>
							<tr><td>&#8743;</td><td>&amp;and;</td><td>&amp;#8743;</td><td>And</td></tr>
							<tr><td>&#8744;</td><td>&amp;or;</td><td>&amp;#8744;</td><td>Or</td></tr>
							<tr><td>&#8745;</td><td>&amp;cap;</td><td>&amp;#8745;</td><td>Cap</td></tr>
							<tr><td>&#8746;</td><td>&amp;cup;</td><td>&amp;#8746;</td><td>Cup</td></tr>
							<tr><td>&#8747;</td><td>&amp;int;</td><td>&amp;#8747;</td><td>Integral</td></tr>
							<tr><td>&#8756;</td><td>&amp;there4;</td><td>&amp;#8756;</td><td>Therefore</td></tr>
							<tr><td>&#8764;</td><td>&amp;sim;</td><td>&amp;#8764;</td><td>Similar to</td></tr>
							<tr><td>&#8773;</td><td>&amp;cong;</td><td>&amp;#8773;</td><td>Congurent to</td></tr>
							<tr><td>&#8776;</td><td>&amp;asymp;</td><td>&amp;#8776;</td><td>Almost equal</td></tr>
							<tr><td>&#8800;</td><td>&amp;ne;</td><td>&amp;#8800;</td><td>Not equal</td></tr>
							<tr><td>&#8801;</td><td>&amp;equiv;</td><td>&amp;#8801;</td><td>Equivalent</td></tr>
							<tr><td>&#8804;</td><td>&amp;le;</td><td>&amp;#8804;</td><td>Less or equal</td></tr>
							<tr><td>&#8805;</td><td>&amp;ge;</td><td>&amp;#8805;</td><td>Greater or equal</td></tr>
							<tr><td>&#8834;</td><td>&amp;sub;</td><td>&amp;#8834;</td><td>Subset of</td></tr>
							<tr><td>&#8835;</td><td>&amp;sup;</td><td>&amp;#8835;</td><td>Superset of</td></tr>
							<tr><td>&#8836;</td><td>&amp;nsub;</td><td>&amp;#8836;</td><td>Not subset of</td></tr>																<tr><td>&#8838;</td><td>&amp;sube;</td><td>&amp;#8838;</td><td>Subset or equal</td></tr>
							<tr><td>&#8839;</td><td>&amp;supe;</td><td>&amp;#8839;</td><td>Superset or equal</td></tr>
							<tr><td>&#8853;</td><td>&amp;oplus;</td><td>&amp;#8853;</td><td>Circled plus</td></tr>
							<tr><td>&#8855;</td><td>&amp;otimes;</td><td>&amp;#8855;</td><td>Circled times</td></tr>
							<tr><td>&#8869;</td><td>&amp;perp;</td><td>&amp;#8869;</td><td>Perpendicular</td></tr>
							<tr><td>&#8901;</td><td>&amp;sdot;</td><td>&amp;#8901;</td><td>Dot operator</td></tr>							
						</tbody>
					</table>
					</center>
            ';

            echo '
			<center>
            <h2>Greek Letters</h2>
			<p>Full list of all supported greek letters in HTML.</p>
					<table border="1" width="50%" style="border-collapse: collapse;">
						<thead>
							<tr>
								<th>Letter</th>
								<th>Entity Name</th>
								<th>Entity Number</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr><td>&#913;</td><td>&amp;Alpha;</td><td>&amp;#913;</td><td>Alpha</td></tr>
							<tr><td>&#914;</td><td>&amp;Beta;</td><td>&amp;#914;</td><td>Beta</td></tr>
							<tr><td>&#915;</td><td>&amp;Gamma;</td><td>&amp;#915;</td><td>Gamma</td></tr>
							<tr><td>&#916;</td><td>&amp;Delta;</td><td>&amp;#916;</td><td>Delta</td></tr>
							<tr><td>&#917;</td><td>&amp;Epsilon;</td><td>&amp;#917;</td><td>Epsilon</td></tr>
							<tr><td>&#918;</td><td>&amp;Zeta;</td><td>&amp;#918;</td><td>Zeta</td></tr>
							<tr><td>&#919;</td><td>&amp;Eta;</td><td>&amp;#919;</td><td>Eta</td></tr>																																										
							<tr><td>&#920;</td><td>&amp;Theta;</td><td>&amp;#920;</td><td>Theta</td></tr>
							<tr><td>&#921;</td><td>&amp;Iota;</td><td>&amp;#921;</td><td>Iota</td></tr>
							<tr><td>&#922;</td><td>&amp;Kappa;</td><td>&amp;#922;</td><td>Kappa</td></tr>														
							<tr><td>&#923;</td><td>&amp;Lambda;</td><td>&amp;#923;</td><td>Lambda</td></tr>
							<tr><td>&#924;</td><td>&amp;Mu;</td><td>&amp;#924;</td><td>Mu</td></tr>
							<tr><td>&#925;</td><td>&amp;Nu;</td><td>&amp;#925;</td><td>Nu</td></tr>
							<tr><td>&#926;</td><td>&amp;Xi;</td><td>&amp;#926;</td><td>Xi</td></tr>
							<tr><td>&#927;</td><td>&amp;Omicron;</td><td>&amp;#927;</td><td>Omicron</td></tr>																					
							<tr><td>&#928;</td><td>&amp;Pi;</td><td>&amp;#928;</td><td>Pi</td></tr>
							<tr><td>&#929;</td><td>&amp;Rho;</td><td>&amp;#929;</td><td>Rho</td></tr>
							<tr><td>&#931;</td><td>&amp;Sigma;</td><td>&amp;#931;</td><td>Sigma</td></tr>
							<tr><td>&#932;</td><td>&amp;Tau;</td><td>&amp;#932;</td><td>Tau</td></tr>
							<tr><td>&#933;</td><td>&amp;Upsilon;</td><td>&amp;#933;</td><td>Upsilon</td></tr>
							<tr><td>&#934;</td><td>&amp;Phi;</td><td>&amp;#934;</td><td>Phi</td></tr>
							<tr><td>&#935;</td><td>&amp;Chi;</td><td>&amp;#935;</td><td>Chi</td></tr>
							<tr><td>&#936;</td><td>&amp;Psi;</td><td>&amp;#936;</td><td>Psi</td></tr>
							<tr><td>&#937;</td><td>&amp;Omega;</td><td>&amp;#937;</td><td>Omega</td></tr>
							<tr><td>&#945;</td><td>&amp;alpha;</td><td>&amp;#945;</td><td>alpha</td></tr>
							<tr><td>&#946;</td><td>&amp;beta;</td><td>&amp;#946;</td><td>beta</td></tr>  	  	  	 
							<tr><td>&#947;</td><td>&amp;gamma;</td><td>&amp;#947;</td><td>gamma</td></tr>
							<tr><td>&#948;</td><td>&amp;delta;</td><td>&amp;#948;</td><td>delta</td></tr>
							<tr><td>&#949;</td><td>&amp;epsilon;</td><td>&amp;#949;</td><td>epsilon</td></tr>							
							<tr><td>&#950;</td><td>&amp;zeta;</td><td>&amp;#950;</td><td>zeta</td></tr>
							<tr><td>&#951;</td><td>&amp;eta;</td><td>&amp;#951;</td><td>eta</td></tr>
							<tr><td>&#952;</td><td>&amp;theta;</td><td>&amp;#952;</td><td>theta</td></tr>
							<tr><td>&#953;</td><td>&amp;iota;</td><td>&amp;#953;</td><td>iota</td></tr>
							<tr><td>&#954;</td><td>&amp;kappa;</td><td>&amp;#954;</td><td>kappa</td></tr>
							<tr><td>&#955;</td><td>&amp;lambda;</td><td>&amp;#955;</td><td>lambda</td></tr>
							<tr><td>&#956;</td><td>&amp;mu;</td><td>&amp;#956;</td><td>mu</td></tr>
							<tr><td>&#957;</td><td>&amp;nu;</td><td>&amp;#957;</td><td>nu</td></tr>
							<tr><td>&#958;</td><td>&amp;xi;</td><td>&amp;#958;</td><td>xi</td></tr>
							<tr><td>&#959;</td><td>&amp;omicron;</td><td>&amp;#959;</td><td>omicron</td></tr>														
							<tr><td>&#960;</td><td>&amp;pi;</td><td>&amp;#960;</td><td>pi</td></tr>
							<tr><td>&#961;</td><td>&amp;rho;</td><td>&amp;#961;</td><td>rho</td></tr>
							<tr><td>&#962;</td><td>&amp;sigmaf;</td><td>&amp;#962;</td><td>sigmaf</td></tr>
							<tr><td>&#963;</td><td>&amp;sigma;</td><td>&amp;#963;</td><td>sigma</td></tr>														
							<tr><td>&#964;</td><td>&amp;tau;</td><td>&amp;#964;</td><td>tau</td></tr>
							<tr><td>&#965;</td><td>&amp;upsilon;</td><td>&amp;#965;</td><td>upsilon</td></tr>
							<tr><td>&#966;</td><td>&amp;phi;</td><td>&amp;#966;</td><td>phi</td></tr>
							<tr><td>&#967;</td><td>&amp;chi;</td><td>&amp;#967;</td><td>chi</td></tr>
							<tr><td>&#968;</td><td>&amp;psi;</td><td>&amp;#968;</td><td>psi</td></tr>
							<tr><td>&#969;</td><td>&amp;omega;</td><td>&amp;#969;</td><td>omega</td></tr>
							<tr><td>&#977;</td><td>&amp;thetasym;</td><td>&amp;#977;</td><td>Theta symbol</td></tr>
							<tr><td>&#978;</td><td>&amp;upsih;</td><td>&amp;#978;</td><td>Upsilon symbol</td></tr>
							<tr><td>&#982;</td><td>&amp;piv;</td><td>&amp;#982;</td><td>Pi symbol</td></tr>
						</tbody>
					</table>
					</center>';

        echo '
		<center>
            <h2 style="margin:20px 0 10px 0">Miscellaneous HTML entities</h2>
            <p>List of miscellaneous HTML entities.</p>
            <table border="1" width="50%" style="border-collapse: collapse;">
            <thead>
                <tr>
                    <th>Symbol</th>
                    <th>Entity Name</th>
                    <th>Entity Number</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>&#338;</td><td>&amp;OElig;</td><td>&amp;#338;</td><td>Uppercase ligature OE</td></tr>
                <tr><td>&#339;</td><td>&amp;oelig;</td><td>&amp;#339;</td><td>Lowercase ligature OE</td></tr>
                <tr><td>&#352;</td><td>&amp;Scaron;</td><td>&amp;#352;</td><td>Uppercase S with caron</td></tr>
                <tr><td>&#353;</td><td>&amp;scaron;</td><td>&amp;#353;</td><td>Lowercase S with caron</td></tr>
                <tr><td>&#376;</td><td>&amp;Yuml;</td><td>&amp;#376;</td><td>Capital Y with diaeres</td></tr>
                <tr><td>&#402;</td><td>&amp;fnof;</td><td>&amp;#402;</td><td>Lowercase with hook</td></tr>
                <tr><td>&#710;</td><td>&amp;circ;</td><td>&amp;#710;</td><td>Circumflex accent</td></tr>
                <tr><td>&#732;</td><td>&amp;tilde;</td><td>&amp;#732;</td><td>Tilde</td></tr>
                <tr><td>&#8194;</td><td>&amp;ensp;</td><td>&amp;#8194;</td><td>En space</td></tr>
                <tr><td>&#8195;</td><td>&amp;emsp;</td><td>&amp;#8195;</td><td>Em space</td></tr>
                <tr><td>&#8201;</td><td>&amp;thinsp;</td><td>&amp;#8201;</td><td>Thin space</td></tr>
                <tr><td>&#8204;</td><td>&amp;zwnj;</td><td>&amp;#8204;</td><td>Zero width non-joiner</td></tr>
                <tr><td>&#8205;</td><td>&amp;zwj;</td><td>&amp;#8205;</td><td>Zero width joiner</td></tr>
                <tr><td>&#8206;</td><td>&amp;lrm;</td><td>&amp;#8206;</td><td>Left-to-right mark</td></tr>
                <tr><td>&#8207;</td><td>&amp;rlm;</td><td>&amp;#8207;</td><td>Right-to-left mark</td></tr>
                <tr><td>&#8211;</td><td>&amp;ndash;</td><td>&amp;#8211;</td><td>En dash</td></tr> 
                <tr><td>&#8212;</td><td>&amp;mdash;</td><td>&amp;#8212;</td><td>Em dash</td></tr>
                <tr><td>&#8216;</td><td>&amp;lsquo;</td><td>&amp;#8216;</td><td>Left single quotation mark</td></tr>
                <tr><td>&#8217;</td><td>&amp;rsquo;</td><td>&amp;#8217;</td><td>Right single quotation mark</td></tr>
                <tr><td>&#8218;</td><td>&amp;sbquo;</td><td>&amp;#8218;</td><td>Single low-9 quotation mark</td></tr>
                <tr><td>&#8220;</td><td>&amp;ldquo;</td><td>&amp;#8220;</td><td>Left double quotation mark</td></tr>
                <tr><td>&#8221;</td><td>&amp;rdquo;</td><td>&amp;#8221;</td><td>Right double quotation mark</td></tr>
                <tr><td>&#8222;</td><td>&amp;bdquo;</td><td>&amp;#8222;</td><td>Double low-9 quotation mark</td></tr>
                <tr><td>&#8224;</td><td>&amp;dagger;</td><td>&amp;#8224;</td><td>Dagger</td></tr>
                <tr><td>&#8225;</td><td>&amp;Dagger;</td><td>&amp;#8225;</td><td>Double dagger</td></tr>
                <tr><td>&#8226;</td><td>&amp;bull;</td><td>&amp;#8226;</td><td>Bullet</td></tr>
                <tr><td>&#8230;</td><td>&amp;hellip;</td><td>&amp;#8230;</td><td>Horizontal ellipsis</td></tr>
                <tr><td>&#8240;</td><td>&amp;permil;</td><td>&amp;#8240;</td><td>Per mille</td></tr>
                <tr><td>&#8242;</td><td>&amp;prime;</td><td>&amp;#8242;</td><td>Minutes (Degrees)</td></tr>
                <tr><td>&#8243;</td><td>&amp;Prime;</td><td>&amp;#8243;</td><td>Seconds (Degrees)</td></tr>
                <tr><td>&#8249;</td><td>&amp;lsaquo;</td><td>&amp;#8249;</td><td>Single left angle quotation</td></tr>
                <tr><td>&#8250;</td><td>&amp;rsaquo;</td><td>&amp;#8250;</td><td>Single right angle quotation</td></tr>
                <tr><td>&#8254;</td><td>&amp;oline;</td><td>&amp;#8254;</td><td>Overline</td></tr>
                <tr><td>&#8364;</td><td>&amp;euro;</td><td>&amp;#8364;</td><td>Euro</td></tr>
                <tr><td>&#8482;</td><td>&amp;trade;</td><td>&amp;#8482;</td><td>Trademark</td></tr>
                <tr><td>&#8592;</td><td>&amp;larr;</td><td>&amp;#8592;</td><td>Left arrow</td></tr>
                <tr><td>&#8593;</td><td>&amp;uarr;</td><td>&amp;#8593;</td><td>Up arrow</td></tr>
                <tr><td>&#8594;</td><td>&amp;rarr;</td><td>&amp;#8594;</td><td>Right arrow</td></tr>
                <tr><td>&#8595;</td><td>&amp;darr;</td><td>&amp;#8595;</td><td>Down arrow</td></tr>
                <tr><td>&#8596;</td><td>&amp;harr;</td><td>&amp;#8596;</td><td>Left right arrow</td></tr>
                <tr><td>&#8629;</td><td>&amp;crarr;</td><td>&amp;#8629;</td><td>Carriage return arrow</td></tr>
                <tr><td>&#8968;</td><td>&amp;lceil;</td><td>&amp;#8968;</td><td>Left ceiling</td></tr>
                <tr><td>&#8969;</td><td>&amp;rceil;</td><td>&amp;#8969;</td><td>Right ceiling</td></tr>
                <tr><td>&#8970;</td><td>&amp;lfloor;</td><td>&amp;#8970;</td><td>Left floor</td></tr>
                <tr><td>&#8971;</td><td>&amp;rfloor;</td><td>&amp;#8971;</td><td>Right floor</td></tr>
                <tr><td>&#9674;</td><td>&amp;loz;</td><td>&amp;#9674;</td><td>Lozenge</td></tr>
                <tr><td>&#9824;</td><td>&amp;spades;</td><td>&amp;#9824;</td><td>Spade</td></tr>
                <tr><td>&#9827;</td><td>&amp;clubs;</td><td>&amp;#9827;</td><td>Club</td></tr>
                <tr><td>&#9829;</td><td>&amp;hearts;</td><td>&amp;#9829;</td><td>Heart</td></tr>
                <tr><td>&#9830;</td><td>&amp;diams;</td><td>&amp;#9830;</td><td>Diamond</td></tr>
            </tbody>
        </table>
        </center>';
    }
}
?>
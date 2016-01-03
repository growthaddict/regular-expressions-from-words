<?php

//Initialize html variable
$html = '';

$html .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>';

$html .= '<script>

$(function() {
	$(".regexParts").hide();	
});

function addRegexPart() {
	var regexOptions = "<select class=\'regexParts\'>";
	regexOptions += "<option value=\'maybe\'>Maybe</option>";
	regexOptions += "<option value=\'then\'>Then</option>";
	regexOptions += "<option value=\'anythingBut\'>Anything But</option>";
	regexOptions  += "</select>";
	regexOptions  += "<input class=\'regexParts\' type=\'textbox\'/>";


	$("#hidden").after(regexOptions);
	$(".regexParts").show();
	$(".regexParts").after("<br><br>")
	
}
</script>';

$html .= 'The purpose of this application is to allow you to create regular expressions using real words. Thanks to <a href="https://github.com/VerbalExpressions">VerbalExpressions</a> library.';
$html .= '<form>';
$html .= '<br>';
$html .= '<b>Full URL to test Regex against:</b> ';
$html .= ' <input type="textbox" id="testRegex"/>';
$html .= ' <i>ex: http://GrowthAddict.com</i>';
$html .= '<br><br>';
$html .= '<h3>Create your regular expression using regular words.</h3>';
$html .= '<br>';
$html .= '<b>First Part of Regex:</b> <input type="textbox" id="firstPart"/>';
$html .= '<br><br>';
$dropdownId = '';
$html .= '<br>';
$html .= '<input id="hidden" type="hidden">';
$html .= '<input type="submit" value="Add New Regex Chunk" onclick="addRegexPart();">';

//Form submit button
$html .= '<br><br>';
$html .= '<button>Test Regular Expression Against My Url</button>';
$html .= '</form>';

//if url DOES match the built regex, echo valid!

//if url DOES NOT match the built regex, echo invalid!

echo $html;
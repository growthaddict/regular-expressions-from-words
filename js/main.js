<script>
$(function() {
	$('.regexParts').hide();	
});

function addRegexPart() {
	var select = '<select class="regexParts">
		  	<option value="volvo">Maybe</option>
		  	<option value="saab">Then</option>
		  	<option value="fiat">Anything But</option>
		</select>
	
	<input class="regexParts" type="textbox">';


	$("#hidden").after(select);
	$(".regexParts").after("<br><br>")
	
}
</script>
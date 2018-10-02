<form method="POST">
	<textarea name="text"></textarea>
	<input type="submit" name="simpan">
</form>

<?php  
	if (isset($_POST['simpan'])) {
		$text=$_POST['text'];
		$c =str_word_count($text);
		
		if ($c < 5) {
			echo "Komentar kurang dari 5 kata <br>";
			echo "Jumlah komenter : ".$c;
		}else{
			echo "Jumlah komenter : ".$c;
		}
	}
?>

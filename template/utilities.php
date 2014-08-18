<?php
function get_random_words($amount){
	try{
		$dbh = new PDO("mysql:dbname=jonchin_lib;host=mysql.jonathanchin.com", "jonchin_lib", "KKVgZ=9kmQ86vj{");
	}catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
	$sql = "SELECT `word` FROM `word_list` ORDER BY RAND() LIMIT :amount";
	$select_request = $dbh->prepare($sql);
	$select_request->bindValue(":amount", (int) $amount, PDO::PARAM_INT);
	$select_request->execute();
	return $select_request->fetchAll(PDO::FETCH_COLUMN);
}

function pretty_print($text){
	$search = array(
		"-"
		);
	$replace = array(
		" "
		);
	return ucwords(str_replace($search, $replace, $text));
}

function random_lipsum($amount = 1, $what = paras, $start = 0) {
	return "<p>"
		. simplexml_load_file("http://www.lipsum.com/feed/xml?amount=$amount&what=$what&start=$start")->lipsum
		. "</p>";
}

?>
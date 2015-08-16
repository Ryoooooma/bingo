<?php

// BINGO Rules

// B: 01 - 15
// I: 16 - 30
// N: 31 - 45 (真ん中はナシ)
// G: 46 - 60
// O: 61 - 75

// // range関数は1から15までの数の配列を作る関数
// $numbers = range(1, 15);
// // ()内のオブジェクトをシャッフルする関数
// shuffle($numbers);
// // 配列の添え字0から5つ分のデータをとってくる関数
// $rs = array_slice($numbers, 0, 5);
// // ()内のオブジェクトの中身とデータ型をはき出す
// var_dump($rs);

$bingo = array();

for ($i=0; $i<5; $i++) {
	$numbers = range($i*15+1, $i*15+15);
	// ()内のオブジェクトをシャッフルする関数
	shuffle($numbers);
	// 配列の添え字0から5つ分のデータをとってくる関数
	$bingo[$i] = array_slice($numbers, 0, 5);
}

var_dump($bingo);



?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>BINGOシート</title>
	</head>
	<style>
		th, th {
			width: 50px;
			border: 1px solid #ccc;
			text-align: center;
		}
	</style>

	<body>
	<h1>BINGOシート</h1>
	<table>
		<tr><th>B</th><th>I</th><th>N</th><th>G</th><th>O</th></tr>
	</table>
	</body>
</html>
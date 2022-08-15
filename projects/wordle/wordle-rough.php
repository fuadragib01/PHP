<?php
/**
 * word guessing game: wordle
 * main game url: https://www.nytimes.com/games/wordle/index.html
 * this is not final project. it was just start
 * final code is in wordle-2.php file
 */


function replaceArrayItem( $monthArray, $itemToRemove ) {
	$itemNum = count( $monthArray );
	for ( $x = 0; $x < $itemNum; $x++ ) {
		if ( $itemToRemove == $monthArray[$x] ) {
			//array_splice( $monthArray, $x, 1 ); // Will remove the item
			$monthArray[$x] = '';
			return $monthArray;
		}
	}
}

$user_word1 = '';
$word = 'wheel';
	$readonly1 = '';
if ( isset( $_POST['try_btn'] ) ) {
	if ( isset( $_POST['try_1'] ) && ! empty( $_POST['try_1'] ) ) {
		$user_word1       = strtolower( $_POST['try_1'] ); // wheel
		if ( $user_word1 == $word ) {
			echo "<h2 style='color: green;'>". $user_word1 ."</h2>";
		}
		$word_array = str_split( $word );
		$user_word1_array = str_split( $user_word1 );
		$result_array = array();

		for ( $i = 0; $i < 5; $i++ ) {
			if ( ! in_array( $user_word1_array[$i], $word_array ) ) {
				array_push( $result_array, [$user_word1_array[$i]=>'#b0a6a6'] );
			} elseif ( $user_word1_array[$i] == $word_array[$i] ) {
				array_push( $result_array, [$user_word1_array[$i]=>'#85f185'] );
				$word_array[$i] = '';
			} else {
				array_push( $result_array, [$user_word1_array[$i]=>'#edc318'] );
				$word_array = replaceArrayItem( $word_array, $user_word1_array[$i] );
			}
		}
		// echo "<pre>";
		// var_dump( $result_array );
		for ( $j = 0; $j < 5; $j++ )
		foreach ($result_array[$j] as $key => $value) {
			printf( "<h1 style='background:%s;color: #fff; text-align: center;'>%s</h1>", $value, $key );
		}
  		$readonly1 = 'readonly';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="">
		<table>
			<tr>
				<td>1st Try</td>
				<td>
					<input type="text" name="try_1" value="<?php echo $user_word1; ?>" <?php echo $readonly1; ?>>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="try_btn" value="Check">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>

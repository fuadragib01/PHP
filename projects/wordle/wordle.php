<?php
/**
 * word guessing game: wordle
 * main game url: https://www.nytimes.com/games/wordle/index.html
 * final code without any frontend styel. 
 * look is not designed yet.
 */


/**
 * Array of 100 words from where a random word will set for users to play the Guess Word Game
 * @return string   $words[$index]           The word to find
 */
function setWordToGuess() {
	$words = ['about', 'acute', 'after', 'again', 'album', 'alike', 'allow', 'along', 'among', 'angry', 'apple', 'arena', 'aside', 'award', 'baker', 'upper', 'times', 'trade', 'urban', 'topic', 'terry', 'sweet', 'theft', 'thick', 'think', 'thing', 'tries', 'unity', 'billy', 'yield', 'youth', 'calif', 'stuff', 'carry', 'valid', 'strip', 'bench', 'stood', 'tower', 'tough', 'still', 'trust', 'steam', 'stake', 'split', 'where', 'worth', 'loose', 'write', 'value', 'sleep', 'skill', 'being', 'chart', 'trial', 'billy', 'staff', 'blind', 'bound', 'cause', 'blame', 'booth', 'chain', 'civil', 'sight', 'shoot', 'smile', 'throw', 'spare', 'buyer', 'tired', 'funny', 'cable', 'drawn', 'treat', 'waste', 'death', 'worry', 'bread', 'woman', 'queen', 'equal', 'chest', 'cheap', 'sorry', 'guess', 'faith', 'issue', 'judge', 'leave', 'undue', 'river', 'money', 'brown', 'plain', 'broad', 'virus', 'jones', 'occur', 'began',];
	$index = rand( 0, 99 );
	return $words[$index];
}

/**
 * Handle the case of multiple letters in a word
 * @param  array $word_array   Holds the word as an array
 * @param  string $item_to_replace Holds the letter to search in the word array
 * @return array   $word_array            Modified array
 */
function replaceArrayItem( $word_array, $item_to_replace ) {
	$itemNum = count( $word_array );
	for ( $x = 0; $x < $itemNum; $x++ ) {
		if ( $item_to_replace == $word_array[$x] ) {
			$word_array[$x] = '';
			return $word_array;
		}
	}
}

/**
 * Check the letters in the word and assign 3 different colors for 3 different cases
 * @param  array $word_array Main word which to find
 * @param  string $user_word  User's word to check
 * @return array  $result_array          Array of letters and its specific color
 */
function checkTheWord( $word_array, $user_word ) {
	$user_word_array = str_split( $user_word );
	$result_array = array();
	$match = 0;
	for ( $i = 0; $i < 5; $i++ ) {
		if ( ! in_array( $user_word_array[$i], $word_array ) ) {
			array_push( $result_array, [$user_word_array[$i]=>'#b0a6a6'] );
		} elseif ( $user_word_array[$i] == $word_array[$i] ) {
			array_push( $result_array, [$user_word_array[$i]=>'#85f185'] );
			$word_array[$i] = '';
			$match++;
		} else {
			array_push( $result_array, [$user_word_array[$i]=>'#edc318'] );
			$word_array = replaceArrayItem( $word_array, $user_word_array[$i] );
		}
	}
	array_push( $result_array, $match );
	return $result_array;
}

/**
 * Print the letters with it's specific color of user's word
 * @param  array $result_array Resulted array to print
 */
function printWord( $result_array ) {
	for ( $j = 0; $j < 5; $j++ )
	foreach ( $result_array[$j] as $key => $value ) {
		printf( "<span style='background:%s;color: #fff; text-align: center;'>%s</span>", $value, $key );
	}
}

$word = setWordToGuess(); // set a random 5 letters word
if ( isset( $_POST['try_btn'] ) ) {
	$word = $_POST['word'];
}
$word_array = str_split( $word );

$user_word1 = $user_word2 = $user_word3 = $user_word4 = $user_word5 = $user_word6 = '';

$readonly1 = $readonly2 = $readonly3 = $readonly4 = $readonly5 = $readonly6 = '';

if ( isset( $_POST['try_btn'] ) ) {
	if ( isset( $_POST['try_1'] ) && ! empty( $_POST['try_1'] ) ) {
		$user_word1       = strtolower( $_POST['try_1'] );

		$result_array = checkTheWord( $word_array, $user_word1 );
		printWord( $result_array );
		$readonly1 = 'readonly';
		if ( 5 === $result_array[5] ) {
			$readonly2 = $readonly3 = $readonly4 = $readonly5 = $readonly6 = 'readonly';
		}
		echo "<br>";
	}
	if ( isset( $_POST['try_2'] ) && ! empty( $_POST['try_2'] ) ) {
		$user_word2       = strtolower( $_POST['try_2'] );

		$result_array = checkTheWord( $word_array, $user_word2 );
		printWord( $result_array );
		$readonly2 = 'readonly';
		if (  5 === $result_array[5] ) {
			$readonly1 = $readonly3 = $readonly4 = $readonly5 = $readonly6 = 'readonly';
		}
		echo "<br>";
	}
	if ( isset( $_POST['try_3'] ) && ! empty( $_POST['try_3'] ) ) {
		$user_word3       = strtolower( $_POST['try_3'] );

		$result_array = checkTheWord( $word_array, $user_word3 );
		printWord( $result_array );
		$readonly3 = 'readonly';
		if ( 5 === $result_array[5] ) {
			$readonly2 = $readonly1 = $readonly4 = $readonly5 = $readonly6 = 'readonly';
		}
		echo "<br>";
	}
	if ( isset( $_POST['try_4'] ) && ! empty( $_POST['try_4'] ) ) {
		$user_word4       = strtolower( $_POST['try_4'] );

		$result_array = checkTheWord( $word_array, $user_word4 );
		printWord( $result_array );
		$readonly4 = 'readonly';
		if ( 5 === $result_array[5] ) {
			$readonly2 = $readonly3 = $readonly1 = $readonly5 = $readonly6 = 'readonly';
		}
		echo "<br>";
	}
	if ( isset( $_POST['try_5'] ) && ! empty( $_POST['try_5'] ) ) {
		$user_word5       = strtolower( $_POST['try_5'] );

		$result_array = checkTheWord( $word_array, $user_word5 );
		printWord( $result_array );
		$readonly5 = 'readonly';
		if ( 5 === $result_array[5] ) {
			$readonly2 = $readonly3 = $readonly4 = $readonly1 = $readonly6 = 'readonly';
		}
		echo "<br>";
	}
	if ( isset( $_POST['try_6'] ) && ! empty( $_POST['try_6'] ) ) {
		$user_word6       = strtolower( $_POST['try_6'] );

		$result_array = checkTheWord( $word_array, $user_word6 );
		printWord( $result_array );
		$readonly6 = 'readonly';
		if ( 5 === $result_array[5] ) {
			$readonly2 = $readonly3 = $readonly4 = $readonly5 = $readonly1 = 'readonly';
		}
		echo "<br>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		span {
		    display: inline-block;
		    padding: 5px 10px;
		    margin-right: 5px;
		    margin-bottom: 5px;
		}
	</style>
</head>
<body>
	<form method="post" action="">
		<input type="hidden" name="word" value="<?php echo $word; ?>">
		<table>
			<tr>
				<td>1st Try</td>
				<td>
					<input type="text" maxlength="5" minlength="5" name="try_1" value="<?php echo $user_word1; ?>" <?php echo $readonly1; ?>>
				</td>
			</tr>
			<tr>
				<td>2nd Try</td>
				<td>
					<input type="text" maxlength="5" minlength="5" name="try_2" value="<?php echo $user_word2; ?>" <?php echo $readonly2; ?>>
				</td>
			</tr>
			<tr>
				<td>3rd Try</td>
				<td>
					<input type="text" maxlength="5" minlength="5" name="try_3" value="<?php echo $user_word3; ?>" <?php echo $readonly3; ?>>
				</td>
			</tr>
			<tr>
				<td>4th Try</td>
				<td>
					<input type="text" maxlength="5" minlength="5" name="try_4" value="<?php echo $user_word4; ?>" <?php echo $readonly4; ?>>
				</td>
			</tr>
			<tr>
				<td>5th Try</td>
				<td>
					<input type="text" maxlength="5" minlength="5" name="try_5" value="<?php echo $user_word5; ?>" <?php echo $readonly5; ?>>
				</td>
			</tr>
			<tr>
				<td>6th Try</td>
				<td>
					<input type="text" maxlength="5" minlength="5" name="try_6" value="<?php echo $user_word6; ?>" <?php echo $readonly6; ?>>
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

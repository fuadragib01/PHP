<?php 
/*
 * This code will remove an item from an array, if the item exist in the array.
 * This solution is case sensitive.
 * This can be solveed for case insensitivity too.
 */

/*
 * A function to remove an item from an array and return the modified array.
 * @param Mixed[] $monthArray
 * @param Mixed $itemToRemove
 * @return Mixed[] $monthArray
 */

function removeArrayItem( $monthArray, $itemToRemove ) {
	$itemNum = count( $monthArray );
	for ( $x = 0; $x < $itemNum; $x++ ) {
		if ( $itemToRemove == $monthArray[$x] ) {
			array_splice( $monthArray, $x, 1 ); // Will remove the item
			return $monthArray;
		}
	}
}

$monthArray = array( 'jan', 'feb', 'march', 'april', 'may' ); // Array of items

$itemToRemove = 'june'; // Item to remove
$isInArray = in_array( $itemToRemove, $monthArray ); // To check whether the item is in the array or not

if ( ! $isInArray ) {
	printf( "Unable to remove %s as it is not in the array.", $itemToRemove ); // Message when item to be removed is not in the array
} else {
	$newMonthArray = removeArrayItem( $monthArray, $itemToRemove ); // Function call to remove item from array
	echo "<pre>";
	print_r( $newMonthArray ); // Displaying the remaining array items after removing an item
	echo "</pre>";
}

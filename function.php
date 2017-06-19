<?php
// Original Input Data String
$o_str = 
"[orderId] => 212939129
[orderNumber] => INV10001
[salesTax] => 1.00
[amount] => 21.00
[terminal] => 5
[currency] => 1
[type] => purchase
[avsStreet] => 123 Road
[avsZip] => A1A 2B2
[customerCode] => CST1001
[cardId] => 18951828182
[cardHolderName] => John Smith
[cardNumber] => 5454545454545454
[cardExpiry] => 1025
[cardCVV] => 100";

// Masks sensitive data in a string, replacing the characters with "*"s.
function maskData($string) {
	// Initializes new "Masked" string
	$n_str = "";
	
	// Parses the Input String into an array of strings, splitting it at every new line.
	// The addslashes (ie. "/") are used to allow for the use of the escape characters:
	// \r\n, \n, and \r; all different ways for expressing a new line.
	// The vertical line (ie. "|") acts as an "or" in the pattern.
	$str_arr = preg_split("/\r\n|\n|\r/", $string);
	
	// Loops through each item in the string array as a string "key-value" entry.
	foreach($str_arr as $str_ent) {
		// Splits the key-value entry (ex. "[orderId] => 212939129") at the arrow, leaving the key and the value.
		$content = explode("=>", $str_ent);
		
		// Trims any leftover whitespace from the key and value and assigns each to a variable.
		$key = trim($content[0]); // Key String (ex. [orderId])
		$val = trim($content[1]); // Value String (ex. 212939129)
		
		if($key === "[cardNumber]" || $key === "[cardExpiry]" || $key === "[cardCVV]" || $key === "[cardId]") {
			$val = str_repeat("*", strlen($val)); // Replaces every character in the value string with a "*"
		}
		
		// Adds the updated key-value to the new "Masked" String with formatting to match the original String.
		$n_str .= $key . " => " . $val . "\n";
	}
	
	return $n_str;
}


// IGNORE - USED FOR DEMO PURPOSES ONLY:
echo "Original Input:<br><br>";
echo nl2br($o_str); // Note: nl2br converts each new line in the string ("\n") into a HTML break line (<br>).

$n_str = maskData($o_str);

echo "<br><br>New Input:<br><br>";
echo nl2br($n_str);
?>
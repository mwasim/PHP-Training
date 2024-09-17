<!DOCTYPE html>
<html lang="en-US">
<body>
<?php
echo '<h2>PHP Strings</h2>';
echo '<p>Strings in PHP are surrounded by either double quotation marks, or single quotation marks.</p>';
echo "Hello world!<br/>";
echo 'Hello World<br/>';

echo '<h3>String Length</h3>';
echo '<p>The PHP strlen() function returns the length of a string.</p>';
$str = "Hello World";
echo "Length of the string $str is: " . strlen($str);

echo '<h3>Word Count</h3>';
echo '<p>The PHP str_word_count() function counts the number of words in a string.</p>';
echo "Word count of string $str is: " . str_word_count($str);

echo '<h3>Search For Text Within a String</h3>';
echo '<p>The PHP strpos() function searches for a specific text within a string.<br/>
If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.</p>';
echo "Search for text \"World\" in $str : " . strpos($str, 'World');

echo '<h2>PHP - Modify Strings</h2>';
echo '<h3>Upper Case</h3>';
echo '<p>The strtoupper() function returns the string in upper case:</p>';
echo "The upper case form of $str is: " . strtoupper($str);

echo '<h3>Lower Case</h3>';
echo '<p>The strtolower() function returns the string in lower case:</p>';
echo "The upper case form of $str is: " . strtolower($str);

echo '<h3>Replace String</h3>';
echo '<p>The PHP str_replace() function replaces some characters with some other characters in a string.</p>';
echo "Replacing \"World\" with \"Dolly\" in $str : " . str_replace("World", "Dolly", $str);

echo '<h3>Reverse a String</h3>';
echo '<p>The PHP strrev() function reverses a string.</p>';
echo "Reversed form of $str is: " . strrev($str);

echo '<h3>Reverse a String</h3>';
echo '<p>The PHP strrev() function reverses a string.</p>';
echo "Reversed form of $str is: " . strrev($str);


?>
</body>
</html>

<!DOCTYPE html>
<html lang="en-US">
<body>

<?php
/*
 * PHP echo and print Statements
 * 1. The differences are small: echo has no return value
 * while print has a return value of 1 so it can be used in expressions.
 * 2. cho can take multiple parameters (although such usage is rare)
 * while print can take one argument.
 * 3. echo is marginally faster than print.
 * */
echo '<h2>The PHP echo Statement</h2>';
echo "Hello<br/>";
//same as:
echo("Hello");

echo "<p><strong>PHP is fun!</strong></p>";
echo "Hello world!<br/>";
echo "This ", "string ", "was ", "made of ", "multiple parameters<br/>";

/*
 * When using double quotes, variables can be inserted to the string as in the example above.
 * When using single quotes, variables have to be inserted using the . operator, like this:
 * */
$firstName = "John";
$lastName = "Doe";
//Single quote using . operator to concatenate
echo '<p><strong>Using Single Quotes and . operator:</strong> Hello ' . $firstName . ' ' . $lastName . '</p>';
echo "<p><strong>Using Double Quotes:</strong> Hello $firstName $lastName</p>";

echo '<h2>The PHP print Statement</h2>';
print "Hello<br/>";
//same as:
print("Hello");

print "<p><strong>PHP is fun!</strong></p>";
print "Hello world!<br/>";

print '<p><strong>Using Single Quotes and . operator:</strong> Hello ' . $firstName . ' ' . $lastName . '</p>';
print "<p><strong>Using Double Quotes:</strong> Hello $firstName $lastName</p>";
?>

</body>
</html>

<!DOCTYPE html>
<html lang="en-US">
<body>
<?php
echo '<h2>Getting the Data Type</h2>';
echo '<p>You can get the data type of any object by using the var_dump() function.</p>';
$number = 5;
var_dump($number);

echo '<h3>PHP String</h3>';
$str1 = "Hello World! - Double Quotes String";
$str2 = 'Hello World! - Single Quotes String';

var_dump($str1);
echo '<br/>';
var_dump($str2);

echo '<h3>PHP Integer</h3>';
echo 'Rules for Integers<br/>';
echo '<ul>
<li>An integer must have at least one digit</li>
<li>An integer must not have a decimal point</li>
<li>An integer can be either positive or negative</li>
<li>Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation</li>
</ul>';

$num2 = 59234;
var_dump($num2);

echo '<h3>PHP Float</h3>';
echo '<p>A float (floating point number) is a number with a decimal point or a number in exponential form.</p>';

$floatNum = 10.365;
var_dump($floatNum);

echo '<h3>PHP Boolean</h3>';
echo '<p>A Boolean represents two possible states: TRUE or FALSE.</p>';

$trueOrFalse = true;
var_dump($trueOrFalse);


echo '<h3>PHP Array</h3>';
echo '<p>An array stores multiple values in one single variable.</p>';

$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);

echo '<h3>PHP Object</h3>';
echo '<p>A class is a template for objects, and an object is an instance of a class.</p>';

class Car{
    private $color;
    private $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    public function message(): string
    {
        return 'My car is a ' . $this->color . " " . $this->model . '!';
    }
}

$myCar = new Car('red', model: 'Volvo');
var_dump($myCar->message());

echo '<h3>PHP NULL Value</h3>';
echo '<p>Null is a special data type which can have only one value: NULL.
If a variable is created without a value, it is automatically assigned a value of NULL.</p>';

$nulVar = null;
var_dump($nulVar);

echo '<h3>Change Data Type</h3>';
echo '<p>If you assign a string to the integer variable, the type will change to a string:</p>';

$varChange = 5;
var_dump($varChange);
$varChange = "Hello World!";
var_dump($varChange);

echo '<p>If you want to change the data type of an existing variable, but not by changing the value, you can use casting.</p>';
$varChange = 10;
var_dump($varChange);
$varChange = (string)$varChange;
var_dump($varChange);

?>
</body>
</html>

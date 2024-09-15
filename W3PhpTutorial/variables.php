<!DOCTYPE html>
<html lang="en-US">
<body>

<?php
$number = 5;
$name = 'John';

echo '<h2>Simple Variables</h2>';
echo $number;
echo '<br/>';
echo $name;
echo '<br/>';
echo "Person's name: $name, number is the queue: $number";
echo '<br/>';
//adding numbers
echo '<h2>Adding Numbers Using Variables</h2>';
$firstNumber = 5;
$secondNumber = 4;
$sum = $firstNumber + $secondNumber;

echo "The sum of $firstNumber + $secondNumber is $sum";
echo '<br/>';
echo '<h2>var_dump Usage</h2>';
//To get the data type of a variable, use the var_dump() function.
var_dump($sum);
var_dump(5);
var_dump(true);
var_dump($name);
var_dump([1,2,3]);
var_dump(3.14);
var_dump(NULL);

/*
 * PHP Variables Scope
 * - Local
 * - Global
 * - Static
 * */
echo '<h2>Variables Scope (Global, Local, Static)</h2>';
//A variable declared outside a function has a GLOBAL SCOPE
$number2 = 10; //global scope

function showValue(): void
{
    //using global variable inside the function will generate an error
    //Undefined variable $number2
    //echo "<p>Variable number2 inside this function is $number2</p>";

    //A variable declared within a function has a LOCAL SCOPE
    $localNumber = 6;
    echo "<p>Variable localNumber inside this function is $localNumber</p>";

        /*
         * PHP The global Keyword
         * The global keyword is used to access a global variable from within a function.
         * */
    global $number2;
    echo "<p>Global Variable number2 (using global keyword) inside this function is $number2</p>";

    /*
     * PHP also stores all global variables in an array called $GLOBALS[index].
     * The index holds the name of the variable. This array is also accessible
     * from within functions and can be used to update global variables directly.
     * */
    $GLOBALS["number2"] = 8;
    echo "<p>Global Variable number2 (using global keyword) UPDATED inside this function is $number2</p>";

}
showValue();

echo "Variable's value outside of the function is $number2";
echo '<br/>';
/*
* PHP The static Keyword
* Normally, when a function is completed/executed, all of its variables
* are deleted. However, sometimes we want a local variable NOT to be deleted.
* We need it for a further job.
 * This variable is still local to the function but retains it's previous value.
* */
function incrementStaticValue(): void
{
    static $staticNumber = 0;
    echo "<p>Static variables value inside the function is: $staticNumber</p>";
    $staticNumber++;
}
incrementStaticValue();
incrementStaticValue();
incrementStaticValue();


?>

</body>
</html>
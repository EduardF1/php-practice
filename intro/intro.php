<?php
// import file
require_once "util/echo-with-br.php";

//////////////////////////////////////////// echo vs print /////////////////////////////////////////////////////////////
/*
 * - both are language constructs rather than functions
 * - echo is preferred as it is faster (execution) and shorter
 */
echo 'Hello World.<br>It\'s a lovely day';

//////////////////////////////////////////////// Variables  ////////////////////////////////////////////////////////////
$name = 'Eduard';
$age = 23;
$true = true;
$dec = 5.5;

// "" work as template strings in JS.
echo_with_br('My name is $name and I am $age years old.');
//echo 'My name is '.$name.'and I am '.$age.' years old';

/////////////////////////////////////////////// Conditionals ///////////////////////////////////////////////////////////
$password = 'Eduard';

if ($password == 'Eduard') {
    echo_with_br('This is the correct password');
} else {
    echo_with_br('This is the wrong the password');
}

$age = 21;
if ($age >= 21) {
    echo_with_br('You\'re old enough to drink in the USA and the UK.');
} elseif ($age >= 18) {
    echo_with_br('You\'re old enough to drink in the UK.');
} else {
    echo_with_br('You\'re not old enough to drink in the USA.');
}

///////////////////////////////////////////// Arithmetic ///////////////////////////////////////////////////////////////
/*
 * - all the typical rules apply (-, *, +, %, /, ++x, x++, --x, x--)
 * - precedence used, use parentheses
 */
$num1 = 10;
$num2 = 2;

$result = $num1 + $num2;
echo_with_br($result);

///////////////////////////////////////////// Comparison ///////////////////////////////////////////////////////////////
/*
 * - all the typical rules (==, <=, >=, <, >, != AND <> which is equivalent to !=)
 */
$name = 'Eduard';
$age = 23;

if ($age <> 18) {
    echo_with_br('TRUE.');
} else {
    echo_with_br('NOT TRUE.');
}

$status = false;

if ($age >= 21) {
    $status = true;
}

if ($status == true) {
    echo_with_br('You\'re allowed');
} elseif ($status == false) {
    echo_with_br('Sorry, not allowed');
}

//////////////////////////////////////////// Triple equals /////////////////////////////////////////////////////////////
/*
 * - same as in JS (asserting on value and type)
 */
$number = 10;
$number2 = '10';

if ($number > 50) {
    echo_with_br('Greater than 50');
} else {
    echo_with_br('Not Greater than 50');
}

if ($number === $number2) {
    echo_with_br('Equal.');
} else {
    echo_with_br('Not equal.');
}

//////////////////////////////////////////// Logical Operators /////////////////////////////////////////////////////////
/*
 * - Same as typical rules (&&, ||, !)
 * 1. Number entered
 * 2. Upper limit 100
 * 3. Lower limit 1
 * 4. Between 1 and 100.
 */

$num = 50;

if (1 <= $num && $num <= 100) {
    echo_with_br('The number is fine');
} else {
    echo_with_br('The number must be between 1 and 100, inclusive.');
}

$name = 'Corry';
$age = 23;

if ($age >= 18 && ($name === 'Eduard' || $name === 'Edfis')) {
    echo_with_br('Hey, chap.');
} else {
    echo_with_br('Take a break, lad.');
}

///////////////////////////////////////////// Switch ///////////////////////////////////////////////////////////////////

$nummer = 10;

switch ($number) {
    case 10:
        echo_with_br('Ti');
        break;
    case 9:
        echo_with_br('Ni');
        break;
    case 8:
        echo_with_br('Otte');
        break;
    default:
        echo_with_br('Ukendt nummer');
        break;
}

///////////////////////////////////////////// Arrays ///////////////////////////////////////////////////////////////////

$names = array('Eduard' => 23, 'Toma' => 29, 'Marina' => 22);
foreach ($names as $key => $value) {
    echo_with_br($key . ' ' . $value);
}

//////////////////////////////////////// Multi-Dimensional Arrays //////////////////////////////////////////////////////
$names = array(
    array('Name' => 'Eduard', 'Age' => 23, 'Hair' => 'Brown', 'Food' => array('Pizza', 'Lasagna')),
    array('Name' => 'Toma', 'Age' => 29, 'Hair' => 'Brown'),
    array('Name' => 'Marina', 'Age' => 22, 'Hair' => 'Red')
);

echo_with_br($names[0]['Food'][0]);
echo_with_br($names[0]['Food'][1]);

//////////////////////////////////////// While Loops   /////////////////////////////////////////////////////////////////
$num = 0;

while ($num <= 10) {
    echo_with_br($num++);
}

$num2 = 10;

while ($num2 > 0) {
    echo_with_br($num2--);
}

// Alternative
$num2 = 10;

while ($num2 > 0) :
    echo_with_br($num2--);
endwhile;

//////////////////////////////////////// Do While Loops  ///////////////////////////////////////////////////////////////

$num = 1;

do {
    $num++;
    echo_with_br($num . ' ' . 'S-S-S');
} while ($num != 11);

///////////////////////////////////////////// For Loops  ///////////////////////////////////////////////////////////////

for ($n = 1; $n <= 10; $n++) {
    echo_with_br('This ' . $n);
}

///////////////////////////////////////////// For Each Loops  //////////////////////////////////////////////////////////

$names = array('Scorch' => 22, 'Sev' => 49, 'Fixer' => 50);
$number0 = 0;
foreach ($names as $key => $value) {
    ++$number0;
    echo_with_br('Name ' . $number0 . ' is ' . $key . ' and the age is ' . $value);
}

///////////////////////////////////////////// Functions (Basic) ////////////////////////////////////////////////////////

function name()
{
    echo_with_br('Eduard');
}

name();

function name1($name)
{
    echo_with_br($name);
}

name1('Jonathan');

function name2($name)
{
    return 'My name is ' . $name . '.';
}

$returnValue = name2('Klaus');
echo_with_br($returnValue);

function name3($name, $age)
{
    return 'My name is ' . $name . ' and my age is ' . $age . '.';
}

$returnValue2 = name3('Klaus', 40);
echo_with_br($returnValue2);

function add($num1, $num2)
{
    return $num1 + $num2;
}

echo_with_br(add(10, 23.3));

/////////////////////////////////////// Functions (With undefined parameters) //////////////////////////////////////////
// func_get_args(); // returns an array of arguments passed into the function add2

function add2()
{
    $total = 0;
    foreach (func_get_args() as $arg) {
        $total += (int)$arg;
    }
    return $total;
}

echo_with_br(add2(5, 10, 2));

function append($initial)
{
    $result = func_get_arg(0);
    foreach (func_get_args() as $key => $value) {
        if ($key >= 1) {
            $result .= ' ' . $value;
        }
    }
    return $result;
}

echo_with_br(append('Eduard', 'Fischer'));

/////////////////////////////////////// Formatting numbers /////////////////////////////////////////////////////////////

$num = 25123567.1234567;
echo_with_br('I have ' . number_format($num, 2, ',', '.') . '&pound;');

///////////////////////////////////////////////        $_GET        ////////////////////////////////////////////////////

echo '<form action="intro.php" method="get">
    Name:<br><input type="text" name="name"><br>
    Age:<br><input type="text" name="age" size="5"><br><br>
    <input type="hidden" name="submitted" value="true">
    <input type="submit" value="Submit"></form>';

if (isset($_GET['name']) && isset($_GET['age'])) {

    if (!empty($_GET['name']) && !empty($_GET['age'])) {
        // test sample: name=Eduard&age=23
        $name = $_GET['name'];
        $age = $_GET['age'];

        echo 'I am ' . $name . ' and i am ' . $age . ' years old';
    } else {
        echo 'Nothing entered.';
    }
}

///////////////////////////////////////////////        $_POST        ///////////////////////////////////////////////////
echo '<form action="intro.php" method="post">
    Please enter your password:<br>
    <input type="password" name="password"><br>
    <input type="submit" value="Submit"></form>';

$password = 'password';
if (isset($_POST['password']) && !empty($_POST['password'])) {
    $_POST['password'] == $password ? echo_with_br('Correct password!') : echo_with_br('Wrong password!');
} else {
    echo_with_br('Something went wrong.');
}
/////////////////////////////////////////        Embedding PHP within HTML       ///////////////////////////////////////
?>
	<br>
<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $sentence = "";
    if (!empty($name)) {
        $sentence = $name . ' woke up and did a bloody god job';
    } else {
        echo 'Please enter a name.';
    }
}
?>
	<html>
		<head>

		</head>
		<body>
			<strong><?php echo 'Eduard' ?></strong>
			<form action="intro.php" method="post">
				Type your name: <input type="text" name="name" value="<?php echo $name; ?>"><br>
				<input type="submit" value="Submit">
			</form>
			<textarea rows="7" cols="25"><?php if (!empty($sentence)) {
                    echo $sentence;
                } ?></textarea>
		</body>
	</html>
	<br>
<?php
/////////////////////////////////////////               More on Arrays           ///////////////////////////////////////
$levels = array(1, 2, 3);
var_dump($levels); // get information about the variable
echo '<br>';
print_r($levels);
echo '<br>';

$GLOBALS['levels2'] = array(
    1 => array(
        'name' => 'Level 1',
        'desc' => 'This is the first level'
    ),
    2 => array(
        'name' => 'Level 2',
        'desc' => 'You\'ve made it to the second level'
    ),
    3 => array(
        'name' => 'Level 3',
        'desc' => 'You\'ve made it to the last level'
    )
);

function level_data($level, $data){
    if(array_key_exists($level, $GLOBALS['levels2']) === true){
        return $GLOBALS['levels2'][$level][$data];
    }else{
        return false;
    }
}


//echo level_data(1, 'desc');

echo '<pre>',
print_r($GLOBALS, true),
'</pre>';

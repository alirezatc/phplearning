Learning PHP

<!-- php is not case sensitive, but variables are case sensitive -->

<?php
  echo "hello world!";
?>

comments:
// single line
# single line
/*
multi line
*/

* php does not have a command for declaring a variable

echo // output the value

* PHP is a Loosely Typed Language
* PHP 7, has type declaration
* you can enable strict type

//------------
php Variables 
• global: outside function, and can only be accessed outside a function
• local: inside function
• static: when we want a local variable not to be deleted. static $y = 4;

using a global variable:

  <?php
    $x = 4;
    function myFunc() {
      global $x;
      echo "<p>The value of the x is $x</p>";
    }
  ?>

Or:
  $GLOBAL['x'];

static variable:
  <?php
  function myTest() {
    static $x = 0;
    echo $x;
    $x++;
  }

  myTest(); //0
  myTest(); //1
  myTest(); //2
  ?>

//-----
echo Vs. print
echo // faster, multiple values,
print // has a return value of 1

php Data Types:
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource

var_dump($x); //returns type of variable

//-----------
Procedural programming -> perform operations on data
OOP: create objects that have data and function

//-----------
// class
<?php
class Fruit {
  public $name;
  public $color;

  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$apple->set_name('Apple');
echo $apple->get_name();
?>

//-----------
<!-- constructor -->
<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit("Apple", "red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
?>



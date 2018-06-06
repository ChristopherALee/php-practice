<html>
  <head>
    <title>Class and Object Methods</title>
  </head>
  <body>
    <p>
      <?php
        class Person {
          public $isAlive = true;
          
          function __construct($name) {
              $this->name = $name;
          }
          
          public function dance() {
            return "I'm dancing!";
          }
        }
        
        $me = new Person("Shane");
        if (is_a($me, "Person")) {
          echo "I'm a person, ";
        }
        if (property_exists($me, "name")) {
          echo "I have a name, ";
        }
        if (method_exists($me, "dance")) {
          echo "and I know how to dance!";
        }
      ?>
    </p>
  </body>
</html>



// Inheritance
<html>
  <head>
    <title>The Shape of Things to Come</title>
  </head>
  <body>
    <p>
      <?php
        class Shape {
          public $hasSides = true;
        }
        
        class Square extends Shape {
        
        }
        
        $square = new Square();
        // Add your code below!
        if (property_exists($square, "hasSides")) {
          echo "I have sides!";
        }
      ?>
    </p>
  </body>
</html>



// Overriding parent methods
<html>
  <head>
    <title>Override!</title>
  </head>
  <body>
    <p>
      <?php
        class Vehicle {
          // 'final' disables any methods from being overwritten in children inheritance. Bicycle class' honk method will throw an error saying it can't be overwritten.
          final public function honk() {
            return "HONK HONK!";
          }
        }

        // Add your code below!
        class Bicycle extends Vehicle {
          public function honk() {
            return "Beep beep!";
          }
        }

        $bike = new Bicycle();
        echo $bike->honk();
        
      ?>
    </p>
  </body>
</html>



// constant variables and how to access them (::) (scope resolution operator)
// '::' can only be used globally (not instances)
<html>
  <head>
    <title>Scope it Out!</title>
  </head>
  <body>
    <p>
      <?php
      class Person {
          
      }
      class Ninja extends Person {
        // Add your code here...
        const stealth = "MAXIMUM";
      }
      // ...and here!
      echo Ninja::stealth;
      
      ?>
    </p>
  </body>
</html>



// 'Static' keyword
// if 'static' is used, can no longer use '->' on the variable or function. '->' is reserved for instances and those variables or functions that don't have 'static';
<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
        class King {
          // Modify the code on line 10...
          public static function proclaim() {
            echo "A kingly proclamation!";
          }
        }
        // ...and call the method below!
        echo King::proclaim();
      ?>
    </p>
  </body>
</html>



// Final
<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
        class Person {
          public static function say() {
            echo "Here are my thoughts! ";
          }
        }

        class Blogger extends Person {
          const cats = 50;
        }

        Blogger::say();
        echo Blogger::cats;
      ?>
    </p>
  </body>
</html>
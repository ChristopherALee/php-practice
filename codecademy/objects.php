<!DOCTYPE html>
<html>
    <head>
      <title> Introduction to Object-Oriented Programming </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
    </head>
	<body>
      <p>
      <?php
        // The code below creates the class
        class Person {
            // Creating some properties (variables tied to an object)
            public $isAlive = true;
            public $firstname;
            public $lastname;
            public $age;
            
            // Assigning the values
            public function __construct($firstname, $lastname, $age) {
              $this->firstname = $firstname;
              $this->lastname = $lastname;
              $this->age = $age;
            }
            
            // Creating a method (function tied to an object)
            public function greet() {
              return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)";
            }
          }
          
        // Creating a new person called "boring 12345", who is 12345 years old ;-)
        $teacher = new Person('boring', '12345', 12345);
        $student = new Person('Gamby', 'Lee', 3);
        
        // Printing out, what the greet method returns
        echo $teacher->greet(); 
        echo $student->greet();
        ?>
        </p>
    </body>
</html>



<!DOCTYPE html>
<html>
	<head>
	  <title> Practice makes perfect! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <!-- Your code here -->
        <?php
          class Dog {
            public $numLegs = 4;
            
            public function __construct($name) {
              $this->name = $name;
            }
            
            public function bark() {
                return "Woof!";
            }
            
            public function greet() {
                return "Hi, my name is " . $this->name;
            }
          }
          
          $dog1 = new Dog("Barker");
          $dog2 = new Dog("Amigo");
          
          echo $dog1->bark();
          echo $dog2->greet();
        ?>
      </p>
    </body>
</html>



<!DOCTYPE html>
<html>
    <head>
	  <title> Challenge Time! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <?php
          // Your code here
          class Cat {
            public $isAlive = true;
            public $numLegs = 4;

            public function __construct($name) {
              $this->name = $name;
            }

            public function meow() {
              return "Meow meow";
            }
          }

          $cat = new Cat("CodeCat");
          echo $cat->meow();
        ?>
      </p>
    </body>
</html>
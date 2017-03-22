<?php
  require_once "src/Allergies.php";

  class AllergiesTest extends PHPUnit_Framework_TestCase {
    function testAllergies () {
      //Arrange
      $test_allergies = new Allergies;
      $input = 255;
      //Act
      $result = $test_allergies->allergiesCheck($input);
      //Assert
      $this->assertEquals("cats pollen chocolate tomatoes strawberries shellfish peanut eggs", $result);
    }
    function testAllergiesEggs () {
      //Arrange
      $test_allergies = new Allergies;
      $input = 1;
      //Act
      $result = $test_allergies->allergiesCheck($input);
      //Assert
      $this->assertEquals("eggs", $result);
    }
    function testAllergiesPeanut () {
      //Arrange
      $test_allergies = new Allergies;
      $input = 3;
      //Act
      $result = $test_allergies->allergiesCheck($input);
      //Assert
      $this->assertEquals("peanut eggs", $result);
    }
    function testAllergiesShell () {
      //Arrange
      $test_allergies = new Allergies;
      $input = 7;
      //Act
      $result = $test_allergies->allergiesCheck($input);
      //Assert
      $this->assertEquals("shellfish peanut eggs", $result);
    }
    function testAllergiesStraw () {
      //Arrange
      $test_allergies = new Allergies;
      $input = 9;
      //Act
      $result = $test_allergies->allergiesCheck($input);
      //Assert
      $this->assertEquals("strawberries eggs", $result);
    }
  }

?>

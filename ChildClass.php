<?php
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {

		protected $name;
		protected $age;
		protected $gender;
		protected $breed;
		protected $meow;
		protected $characteristic;

		public function __construct($n, $a, $g, $b, $m, $c)
		{
			parent::__construct($n, $a, $g);
			$this->breed = $b;
			$this->meow = $m;
			$this->characteristic = $c;
		}
		public function setName($newName)
		{
      $this->name = $newName;
			echo "I've changed my name to " . $this->name . "! ";
    }
		public function setAge($newAge)
		{
      $this->age = $newAge;
			echo "I have grown up and I am now ". $this->age . " years old! ";
    }
		public function setChar($newChar)
		{
			$this->characteristic = $newChar;
			echo "Did you know " . $this->characteristic . "? ";
		}
		public function __toString()
		{
			return parent::__toString() . "I am a " . $this->breed . " kind of cat. " . $this->breed . $this->characteristic . ". " . $this->meow . "!<br>";
		}

	}

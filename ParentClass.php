<?php
	// This is the file for the parent class

	class ParentClass {

		protected $name;
		protected $age;
		protected $gender;
		protected $clonedObject;

		public function __construct($n, $a, $g)
		{
			$this->name = $n;
			$this->age = $a;
			$this->gender = $g;
			$this->clonedObject = new stdClass();
		}

		public function getName()
		{
      return $this->name;
    }

		public function getAge()
		{
      return $this->age;
    }

		public function __clone()
		{
			$this->clonedObject = clone $this->clonedObject;
		}

		public function __toString()
		{
			return "My name is " . $this->getName() . " and I am a " . $this->age . " year old " . $this->gender . " cat. ";
		}

	}

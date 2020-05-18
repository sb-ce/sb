<?php
class Core
{
    private $name;
    private $gender;
    public $age;
    private $department = 'Core';

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    public function getGender()
    {
        return $this->gender;
    }

    public function setDepartment($dep)
    {
        $this->department = $dep;
    }
    public function getDepartment()
    {
        return $this->department;
    }
}


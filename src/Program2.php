<?php

class Program2
{
    private $name;
    private $age;
    private $favecolor;

    public function NameSet($name)
    {
        $this->name = $name;
    }

    public function AgeSet($age)
    {
        $this->age = $age;
    }

    public function ColorSet($favecolor)
    {
        $this->favecolor = $favecolor;
    }

    public function TogetherSet($name,$age,$favecolor)
    {
        $this->name = $name;
        $this->age = $age;
        $this->favecolor = $favecolor;

    }

    public function NameGet()
    {
        if(!ctype_alpha($this->name))
        {
            throw new \InvalidArgumentException('Input must be Alphabet');
        }
        return $this->name;
    }

    public function AgeGet()
    {
        if(!is_numeric($this->age))
        {
            throw new \InvalidArgumentException('Input must be Alphabet');
        }
        return $this->age;
    }
      
    public function ColorGet()
    {
        if(!ctype_alpha($this->favecolor))
        {
            throw new \InvalidArgumentException('Input must be Alphabet');
        }
        return $this->favecolor;
    }

    public function TogetherGet()
    {
        return $this->name;
        return $this->age;
        return $this->favecolor;
    }

}
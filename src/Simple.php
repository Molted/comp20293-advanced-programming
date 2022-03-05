<?php
class Simple
{
    private $dividend;
    
    public function __construct($dividend)
    {
        $this->dividend = $dividend;
    }

    public function modulus($divisor)
    {
        if($divisor > $this->dividend) // - throw an invalid exception if the given divisor is greater than the dividend
        {
            throw new \InvalidArgumentException("Divisor should not greater than dividend");
        }
        else if(!is_numeric($divisor)) // - should only accept numbers
        {
            throw new \InvalidArgumentException("Divisor is not a number");
        }

        return $this->dividend % $divisor;
    }
}
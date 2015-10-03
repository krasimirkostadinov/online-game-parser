<?php

namespace problem2;

abstract class AEntity
{
    protected $age;

    public function Sleep(){
        print "zzzzzz";
    }

    public function Eat(){
        print "yummy";
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param int $age
     * @return AEntity
     */
    public function setAge($age)
    {
        if(!empty($age) && is_int($age)){
            $this->age = (int)$age;
        }
        return $this;
    }



}
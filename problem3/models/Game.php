<?php

namespace problem3\models;

class Game
{

    private $basic_image_dir = 'http://cacheimg.majesticslots.com/images/www/games/minipods/';

    private $category_name;
    private $game_id;
    private $foreign_id;
    private $game_code;
    private $machine_id;
    private $hands;
    private $denominations;
    private $game_name;

    /**
     * @param array $game_data
     * @param string $category_name
     */
    public function __construct($game_data = [], $category_name = ''){
        /**
         * create object from JSON parsed file
         */
        if(!empty($game_data) && is_array($game_data)){
            //init object from JSON array data
            foreach($game_data as $key => $val) {
                if(property_exists(__CLASS__, $key)) {
                    $this->$key = $val;
                }
            }
            //set category name
            if(!empty($category_name)){
                $this->category_name = $category_name;
            }
        }
    }

    /**
     * Magic method for automatic getter for values
     * @param $property
     * @return mixed
     */
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    /**
     * Magic method for automatic set values if found such propertie exist
     * @param $property
     * @param $value
     * @return $this
     */
    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
        return $this;
    }

    /**
     * Convert to lower letters game name, escape non numberic symbols and append "-minipod.jpg" for thumbnail
     * @return string
     */
    public function getPictureUrl(){
        if (strpos($this->game_name, '+') == false) {
            $clean_name = preg_replace("/[^A-Za-z0-9]/", '', $this->game_name);
        }else{
            //if found + concatenation, i should take only second part of Game Name, for valid URL image
            $name_explode = explode('+', $this->game_name);
            $clean_name = preg_replace("/[^A-Za-z0-9]/", '', $name_explode[1]);
        }
        $picture_url = $this->basic_image_dir . strtolower($clean_name) .'-minipod.jpg';

        return $picture_url;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category_name;
    }

    /**
     * @param mixed $category_name
     * @return Game
     */
    public function setCategory($category_name)
    {
        $this->category_name = $category_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGameId()
    {
        return $this->game_id;
    }

    /**
     * @param mixed $game_id
     * @return Game
     */
    public function setGameId($game_id)
    {
        $this->game_id = $game_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getForeignId()
    {
        return $this->foreign_id;
    }

    /**
     * @param mixed $foreign_id
     * @return Game
     */
    public function setForeignId($foreign_id)
    {
        $this->foreign_id = $foreign_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGameCode()
    {
        return $this->game_code;
    }

    /**
     * @param mixed $game_code
     * @return Game
     */
    public function setGameCode($game_code)
    {
        $this->game_code = $game_code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMachineId()
    {
        return $this->machine_id;
    }

    /**
     * @param mixed $machine_id
     * @return Game
     */
    public function setMachineId($machine_id)
    {
        $this->machine_id = $machine_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHands()
    {
        return $this->hands;
    }

    /**
     * @param mixed $hands
     * @return Game
     */
    public function setHands($hands)
    {
        $this->hands = $hands;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDenominations()
    {
        return $this->denominations;
    }

    /**
     * @param mixed $denominations
     * @return Game
     */
    public function setDenominations($denominations)
    {
        $this->denominations = $denominations;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGameName()
    {
        return $this->game_name;
    }

    /**
     * @param mixed $game_name
     * @return Game
     */
    public function setGameName($game_name)
    {
        $this->game_name = $game_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getBasicImageDir()
    {
        return $this->basic_image_dir;
    }

    /**
     * @param string $basic_image_dir
     * @return Game
     */
    public function setBasicImageDir($basic_image_dir)
    {
        $this->basic_image_dir = $basic_image_dir;
        return $this;
    }

}
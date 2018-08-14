<?php

class Bicycle
{

    public $brand;
    public $model;
    public $year;
    public $category;
    public $color;
    public $description = "New bicycle";
    public $genders;
    public $condition_id;
    public static $instance_count = 0;
    protected static $wheels = 2;
    private $weight_kg;
    private $weight_lbs;


    public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];

    public const GENDERS = ['Mens', 'Womens', 'Unisex'];

    public const CONDITION = [1 => 'Beat up', 2 => 'Decent', 3 => 'GOOD', 4 => 'Great', 5 => 'Like New'];

    public function __construct()
    {
        self::$instance_count++;
    }

    public function condition($condition_id)
    {
        $this->condition_id = $condition_id;

        return CONDITION[1];
    }

    public function weight_kg()
    {
        return $this->weight_kg;
    }

    public function set_weight_kg($weight_kg)
    {
        $this->weight_kg = $weight_kg;
    }

    public function weight_lbs()
    {
        return $this->weight_lbs;
    }

    public function set_weight_lbs($weight_lbs)
    {
        $this->$weight_lbs = $weight_lbs;
    }

    public function convert_weight($type, $weight)
    {
        $str = $type[0];

        if ($str == 'k') {
            return $str ." ". $weight . " kg equals " . $this->weight_lbs = $weight * 2.20462 . " lbs <br/>";
        }
        if ($str == 'l') {
            return $str ." ". $weight . " lbs equals " . $this->weight_kg = $weight / 2.20462 . " kg <br/>";
        } else {
            return $str . "You must to provide mass type and weight<br/>";

        }

    }

}


?>
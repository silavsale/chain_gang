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

}


?>
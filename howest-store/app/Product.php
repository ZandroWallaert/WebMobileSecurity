<?php

namespace App;

class Product
{

    public $code;
    public $name;
    public $description;
    public $price;

    function __construct($code, $name, $description, $price)
    {
        $this->code = $code;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    static function all()
    {
        $all = array();

        $all["p101"] = new Product(101, "Apple iPhone 6S (32GB)", "4.7-Inch Retina HD display with 3D touch
        A9 chip with 64-bit desktop-class architecture.
        All new 12MP iSight Camera with live Photos.
        Touch ID", 299);

        $all["p102"] = new Product(102, "Samsung Galaxy S9 (64 GB)", "Super Speed Dual Pixel Camera
        Infinity Display: edge-to-edge immersive screen, enhancing your entertainment experience
        IP68 rating: withstands splashes, spills, and rain so it can take a dip, worry-free", 599);

        $all["p201"] = new Product(201, "LG Electronics OLED55C8P 55-Inch 4K Ultra HD Smart OLED TV",
            "LG OLED TV with AI (Artificial Intelligence) ThinQ has the Google Assistant built in, so you can control compatible smart home devices using just your voice through the LG Magic Remote. Create a center for your smart home and beyond. Plus it works with Amazon Alexa devices (sold separately)
        The α9 Intelligent Processor inside the LG OLED TV with AI ThinQ is the most powerful ever from LG. Developed exclusively for LG OLED TV, the new α9 processor noticeably enhances sharpness and depth while delivering vastly more accurate colors, for the ultimate in picture quality", 1299);

        return $all;
    }

    static function find($code)
    {
        $prods = Product::all();

        if (array_key_exists("p{$code}", $prods)) {
            return $prods["p{$code}"];
        } else {
            return null;
        }
    }

}
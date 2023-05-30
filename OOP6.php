<?php
    class Product
    {
        public $name;

        public $price;

        public $currency;
        
        public $category;

        public function __construct($price, $name = "een fruit", $currency = "&euro", $category = "een category")
        {
            $this->name = ucfirst($name);
            $this->price = $price;
            $this->currency = $currency;
            $this->category = strtoupper($category);
        }

        public function formatPrice()
        {
            return number_format($this->price, decimals:2);
        }
    }

    $fruit1 = new Product(price:40, currency:"$", name:"fruit 1");





    var_dump($frisdrank1);




    
    //$fruit2 = new Product(name:"fruit 2", price:10, category:"category 2");
    //$fruit3 = new Product(name:"fruit 3", price:20, category:"category 3");
    //$fruit4 = new Product(name:"fruit 4", price:30, category:"category 4");



    //echo $frisdrank1->formatPrice()."<br>";
    //echo $frisdrank1->name."<br>";
    //echo $frisdrank1->price."<br>";
    //echo $fruit1->category. "<br><br>";



    //echo $frisdrank2->formatPrice()."<br>";
    //echo $frisdrank2->name. "<br>";
    //echo $frisdrank2->price."<br>";
    //echo $fruit2->category. "<br><br>";



    //echo $frisdrank3->formatPrice()."<br>";
    //echo $frisdrank3->name. "<br><br>";
    //echo $frisdrank3->price."<br>";
    //echo $fruit3->category. "<br><br>";


    //$fruit1->setName(name:"fruit_1");

    //echo $frisdrank1->name. "<br><br>";


    //var_dump($frisdrank2);

    //var_dump($frisdrank3);

    //var_dump($frisdrank4);
?>
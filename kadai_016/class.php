<?php
class Food {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price() {
        echo "価格は {$this->price} 円です。<br>";
    }
}

class Animal {
    public $name;
    public $height;
    public $weight;

    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height() {
        echo "身長は {$this->height} cmです。<br>";
    }
}

$food = new Food("りんご", 150);
$animal = new Animal("キリン", 500, 900);

echo "<pre>";
print_r($food);
print_r($animal);
echo "</pre>";

$food->show_price();
$animal->show_height();
?>
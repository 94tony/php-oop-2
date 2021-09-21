<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


class Shop{
    public $site = "www.howisyourstyle.com";
    public $products = [];
    public $shopTitle = "exlsuive";

    public function addProduct(Product $product){
        $this->products[] = $product;
    }

    public function getProducts(){
        return $this->products;
    }
}



class Product {
    public $title;
    public $description;
    public $price;
    

    public function __construct($titolo, $descrizione, $prezzo ){
        $this->title = $titolo;
        $this->description = $descrizione;
        $this->price = $prezzo;
        
    }
}

class User{
    protected $name;
    protected $surname;
    protected $email;
    protected $age;
    protected $creditCard ;
     
    protected $ProductsShopped = [];
    

    public function __construct($nome, $cognome, $email,  $età, $numeroCarta ){
        $this->name = $nome;
        $this->surname = $cognome;
        $this->email = $email;
        $this->age = $età;
        $this->creditCard = $numeroCarta;
        
    }

    public function addProductsShopped(Product $product){
        $this->ProductsShopped[] = $product;
    }
}



$shop = new Shop();

$firstObject = new Product("t-shirt ocean", "coton 100%", 30, );
$secondObject = new Product('nike airmax', 'for running ', 120,);
$thirdObject  = new product('jacket', 'only elegance', 150, );


$shop->addProduct($firstObject);
$shop->addProduct($secondObject);
$shop->addProduct($thirdObject);

var_dump($shop->getProducts());



$user = new User('Matteo', 'ghandi','gmail@', '25', '53345', );
$user->addProductsShopped($firstObject);
$user->addProductsShopped($secondObject);

var_dump($user);

?>




</body>
</html>
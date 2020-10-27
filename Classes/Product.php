<?php 
class Product
{
    private $id;
    private $name;
    private $price;
    private $discount;
    
    public function __construct($id ,$name,$price,$discount){
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;
        $this->discount=$discount;
    }

    //Getter And Setter
    public function getId(){
       return $this->id;
    }
    public function setId($id)
    {
        if(is_int($id))
            if($id > 0)
              $this->id=$id;
            else
            throw new Exception("Product Id must be > 0");
        else     
        throw new Exception("Product Id must be integer number");
    }
    public function getName()
    {
             return $this->name;
    }
    public function setName($name)
    {
        if(is_string($name))
            $this->name=$name;
        else     
        throw new Exception("Product name must be string");
     }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){

        if(is_numeric($price))
            if($price > 0)
            $this->price=$price;
            else
            throw new Exception("Product Price must be > 0");
        else     
        throw new Exception("Product Price must be  number");
     }

    public function getDiscount(){
        return $this->discount;
    }

    public function setDiscount($discount){
        if(is_int($discount))
            if( $discount > 0 AND $discount<100)
            $this->discount=$discount;
            else
            throw new Exception("Product discount must be > 0 and < 100");
        else     
        throw new Exception("Product discount must be integer number");
        
     }
     // calculate the price of product after the discount if found
     public function calcDiscount()
     {
         return $this->getPrice()*$this->getDiscount()/100;

     }
     
     // add product to cart
    public function addToCart(Cart $cart ,$quantity){
        return $cart->addProduct($this , $quantity);
    }

}

?> 
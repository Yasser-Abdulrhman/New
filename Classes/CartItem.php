<?php 
class CartItem
{
    //private Product $product;
    private  $product;
    private $quantity;
    public function __construct(Product $product,$quantity)
    {
        $this->product= $product;
        $this->quantity=$quantity;

    }
    public function getProduct()
    {
        return $this->product;
    }
    public function setProduct($product)
    {
         $this->product=$product;

    }

    public function getQuantity()
    {
      return $this->quantity;

    }
    public function setQuantity($quantity)
    {
        if($quantity>0)
         $this->quantity=$quantity;
        else 
         throw new Exception('Product Quantity Must be > 0');
    }
    
   // increase quantity of product if it added before
    public function increaseQuantity($amount=1)
    {
        $this->quantity+=$amount;
    }



}

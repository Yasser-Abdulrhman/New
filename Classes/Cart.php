<?php 
class Cart
{
    private  $items = [];

    public function findCartItem($productId)
    {
        if($productId >0)
        {
            foreach($this->items as $item)
            {
                if($item->getProduct()->getId()===$productId)
                {
                    return $item->getProduct();
                }
            }
            return null;
        }
        else 
        throw new Exception('Product id Must be > 0');

    }

    public function addProduct(Product $product , $quantity)
    {
        if($quantity > 0)
        {
            $cartItem=$this->findCartItem($product->getId());
            if($cartItem === null){
                $cartItem=new CartItem($product,0);
                $this->items[]=$cartItem;
            }
            $cartItem->increaseQuantity($quantity);   
            return $cartItem;
        }
        else 
        throw new Exception('Quantity Must be > 0');
    }

  

    public function getTotalQuantity()
    {
        $sum=0;
        foreach($this->items as $item)
        {
             $sum+=$item->getQuantity();
        }
        return $sum;
    }

   //Total price before taxes and discount
    public function getTotalPrice()
    {
        $sum=0;
        foreach($this->items as $item)
        {
             $sum+=($item->getProduct()->getPrice()*$item->getQuantity());
        }
        return $sum;
    }

        //Set Offer To jacket buy Two shirt get 50% discount in jacket

    public function setOffer()
    {
        foreach($this->items as $item)
        {
            if($item->getProduct()->getName()=="T_Shirt" AND $item->getQuantity()>1)
            {
                foreach($this->items as $item)
                {
                    if($item->getProduct()->getName()=="jacket")
                    {
                        $item->getProduct()->setDiscount(50);
                        return $item->getProduct()->getDiscount();
                    }

                }
            }
        }

    }

    //get the product which has discount and set offer
    public function TotalDiscount()
    {
        $discounts= array();
        foreach($this->items as $item)
        {
            if($item->getProduct()->getDiscount()> 0 )
            {
                array_push($discounts,array('name'=>$item->getProduct()->getName(),'valueDiscount'=>$item->getProduct()->getDiscount(),'discount'=>$item->getProduct()->calcDiscount()*$item->getQuantity()));
            }
        }
        return $discounts;
    }

   //claculate the Taxes 
    public function Taxes()
    {
      return ($this->getTotalPrice()*14/100);
    }

    //Total price after taxes and discount
     public function totalPriceAfterTaxes()
        {
            return $this->getTotalPrice()+$this->Taxes();
        }
        
        //final Price
    public function finalPrice()
     {
         $finalPrice=$this->totalPriceAfterTaxes();
         foreach($this->items as $item)
         {
            if($item->getProduct()->getDiscount()> 0 )
            {
                $finalPrice-=$item->getProduct()->calcDiscount()*$item->getQuantity();
            }

         }
         return $finalPrice;
     }


}

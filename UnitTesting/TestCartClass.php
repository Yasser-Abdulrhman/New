<?php 
require_once "../Classes/Cart.php";
require_once "../Classes/CartItem.php";
require_once "../Classes/Product.php";

############### Begin Test Class Cart ###############

   ##### Test addProduct Function #######
    function testAddProduct(Product $product , $quantity, $result)
    {
        try 
        {
            $cart=new Cart();
     
            if($cart->addProduct($product,$quantity) == $result){
                echo "Success <br>";
            }
            else 
            echo "The Return Value Not CartItem <br>";
        }
        catch(Exception $e)
        {
                echo "Success But :". $e->getMessage()."<br>";
        }
      
    }
    $pants=new Product(2,'Pants' ,14.99 , 0);
    $cartItem = new CartItem($pants,1);
    echo "Test addProduct Function  :<br>";
    testAddProduct($pants,1,$cartItem);
    testAddProduct($pants,0,$cartItem);
    testAddProduct($pants,-1,$cartItem);

  ######################### End Test addProduct Function #####################3


   ################ Start Test findCartItem Function ###############################3
     function testfindCartItem($id , $result)
     {
         try
         {
            $cart=new Cart();
            if($cart->findCartItem($id) === $result || $cart->findCartItem($id) ===null  )
            {
                echo "Succes <br>";
            }
            else
            {
                echo "Failed ";
            }
        }
        catch(Exception $e)
        {
                echo "Success But :". $e->getMessage()."<br>";
        }
     }

     $t_shirt=new Product(1,'T_Shirt' , 10.99 ,0);
     $jacket=new Product(3,'jacket' ,19.99 , 0);
     $shoes=new Product(4,'shoes' ,24.99 , 10 );
     $cart=new Cart();
     $cartItem2=$cart->addProduct($t_shirt,2);
     $cartItem3=$cart->addProduct($jacket,1);
     $cartItem4=$cart->addProduct($shoes,1);
     
     echo "Test findCartItem Function  :<br>";
       testfindCartItem(1, $t_shirt);
       testfindCartItem(2, $pants);
       testfindCartItem(3, $jacket);
       testfindCartItem(4, $shoes);
       testfindCartItem(-1, $shoes);
 ############################ End Test findCartItem Function ###############################

########################### Begin Test getTotalPrice Function ###############################
function testgetTotalPrice($result)
{
     $t_shirt=new Product(1,'T_Shirt' , 10.99 ,0);
     $jacket=new Product(3,'jacket' ,19.99 , 0);
     $shoes=new Product(4,'shoes' ,24.99 , 10 );
     $cart=new Cart();
     $cartItem2=$cart->addProduct($t_shirt,2);
     $cartItem3=$cart->addProduct($jacket,1);
     $cartItem4=$cart->addProduct($shoes,1);

    if($cart->getTotalPrice() === $result)
    echo "Success <br>";
    else
    echo "Failed ".$cart->getTotalPrice() ;

}

$result=($t_shirt->getPrice()*$cartItem2->getQuantity())+($jacket->getPrice()*$cartItem3->getQuantity())+($shoes->getPrice()*$cartItem4->getQuantity());
echo "Test getTotalPrice Function  :<br>";
testgetTotalPrice($result);

########################### End Test getTotalPrice Function ###############################

########################### Begin Test getTotalQuantity Function ###############################

function testgetTotalQuantity($result)
{
    $t_shirt=new Product(1,'T_Shirt' , 10.99 ,0);
    $jacket=new Product(3,'jacket' ,19.99 , 0);
    $shoes=new Product(4,'shoes' ,24.99 , 10 );
    $cart=new Cart();
    $cartItem2=$cart->addProduct($t_shirt,2);
    $cartItem3=$cart->addProduct($jacket,1);
    $cartItem4=$cart->addProduct($shoes,1);
    if($cart->getTotalQuantity() === $result)
    echo "Success <br>";
    else
    echo "Failed " ;
}

$result=$cartItem2->getQuantity()+$cartItem3->getQuantity()+$cartItem4->getQuantity();
echo "Test getTotalPrice Function  :<br>";
testgetTotalQuantity($result);

########################### End Test getTotalQuantity Function ###############################


########################### Begin Test setOffer Function ###############################
   function testsetOffer($result)
   {
    $t_shirt=new Product(1,'T_Shirt' , 10.99 ,0);
    $jacket=new Product(3,'jacket' ,19.99 , 0);
    $shoes=new Product(4,'shoes' ,24.99 , 10 );
    $cart=new Cart();
    $cartItem2=$cart->addProduct($t_shirt,2);
    $cartItem3=$cart->addProduct($jacket,1);
    $cartItem4=$cart->addProduct($shoes,1);
    if($cart->setOffer() === $result)
    echo "Success <br>";
    else
    echo "Failed " ;
   }
    echo "Test getTotalPrice Function  :<br>";
    testsetOffer(50);
########################### End Test setOffer Function ###############################


########################### Begin Test getTotalDiscount Function ###############################
function testTotalDiscount()
{
 $t_shirt=new Product(1,'T_Shirt' , 10.99 ,0);
 $jacket=new Product(3,'jacket' ,19.99 , 0);
 $shoes=new Product(4,'shoes' ,24.99 , 10 );
 $cart=new Cart();
 $cartItem2=$cart->addProduct($t_shirt,1);
 $cartItem3=$cart->addProduct($jacket,1);
 //$cartItem4=$cart->addProduct($shoes,1);
 if($cart->TotalDiscount())
 echo "Success Get Discount <br>";
 else
 echo "Success without Discount <br> " ;
}
 echo "Test TotalDiscount Function  :<br>";
 testTotalDiscount();

########################### End Test getTotalDiscount Function ###############################


########################### Begin Test Taxes Function ###############################

function testTaxes($result)
{
    $t_shirt=new Product(1,'T_Shirt' , 10.99 ,0);
    $jacket=new Product(3,'jacket' ,19.99 , 0);
    $shoes=new Product(4,'shoes' ,24.99 , 10 );
    $cart=new Cart();
    $cartItem2=$cart->addProduct($t_shirt,2);
    $cartItem3=$cart->addProduct($jacket,1);
    $cartItem4=$cart->addProduct($shoes,1);
    if($cart->Taxes() === $result)
        echo "Success <br> ";
    else
        echo "Failed <br> ";

}

$result=(($t_shirt->getPrice()*$cartItem2->getQuantity())+($jacket->getPrice()*$cartItem3->getQuantity())+($shoes->getPrice()*$cartItem4->getQuantity()))*14/100;
echo "Test Taxes Function  :<br>";
testTaxes($result);

########################### End Test Taxes Function ###############################



########################### Begin Test totalPriceAfterTaxes Function ###############################
function testtotalPriceAfterTaxes($result)
{
    $t_shirt=new Product(1,'T_Shirt' , 10.99 ,0);
    $jacket=new Product(3,'jacket' ,19.99 , 0);
    $shoes=new Product(4,'shoes' ,24.99 , 10 );
    $cart=new Cart();
    $cartItem2=$cart->addProduct($t_shirt,2);
    $cartItem3=$cart->addProduct($jacket,1);
    $cartItem4=$cart->addProduct($shoes,1);

    if($cart->totalPriceAfterTaxes() === $result)
        echo "Success <br> ";
    else
        echo "Failed <br> ".$cart->totalPriceAfterTaxes();
}
$result=($t_shirt->getPrice()*$cartItem2->getQuantity())+($jacket->getPrice()*$cartItem3->getQuantity())+($shoes->getPrice()*$cartItem4->getQuantity())+((($t_shirt->getPrice()*$cartItem2->getQuantity())+($jacket->getPrice()*$cartItem3->getQuantity())+($shoes->getPrice()*$cartItem4->getQuantity()))*14/100);
echo "Test totalPriceAfterTaxes Function  :<br>";
testtotalPriceAfterTaxes($result);

########################### End Test totalPriceAfterTaxes Function ###############################

########################### Begin Test finalPrice Function ###############################
function testfinalPrice($result)
{
    $t_shirt=new Product(1,'T_Shirt' , 10.99 ,0);
    $jacket=new Product(3,'jacket' ,19.99 , 0);
    $shoes=new Product(4,'shoes' ,24.99 , 10 );
    $cart=new Cart();
    $cartItem2=$cart->addProduct($t_shirt,2);
    $cartItem3=$cart->addProduct($jacket,1);
    $cartItem4=$cart->addProduct($shoes,1);
    $r=$cart->setOffer();
    if( $cart->finalPrice() === $result)
        echo "Success <br>";
    else
        echo "Failed <br>";
}

//$result=($t_shirt->getPrice()*$cartItem2->getQuantity())+($jacket->getPrice()*$cartItem3->getQuantity())+($shoes->getPrice()*$cartItem4->getQuantity())+((($t_shirt->getPrice()*$cartItem2->getQuantity())+($jacket->getPrice()*$cartItem3->getQuantity())+($shoes->getPrice()*$cartItem4->getQuantity()))*14/100);
//echo "Test finalPrice Function  :<br> ";
//testfinalPrice(63.8404);

########################### End Test finalPrice Function ###############################

############### End Test Class Cart ###############





?>
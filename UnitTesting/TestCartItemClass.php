<?php 
require_once "../Classes/Cart.php";
require_once "../Classes/CartItem.php";
require_once "../Classes/Product.php";

################# Begin test class CartITem ########################

################# Begin test getProduct function ########################
function testgetProduct($cartitem ,$result)
{
    if($cartitem->getProduct()==$result)
    echo "Success <br>";
    else 
    echo "Failed <br>";
}
echo "Test getProduct Function  :<br>";
$t_shirt=new Product(1,'T_Shirt' , 10.99 ,0);
$cart=new Cart();
$cartItem=$cart->addProduct($t_shirt,2);
testgetProduct($cartItem , $t_shirt);
################# End test getProduct function ########################

################# Begin test setProduct function ########################
function testsetProduct($cartItem ,$result)
{
    try
    {
        $cartItem->setProduct($cartItem->getProduct());
        if($cartItem->getProduct()==$result)
        echo "Success <br>";
        else 
        echo "Failed <br>";
    }
    catch(Exception $e)
    {
        echo "Succes But ".$e->getMessage()."<br>";
    }
}
echo "Test setProduct Function  :<br>";
$t_shirt=new Product(1,'T_Shirt',10.99 ,0);
$cartItem=new CartItem($t_shirt,2);
testsetProduct($cartItem , $t_shirt);

################# End test setProduct function ########################

################# Begin test getQuantity function ########################
function testgetQuantity($cartitem ,$result)
{
    if($cartitem->getQuantity()==$result)
    echo "Success <br>";
    else 
    echo "Failed <br>";
}
echo "Test getQuantity Function  :<br>";
$t_shirt=new Product(1,'T_Shirt' , 10.99 ,0);
//$cart=new Cart();
//$cartItem=$cart->addProduct($t_shirt,2);
$cartItem=new CartItem($t_shirt,2);
testgetQuantity($cartItem , 2);
################# End test getQuantity function ########################


################# Begin test setQuantity function ########################
function testsetQuantity($cartItem ,$result)
{
    try
    {
        $cartItem->setQuantity($cartItem->getQuantity());
        if($cartItem->getQuantity()==$result)
        echo "Success <br>";
        else 
        echo "Failed <br>";
    }
    catch(Exception $e)
    {
        echo "Succes But ".$e->getMessage()."<br>";
    }
}
echo "Test setQuantity Function  :<br>";
$t_shirt=new Product(1,'T_Shirt',10.99 ,0);
$cartItem=new CartItem($t_shirt,2);
testsetQuantity($cartItem , 2);
$cartItem=new CartItem($t_shirt,-3);
testsetQuantity($cartItem , 2);
################# End test setProduct function ########################

################# Begin test increaseQuantity function ########################

function testincreaseQuantity($cartItem , $result)
{
    $cartItem->increaseQuantity();
    if($cartItem->getQuantity()==$result)
      echo "Success <br>";
    else 
     echo "Failed <br>";
}


echo "Test increaseQuantity Function  :<br>";
$t_shirt=new Product(1,'T_Shirt',10.99 ,0);
$cartItem=new CartItem($t_shirt,2);
testincreaseQuantity($cartItem , 3);

################# End test increaseQuantity function ########################
################# End Test Class CartITem ##################################### ######





?>
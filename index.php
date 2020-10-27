<?php 

require_once "Classes/Cart.php";
require_once "Classes/CartItem.php";
require_once "Classes/Product.php";



$t_shirt=new Product(1,'T_Shirt' , 10.99 ,0);
$pants=new Product(2,'Pants' ,14.99 , 0);
$jacket=new Product(3,'jacket' ,19.99 , 0);
$shoes=new Product(4,'shoes' ,24.99 , 10 );

$cart=new Cart();

//$cartItem1=$cart->addProduct($pants,1);
$cartItem=$cart->addProduct($t_shirt,2);
$cartItem=$cart->addProduct($jacket,1);
$cartItem=$cart->addProduct($shoes,1);


//$cartItem1=$t_shirt->addToCart($cart ,2);

//$cartItem3=$shoes->addToCart($cart ,1);
//$cartItem2=$jacket->addToCart($cart ,1);
//$cartItem4=$pants->addToCart($cart ,1);


//$cartItem1->increaseQuantity();
//$cartItem1->increaseQuantity();



echo "Number of items".': ';
echo $cart->getTotalQuantity().'<br> ';



echo "Total Price before Taxes".': ';
echo '$'. $cart->getTotalPrice().' <br> ';

echo "  14% Taxes".': ';
echo '$'.$cart->Taxes().' <br> ';

$set=$cart->setOffer();

echo "Discounts : ".' <br>';
foreach($cart->TotalDiscount() as $discounts){
echo  $discounts['valueDiscount'].'% Off ' .$discounts['name']. ':  -$'.$discounts['discount']. ' <br> ';
}


echo "Final Price".': ';
echo '$'.$cart->finalPrice().' <br> ';


//foreach($cart->test() as $item){ echo $item->getProduct()->getDiscount().'<br>';}



 




?>


<?php

require_once "../Classes/Cart.php";
require_once "../Classes/CartItem.php";
require_once "../Classes/Product.php";

######################### Begin Test Class Product #################################
############### Begin Test setId Function ###############
function testsetId($product,$result)
{
    try
    {
        if($product->setId($product->getId()))
         echo "Success <br>";
        else
         echo "falid <br>";
    }
    catch(Exception $e)
    {
      echo "Success but ".$e->getMessage() ."<br>";
    }
}
echo "Test setId Function  :<br>";
$t_shirt=new Product('mm','T_Shirt' , 10.99 ,0);
testsetId($t_shirt,1);
$t_shirt=new Product(-1,'T_Shirt' , 10.99 ,0);
testsetId($t_shirt,1);
$t_shirt=new Product(1,'T_Shirt' , 10.99 ,0);
testgetId($t_shirt,1);


############### End Test setId Function ###############

############## Begin Test getId Function ###############
function testgetId(Product $product, $result)
{
    try
    {
        
        if($product->getId()==$result)
        echo "Success <br>";
        else
        echo "falid <br>";
    }
    catch(Exception $e)
    {
      echo "Success but ".$e->getMessage() ."<br>";
    }

}
echo "Test getId Function  :<br>";
$t_shirt=new Product(1,'T_Shirt' , 10.99 ,0);
testgetId($t_shirt,1);
############### End Test getId Function ###############
############### Begin Test setName Function ###############
function testsetName($product,$result)
{
    try
    {
      $product->setName($product->getName());
        if($product->getName()==$result)
         echo "Success <br>";
        else
         echo "falid <br>";
    }
    catch(Exception $e)
    {
      echo "Success but ".$e->getMessage() ."<br>";
    }
}
echo "Test setName Function  :<br>";
$t_shirt=new Product(1,'T_Shirt' , 10.99 ,0);
testsetName($t_shirt,'T_Shirt');
$t_shirt=new Product(1, -5 , 10.99 ,0);
testsetName($t_shirt,'T_Shirt');

############### End Test setName Function ###############


############### Begin Test getName Function ###############
function testgetName(Product $product, $result)
{
    try
    {
        
        if($product->getName()==$result)
        echo "Success <br>";
        else
        echo "falid <br>";
    }
    catch(Exception $e)
    {
      echo "Success but ".$e->getMessage() ."<br>";
    }

}
echo "Test getName Function  :<br>";
$t_shirt=new Product(1,'T_Shirt' , 10.99 ,0);
testgetName($t_shirt,'T_Shirt');


############### End Test getName Function ###############

############### Begin Test setDiscount Function ###############
function testsetDiscount($product,$result)
{
    try
    {
      $product->setDiscount($product->getDiscount());
        if($product->getDiscount()==$result)
         echo "Success <br>";
        else
         echo "falid <br>";
    }
    catch(Exception $e)
    {
      echo "Success but ".$e->getMessage() ."<br>";
    }
}
echo "Test setDiscount Function  :<br>";
$t_shirt=new Product(1,'T_Shirt' , 10.99 ,-5);
testsetDiscount($t_shirt,0);
$t_shirt=new Product(1,'T_Shirt' , 10.99 ,100);
testsetDiscount($t_shirt,0);
############### End Test setDiscount Function ###############

############## Begin Test getDiscount Function ###############
function testgetDiscount(Product $product, $result)
{
    try
    {
        
        if($product->getDiscount()==$result)
        echo "Success <br>";
        else
        echo "falid <br>";
    }
    catch(Exception $e)
    {
      echo "Success but ".$e->getMessage() ."<br>";
    }

}
echo "Test getDiscount Function  :<br>";
$t_shirt=new Product(1,'T_Shirt' , 10.99 ,0);
testgetId($t_shirt,1);


############### End Test getDiscount Function ###############

############### Begin Test setPrice Function ###############
function testsetPrice($product,$result)
{
    try
    {
      $product->setPrice($product->getPrice());
        if($product->getPrice()==$result)
         echo "Success <br>";
        else
         echo "falid <br>";
    }
    catch(Exception $e)
    {
      echo "Success but ".$e->getMessage() ."<br>";
    }
}
echo "Test setPrice Function  :<br>";
$t_shirt=new Product(1,'T_Shirt', 10.99 ,0);
testsetPrice($t_shirt,10.99);
$t_shirt=new Product(1,'T_Shirt', 'fgdgd' ,0);
testsetPrice($t_shirt,10.99);
$t_shirt=new Product(1,'T_Shirt', 0 ,0);
testsetPrice($t_shirt,10.99);
############### End Test setPrice Function ###############

############### Begin Test getPrice Function ###############
function testgetPrice(Product $product, $result)
{
    try
    {
        
        if($product->getPrice()==$result)
        echo "Success <br>";
        else
        echo "falid <br>";
    }
    catch(Exception $e)
    {
      echo "Success but ".$e->getMessage() ."<br>";
    }

}
echo "Test getPrice Function  :<br>";
$t_shirt=new Product(1,'T_Shirt' , 10.99 ,0);
testgetPrice($t_shirt,10.99);


############### End Test getPrice Function ###############



############### Begin Test calcDiscount Function ###############
function testcalcDiscount($product, $result)
{
  try
  {
      if($product->calcDiscount()==$result)
       echo "Success <br>";
      else
       echo "falid <br>".$product->calcDiscount();
  }
  catch(Exception $e)
  {
    echo "Success but ".$e->getMessage() ."<br>";
  }
}
echo "Test calcDiscount Function  :<br>";
$t_shirt=new Product(1,'T_Shirt', 10.99 ,0);
testcalcDiscount($t_shirt,0);
############### End Test Class Product ###############


?>
# Task
## What this program do?
This program can price a cart of products, accept multiple products, combine offers, and display a total detailed bill in different currencies and help user in online shopping buy add his favorite product into cart and show him the bill for the products which he added it to the cart.
## I make three claases 
#### 1.Product Class
This class has four properties id , name , price , discount , has getter and setter function for this properties and has function for calculating the price after discount if found.
#### 2.Cart Class
This class has array to save items in which user added it in the cart , has many function like 
+ Function for checking if the product you will add it into the cart, you added it before or not, this function.
+ Function for adding product to the cart.
+	Function for getting total quantity of products in the cart. 
+ Function for getting total price before taxes.
+ Function for setting new offer for product.
+	Function for getting products which has discount if has found.
+	Function for calculating the taxes of products which has found in the cart.
+ Function for getting total price after calculating taxes.
+	Function for getting the final price.
#### 3.Cart item Class
This class for make operation in product which user added them in cart, has two properties product is object from class product , quantity.
+ It has getter and setter function for these properties.
+ It has function for increase quantity of product if user added it before.
## I made unit testing for three classes
+ In this testing I made for any function, function to test it.
+	To run testing classes file run every one of them in browser. 
## How it works?
+	Run by open index page in browser during open apache server.
+	If you want to change the data , go to index page and change details of product and change the product you want to add them in cart.  





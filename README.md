# Online-Shopping-Website
### Objective - 
1.) To develop a dynamic website in which consumer will be able to view information about products as well as of seller. 
2.) Seller will be able to upload the image and information related to product he wants to sell. 
3.) Seller will be able to update his profile or delete his/her account or the products.

It has 4 sections: 
 1.) Customer registration form 
 2.) Customer login form 
 3.) Shop 
 4.) Sell 

## Customer registration form: 
Registration page is for the seller who wants to upload the information of their product. 
## Customer login form:
This page is for registered customer who wants to upload their product, update their details and delete their product or account. 
## Shop: 
This page is for anyone who visits this website. This page will contain all the products up for sell as well as their information and user contact details. 
## Sell:
In order to sell any product, first the user has to login then only this page will be visible.This page will ask the user for all the information regarding the product such as barcode, brand, price etc.

### Use Case Diagram 
![1](https://user-images.githubusercontent.com/34748358/36067276-e9932510-0e87-11e8-9278-60604ab39f6e.png)

### Sequence of registration form
![2](https://user-images.githubusercontent.com/34748358/36067326-ac9773d6-0e88-11e8-8015-c83516490d38.png)

### Sequence of login form
![3](https://user-images.githubusercontent.com/34748358/36067325-ac8b47b4-0e88-11e8-8bd4-49fd8922d197.png)

### Homepage:
This is the front page of the website through which all the other pages can be accessed.
###  Registration:
This is for seller who want to sell their commodities.If the seller is new then he/she should give his/her information so that buyer can contact him as well as get an ID and password to login.  
#### Basic flow- 
This page request for user name, user address, user email, user mobile number, and then he will be asked to make his id and password valid for this site only.
#### Alternative Flow- 
If user is already registered then no need to register. He can directly login.            

PRE-CONDITION:- User should enter into the home page.              
POST-CONDITION:- User is successfully registered into the website and will be taken back to the homepage.

### Login:
The user having proper ID and password will be able to login and upload their product information. The login option present on the website is mainly for those customer who wishes to sell their product and have already registered with the site. This will take the customer to their page which will contain the options of selling the product, update the contact information, delete the product, delete the account. 
FLOW OF EVENTS:- 
1.) Basic flow-This use case will allow the registered user to login in their own page to sell, update their contact info, delete product and delete account.
2.) Alternative flow- If user entered the wrong id or password then he/she will be again prompted to enter the id and password.
PRE-CONDITION:-User should be registered with the site. 
POST-CONDITION:-The user will be given the option to logout from his page.

### Shop:
This case is for buyers.Buyers will be able view all the product information given by seller. The module used is the menu item which will take the user to the shop page where user will be able to view all the products up for sale. On this page is another menu which categories the product into clothes, shoes, jewellery, bags and watches, thus making it simpler for the buyer to view the product according to the category. Information of any product can be viewed by simply clicking on that product image. It will also contain the contact detail of the seller under whom the product is being sold. 
FLOW OF EVENTS:- 
1.) Basic flow- This use case will allows the user to view the product details as well as the seller details under which the product is being sold.
2.) Alternative flow- If no product is up for sale then page will appear empty except the menu bar.
PRE-CONDITION:- User should enter the homepage. 
POST-CONDITION:- User can select any of the index menu on the top of the page and can go anywhere in the site. 

### Sell:
This case is for sellers who wishes to upload their product for buyer to view and buy. This page will be visible only after the customer has logged in the website. 
### Modify Contact details: 
This case is for the customer who have logged in the website and want to update their current contact information. 
### Delete Products: 
This case is for logged in customers who wants to remove their post from the website. 
### Delete Account: 
This case is for registered customers who wishes to delete their account from this site. 

## Identified actors 
### Buyer:
Buyers are those who will be able to view product details and then if he wishes to buy the product then he can contact the seller on the information already attached with the product. 
### Seller:
Sellers are those who will upload their product for buyer to view and buy.Seller will first have to become a member of this site by registering himself then he can login into the website and upload information regarding his commodities. Seller will also be able to update his/her contact information, delete the uploaded product or delete the account itself.

## Images
### 1.) Homepage
![homepage](https://user-images.githubusercontent.com/34748358/36067324-ac7e6814-0e88-11e8-884c-317761fa9293.png)
### 2.) Login page
![login](https://user-images.githubusercontent.com/34748358/36067323-ac751afc-0e88-11e8-8611-7b0a46802d4f.png)
### 3.) Shopping page
![shop3](https://user-images.githubusercontent.com/34748358/36067322-ac6b46b2-0e88-11e8-8ed7-89f5a53b8547.png)
### 4.) Registration page
![registration4](https://user-images.githubusercontent.com/34748358/36067321-ac6166d8-0e88-11e8-86b3-266aab8d646a.png)
### 5.) Sell Page
![sell5](https://user-images.githubusercontent.com/34748358/36067320-ac5800d4-0e88-11e8-94cf-ecc35411e5be.png)
### 6.) Delete account
![delaccount5](https://user-images.githubusercontent.com/34748358/36067319-ac49cf50-0e88-11e8-927b-5ae75eea8b1b.png)
### 7.) Delete product
![delproduct6](https://user-images.githubusercontent.com/34748358/36067318-ac3df5e0-0e88-11e8-96ba-91d8ec9052e4.png)











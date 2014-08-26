![PHP Mobile Detection with Cookies](http://www.ryanhettler.com/images/md_cookies.png)

> Thanks goes out to [Mobile Detect](https://github.com/serbanghita/Mobile-Detect) for the helpful php library detecting if the device is mobile but not a tablet. Donate to Mobile Detect if the script helps.

### Instructions for Use
#### Step 1 - Change the $URL Variable
Open up `/includes/mobilecookieset.php` and change **$url** variable to the mobile redirect url e.g. **http://www.example.com/mobile/**


#### Step 2 - Code for all your pages
Include the code below at the top of all of your web pages. No spaces Before or After the PHP Tags. Spaces will cause errors or warnings and *Nobody's got time for that*. Make sure specific web page is pointing to the correct directory. For example, the following code is meant for php files on the root directory e.g. index.php:

         <?php require_once('includes/mobile-detect/Mobile_Detect.php'); include_once('includes/mobilecookieset.php'); ?>



This line of code is meant for php files in a directory:

         <?php require_once('../includes/mobile-detect/Mobile_Detect.php'); include_once('../includes/mobilecookieset.php'); ?>


#### Step 3 - Set Cookie for Domain.
The `setcookie()` function in PHP has 7 parameters. They are **name**, **value**, **expire**, **path**, **domain**, **secure**, and **httponly**. The only one you will have to change is the **domain** parameter.

         <?php setcookie( name, value, expire, path, domain ); ?>

So, open up `mobile/index.php` and you will see this pretty little line:

         <?php setcookie("mobile_redirect", 1, time()+3600), '/', 'localhost:8888'; ?>

Change `localhost:8888` to the url of your domain i.e. example.com or www.example.com. 



#### Step 4 - Check the Cookie
Everyone of the example pages has this line of code which tells the pages to print out all cookies: 

         <?php print_r($_COOKIE); ?>

Two ways to view it, view the source of the web page or take out the html comments (<!-- -->).


That's all. If any questions, send me an email at ryan - at -ryanhettler - dot - com.




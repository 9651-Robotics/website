# [Team 9651 Robotics Website](https://robotics.ucc.on.ca)

9651 Robotics is Upper Canada College's robotics team! On our website, you can find out what our club is, what we do, and even check in for attendance!

This website is made in PHP (mostly because the old one was, and because it's a simple account system). For our front end, we use [Bootstrap](https://getbootstrap.com/) and [Font Awesome](https://fontawesome.io).

You can check out our [old code](https://github.com/9651-Robotics/website-old) if you'd like, but it's not very well done.

## Setup

In order to run the Team 9651 Website locally, you'll need a few things.

* A MySQL server, to store and access the information used in the web application
* A PHP/Apache server stack, to run the PHP code that's used in the WebApp
* [Git](https://git-scm.com/), to clone this repository
* A Browser, to view the website of course!

To download this repository, just type this in your command line:

```
git clone https://github.com/9651-Robotics/website.git
```

### Server Installations

You can get a MySQL server + PHP/Apache Server, all bundled in one, using some packages. Which one you'll use depends on your Operating System.

* Windows: [WAMP](http://www.wampserver.com/en/)
* Mac: [MAMP](https://www.mamp.info/en/)
* Linux: While there isn't a dedicated bundle installer, you can follow [these steps](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu) to get LAMP running.

After you're done that, we need to configure our MySQL Database. Luckily, we've done most of the work for you. You need to do **two things**.

### 1. Change the root password in common.php

In `common.php`, there's a section of code that looks like this:

```php

$username = "root";
$password = "";
$host = "localhost";
$dbname = "robotics";

```

Ensure that your variables look like that. Then, we're going to change the `$password` string to "root".

It should now look like this:

```php

$username = "root";
$password = "root";
$host = "localhost";
$dbname = "robotics";

```

### 2. Run the MySQL Setup Script

Now, you can run your WAMP/LAMP/MAMP configuration. Included in this repository is a file named `setup.sql`. Running this SQL script sets up all the Databases and Tables you'll need to run the PC website locally.

### Conclusion

Once you're done these two steps, simply visit wherever the `website` repository was placed (we recommend placing the repository in your webroot, which depends on the server installation you use). And ta-da, you have your own working version of the Team 9651 Website!

## Team

We'd like to thank @malsf21, @jacksarick, @obrien66, and @j0hnmace for helping out with this website.

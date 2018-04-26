# Courses-MVC
This is a very simple MVC web application written in php, with which you can create, edit and search courses.

Assignment for Web Programming course at Cardiff/VUM

# Stack
The app was developed under **Ubuntu 14.04** (trusty) with:
* Apache/2.4.7
* PHP 7.2.4
* MySQL Distrib 5.7.21, for Linux (x86_64)


# Setup
1. Clone repo
1. Install LAMP (Linux, Apache, MySQL, PHP)
2. Make sure you have [mod_rewrite activated](http://www.dev-metal.com/enable-mod_rewrite-ubuntu-14-04-lts/) on your server / in your environment
3. Configure apache to serve the /public folder and grant rewrite permissions
4. Edit the database credentials in application/config/config.php
5. Execute the .sql statements in the _sqlFiles folder (with PHPMyAdmin for example).
6. Go to localhost and enjoy

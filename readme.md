<p align="center"><img src="https://devdojo.com/uploads/products/geekshop/documentation/geekshop-logo-1487873555.png" width="200"></p>

## About

GeekShop is a Geeky Product Site where you can add products, pages, posts and much more. Using GeekShop you can create a site similar to ThisIsWhyImBroke, ThinkGeek, and ShutUpAndTakeMyMoney. Geekshop is built on top of the Laravel PHP framework. It has also been built using the Laravel Voyager Admin as the back-end of the site. Be sure to checkout the demo to learn more.

You can find the product page, buy page, demo page, laravel page and voyager page links below:

- [Product Page](https://devdojo.com/scripts/php/geekshop)
- [Demo Page](https://demo.devdojo.com/?product=geekshop)
- [Laravel](https://laravel.com)
- [Voyager](https://laravelvoyager.com)

Next, let's learn about some of the system requirements you will need in order to install the script.

## Requirements

GeekShop was built using Laravel 5.4, this means that the same system requirements needed for GeekShop are the same as the system requirements for Laravel 5.4.

 - PHP >= 5.6.4
 - OpenSSL PHP Extension
 - PDO PHP Extension
 - Mbstring PHP Extension
 - Tokenizer PHP Extension
 - XML PHP Extension
 - GD Image Library
 - `file_get_contents` enabled
 - `file_put_contents` enabled
 - Zip Archive class

To learn more about the system requirements needed to run a Laravel 5.4 script checkout the following [Server Requirements](https://laravel.com/docs/5.4/installation#server-requirements)

Next, we'll get started by learning how you can download the latest version of the script.

## Getting Started

With a Premium Subscription on the DevDojo you will be able to download all the PHP scripts and self host them (optionally, as a Premium subscriber you can take advantage of our free hosting solution).

With the self-hosted version you will want to download the script by visiting the product page at [https://devdojo.com/scripts/php/geekshop](https://devdojo.com/scripts/php/geekshop)

<img src="https://devdojo.com/media/products/geekshop/product-page.png" alt="product page" />

Click on the download button to download the latest version of the script.

Next, we'll move on to learning how to install the GeekShop script.

## Installation

After downloading the script you will need to unzip the `geekshop.zip` file. Next you will want to copy the contents of the unzipped folder to your server.

> Before continuing through the installation, you will need to create a MySQL database for your site. Make sure to have your database name, database user, and database password handy to continue through the installation.

After Moving all the necessary files to your server and creating a database you will want to perform the following 3 steps:

**Step 1: Install Composer Dependencies** - You will need to install the composer dependencies in your application by running the following command inside the root directory of your app.

```
composer install
```

**Step 2: Add Your Database Credentials** - Next, you will need to add your database credentials to your environment config. In the root folder you will see a file called `.env.example`, you will want to rename this file to: `.env`. After renaming the file, open it up in a text editor and you should see something that looks similar to the following:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306

APP_URL=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
...
```

> Hint: Files with a `.` before their name are called hidden files so if you do not see the `.env.example` file you may have to set hidden files to visible. [Learn How To Show Hidden Files Here](https://www.howtogeek.com/194671/how-to-hide-files-and-folders-on-every-operating-system/).

The lines that you will want to pay attention to will be the `DB_HOST`, `APP_URL`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD`. You will need to enter in the URL of your application as well as your database host, name, username, and password. An example might look like this:

```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306

APP_URL=http://website.com
DB_DATABASE=database_name
DB_USERNAME=database_user
DB_PASSWORD=database_pass
```

**Step 3: Run Your Database Migrations & Seeds** - Next, we need to run our database migrations which will add all our database tables for our application. Inside of the command line in the root of our application we will want to run the following command:

```
php artisan migrate
```

And you should see an output on your screen that looks similar to this:

<img src="https://devdojo.com/uploads/products/install-migrate-1491408435.png" alt="database migration" />

Next, we will need to seed our database with some data. Run the following command in the root of your application:

```
php artisan db:seed
```

And you should see an output that looks similar to:

<img src="https://devdojo.com/uploads/products/install-seed-1491408435.png" alt="database seed" />

Lastly, you will need to make sure you storage symlink is created by running the following command:

```
php artisan storage:link
```

That's it! The script is now installed and you will see your GeekShop website in front of you 🎉

---

## Default Login

After successfully installing the script you may want to login using the **default admin account** to add some products, posts, or pages to your site.

As an admin you can login to the site in 2 locations:

#### 1. Login Through the Front-end

You may login through the typical front-end of your site like every other user by visiting `site.com/login`

And you'll see the default login screen in front of you. 

<img src="https://devdojo.com/uploads/products/geekshop/documentation/login-front-end-1488638248.jpg" alt="front-end login screen" />

You can now login using the following **Admin Login** credentials:

```
email: admin@admin.com
password: password
```

After logging in, hover over the user menu in the top right and you will see a button called `Admin`.

<img src="https://devdojo.com/uploads/products/geekshop/documentation/login-admin-btn-1488638247.png" alt="User Menu Hover" />

Click on Admin link and you will now be sent to your admin dashboard:

<img src="https://devdojo.com/uploads/products/geekshop/documentation/admin-dashboard-1488638246.jpg" alt="Admin Dashboard" />

#### 2. Login From the Back-end

Since you are an admin user you will also be able to visit: `site.com/admin/login` and you should see the new admin login screen in front of you.

<img src="https://devdojo.com/uploads/products/geekshop/documentation/login-admin-1488638247.jpg" alt="Admin Login" />

Simply enter the default **Admin Login** credentials:

```
email: admin@admin.com
password: password
```

And you will be redirected to your admin dashboard.

<img src="https://devdojo.com/uploads/products/geekshop/documentation/admin-dashboard-1488638246.jpg" alt="Admin Dashboard" />

#### Changing your Admin Login credentials

You will probably wish to change your login credentials for your admin user. You can easily do this by visiting `site.com/edit_profile` after you are logged in and you can update your Name, Email, and Password.

Next, let's move on to learning more about the admin dashboard.


## Admin Dashboard

After you have logged in with the admin user you can then visit your site at `site.com/admin` and you will find yourself in the **Admin Dashboard**

To the left is your main navigation where you can visit the following sections respectively.

 - Dashboard
 - Products
 - Categories
 - Posts
 - Pages
 - Users
 - Roles
 - Media
 - Menu Builder
 - Database
 - Settings

#### Dashboard

<img src="https://devdojo.com/uploads/products/geekshop/documentation/admin-dashboard-1488638246.jpg" alt="Admin Dashboard" />

The Dashboard is where you will find basic information about your website including how many products, users, and posts are on your site.

You can also view Analytics data if you add your Google Analytics information into your Site settings. You can read more about how to do this here [https://webman.io/blog/post/setup-google-analytics-for-laravel-voyager](https://webman.io/blog/post/setup-google-analytics-for-laravel-voyager)

#### Products

<img src="https://devdojo.com/uploads/products/geekshop/documentation/admin-products-1488667457.png" alt="Admin Products" />

The products section will allow you to Browse, Read, Edit, Add, and Delete products on your site.

If you would like to add a new product you can click 'Add New' and you will see the following screen.

<img src="https://devdojo.com/uploads/products/geekshop/documentation/admin-products-new-1488667456.png" alt="Admin Products New" />

Simply, fill out all the info and add your new product. Then, visit your product home page and click on that link to view the new product you have just added.

#### Categories

<img src="https://devdojo.com/uploads/products/geekshop/documentation/admin-categories-1488673070.png" alt="Admin Categories" />

In the categories section you can view all the current categories that are available. You can edit the existing categories or delete the existing categories. Additionally, you can add your own category.

> Note: by adding a new category this does not automatically mean it will be added to the menu. You will need to add this item to the menu separately. We will go over the Menu Builder further on down the documentation.

#### Posts

<img src="https://devdojo.com/uploads/products/geekshop/documentation/admin-posts-1488667456.png" alt="Admin Categories" />

In addition to adding Products to your new site you may also wish to add posts. This is very similar to the way the products works. You can add/edit/delete products or you can Add a new post.

#### Pages

<img src="https://devdojo.com/uploads/products/geekshop/documentation/admin-pages-1488667455.png" alt="Admin Categories" />

Instead of adding a post you may wish to add, edit, or delete pages for certain sections such as an about page or a contact page.

#### Users

<img src="https://devdojo.com/uploads/products/geekshop/documentation/admin-users-1488673343.png" alt="Admin Categories" />

In the users section you can view all the current users on your website. Additionally you will see your admin user in this list. You can edit or delete any user from your site from the user section.

#### Roles

<img src="https://devdojo.com/uploads/products/geekshop/documentation/admin-roles-1488667456.png" alt="Admin Categories" />

Each user has a role that allows them access to different sections of the apps. Currently in Geekshop there are 2 roles which is a `Normal User` and an `Admin User`. A Normal User only has access to all the front-end sections of your site; whereas the Admin User has access to both the front-end and the back-end admin of the website.

#### Media Manager

<img src="https://devdojo.com/uploads/products/geekshop/documentation/admin-media-1488667455.png" alt="Admin Categories" />

Using the media manager you can easily manage any images or content that gets added to your site. You may wish to rename or delete files and folders as well as add new content through the media manager.

> Warning: Be careful when deleting content because if you delete images that are linked to products or posts they may show a broken image when that product or post is being viewed.

#### Menu Builder

<img src="https://devdojo.com/uploads/products/geekshop/documentation/admin-menus-1488667455.png" alt="Admin Categories" />

Using the Menu builder you can create multiple menus to use throughout your site. There are currently 4 menus that you will see.

- **main** is the front-end top navigation of your site.
- **admin** is the back-end menu that you currently see in your admin.
- **category_menu** is the front-end side menu on the category page.
- **footer_menu** is the front-end menu in the footer of your site.

When you click on the green **Builder** button you will be taken to the builder page for that menu.

<img src="https://devdojo.com/uploads/products/geekshop/documentation/admin-menus-2-1488667455.png" alt="Admin Categories" />

In the Menu Builder section you can drag and drop current menu items to the position you would like them to appear. You can also Add, Edit, or Delete menu items from that particular menu.

#### Database

<img src="https://devdojo.com/uploads/products/geekshop/documentation/admin-database-1488667454.png" alt="Admin Categories" />

In the database section of the site you can see all the tables associated with your application.

> If you are not a developer it might be a good idea to leave this section alone unless you know what you are doing.

In the database section you can also change the way your Browse, Read, Edit, Add, and Delete functionality works throughout your site. You can learn more about the BREAD system here [https://the-control-group.github.io/voyager/docs/](https://the-control-group.github.io/voyager/docs/)

#### Settings

<img src="https://devdojo.com/uploads/products/geekshop/documentation/admin-settings-1488667456.png" alt="Admin Categories" />

The settings section allows you to customize different aspects of your site including the logo and themes. Continue reading more below to learn how to configure and customize your site.

## Configuration

There are many configurations or customizations you can change on your site. To change these customizations you will want to visit `yoursite.com/admin/settings` and you will be able to modify the current configurations.

**Site Title**
This is the title of your site and this will show up in the header title of your homepage.

**Site Description**
This is a description of your site and this will be used as the meta description for your site homepage.

**Site Logo**
You can upload your own logo to show up on the front-end of the site. For best results upload a PNG image with the dimensions around 648x200 pixels. This will gaurantee that your logo will look nice on HD devices.

**Favicon**
This is the small logo that will be shown at the top left of the browser tab. Typically you will upload a small image that is 16x16 pixels 32x32 pixels or 48x48 pixels. Either one should work.

**Admin Description** 
This is the description that will be shown on the admin login screen.

**Admin Background Image**
This is the background image that will be shown on the admin login screen.

**Theme**
You can choose which theme you would like to use. Currently you may only have the default theme; however, if you unlock the bonus content on the product page you can download the `white` theme.

> To install a theme you will simply drag and drop the theme folder into the `resources/views/themes` folder of your website. Then visit your settings page and you will see that theme in the theme dropdown.

**Product URL Slug**
This is the slug that you want to use when someone visits a product page. By default the URL will be `site.com/product/cool-thing`; however, if you want to change this to something like `items` the URL's would then be `site.com/items/cool-thing`.

**Category Slug**
This is the same as the product slug above. By default when you visit a category the URL will be `site.com/category/category-1`; however, if you were to change it to `section` the URL would then be `site.com/section/category-`.

**Sidebar Ad**
You can choose what you would like to show up in the sidebar ad placement on the front-end. Simply enter any HTML and this will show up in the sidebar ad placement throughout your site.

**Comment Type**
You can choose to use 2 different commenting systems on your site. You can choose between using *Facebook Comments* or *Disqus Comments*.

**Disqus Short Name**
This is only relevant if you have chosen to use the Disqus comments from the previous setting. When you sign up for Disqus you will be given a short name to recognize your site. Learn more about [Disqus Here](https://disqus.com).

**Custom Javascript or CSS (will be added to the head of the page)**
You can add your own custom Javascript or CSS that you would like to see throughout your site. This setting will be added to the *head* of your pages.

**Custom Footer Javascript or CSS (will be added to the footer of the page)**
Custom Javscript or CSS that will be added before the ending *body* tag of your pages.

**Twitter Username**
When users share your content via twitter your username will show in the twitter details.

**Admin Title**
This is the title that will be used in the top left of your Admin Panel when the menu is expanded. It will also be used on the admin login page.

**Admin Loader**
You may wish to customize your admin with a custom loader image. You can upload a new image to use as your spinning loader.

**Admin Icon Image**
The admin icon image is the image that you see on your admin login page and you also see at the top left of your admin dashboard.

**Require Users To Validate Email**
If this option is enabled your users will be required to validate their account by email before being able to login and use your site.

## Troubleshooting

If you are having any troubles with your site please try the following commands to see if it will resolve any of them.

**Make sure your storage link is linked correctly**
If you are not seeing images on your site you may need to run the following command from the root folder of your app.

```
php artisan storage:link
```

**Make sure your system meets the minimum requirements**
You can check the system requirements above against the software you have on your server.

**Still having an issue or a problem?**
Visit our product support forum section at [https://devdojo.com/forums/category/product-support](https://devdojo.com/forums/category/product-support)
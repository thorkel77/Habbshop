# Auto Price Updater for GeekShop
This is a script to automatically update the price for a item on GeekShop

https://gist.github.com/marktopper/7a77d81a6ce6fe9a0d3d6166932b407d

# Supports
Current this script only supports fetching prices for Amazon.com over their webservices.

Need this to support something else? Let me know!

# Requires
- A installation of GeekShop
- PHP 5.6+
- Curl
- Crontab

# Downloading

First we would need to download the script

## Download as hook (coming soon)

This feature will soon come to Voyager, and thereby it will be easier to download and install.

## Download using Git (recommended)

If you open up the terminal and go to your GeekShop application, then run the following command from the GeekShop application path.

```
git clone git@github.com:marktopper/geekshop-price-auto-updater.git libs/geekshop-price-auto-updater
```

This will create a folder called `libs`, and withing that folder it will create another folder called `geekshop-price-auto-updater`.
This is where the script is located

## Download as ZIP (not-recommended)

__Coming soon!__

# Installation

## Read from directory

First we need to make the application read files from that new directory.
We can do this by opening up the `composer.json`.
In there you can see a section called `repositories` like this:

```
    "repositories": {
        "repo-name": {
            "type": "vcs",
            "url": "https://github.com/jamisonvalenta/Laravel-4-Generators.git"
        }
    }
```

We would now need to add a extra entry to the `repositories` section like this:

```
    "repositories": {
        "repo-name": {
            "type": "vcs",
            "url": "https://github.com/jamisonvalenta/Laravel-4-Generators.git"
        },
        "geekshop-price-auto-updater": {
            "type": "path",
            "url": "libs/geekshop-price-auto-updater"
        }
    }
```

## Run Composer
Then in the terminal from your application directory you needs to run `composer require geekshop-price-auto-updater`.
This will make sure that the application reads from the directory as well as loads its dependencies.

## Add service provider
Next open up the file `config/app.php` and add `GeekshopPriceAutoUpdater\GeekshopPriceAutoUpdaterServiceProvider::class,` inside the `providers` section.

## Run command
You can now run the command `php artisan geekshop:update-price`.
This will output a lot of details on what products was updated and which was not due to which reason.

# Automate it
You can setup a cronjob to run the above command whenever you wish to update the price, maybe once an hour?

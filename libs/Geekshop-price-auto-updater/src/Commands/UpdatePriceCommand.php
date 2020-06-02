<?php

namespace GeekshopPriceAutoUpdater\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Collection;
use GeekshopPriceAutoUpdater\Output;
use App\Product;

class UpdatePriceCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'geekshop:update-price';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update all prices according to the source.';

    protected static $sources = ['amazon'];

    /**
     * Execute the console command.
     *
     * @param \Illuminate\Filesystem\Filesystem $filesystem
     *
     * @return void
     */
    public function fire()
    {
        // Bind this to allow output from anywhere!
        Output::bind($this);

        // Fetch products
        $products = Product::all();

        // Run throug all sources
        foreach (static::$sources as $source) {
            $name = ucwords($source);
            $class = ucfirst(camel_case($source));
            $class = "GeekshopPriceAutoUpdater\\Sources\\{$class}\\{$class}";

            $this->comment("> Updating {$name} prices!");

            $this->laravel->make($class)->updatePrices($products);

            $this->comment("> {$name} prices updated!");
        }

        $this->info('Updating complete!');
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(DataTypesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(UserActivationsTableSeeder::class);
        $this->call(ProductSavesTableSeeder::class);
        $this->call(ProductProductTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(CategoryProductTableSeeder::class);
        $this->call(VoyagerThemesTableSeeder::class);
        $this->call(VoyagerThemeOptionsTableSeeder::class);
    }
}

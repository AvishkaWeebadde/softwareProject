<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
//use TCG\Voyager\Traits\Seedable;

class VoyagerDummyDatabaseSeeder extends Seeder
{
    //use Seedable;

    //protected $seedersPath;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* $this->seedersPath = database_path('seeds').'/';
        $this->seed('CategoriesTableSeeder');
        $this->seed('UsersTableSeeder');
        $this->seed('PostsTableSeeder');
        $this->seed('PagesTableSeeder');
        $this->seed('TranslationsTableSeeder');
        $this->seed('PermissionRoleTableSeeder'); */

        $this->call([
            CategoriesTableSeeder::class,
            UsersTableSeeder::class,
            PostsTableSeeder::class,
            PagesTableSeeder::class,
            TranslationsTableSeeder::class,
            PermissionRoleTableSeeder::class,
        ]);
    }
}

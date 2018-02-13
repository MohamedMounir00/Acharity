<?php

use Illuminate\Database\Seeder;
use App\Setting as Set;

class Setting extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newset = new Set;
         $newset->site_maintenance =0;
         $newset->site_register = 0;
         $newset->site_auto_active = 0;
         $newset->sitename ='test name';
         $newset->siteurl = 'http://localhost/lara1';
         $newset->sitemail = 'test@localhost';
         $newset->save();

    }
}

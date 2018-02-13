<?php
use App\User;
use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $add = new User;
        $add->name  = 'mohamed';
        $add->level  = 'admin';
        $add->password = bcrypt(123456);
        $add->email  = 'mohamedmounir703@gmail.com';
        $add->office_id = '1';
        $add->save();
    }
}

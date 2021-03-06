<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Use the name of your admin model, this examples uses the default App\User */

        // List all users
        App\User::all();

        // Start building a new user object
        $user = new App\User();

        // Set fields
        $user->name = 'ANDREY ZLOBIN';
        $user->email = 'admin@example.com';

        // Set a password (remember to send it to the user):
        $user->password = bcrypt('admin');
        // ...or have the user reset password before logging in (if you've added a password reset configuration):
//        $user->password = '';

        // Then save the user!
        $user->save();
    }
}

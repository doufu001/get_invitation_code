<?php

use Illuminate\Database\Seeder;
use App\Invitation_code;

class Invitation_codeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Invitation_code::class,100)->create();
    }
}

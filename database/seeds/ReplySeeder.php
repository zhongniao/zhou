<?php

use Illuminate\Database\Seeder;
use App\Models\Reply;

class ReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Reply::class)->times(500)->create();
    }
}

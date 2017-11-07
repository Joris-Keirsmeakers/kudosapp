
<?php

use Faker\Generator as Faker;

$factory->define(App\Compliment::class, function (Faker $faker) {

    $user_id = App\User::pluck('id');

    return [
        'message' => $faker->text($maxNbChars = 200),
        'receiver_id'=> $user_id->random(),
        'sender_id' => $user_id->random(),

    ];
  
});

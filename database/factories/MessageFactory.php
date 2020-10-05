<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Message;


$factory->define(Message::class, function (Faker $faker) {
    $to = 0;
    $from = 0;
   do{
       $to = rand(1,10);
       $from = rand(1,10);
   } while ($from === $to);
   
   
    return [
        'to' => $to,
        'from' => $from,
        'text' => $faker->sentence,
    ];
});


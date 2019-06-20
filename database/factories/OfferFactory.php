<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Offer;
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Offer::class, function (Faker $faker) {
    return [
        'price' => random_int(100,10000),
        'type_price' =>$faker-> randomElement(['USD','EUR','UAH']),
        'number_rooms' => random_int(1,4),
        'user_id' => User::getdate(),
        'phone' => $faker->phoneNumber,
        'information' => $faker->text,
    ];
});
$factory->define(Offer::class, function (Faker $faker) {
    return [
        'price' => random_int(100,10000),
        'type_price' =>$faker-> randomElement(['USD','EUR','UAH']),
        'number_rooms' => random_int(1,4),
        'user_id' => User::getDate(),
        'phone' => $faker->phoneNumber,
        'information' => $faker->text,
    ];
});

$factory->state(Offer::class, 'flat', function (Faker $faker) {
    return [
        'type_object' =>'flat',
    ];
});

$factory->state(Offer::class, 'house', function (Faker $faker) {
    return [
        'type_object' => 'house',
    ];
});

$factory->state(Offer::class, 'panel', function (Faker $faker) {
    return [
        'type_wall'=> 'panel',
    ];
});

$factory->state(Offer::class, 'brick', function (Faker $faker) {
    return [
        'type_wall'=>'brick',
    ];
});
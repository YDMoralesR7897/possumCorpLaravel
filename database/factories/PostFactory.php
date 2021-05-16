<?php

 /** @var \Iluminate\Database\Eloquent\Factory $factory  */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker){
    $title = $faker->sentence;
    return[
        'title' => $title,
        'slug' => Str::slug($title),
        'body' => $faker->text

    ];
});

/*namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    /*MY COMMENT protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    /*MY COMMENT public function definition()
    {
        return [
            //
        ];
    }
}    */

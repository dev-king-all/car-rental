<?php

namespace Database\Factories;

use App\Models\RecruitementMails;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecruitementMailsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RecruitementMails::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name;
        $sta = ['Open', 'InProgress', 'Declined', 'Staged'];
        return [
            //
            'name' => $name,
            'email' => $this->faker->unique()->safeEmail,
            'subject' => 'Recruitement',
            'description' => 'Hello, I am '.$name.'. I read your recruitment document. I am very interested in the job.',
            'status' => $sta[random_int(0,3)],
            'attachment' => 'me.png',
        ];
    }
}

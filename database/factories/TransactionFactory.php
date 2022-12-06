<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigitNotNull,
        'category_id' => $this->faker->randomDigitNotNull,
        'description' => $this->faker->word,
        'value' => $this->faker->word,
        'due_date' => $this->faker->word,
        'installments_qty' => $this->faker->randomDigitNotNull,
        'day' => $this->faker->randomDigitNotNull,
        'month' => $this->faker->randomDigitNotNull,
        'year' => $this->faker->randomDigitNotNull,
        'recurrent' => $this->faker->word,
        'fixed_value' => $this->faker->word,
        'paid' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

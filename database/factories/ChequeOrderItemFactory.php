<?php

namespace Database\Factories;

use App\Models\ChequeOrderItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChequeOrderItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ChequeOrderItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_option_id' => $this->faker->numberBetween(1, 4),
            'quantity' => $this->faker->numberBetween(1, 5),
            'cheque_id' => $this->faker->numberBetween(1, 25)
        ];
    }
}

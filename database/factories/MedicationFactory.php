<?php

namespace Database\Factories;

use App\Models\Medication;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Medication::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Medication_Name' => $this->faker->word,
            'Stock_Count' => $this->faker->randomNumber(2),
            'Expiry_Date' => $this->faker->date,
            'Category' => $this->faker->word,
            'Supplier_Details' => $this->faker->sentence,
            'Cost_Price' => $this->faker->randomFloat(2, 1, 100),
            'Selling_Price' => $this->faker->randomFloat(2, 1, 100),
        ];
    }
}

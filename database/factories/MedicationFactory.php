<?php

namespace Database\Factories;

use App\Models\Medication;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

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
        $categories = ['Pain Relievers', 'Antibiotics', 'Antiseptics', 'Vitamins', 'Anti-allergic', 'Digestive Health'];

        return [
            'Medication_Name' => 'Panadol',
            'Medication_Image' => 'https://i-cf65.ch-static.com/content/dam/cf-consumer-healthcare/panadol-reborn/en_IE/product-detail/panadol-advance-compack-16/Panadol-Base-24s-(3D).png?auto=format',
            'Stock_Count' => $this->faker->randomNumber(2),
            'Expiry_Date' => $this->faker->date,
            'Category' => Arr::random($categories),
            'Supplier_Details' => $this->faker->sentence,
            'Cost_Price' => $this->faker->randomFloat(2, 1, 100),
            'Selling_Price' => $this->faker->randomFloat(2, 1, 100),
        ];
    }
}

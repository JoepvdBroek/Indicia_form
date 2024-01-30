<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyForm>
 */
class CompanyFormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_name' => fake()->company,
            'legal_structure' => fake()->randomElement(['Eenmanszaak', 'VOF', 'Maatschap', 'Besloten vennootschap', 'Naamloze vennootschap', 'Stichting', 'Vereniging', 'Overig']),
            'street_name' => fake()->streetName,
            'house_number' => fake()->numberBetween(1, 100),
            'postcode' => fake()->numberBetween(1000,  9999) . ' ' . fake()->regexify('[A-Z]{2}'),
            'iban' => fake()->iban('NL'),
            'email_of_client' => fake()->companyEmail,
            'email_of_financial_correspondence' => fake()->companyEmail,
        ];
    }
}

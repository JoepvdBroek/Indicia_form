<?php


use App\Models\CompanyForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CompanyFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_get(): void
    {
        $response = $this->get('/form');

        $response->assertStatus(200);
    }

    public function test_fail_all_validation(): void
    {
        $data = [
            'company_name' => 'test name',
            'legal_structure' => 'asdf',
            'street_name' => 'Streetname',
            'house_number' => '5a',
            'postcode' => '5051BG',
            'iban' => 'NLRABO0155805319',
            'email_of_client' => 'emailexample.com',
            'email_of_financial_correspondence' => '@example.com',
        ];

        $response = $this->postJson('/form', $data);

        $response->assertInvalid(['legal_structure','house_number', 'postcode', 'iban', 'email_of_client', 'email_of_financial_correspondence']);

        $this->assertDatabaseMissing('company_forms', $data);
    }

    public function test_pass_all_validation(): void
    {
        $companyForm = CompanyForm::factory()->create();
        $attributes = $companyForm->attributesToArray();

        $response = $this->postJson('/form', $attributes);

        $response->assertValid(['company_name', 'legal_structure','street_name','house_number', 'postcode', 'iban', 'email_of_client', 'email_of_financial_correspondence']);

        $this->assertDatabaseHas('company_forms', $attributes);
    }
}

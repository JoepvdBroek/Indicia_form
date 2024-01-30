<?php


use App\Rules\Iban;
use PHPUnit\Framework\TestCase;

class IbanRuleTest extends TestCase
{
    private Iban $rule;

    public function setUp() : void
    {
        parent::setUp();

        $this->rule = new Iban();
    }

    /**
     * @dataProvider succeeds
     */
    public function test_successful_iban_rule(string $iban): void
    {
        $this->expectNotToPerformAssertions();
        $this->validateRule($iban);
    }

    /**
     * @dataProvider fails
     */
    public function test_failed_iban_rule(string $iban): void
    {
        $this->expectException(Exception::class);
        $this->validateRule($iban);
    }

    private function validateRule(string $iban): void
    {
        $this->rule->validate('iban', $iban, function($message) {
            Throw new Exception($message);
        });
    }


    public static function succeeds(): array {
        return [
            ['NL84RABO12345678'],
            ['NL84RABO123456789'],
        ];
    }

    public static function fails(): array {
        return [
            ['NLRABO0123'],
            ['NL8RABO123'],
            ['N8RABO123']
        ];
    }
}

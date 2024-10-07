<?php
namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidDomainEmail implements Rule
{
    public function passes($attribute, $value)
    {
        // Check if the email ends with ".com"
        return filter_var($value, FILTER_VALIDATE_EMAIL) && substr($value, -4) === '.com';
    }

    public function message()
    {
        return 'The :attribute must be a valid email address ending with .com.';
    }
}

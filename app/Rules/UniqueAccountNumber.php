<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UniqueAccountNumber implements Rule
{
    public function passes($attribute, $value)
    {
        // Check if the account number exists in the banking table
        $existsInBankings = DB::table('bankinginfo')->where('Accountnumber', $value)->exists();

        // If the account number exists, validation fails
        return !$existsInBankings;
    }

    public function message()
    {
        return 'The account number is already in use.';
    }
}

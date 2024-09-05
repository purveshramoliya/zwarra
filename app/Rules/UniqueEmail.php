<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UniqueEmail implements Rule
{
    public function passes($attribute, $value)
    {
        // Check if the email exists in any of the three tables
        $existsInTable1 = DB::table('users')->where('Email', $value)->exists();
        $existsInTable2 = DB::table('serviceprovider')->where('Email', $value)->exists();
        $existsInTable3 = DB::table('alldoctors')->where('Email', $value)->exists();

        // If the email exists in any of the tables, validation fails
        return !$existsInTable1 && !$existsInTable2 && !$existsInTable3;
    }

    public function message()
    {
        return 'The email address is already in use.';
    }
}
?>
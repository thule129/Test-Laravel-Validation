<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Uppercase implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }

    public function validate(string $attribute, mixed $value, \Closure $fail): void
    {

        $firstLetter = substr($value, 0, 1);
        if (strtoupper($firstLetter) !== $firstLetter) {
            $fail('The :attribue does not start with an uppercased letter');
        }
    }
}

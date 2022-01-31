<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

class StringController extends Controller
{
    public function __invoke()
    {
        // 1. UPPERCASE/LOWERCASE LETTERS

        echo ucfirst('john');          // Result: "John"
        echo '<br />';
        echo lcfirst('John');          // Result: "john"
        echo '<br />';
        echo strtolower('John Smith'); // Result: "john smith"
        echo '<br />';
        echo strtoupper('john smith'); // Result: "JOHN SMITH"
        echo '<br />';
        echo ucwords('john smith');    // Result: "John Smith"
        echo '<br />';

        // Laravel helpers:
        echo Str::camel('variable_name');    // Result: "variableName"
        echo '<br />';
        echo Str::snake('variableName');     // Result: "variable_name"
        echo '<br />';
        echo Str::kebab('variableName');     // Result: "variable-name"
        echo '<br />';
        echo Str::slug('Some article title'); // Result: "some-article-title"
        echo '<br />';

        echo '<hr />';

        // ----------------------------------------------

        // 2. TRIM / SUBSTRING

        echo '|' . trim(' With spaces ') . '|';  // Result: "With spaces"
        echo '<br />';
        echo '|' . ltrim(' With spaces ') . '|'; // Result: "With spaces "
        echo '<br />';
        echo '|' . rtrim(' With spaces ') . '|'; // Result: " With spaces"
        echo '<br />';

        echo substr(' With spaces ', 1, 4); // Result: " With"
        echo '<br />';
        echo substr_replace(' With spaces ', 'Without', 1, 4);
        // Result: " Without spaces "
        echo '<br />';
        echo substr_count('with spaces and with more', 'with');
        // Result: 2
        echo '<br />';

        // Laravel helpers:
        echo Str::start('path/to/folder', '/'); // Result: "/path/to/folder"
        echo '<br />';
        echo Str::finish('/path/to/folder', '/'); // Result: "/path/to/folder/"
        echo '<br />';

        echo '<hr />';

        // ----------------------------------------------

        // 3. CHECK IF STRING CONTAINS SOMETHING

        echo str_contains('Abc', 'a') ? 'true' : 'false';    // Result: "false"
        echo '<br />';
        echo str_starts_with('Abc', 'A') ? 'true' : 'false'; // Result: "true"
        echo '<br />';
        echo str_ends_with('Abc', 'c') ? 'true' : 'false';   // Result: "true"
        echo '<br />';

        echo strstr('My Abc', 'a') ?: 'not found'; // Result: "not found"
        echo '<br />';
        echo stristr('My Abc', 'a') ?: 'false';    // Result: "Abc"
        echo '<br />';

        echo strpos('Abcdefg', 'c');  // Result: 2
        echo '<br />';
        echo stripos('ABCdefg', 'b'); // Result: 1
        echo '<br />';
        echo strrpos('AbcAbc', 'c');  // Result: 5
        echo '<br />';
        echo strripos('AbcAbc', 'a'); // Result: 3
        echo '<br />';

        // Laravel helpers:
        echo Str::containsAll('Abcdefg', ['Abc', 'def']) ? 'true' : 'false';
        // Result: "true"
        echo '<br />';
        echo Str::startsWith('Abc', ['A', 'c']) ? 'true' : 'false';
        // Result: "true"
        echo '<br />';
        echo Str::endsWith('Abc', ['a', 'c']) ? 'true' : 'false';
        // Result: "true"
        echo '<br />';

        echo '<hr />';

        // ----------------------------------------------

        // 4. STRING LENGTH

        echo strlen('Some string'); // Result: 11
        echo '<br />';
        echo str_word_count('Some string'); // Result: 2
        echo '<br />';

        echo '<hr />';

        // ----------------------------------------------

        // 5. PADDING AND MASKING

        echo str_pad('123', 7, '0', STR_PAD_LEFT);
        // Result: 0000123
        echo '<br />';

        // Laravel helpers:
        echo Str::padLeft('123', 7, '0'); // Result: 0000123
        echo '<br />';
        echo Str::padRight('123', 7, '0'); // Result: 1230000
        echo '<br />';
        echo Str::padBoth('123', 7, '*'); // Result: **123**
        echo '<br />';
        echo Str::mask('1234567890123456', '*', 4);
        // Result: 1234************
        echo '<br />';
        echo Str::mask('1234567890123456', '*', 0, -4);
        // Result: ************3456
        echo '<br />';

        echo '<hr />';

        // ----------------------------------------------

        // 6. RANDOM PHP FUNCTIONS

        echo number_format(123456, 2); // Result: 123,456.00
        echo '<br />';

        echo sprintf('Some number %d with string %s', 123, 'Something');
        // Result: "Some number 123 with string Something"
        echo '<br />';

        print_r(str_getcsv("LEGO,19.99,Denmark"));
        // Result: Array ( [0] => LEGO [1] => 19.99 [2] => Denmark )
        echo '<br />';

        echo strrev('abcdef');
        // Result: fedcba
        echo '<br />';

        echo levenshtein('Goooogle', 'Google'); // Result: 2
        echo '<br />';
        echo similar_text('Goooogle', 'Google', $percentage);
        echo ' ('.number_format($percentage, 2).'%)';
        // Result: 6 (85.71%)
        echo '<br />';

        echo '<hr />';

        // ----------------------------------------------

        // 7. RANDOM LARAVEL HELPERS

        echo Str::plural('person');     // Result: "people"
        echo '<br />';
        echo Str::singular('children'); // Result: "child"
        echo '<br />';

        echo Str::random(12); // Result: "f2zujRZcLuJA"
        echo '<br />';
        echo Str::uuid(); // Result: "eb2afd13-035b-4b28-a131-bf4c1a390dcd"
        echo '<br />';
    }
}

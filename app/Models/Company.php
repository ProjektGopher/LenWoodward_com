<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use \Sushi\Sushi;

    protected $rows = [
        ['slug' => 'tighten', 'name' => 'Tighten'],
        ['slug' => 'laravel', 'name' => 'Laravel'],
    ];
}

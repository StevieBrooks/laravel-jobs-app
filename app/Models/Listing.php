<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public static function showAll() 
    {
        return [
            [
                'title' => 'listing one',
                'description' => 'lorem lorem lorem'
            ],
            [
                'title' => 'listing two',
                'description' => 'lorem lorem lorem'
            ],
            [
                'title' => 'listing three',
                'description' => 'lorem lorem lorem'
            ],
        ];

    }
}

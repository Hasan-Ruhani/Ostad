<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillabel = [
        'helth_expense',
        'food_expense',
        'total_income'
    ];
}

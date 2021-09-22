<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rview extends Model
{
    use HasFactory;
    protected $table = "rviews";

    public function orderItem()
    {
        return $this->belongsTo(OrderItem::class);
    }
}

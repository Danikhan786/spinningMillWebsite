<?php

// app/Models/PropertyInquiry.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyInquiry extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'property_id',
        'full_name',
        'email',
        'phone',
        'message',
    ];

    /**
     * Define the relationship with the Property model.
     * Assuming you have a Property model as well.
     */
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}

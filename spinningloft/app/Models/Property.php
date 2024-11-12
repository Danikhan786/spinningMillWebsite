<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'propertyName', 'propertyPrice', 'bed', 'bath', 
        'propertySqft', 'location', 'pricePerSqft', 'propertyImage', 'propertyImages',
        'slug', // Make sure to include slug
    ];

    protected $casts = [
        'propertyImages' => 'array', // Casts propertyImages to an array
    ];


  // Generate a unique slug based on property name
  public static function generateUniqueSlug($propertyName)
  {
      $slug = Str::slug($propertyName);
      $originalSlug = $slug;
      $counter = 1;

      // Check for existing slugs in the database
      while (self::where('slug', $slug)->exists()) {
          $slug = $originalSlug . '-' . $counter;
          $counter++;
      }

      return $slug;
  }

  public function inquiries()
  {
      return $this->hasMany(PropertyInquiry::class, 'property_id');
  }
}

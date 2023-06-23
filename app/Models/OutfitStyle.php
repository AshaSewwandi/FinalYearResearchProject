<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutfitStyle extends Model
{
    use HasFactory;
    protected $table = 'outfit_styles';
    protected $fillable = ['user_profile_id'];

    public function UserProfile()
    {
        return $this->belongsTo(UserProfile::class);
    }
}


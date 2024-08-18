<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    use HasFactory;




    /**
     * Get the parent imageable model (Project or Branch).
     */
    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }

    protected $fillable = ['imageable_id', 'imageable_type', 'image_path' , 'is_cover'];

}

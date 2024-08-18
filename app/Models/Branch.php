<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Branch extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];




    /**
     * Get the cover image.
     */
    public function cover(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable')->where('is_cover', true);
    }


    /**
     * Get all of the branches images.
     */
    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable')->where('is_cover', false);
    }


    /**
     * Get all of the branche sections.
     */
    public function sections(): MorphMany
    {
        return $this->morphMany(Section::class, 'sectionable');
    }


}

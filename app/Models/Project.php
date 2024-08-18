<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
class Project extends Model
{
    use HasFactory;

    protected $fillable = ['branch_id', 'name', 'description','image'];


    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }


    /**
     * Get the cover image.
     */
    public function cover(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable')->where('is_cover', true);
    }



    /**
     * Get all of the projects images.
     */
    public function images():  MorphMany
    {
        return $this->morphMany(Image::class, 'imageable')->where('is_cover', false);
    }


    public function sections(): MorphMany
    {
        return $this->morphMany(Section::class, 'sectionable');
    }

    public function facts()
    {
        return $this->hasMany(Fact::class);
    }

}

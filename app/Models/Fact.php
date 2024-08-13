<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fact extends Model
{
    use HasFactory;


    protected $fillable = ['project_id', 'key', 'value'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

}

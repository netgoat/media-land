<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['branch_id', 'name', 'description'];


    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }


    public function facts()
    {
        return $this->hasMany(Fact::class);
    }

}

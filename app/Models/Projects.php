<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Projects extends Model
{
    use HasFactory;

    protected $table = "projects";

    protected $fillable = ['name', 'description', 'deadline'];

    public function tasks(): HasMany
    {
        return $this->hasMany(Tasks::class);
    }
}

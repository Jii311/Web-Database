<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class grade extends Model
{
    use HasFactory;

    public function students(): HasMany
    {
        return $this->hasMany(student::class, 'grade_id');
    }
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}

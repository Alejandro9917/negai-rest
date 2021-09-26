<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';

    protected $fillable = ['tag'];

    public function comics()
    {
        return $this->hasMany(Comic::class, 'tag_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use WireComments\Traits\Commentable;

class DocPage extends Model
{
    use HasFactory;
    use Commentable;
    protected $guarded = [];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebPage extends Model {
    protected $connection = 'mongodb';
    protected $collection = 'web_pages';
    protected $fillable = ['url', 'content'];
}

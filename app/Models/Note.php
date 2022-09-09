<?php
/*Se creo usando php artisan make:model Note -rfm para crear migraciones modelo, factory y el controlador resource */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'excerpt',
        'content'
    ];
}

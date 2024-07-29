<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $table = 'posts';//aqui le indicamos en que tabla se va a conectar

    protected function casts():array
    {
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean'
        ];
    }

    // metodo para volver y almacenar el titulo en minuscula.
    protected function title(): Attribute
    {
        return Attribute::make(
            set: function ($value) {// este metodo set se ejecutara cuando querramos almacenar algo en la base de datos
                return strtolower($value);
            },
            get: function ($value)//este metodo get se ejecutara cuando querramos traer algo de la base de datos
            {
                return ucfirst($value);
            }
        );
    }
}

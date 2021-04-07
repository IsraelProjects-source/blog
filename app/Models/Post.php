<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    use Sluggable;

    /**utilizamos los slug basicamente para tranformar la url y hacerla mas amigable para el ususario
     * eso tambien nos ayuda a el posicionamiento de google
     * entonces creara un slug en los post para que no aparezca blo1, blo2, blog3 etc...
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }

    //hacemos la configuracion donde decimos que un post pertenece a un ususario
    public function user(){
        return $this->belongsTo(User::class);
    }

}

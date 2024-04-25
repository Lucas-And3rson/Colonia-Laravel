<?php

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nome', 'email', 'nivel', 'senha'];
    protected $hidden = ['senha'];
}

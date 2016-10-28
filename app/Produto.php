<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    protected $table = 'produtos';
    public $timestamps = false;
    protected $fillable = array('nome',
        'descricao', 'valor', 'quantidade');
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionnaireModel extends Model
{
    protected $table = 'q_tables';


    protected $fillable = [
        'table_name'
    ];
}

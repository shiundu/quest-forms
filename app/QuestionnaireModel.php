<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionnaireModel extends Model
{
    protected $table = 'questionnaire_models';


    protected $fillable = [
        'table_name'
    ];
}

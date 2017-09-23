<?php

namespace App\Http\Controllers;

use App\User;
use App\QuestionnaireModel;
use DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FillController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        // return view('user.profile', ['user' => User::findOrFail($id)]);
        //return view('questionnaire.form');
    }

    public function show($id)
    {
        $questions = DB::getSchemaBuilder()->getColumnListing($id);

        return view('questionnaire.fill', ['question' => $questions]);
    }

    public function store(Request $request)
    {

        $time = 'q_'.time();
        try{
            $QuestionnaireModel = new QuestionnaireModel;

            $QuestionnaireModel->table_name = $time;
            $x = $QuestionnaireModel->save();

        }
        catch(\Exception $e){
            echo 'Catch '.$e->getMessage();
        }
    }

    }

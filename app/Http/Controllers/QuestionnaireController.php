<?php

namespace App\Http\Controllers;

use App\User;
use App\QuestionnaireModel;
use DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class QuestionnaireController extends Controller
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
        return view('questionnaire.form');
    }

    public function show()
    {
        // return view('user.profile', ['user' => User::findOrFail($id)]);
        return view('questionnaire.form');
    }

    public function store(Request $request)
    {

        $time = 'q_'.time();
        try{
            $QuestionnaireModel = new QuestionnaireModel;

            $QuestionnaireModel->table_name = $time;
            $x = $QuestionnaireModel->save();
            if($x){
              if($this->create_table($time)){
                foreach ($request->q as $key => $value) {
                  try{
                    $this->createColumn($time, $value);
                  }
                  catch(\Exception $e){
                      echo 'Error saving columns_ '.$e;
                  }
                }

                echo $time;
              }
              else {
                  echo 'Error saving table_';
              }
            }
            else {
                echo 'Error saving table name_';
            }

        }
        catch(\Exception $e){
            echo 'Catch '.$e->getMessage();
        }
    }

    public function add_table()
    {

    }

    public function create_table($time)
    {
        Schema::create($time, function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('created_at');
            $table->datetime('updated_at');
        });

        return true;
    }

    public function createColumn($time, $value)
    {
        Schema::table($time, function(Blueprint $table) use ($value){
            $table->string($value);
        });
    }

    }

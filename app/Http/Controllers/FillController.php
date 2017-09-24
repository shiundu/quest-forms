<?php

namespace App\Http\Controllers;

use App\User;
use App\QuestionnaireModel;
use DB;
use Request as Req;
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
        foreach($questions as $key => $value){
            if($key == 3){
               $title = $value; 
            }   
        }
        return view('questionnaire.fill', ['question' => $questions, 'title' => $title]);
    }

    public function store(Request $request)
    {
        try{
            
            $fields = '`created_at`, `updated_at`,';
            $values = '"'.date('Y-m-d H:i:s').'", "'.date('Y-m-d H:i:s').'",';
            $query = '';
            $i = 0;
            foreach($request->fill as $key => $value){
                $values = $values.' "'.$value.'", ';
                $fields = $fields.' '.'`'.$key.'`, ';
            }

            $fields = rtrim($fields, ', ');
            $values = rtrim($values, ', ');

            $s = DB::insert(DB::raw('INSERT INTO '.$request->table_name.' ('.$fields.') VALUES ('.$values.')'));

            //print_r($s);
            if($s){
                return view('saved');
            }
            else {
                return view('error_saving');
            }

        }
        catch(\Exception $e){
            echo 'Catch '.$e->getMessage();
        }
    }

    }

@extends('layouts.app')

@section('title', 'Page Title')


@section('content')
<!-- page content -->

<div class="right_col" role="main">
  <div class="">
    <!-- <div class="page-title">
      <div class="title_left">
        <h3>Form Elements</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div> -->
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <!-- <div class="x_title">
            <h2>Form Design <small>different form elements</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div> -->
          <div class="x_content" >
            <br />
            <h1>Create questionnaire</h1>

            <ul>
              @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>

            {!! Form::open(array('route' => 'questionnaire.store', 'class' => 'form')) !!}
            <div id="create_form">
              <div class="form-group">
                {!! Form::label('Title') !!}
                {!! Form::text('form_text[]', null, 
                    array('required', 
                          'class'=>'form-control', 
                          'placeholder'=>'Title')) !!}
              </div>
            </div>
            <div class="form-group">
                {!! Form::label('Add new field!', null,
                  array('class'=>'btn btn-info', 'id'=>'create_form_button')) !!}
              </div>
            <div class="form-group">
              {!! Form::submit('Save!', 
                array('class'=>'btn btn-primary')) !!}
            </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection
@extends('layouts.fill')

@section('title', 'Page Title')


@section('content')
<!-- page content -->

<div class="" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Thomas  Inc<small></small></h2>
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
          </div>
          <div class="x_content">
            <br />
            <h1>{!! $title !!}</h1>

            <ul>
              @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>

            {!! Form::open(array('route' => 'fill.store', 'class' => 'form')) !!}
            
              <div class="form-group">
                {!! Form::hidden('table_name', Request::segment(2),
                    array('required',
                          'class'=>'form-control')) !!}
              </div>
              @foreach($question as $key => $q)
                @if($key == 3)
                  <div class="form-group">
                    {!! Form::hidden('fill['.$q.']', $q,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>$q)) !!}
                  </div>
                @endif
                @if($key > 3)
                  <div class="form-group">
                    {!! Form::label($q) !!}
                    {!! Form::text('fill['.$q.']', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>$q)) !!}
                  </div>
                @endif
              @endforeach
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

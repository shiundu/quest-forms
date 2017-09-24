@extends('layouts.app')

@section('title', 'Page Title')


@section('content')
<!-- page content -->

<div class="right_col" role="main">
<div class="">
    <div class="page-title">
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
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
	        <div class="x_panel">
	          <div class="x_title">
	            <h2>Table design <small>Custom design</small></h2>
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

	            <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

	            <div class="table-responsive">
	              <table class="table table-striped jambo_table bulk_action">
	                <thead>
	                  <tr class="headings">
	                    <th>
	                      <input type="checkbox" id="check-all" class="flat">
	                    </th>
	                    <th class="column-title">id </th>
	                    <th class="column-title">Table name </th>
	                    <th class="column-title">Link </th>
	                  </tr>
	                </thead>

	                <tbody>
	                @foreach($tables as $table)
	                  <tr class="even pointer">
	                    <td class="a-center ">
	                      <input type="checkbox" class="flat" name="table_records">
	                    </td>
	                    <td class=" ">{{$table->id}}</td>
	                    <td class=" ">{{$table->table_name}}</td>
	                    <td class=" "><a href="<?php echo '/fill/'.$table->table_name; ?>" target="blank"><?php echo '/fill/'.$table->table_name; ?></a></td>
	                    </td>
	                  </tr>
	                  @endforeach
	                </tbody>
	              </table>
	            </div>
						
					
	          </div>
	        </div>
	      </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection

@extends('admin_layout')

@section('admin_content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{route('dashboard')}}">Dashboard</a>
            <i class="icon-angle-right"></i> 
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="#">Edit Slider</a>
        </li>
    </ul>
<div class="row-fluid sortable">
  @include('includes.message')
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Slider</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
        <form class="form-horizontal" action="{{route('update-slider')}}" method="post" enctype="multipart/form-data">
          @csrf;
              <fieldset>
                
                <div class="control-group">
                  <label class="control-label" for="typeahead">Title</label>
                  <div class="controls">
                    <input type="hidden" class="span6 typeahead" name="s_id" value="{{ $data->id }}" id="typeahead" >
                    <input type="text" class="span6 typeahead" name="title" value="{{ $data->title }}" id="typeahead" >
                  </div>
                </div>   
                <div class="control-group">
                    <label class="control-label" for="typeahead">Sub Title</label>
                    <div class="controls">
                      <input type="text" class="span6 typeahead" name="sub_title" value="{{ $data->sub_title }}" id="typeahead" >
                    </div>
                  </div> 
                  <div class="control-group">
                    <label class="control-label" for="typeahead">URL</label>
                    <div class="controls">
                      <input type="text" class="span6 typeahead" name="url" value="{{ $data->url }}" id="typeahead" >
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="typeahead">Start Date</label>
                    <div class="controls">
                      <input type="date" class="span6 typeahead" name="start" value="{{ $data->start }}" placeholder="00.00" id="typeahead" >
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="typeahead">End Date</label>
                    <div class="controls">
                      <input type="date" class="span6 typeahead" name="end" value="{{ $data->end }}" placeholder="00.00" id="typeahead" >
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="typeahead">Slider Image</label>
                    <div class="controls">
                        <img src="{{ asset('uploads/slider/'. $data->image) }}" width="300px" height="120px" alt="Image"> <br>
                      <input type="file" class="span6 typeahead" name="image" id="typeahead" >
                    </div>
                  </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Status</label>
                    <div class="controls">
                      <input type="checkbox" name="product_status" id="date01" value="1">
                    </div>
                  </div>
                <div class="form-actions">
                  <button type="submit" class="btn btn-primary">Update Slider</button>
                  <a href="{{ url()->previous() }}" class="btn">Cancle</a>
                </div>
              </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
@endsection
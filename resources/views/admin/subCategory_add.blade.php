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
            <a href="#">Add Sub Category</a>
        </li>
    </ul>
<div class="row-fluid sortable">
  @include('includes.message')
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add New Sub Category</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
        <form class="form-horizontal" action="{{route('save-subCategory')}}" method="post">
          @csrf;
              <fieldset>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Category Name</label>
                    <div class="controls">
                      <select class="form_control" name="category_id" id="">
                          <option value="#">Select Your Category</option>
                          @foreach ($data as $row)
                            <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                          @endforeach
                          
                      </select>
                    </div>
                </div> 
                <div class="control-group">
                  <label class="control-label" for="typeahead">Sub Category Name</label>
                  <div class="controls">
                    <input type="text" class="span6 typeahead" name="subCategory_name" id="typeahead" >
                  </div>
                </div>        
                <div class="control-group hidden-phone">
                  <label class="control-label" for="textarea2">Sub Category Description</label>
                  <div class="controls">
                    <textarea class="cleditor" name="subCategory_description" id="textarea2" rows="3"></textarea>
                  </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Sub Category Status</label>
                    <div class="controls">
                      <input type="checkbox" name="status" id="date01" value="1">
                    </div>
                  </div>
                <div class="form-actions">
                  <button type="submit" class="btn btn-primary">Add Sub Category</button>
                  <a href="{{ url()->previous() }}" class="btn">Cancle</a>
                </div>
              </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
@endsection
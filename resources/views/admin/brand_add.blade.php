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
            <a href="#">Add Brand</a>
        </li>
    </ul>
<div class="row-fluid sortable">
  @include('includes.message')
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add New Brand</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
        <form class="form-horizontal" action="{{route('save-Brand')}}" method="post">
          @csrf;
              <fieldset>
                <div class="control-group">
                  <label class="control-label" for="typeahead">Brand Name</label>
                  <div class="controls">
                    <input type="text" class="span6 typeahead" name="brand_name" id="typeahead" >
                  </div>
                </div>        
                <div class="control-group hidden-phone">
                  <label class="control-label" for="textarea2">Brand Description</label>
                  <div class="controls">
                    <textarea class="cleditor" name="brand_description" id="textarea2" rows="3"></textarea>
                  </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Brand Status</label>
                    <div class="controls">
                      <input type="checkbox" name="status" id="date01" value="1">
                    </div>
                  </div>
                <div class="form-actions">
                  <button type="submit" class="btn btn-primary">Add Brand</button>
                  <button type="reset" class="btn">Cancel</button>
                </div>
              </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
@endsection
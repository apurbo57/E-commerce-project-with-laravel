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
            <a href="#">Edit Product</a>
        </li>
    </ul>
<div class="row-fluid sortable">
  @include('includes.message')
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Product</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
        <form class="form-horizontal" action="{{route('update-product')}}" method="post" enctype="multipart/form-data">
          @csrf;
              <fieldset>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Brand Name</label>
                    <div class="controls">
                      <select class="form_control" name="brand_id" id="">
                          <option value="#">Select Your Brand</option>
                          @foreach ($brand as $brands)
                            <option @if ($row->brand_id == $brands->id)
                              selected = "selected"
                            @endif value="{{ $brands->id }}">{{ $brands->brand_name }}</option>
                          @endforeach
                          
                      </select>
                    </div>
                </div> 
                <div class="control-group">
                    <label class="control-label" for="typeahead">Category Name</label>
                    <div class="controls">
                      <select class="form_control" name="cat_id" id="">
                          <option value="#">Select Your Category</option>
                          @foreach ($category as $categorys)
                            <option @if ($row->cat_id == $categorys->id)
                              selected = "selected"
                            @endif value="{{ $categorys->id }}">{{ $categorys->category_name }}</option>
                          @endforeach
                          
                      </select>
                    </div>
                </div> 
                <div class="control-group">
                    <label class="control-label" for="typeahead">Subcategory Name</label>
                    <div class="controls">
                      <select class="form_control" name="subcat_id" id="">
                          <option value="#">Select Your Subcategory</option>
                          @foreach ($subCategory as $sbcat)
                            <option @if ($row->subcat_id == $sbcat->id)
                              selected = "selected"
                            @endif value="{{ $sbcat->id }}">{{ $sbcat->subCategory_name }}</option>
                          @endforeach
                          
                      </select>
                    </div>
                </div> 
                <div class="control-group">
                  <label class="control-label" for="typeahead">Product Name</label>
                  <div class="controls">
                    <input type="hidden" class="span6 typeahead" name="product_id" value="{{ $row->id }}" id="typeahead" >
                    <input type="text" class="span6 typeahead" name="product_name" value="{{ $row->product_name }}" id="typeahead" >
                  </div>
                </div>   
                <div class="control-group">
                    <label class="control-label" for="typeahead">Product Model</label>
                    <div class="controls">
                      <input type="text" class="span6 typeahead" name="product_model" value="{{ $row->product_model }}" id="typeahead" >
                    </div>
                  </div> 
                  <div class="control-group">
                    <label class="control-label" for="typeahead">Product Color</label>
                    <div class="controls">
                      <input type="text" class="span6 typeahead" name="product_color" value="{{ $row->product_color }}" id="typeahead" >
                    </div>
                  </div>   
                  <div class="control-group">
                    <label class="control-label" for="typeahead">Product Size</label>
                    <div class="controls">
                      <input type="text" class="span6 typeahead" name="product_size" value="{{ $row->product_size }}" id="typeahead" >
                    </div>
                  </div> 
                  <div class="control-group">
                    <label class="control-label" for="typeahead">Product Quantity</label>
                    <div class="controls">
                      <input type="number" class="span6 typeahead" name="product_quantity" value="{{ $row->quantity }}" id="typeahead" >
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="typeahead">Product Price</label>
                    <div class="controls">
                      <input type="number" class="span6 typeahead" name="product_price" value="{{ $row->price }}" placeholder="00.00" id="typeahead" >
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="typeahead">Product Special Price</label>
                    <div class="controls">
                      <input type="number" class="span6 typeahead" name="special_price" value="{{ $row->special_price }}" placeholder="00.00" id="typeahead" >
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="typeahead">Special Price Start</label>
                    <div class="controls">
                      <input type="date" class="span6 typeahead" name="sp_start" value="{{ $row->sp_start }}" placeholder="00.00" id="typeahead" >
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="typeahead">Special Price End</label>
                    <div class="controls">
                      <input type="date" class="span6 typeahead" name="sp_end" value="{{ $row->sp_end }}" placeholder="00.00" id="typeahead" >
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="typeahead">Product Image</label>
                    <div class="controls">
                      <img src="{{ asset('uploads/product/'. $row->image) }}" width="300px" height="120px" alt="Image"> <br>
                      <input type="file" class="span6 typeahead" name="product_image" id="typeahead" >
                    </div>
                  </div>
                  <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Product Description</label>
                    <div class="controls">
                      <textarea class="cleditor" name="product_description" id="textarea2" rows="2">{{ $row->description }}</textarea>
                    </div>
                  </div>
                <div class="control-group hidden-phone">
                  <label class="control-label" for="textarea2">Product Long Description</label>
                  <div class="controls">
                    <textarea class="cleditor" name="product_longdescription" id="textarea2" rows="3">{{ $row->long_description }}</textarea>
                  </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Product Status</label>
                    <div class="controls">
                      <input type="checkbox" name="product_status" id="date01" value="{{ $row->status }}">
                    </div>
                  </div>
                <div class="form-actions">
                  <button type="submit" class="btn btn-primary">Update Product</button>
                  <a href="{{ url()->previous() }}" class="btn">Cancle</a>
                </div>
              </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
@endsection
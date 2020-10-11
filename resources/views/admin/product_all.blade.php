@extends('admin_layout')
@section('admin_content')
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{route('dashboard')}}">Dashboard</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">All Product</a></li>
</ul>
@include('includes.message')
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>All Product List</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                  <tr>
                      <th>Serial No.</th>
                      <th>Product Name</th>
                      <th>Product Model</th>
                      <th>Brand Name</th>
                      <th>Category Name</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th>Actions</th>
                  </tr>
              </thead>   
              <tbody>
                @php($i=1)
                @foreach ($data as $datas)
                    
                <tr>
                    <td>{{ $i }}</td>
                    <td class="center">{{ $datas->product_name }}</td>
                    <td class="center">{{ $datas->product_model }}</td>
                    <td class="center">{{ $datas->brand->brand_name }}</td>
                    <td class="center">{{ $datas->category->category_name }}</td>
                    <td>
                        <img width="60px" height="60px" src="{{ asset('uploads/product/'. $datas->image) }}" alt="">
                    </td>
                    <td class="center">
                        @if ($datas->status==1)
                        <span class="label label-success">Active</span>
                        @else
                        <span class="label label-danger">Inctive</span>
                        @endif
                        
                    </td>
                    <td class="center">
                        @if ($datas->status==0)
                                <a class="btn btn-success" href="{{route('p_active-status',$datas->id)}}">
                                <i class="halflings-icon white thumbs-down"></i>  
                            </a>
                        @else 
                            <a class="btn btn-danger" href="{{route('p_inactive-status',$datas->id)}}">
                                <i class="halflings-icon white thumbs-up"></i>  
                            </a>
                        @endif
                        
                        <a class="btn btn-info" href="{{route('edit-product',$datas->id)}}">
                            <i class="halflings-icon white edit"></i>  
                        </a>
                        <a class="btn btn-danger" href="{{route('delete-product',$datas->id)}}">
                            <i class="halflings-icon white trash"></i> 
                        </a>
                    </td>
                </tr>
                @php($i++)
                @endforeach
              </tbody>
          </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->
@endsection
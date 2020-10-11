@extends('admin_layout')
@section('admin_content')
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{route('dashboard')}}">Dashboard</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">All Category</a></li>
</ul>
@include('includes.message')
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>All Category List</h2>
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
                      <th>Category Name</th>
                      <th>Category Description</th>
                      <th>Status</th>
                      <th>Actions</th>
                  </tr>
              </thead>   
              <tbody>
                @php($i=1)
                @foreach ($data as $datas)
                    
                <tr>
                    <td>{{ $i }}</td>
                    <td class="center">{{ $datas->category_name }}</td>
                    <td class="center">{{ $datas->category_description }}</td>
                    <td class="center">
                        @if ($datas->status==1)
                        <span class="label label-success">Active</span>
                        @else
                        <span class="label label-danger">Inctive</span>
                        @endif
                        
                    </td>
                    <td class="center">
                        @if ($datas->status==0)
                                <a class="btn btn-success" href="{{route('active-status',$datas->id)}}">
                                <i class="halflings-icon white thumbs-down"></i>  
                            </a>
                        @else 
                            <a class="btn btn-danger" href="{{route('inactive-status',$datas->id)}}">
                                <i class="halflings-icon white thumbs-up"></i>  
                            </a>
                        @endif
                        
                        <a class="btn btn-info" href="{{route('edit-category',$datas->id)}}">
                            <i class="halflings-icon white edit"></i>  
                        </a>
                        <a class="btn btn-danger" href="{{route('delete-category',$datas->id)}}">
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

@include('includes.message')
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>All Sub Category List</h2>
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
                      <th>Sub Category Name</th>
                      <th>Sub Category Description</th>
                      <th>Status</th>
                      <th>Actions</th>
                  </tr>
              </thead>   
              <tbody>
                @php($i=1)
                @foreach ($subcategory as $subCat)
                    
                <tr>
                    <td>{{ $i }}</td>
                    <td class="center">{{ $subCat->category->category_name }} -> {{ $subCat->subCategory_name }}</td>
                    <td class="center">{{ $subCat->subCategory_description }}</td>
                    <td class="center">
                        @if ($subCat->status==1)
                        <span class="label label-success">Active</span>
                        @else
                        <span class="label label-danger">Inctive</span>
                        @endif
                        
                    </td>
                    <td class="center">
                        @if ($subCat->status==0)
                                <a class="btn btn-success" href="{{route('sub_active-status',$subCat->id)}}">
                                <i class="halflings-icon white thumbs-down"></i>  
                            </a>
                        @else 
                            <a class="btn btn-danger" href="{{route('sub_inactive-status',$subCat->id)}}">
                                <i class="halflings-icon white thumbs-up"></i>  
                            </a>
                        @endif
                        
                        <a class="btn btn-info" href="{{route('edit-subcategory',$subCat->id)}}">
                            <i class="halflings-icon white edit"></i>  
                        </a>
                        <a class="btn btn-danger" href="{{route('delete-subcategory',$subCat->id)}}">
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
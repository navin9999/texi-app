
@extends('layouts.main')

@section('content')
 
 
<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 mb-0">Add  Category</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="/admin_cat_list">Category</a>
                                    </li>
                                    <li class="breadcrumb-item active">Add  Category
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Simple Validation start -->
                <section class="simple-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add  Category</h4>
                                    @if(session()->has('message'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                          <strong>{{ session()->get('message') }}</strong>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                      
                                    @endif
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                         <form action="/admin_cat_add_store" method="post"class="form-horizontal" novalidate enctype="multipart/form-data">
                                             {{ csrf_field() }}
                                            <div class="row">
                                               

                                                 <div class="col-sm-6">
                                                    <div class="form-group">
                                                            <label for="parent">Parent Category</label>
                                                            <select name="parent_id" id="parent_id" class="form-control select2">
                                                                <option value="" >None </option>
                                                                @foreach($categories as $cat)
<!-- wait 5 mint
 -->                                                                    <option value="{{ $cat->id  }}" >{{ $cat->cat_name  }}  


                                                                                    @foreach($categories as $c)

                                                                        @if( $cat->parent_id == $c->id)

                                                                         (  {{ $c->cat_name }}  )

                                                                         @endif
                                                                         @endforeach
                                                                     </option>
                                                                @endforeach
                                                               
                                                            </select>
                                                        </div> 
                                                                                       
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                             <label for="catname">Cat Name</label>

                                                            <input id="catname" type="text" name="cat_name" value="{{ old('name') }}" class="form-control" placeholder="First Name" required data-validation-required-message="This First Name field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                             <label for="catname">Full Description</label>
                                                            <textarea class="form-control ckeditor" name="description" id="description" rows="5" placeholder="Description" required="true">{{ old('description') }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                             <label for="cover">Image</label>
                                                            <input id="catname" type="file" name="image" class="form-control" 
                                                             required data-validation-required-message="cover image required">
                                                        </div>
                                                    </div>
                                                </div>

                                                 
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                       <label for="status">Status</label>
                                                            <select name="status" id="status" class="form-control controls">

                                                                <option value="0">Disable</option>
                                                                <option value="1">Enable</option>
                                                               
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Validation end -->

                
            </div>
        </div>
    </div>


  <script src="//cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>


   @endsection
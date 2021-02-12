@extends('layouts.main')
@section('content')
<div class="app-content content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
      <div class="content-header row">
         <div class="content-header-left col-12 mb-2 mt-1">
            <div class="row breadcrumbs-top">
               <div class="col-12">
                  <h5 class="content-header-title float-left pr-1 mb-0">Category Tables</h5>
                  <div class="breadcrumb-wrapper col-12">
                     <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active">Category
                        </li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="content-body">
         <!-- Basic Tables start -->
         <section id="basic-datatable">
            <div class="row">
               <div class="col-12">
                  <div class="card">
                     <div class="card-header">
                        <h4 class="card-title">Category List</h4>
                        <a href="/admin_cat_add" class="float-right btn btn-primary btn-xs"> + Add New Cat</a>
                     </div>
                     <div class="card-content">
                        <div class="card-body card-dashboard">
                           <div class="table-responsive table-bordered">
                              <table class="table zero-configuration">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>  Category Name</th>
                                       <th>Descriptions</th>
                                       <th>   Sub Categories</th>
                                       <th>  Image</th>
                                       <th>  Parent_Id</th>
                                       <th>   Status</th>
                                       <th>  Actions</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @php $i=1; @endphp
                                    @foreach($categories as $category)
                                    <tr>
                                       <td>  @php echo $i++ @endphp </td>
                                       <td> {{ $category->cat_name }} 
                                          @foreach($categories as $c)
                                          @if( $category->parent_id == $c->id)
                                          (  {{ $c->cat_name }}  )
                                          @endif
                                          @endforeach
                                       </td>
                                       <td>{{ $category->description }} </td>
                                       <td><a href="/admin_sub_cat_list" class="btn btn-info btn-xs">Sub Cat</a></td>
                                       <td><img src="images/{{ $category->image }}" width="50" height="50"></td>
                                       <td>{{ $category->parent_id }} </td>
                                       <td>
                                          @if( $category->status == 1)
                                          Active
                                          @else
                                          Un active
                                          @endif
                                       </td>
                                       <td><a href="/admin_cat_edit/{{$category->id}}" class="btn btn-warning btn-sm ">Edit</a>
                                          <a href="{{'delete/'.$category->id}}" class="btn btn-sm btn-danger">Delete</a>
                                       </td>
                                    </tr>
                                   
                                    <tr>
                                        <input type="hidden" value="{{$category->parent_id}}" name="">
                                       <td>  @php echo $i++ @endphp </td>
                                       <td> {{ $category->cat_name }} 
                                        
                                       </td>
                                       <td>{{ $category->description }} </td>
                                       <td><a href="/admin_sub_cat_list" class="btn btn-info btn-xs">Sub Cat</a></td>
                                       <td><img src="images/{{ $category->image }}" width="50" height="50"></td>
                                       <td>{{ $category->parent_id }} </td>
                                       <td>
                                          @if( $category->status == 1)
                                          Active
                                          @else
                                          Un active
                                          @endif
                                       </td>
                                       <td><a href="/admin_cat_edit/{{$category->id}}" class="btn btn-warning btn-sm ">Edit</a>
                                          <a href="{{'delete/'.$category->id}}" class="btn btn-sm btn-danger">Delete</a>
                                       </td>
                                    </tr>
                                    @endforeach
                                 </tbody>
                                 <tfoot>
                                    <tr>
                                       <th>#</th>
                                       <th>  Category Name</th>
                                       <th>Descriptions</th>
                                       <th>   Sub Categories</th>
                                       <th>  Cover</th>
                                       <th>  Parent_Id</th>
                                       <th>   Status</th>
                                       <th>  Actions</th>
                                    </tr>
                                 </tfoot>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
</div>
<!-- END: Content-->
@endsection
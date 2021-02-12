<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories\category;

class CategoryController extends Controller
{
    //

     public function cat_list()
    {
        $data = category::all();
        return view('admin.category.category_list', ['categories'=>$data ] );
    }

    public function cat_add()
    {   
        $data = category::all();
        return view('admin.category.category_add',['categories'=>$data ]);
    }

       public function cat_add_srore(Request $req) {


        $cat=new category;


        if($req->parent_id==null){
         $cat->parent_id=0;

        }
        else {
            $cat->parent_id=$req->parent_id;
        }


        $cat->cat_name=$req->cat_name;
        $cat->description=$req->description;
        $cat['slug'] = str_replace(' ', '-', $cat['cat_name']);

       $req->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName = time().'.'.$req->image->extension();  
     
        $req->image->move(public_path('images'), $imageName);
  
        /* Store $imageName name in DATABASE from HERE */
        $cat->image=$imageName;
        $cat->save();
         return back()
            ->with('message','You have successfully upload Category.')
             ->with('image',$imageName); 	
    }

    public function cat_edit($id) { 

       $data = category::find($id);
       return view('admin.category.category_edit', ['data'=>$data ] );
    }

  
         public function cat_edit_update(Request $req) {

         
                $data=category::find($req->id);
               
                $data->cat_name=$req->cat_name;
                $data['slug'] = str_replace(' ', '-', $data['cat_name']);
                $data->description=$req->description;
                $req->validate([
                        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    ]);
                
                    $imageName = time().'.'.$req->image->extension();  
                 
                    $req->image->move(public_path('images'), $imageName);
              
                    /* Store $imageName name in DATABASE from HERE */
                $data->image=$imageName;
                $data->status=$req->status;
                $data->save();

               return back()
                            ->with('message','You have successfully Update Category.');
                          


                
            }

    public function cat_deleted($id) {
        $data=category::find($id);
        $data->delete();
        return redirect()->back()->with('message','You have successfully Delete Category.');
    }

}


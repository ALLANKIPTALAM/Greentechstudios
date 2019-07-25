<?php

namespace App\Http\Controllers\Photo;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User; 
use App\Photo;
use Auth;

class HomeController extends Controller
{
    //FUNCTION TO ADD PHOTO TO THE DB
        public function storePhoto(Request $request)
    {
        /**
        * validate the input fields
        **/
         //dd( $request );

        if( $request->hasFile('image_name'))
    { 
        //change file size in php.ini
        $this->validate($request,[
            'randomno'=>'required|max:255',
            'image_name' => 'required|image|mimes:jpeg,png,jpg,gif,svg,bmp|max:10240',
            'caption'=>'required',
            'description'=>'required|max:60',
            ]);

        $randomno=$request->randomno;
        $image = $request->file('image_name');
        $file=$_FILES['image_name']['tmp_name'];
        $image_name= addslashes($randomno.'_'.$_FILES['image_name']['name']);
        $input['image_name'] = addslashes($randomno.'_'.$_FILES['image_name']['name']);
        $destinationPath = 'siteimages/'; // your upload folder
        //dd($destinationPath);
        
        
        $user = Auth::user();
        $photo = new Photo(); 
        $photo ->updateOrCreate(['id'=>$request->id],[
            'photo_id'=>$request->randomno,
            'name'=>$image_name,
            'location' => $destinationPath . $image_name,
            'caption'=>$request->caption,
            'description'=>$request->description
            ]); 
        $image->move($destinationPath, $input['image_name']);
        if($photo){
            flash('Your photo has been uploaded successfully!')->info();
           return redirect()->back(); 
        }else{
           flash('Error uploading the photo!')->error();
           return redirect()->back();  
        } 
    } else {
        flash('No image was found!')->error();
           return redirect()->back();
    }

    }
     //END OF FUNCTION TO ADD PHOTO TO THE DB
}

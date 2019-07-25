<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Message;
use App\Photo;
use App\Subscriber;

class IndexController extends Controller
{


//To index/home page of the site
        public function HomeIndex()
    {
        $All_images = Photo::orderBy('id')->paginate(10);
        $Architecture_images = Photo::where('caption','=','Architecture')->get();
        $Exterior_images = Photo::where('caption','=','Exterior')->get();
        $Landscaping_images = Photo::where('caption','=','Landscaping')->get();
        $Interior_images = Photo::where('caption','=','Interior')->get();
            return view('index',[
            'All_images'=>$All_images,
            'Architecture_images'=>$Architecture_images,
            'Exterior_images'=>$Exterior_images,
            'Landscaping_images'=>$Landscaping_images,
            'Interior_images'=>$Interior_images
            ]);



       // $role=Auth::user()->role;
       //      if ($role=='Admin'){ 
       //         return redirect('Admin/dashboard')->send(); 
       //      }
       //      else if ($role=='SuperAdmin') {
       //          return redirect('Admin/dashboard')->send();
       //      }
       //      else {
       //          $request->session()->flush();
       //          return redirect('/logout')->send();
       //          }
        
    }

      public function privacy_terms()
    {
      return view('privacy_terms');
    }


//FUNCTION TO ADD COMMENT TO THE DB
        public function storeComment(Request $request)
    {
        /**
        * validate the input fields
        **/
         //dd( $request );
 
        $this->validate($request,[
            'name'=>'required|max:100',
            'email'=>'required',
            'comment'=>'required|max:60',
            ]);

        //dd($request);
        
        
       $comment = new Message();
        $comment ->updateOrCreate(['id'=>$request->id],[
            'name'=>$request->name,
            'email' => $request->email,
            'message'=>$request->comment
            ]); 
        
        if($comment){
            //echo "Success";
            //flash('comment sent successfully!')->info();
           return redirect()->back(); 
        }else{
            //echo "Error";
           //flash('Error sending your comment!')->error();
           return redirect()->back();  
        } 
    } 

    
     //END OF FUNCTION TO ADD COMMENT TO THE DB
    //FUNCTION TO ADD SUBSCRIBERS TO THE DB
        public function storeSubscriber(Request $request)
    {
        /**
        * validate the input fields
        **/
         //dd( $request );
 
        $this->validate($request,[
            'email_address'=>'required|unique:subscribers,email,'.$request->id,
            ]);
        
        
       $subscriber = new Subscriber();
        $subscriber ->updateOrCreate(['id'=>$request->id],[
            'email' => $request->email_address
            ]); 
        
        if($subscriber){
            //echo "Success";
            //flash('Subscription successful!')->info();
           return redirect()->back(); 
        }else{
            //echo "Error";
           //flash('Error subscribing!')->error();
           return redirect()->back();  
        } 
    } 

    
     //END OF FUNCTION TO ADD SUBSCRIBERS TO THE DB

    
}

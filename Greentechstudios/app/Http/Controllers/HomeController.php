<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Photo;
use App\Message;
use App\Subscriber;

        
class HomeController extends Controller
{




    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


        public function checkRole(Request $request)
    {
        $role=Auth::user()->role;
       
            if ($role=='Admin'){
               return redirect('Admin/dashboard')->send(); 
            }
            else if ($role=='SuperAdmin') {
                return redirect('Admin/dashboard')->send();
            }
            else {
                $request->session()->flush();
                return redirect('/logout')->send();
                }
        
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //flash('Welcome Aboard!'.'&nbsp;'.Auth::user()->name);
        $subscribers = Subscriber::orderBy('id')->paginate(10);
        return view('Admin.dashboard',[
            'subscribers'=>$subscribers
            ]);
    }
    //Upload photo page
    public function upload_photo()
    {
        //flash('Welcome Aboard!'.'&nbsp;'.Auth::user()->name);
        return view('Admin.upload_photo');
    }
       //Messages page
    public function messages()
    {
        $role=Auth::user()->role;
        $messages = Message::orderBy('id')->paginate(10);
        
        if ($role=='Admin') {
            return view('Admin.messages',[
            'messages'=>$messages
            ]);

        }
        else if ($role=='SuperAdmin') {
            return view('Admin.messages',[
            'messages'=>$messages
            ]);
        }
        else {
                //$request->session()->flush();
                return redirect('/logout')->send();
                }
        
       
    }


    /**
     * Show the whole message.
     *
     * @return \Illuminate\Http\Response
     */
    public function readMessage($id)
    {
        $messages = Message::where('id',$id)->get();
        $role=Auth::user()->role;
        if ($role=='Admin') {
            return view('Admin.read_message',[
            'messages'=>$messages
            ]);

        }
        else if ($role=='SuperAdmin') {
            return view('Admin.read_message',[
            'messages'=>$messages
            ]);
        }
        else {
                //$request->session()->flush();
                return redirect('/logout')->send();
                }
        
       
    }

           //Subscribers page
    public function subscribers()
    {
        $role=Auth::user()->role;
        $subscribers = Subscriber::orderBy('id')->paginate(10);
        
        if ($role=='Admin') {
            return view('Admin.subscribers',[
            'subscribers'=>$subscribers
            ]);

        }
        else if ($role=='SuperAdmin') {
            return view('Admin.subscribers',[
            'subscribers'=>$subscribers
            ]);
        }
        else {
                //$request->session()->flush();
                return redirect('/logout')->send();
                }
        
       
    }


       //media_gallery page
    public function media_gallery()
    {
        $role=Auth::user()->role;
        $photos = Photo::orderBy('id')->paginate(10);
        
        if ($role=='Admin') {
            return view('Admin.media_gallery',[
            'photos'=>$photos
            ]);

        }
        else if ($role=='SuperAdmin') {
            return view('Admin.media_gallery',[
            'photos'=>$photos
            ]);
        }
        else {
                //$request->session()->flush();
                return redirect('/logout')->send();
                }
        
       
    } 
    /**
    * delete message from the db
    **/
    public function destroyMessage(Request $request)
    {
        //dd($request);
        $deleteMessage = Message::findOrFail($request->id);
        $deleteMessage->delete();
        
        if($deleteMessage){
            flash('Message deleted successfully!')->info();
           return redirect()->back(); 
        }else{
           flash('Error deleting the message!')->error();
           return redirect()->back(); 
        
        }
    }

    /**
    * delete message from the db
    **/
    public function destroySubscriber(Request $request)
    {
        //dd($request);
        $deleteSubscriber = Subscriber::findOrFail($request->id);
        $deleteSubscriber->delete();
        
        if($deleteSubscriber){
            flash('Subscriber deleted successfully!')->info();
           return redirect()->back(); 
        }else{
           flash('Error deleting the subscriber!')->error();
           return redirect()->back(); 
        
        }
    }

    /**
    * delete photo from the db
    **/
    public function destroyPhoto(Request $request)
    {
        //dd($request);
        $deletePhoto = Photo::findOrFail($request->id);
        $deletePhoto->delete();
        $image = \DB::table('photos')->where('id', $request->id)->first();
        $file= $request->file_path;
        //$filename = $file;
        //dd($filename);
        \File::delete($file);
        
        if($deletePhoto){
            flash('Photo deleted successfully!')->info();
           return redirect()->back(); 
        }else{
           flash('Error deleting the Photo!')->error();
           return redirect()->back(); 
        
        }
    }

}

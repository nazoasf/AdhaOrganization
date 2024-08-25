<?php

namespace App\Http\Controllers;
use App\Models\CharityUser;
use Illuminate\Http\Request;
use App\Models\projects;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Leadership;
use App\Models\Philantrophist;
use App\Models\Donate;
use App\Models\User;

class CharityController extends Controller
{
    public function home () {
        $rec = Gallery::OrderBy('id','desc')->take(4)->get(); 
        $phil = Philantrophist::OrderBy('id','desc')->get();
        $blog = Blog::OrderBy('id','desc')->take(3)->get(); 
        return view('HomePage',['record'=>$rec],['phil'=>$phil] ,['blog'=>$blog]);
       
    }

    // public function homeblog () {
    //     $blog = Blog::OrderBy('id','desc')->take(3)->get();
    //     return view('HomePage',['blog'=>$blog]);
       
    // }

    public function about () {
        $rec = Leadership::OrderBy('id','desc')->get(); 
        return view('about',['record'=>$rec]);
    }

    public function contact () {
        return view('contact');
    }

    public function sendmessage () {
        $objp  = new User();
        $objp -> name = request('name');
        $objp -> email = request('email');
        $objp -> message = request('message');
        $objp -> save();
        return redirect('/contact');  
                

   }



    public function blog () {
        $rec = Blog::OrderBy('id','desc')->get(); 
        return view('blog',['record'=>$rec]);
    }

    public function donate () {
        return view('donation');
    }

    public function insertDonations () {
         $objp  = new Donate();
            $objp -> full_name = request('name');
            $objp -> phoneNb = request ('phone');
            $objp -> email = request('email');
            $objp -> amount = request('amount');
            $objp -> comment = request('message');
            $objp -> save();
            return redirect('/home');        

    }

    public function projects () {
        $rec = projects::OrderBy('id','desc')->get(); 
        return view('projects', ['record'=>$rec]);
    }

    public function gallery () {
        $rec = Gallery::OrderBy('id','desc')->get(); 
        return view('gallery', ['record'=>$rec]);
    }

    
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
  
        Contact::create($request->all());
  
        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}
    


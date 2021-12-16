<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Contact;
use Illuminate\Http\Request;
use Session;
class FrontendController extends Controller
{
    public function index(){
        $gs  = \App\GeneralSettings::find(1);
        return view('index', compact('gs'));
    }
    public function ambition(){
        $gs  = \App\GeneralSettings::find(1);
        return view('ambition', compact('gs'));
    }
    public function privacy(){
        $gs  = \App\GeneralSettings::find(1);
        return view('privacy', compact('gs'));
    }
    public function terms(){
        $gs  = \App\GeneralSettings::find(1);
        return view('terms', compact('gs'));
    }
    public function objective(){
        $gs  = \App\GeneralSettings::find(1);
        return view('objective', compact('gs'));
    }
    public function comm(){
        return view('comm');
    }
    public function blog(){
        $blogs = Blog::all();
        return view('blog', compact('blogs'));
    }
    public function singlePost($id){
        $blog = Blog::find($id);
        return view('singlePost', compact('blog'));
    }
    public function advantage(){
        $gs  = \App\GeneralSettings::find(1);
        return view('advantage', compact('gs'));
    }
    public function contact(){
        return view('contact');
    }
    public function contactSubmit(Request $request){
        $contact = new Contact();
        $contact->fname = $request->fname;
        $contact->lname = $request->lname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
        $contact->message = $request->message;
        $contact->save();
        Session::flash('message', 'Ce créneau horaire est réservé à cette date. Vérifiez votre tableau de bord pour la disponibilité des machines à sous!');
        return redirect()->back();
    }
}

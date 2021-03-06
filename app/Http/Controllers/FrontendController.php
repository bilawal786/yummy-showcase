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
    public function parrainage(){
        $gs  = \App\GeneralSettings::find(1);
        return view('parrainage', compact('gs'));
    }
    public function ambass(){
        $gs  = \App\GeneralSettings::find(1);
        return view('ambass', compact('gs'));
    }
    public function coin(){
        $gs  = \App\GeneralSettings::find(1);
        return view('coin', compact('gs'));
    }
    public function mouv(){
        $gs  = \App\GeneralSettings::find(1);
        return view('mouv', compact('gs'));
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
        Session::flash('message', 'Ce cr??neau horaire est r??serv?? ?? cette date. V??rifiez votre tableau de bord pour la disponibilit?? des machines ?? sous!');
        return redirect()->back();
    }
}

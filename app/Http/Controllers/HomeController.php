<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Contact;
use App\GeneralSettings;
use Illuminate\Http\Request;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function contact(){
        $query = Contact::all();
        return view('admin.contact', compact('query'));
    }
    public function home(){
        $gs = GeneralSettings::find(1);
        return view('admin.home', compact('gs'));
    }
    public function settings(){
        $gs = GeneralSettings::find(1);
        return view('admin.settings', compact('gs'));
    }
    public function advantage(){
        $gs = GeneralSettings::find(1);
        return view('admin.advantage', compact('gs'));
    }
    public function ambitions(){
        $gs = GeneralSettings::find(1);
        return view('admin.ambitions', compact('gs'));
    }
    public function objectifs(){
        $gs = GeneralSettings::find(1);
        return view('admin.objectifs', compact('gs'));
    }
    public function privacy(){
        $gs = GeneralSettings::find(1);
        return view('admin.privacy', compact('gs'));
    }
    public function terms(){
        $gs = GeneralSettings::find(1);
        return view('admin.terms', compact('gs'));
    }
    public function pages(){
        $gs = GeneralSettings::find(1);
        return view('admin.pages', compact('gs'));
    }
    public function blog(){
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }
    public function blogcreate(){
        return view('admin.blog.create');
    }
    public function homeStore(Request $request){
        $gs = GeneralSettings::find(1);
        $gs->video = $request->video;
        $gs->d5 = $request->d5;
        $gs->d6 = $request->d6;
        $gs->d10 = $request->d10;
        $gs->d11 = $request->d11;
        $gs->d12 = $request->d12;
        if ($request->hasfile('d1')) {
            $image1 = $request->file('d1');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $gs->d1 = 'allimages/' . $name;
        }
        if ($request->hasfile('d4')) {
            $image2 = $request->file('d4');
            $name2 = time() . 'allimages' . '.' . $image2->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image2->move($destinationPath, $name2);
            $gs->d4 = 'allimages/' . $name2;
        }
        if ($request->hasfile('d7')) {
            $image3 = $request->file('d7');
            $name3 = time() . 'allimages' . '.' . $image3->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image3->move($destinationPath, $name3);
            $gs->d7 = 'allimages/' . $name3;
        }
        if ($request->hasfile('d8')) {
            $image4 = $request->file('d8');
            $name4 = time() . 'allimages' . '.' . $image4->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image4->move($destinationPath, $name4);
            $gs->d8 = 'allimages/' . $name4;
        }
        if ($request->hasfile('d9')) {
            $image9 = $request->file('d9');
            $name9 = time() . 'allimages' . '.' . $image9->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image9->move($destinationPath, $name9);
            $gs->d9 = 'allimages/' . $name9;
        }
        $gs->update();
        $notification = array(
            'messege' => 'Sauvegarde r??ussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function ambitionsStore(Request $request){
        $gs = GeneralSettings::find(1);
        $gs->d2 = $request->d2;
        if ($request->hasfile('d20')) {
            $image1 = $request->file('d20');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $gs->d20 = 'allimages/' . $name;
        }
        $gs->update();
        $notification = array(
            'messege' => 'Sauvegarde r??ussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function privacyStore(Request $request){
        $gs = GeneralSettings::find(1);
        $gs->privacy = $request->privacy;
        $gs->update();
        $notification = array(
            'messege' => 'Sauvegarde r??ussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function termsStore(Request $request){
        $gs = GeneralSettings::find(1);
        $gs->terms = $request->terms;
        $gs->update();
        $notification = array(
            'messege' => 'Sauvegarde r??ussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function objectifsStore(Request $request){
        $gs = GeneralSettings::find(1);
        $gs->d3 = $request->d3;
        if ($request->hasfile('d19')) {
            $image1 = $request->file('d19');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $gs->d19 = 'allimages/' . $name;
        }
        $gs->update();
        $notification = array(
            'messege' => 'Sauvegarde r??ussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function advantageStore(Request $request){
        $gs = GeneralSettings::find(1);
        $gs->about = $request->about;
        if ($request->hasfile('aboutimage')) {
            $image1 = $request->file('aboutimage');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $gs->aboutimage = 'allimages/' . $name;
        }
        $gs->update();
        $notification = array(
            'messege' => 'Sauvegarde r??ussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function settingsStore(Request $request){
        $gs = GeneralSettings::find(1);
        $gs->sitename = $request->sitename;
        $gs->email = $request->email;
        $gs->phone = $request->phone;
        $gs->address = $request->address;
        $gs->facebook = $request->facebook;
        $gs->instagram = $request->instagram;
        if ($request->hasfile('logo')) {
            $image1 = $request->file('logo');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $gs->logo = 'allimages/' . $name;
        }
        if ($request->hasfile('footer_logo')) {
            $image1 = $request->file('footer_logo');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $gs->footer_logo = 'allimages/' . $name;
        }
        $gs->update();
        $notification = array(
            'messege' => 'Sauvegarde r??ussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function blogStore(Request $request){
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;

        if ($request->hasfile('photo')) {
            $image1 = $request->file('photo');
            $name = time() . 'blog' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'blog/';
            $image1->move($destinationPath, $name);
            $blog->photo = 'blog/' . $name;
        }

        $blog->save();
        $notification = array(
            'messege' => 'Sauvegarde r??ussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function blogdelete($id){
        $blog = Blog::find($id);
        $blog->delete();
        $notification = array(
            'messege' => 'Supprim?? avec succ??s',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
    public function pagesStore(Request $request){
        $gs = GeneralSettings::find(1);
        $gs->d13 = $request->d13;
        $gs->d14 = $request->d14;
        $gs->d15 = $request->d15;
        if ($request->hasfile('d16')) {
            $image1 = $request->file('d16');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $gs->d16 = 'allimages/' . $name;
        }
        if ($request->hasfile('d17')) {
            $image2 = $request->file('d17');
            $name2 = time() . 'allimages' . '.' . $image2->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image2->move($destinationPath, $name2);
            $gs->d17 = 'allimages/' . $name2;
        }
        if ($request->hasfile('d18')) {
            $image3 = $request->file('d18');
            $name3 = time() . 'allimages' . '.' . $image3->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image3->move($destinationPath, $name3);
            $gs->d18 = 'allimages/' . $name3;
        }
        $gs->update();
        $notification = array(
            'messege' => 'Sauvegarde r??ussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}

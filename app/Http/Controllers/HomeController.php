<?php

namespace App\Http\Controllers;
use App\Models\Contact;

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
    public function index(Request $request)
    {
        if($request->has('search')){
            $contacts = Contact::where('judul', 'LIKE', '%' .$request->search. '%')->paginate(20);
        }else{
            $contacts = Contact::paginate(20);
        }
        return view('admin/home', compact('contacts'));
    }
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin/contacts/edit', compact('contact'));
    }
    public function detail($id)
    {
        $book = Contact::find($id);
        return view('/detail', compact('book'));
    }
    
}

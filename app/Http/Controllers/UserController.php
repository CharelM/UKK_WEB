<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $contacts = Contact::where('judul', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $contacts = Contact::All();
        }
        return view('/index', compact('contacts'));
    }
    public function detail($id)
    {
        $book = Contact::find($id);
        return view('/detail', compact('book'));
    }   
}

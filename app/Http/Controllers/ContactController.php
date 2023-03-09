<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
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
            $contacts = Contact::paginate(5);
        }
        return view('admin/contacts/index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts', [
            "title" => "Contacts"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $contact = Contact::create($request->all());
        if($request->hasFile('cover')){
            $request->file('cover')->move('coverbuku/', $request->file('cover')->getClientOriginalName());
            $contact->cover = $request->file('cover')->getClientOriginalName();
            $contact->save();
        }
        return redirect()->route('contacts.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin/contacts/edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());
        if($request->hasFile('cover')){
            $request->file('cover')->move('coverbuku/', $request->file('cover')->getClientOriginalName());
            $contact->cover = $request->file('cover')->getClientOriginalName();
            $contact->save();
        }
        $contact->save();

        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('contacts.index');
    }
}

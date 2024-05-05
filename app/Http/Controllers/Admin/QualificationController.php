<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Qualification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showEducation()
    {
        $auth_user = Auth::user();

        $educations = Qualification::where('type',['Education'])->orderBy('id')->get();
        return view('admin.qualification.edu',compact('educations','auth_user'));
    }

    public function showExperience()
    {
        $auth_user = Auth::user();

        $experiences = Qualification::where('type',['Work'])->orderBy('id')->get();
        return view('admin.qualification.exp', compact('experiences','auth_user'));
    }

    public function index()
    {
        $auth_user = Auth::user();

        $qualifications = Qualification::all();
        return view('admin.qualification.index', compact('qualifications','auth_user'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $auth_user = Auth::user();

        return view('admin.qualification.create','auth_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *     
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'association' => 'required|min:3',
            'description' => 'required|min:3',
            'type'=> 'required',
            'from'=> 'required|min:4',
            'to'=> 'required|min:4'
        ]);
                // dd($validated);

        Qualification::create($validated);
        return to_route('admin.qualification.edu')->with('message','New Qualification Added');
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
    public function edit(Qualification $qualification)
    {
        $auth_user = Auth::user();

        return view('admin.qualification.edit', compact('qualification','auth_user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Qualification $qualification)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'association' => 'required|min:3',
            'description' => 'required|min:3',
            'type'=> 'required',
            'from'=> 'required|min:4',
            'to'=> 'required|min:4'
        ]);
                // dd($validated);

        $qualification->update($validated);
        if($request['type']== 'Education'){
            return to_route('admin.qualification.edu')->with('message','Education Updated');
        }else{
            return to_route('admin.qualification.exp')->with('message','Experience Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qualification $qualification)
    {
        $qualification -> delete();
        return back()->with('message', 'Qualification Deleted');
    }
}

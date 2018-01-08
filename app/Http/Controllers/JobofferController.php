<?php

namespace App\Http\Controllers;

use App\company;
use App\Http\Requests\AddJobRequest;
use App\joboffer;
use Illuminate\Http\Request;

class JobofferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $joboffers = joboffer::limit(5)->get();
        //        $products=Product::orderBy('created_at','desc');

        return view('joboffer.index', ['joboffers' => $joboffers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies=company::all();
        return view('joboffer.create', ['companies' => $companies]);
    }
    public function motdesc(mot $mot)
    {
        //if joboffer->contains($joboffer->description))
        return "mot";

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddJobRequest $request)
    {
        $joboffers = joboffer::create($request->only('title', 'description',
            'date','skills','company_id'));
        return view ('joboffer.index', compact('joboffers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $joboffers = joboffer::find($id);

        return view('joboffer.show',['joboffers'=>$joboffers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(joboffer $joboffer)
    {
        $companies= company::all();

        return view('joboffer.edit',['joboffer'=>$joboffer],['companies'=>$companies]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AddJobRequest $request, joboffer $joboffer)
    {
        $joboffer->title =$request->get('title');
        $joboffer->description =$request->get('description');
        $joboffer->date =$request->get('date');
        $joboffer->skills =$request->get('skills');

        $joboffer->companies()->associate($request->get('companies'));
        $joboffer->save();
        return redirect()->route('joboffer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(joboffer $joboffer)
    {
        $joboffer->delete();return redirect()->route('joboffer.index');
    }
}

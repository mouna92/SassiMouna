@extends('layouts.app')

@section('content')

    <div class="col-md-6 col-md-offset">
        <div class="panel-heading">
            <h3>Nom du job: {{$joboffers->title}}</h3>
            <h3>Description: {{$joboffers->description}}</h3>
            <h3>Date : {{$joboffers->date}}</h3>
            <h3>Skills : {{$joboffers->skills}}</h3>
            <h3>created time : {{$joboffers->created_at}}</h3>
            <h3>updated time : {{$joboffers->updated_at}}</h3>
            <h3>Company : {{$joboffers->companies->name}}</h3>
             <a href="{{route('joboffer.destroy', $joboffers->id)}}" class="btn btn-success">Delete</a>


        </div>
    </div>



@endsection
@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-offset">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>update offer</h3>

                    </div>
                    <div class="panel-body">
                        <form action="{{route('joboffer.update', $joboffer)}}" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <h3>Nom : </h3>
                                <input type="text" placeholder="Regular" class="form-control" name="title"
                                       value="{{$joboffer->title}}">
                                <h3>Auteur : </h3>

                                <input type="text" placeholder="Regular" class="form-control" name="description"
                                       value="{{$joboffer->description}}">
                                <h3>Date de sortie : </h3>

                                <input type="date" placeholder="Regular" class="form-control" name="date"
                                       value="{{$joboffer->date}}">
                                <h3>genre : </h3>

                                <input type="text" placeholder="Regular" class="form-control" name="skills"
                                       value="{{$joboffer->skills}}">

                                <h3>Company : </h3>

                                <select name="companies">
                                    @foreach($companies as $company)
                                        <option value="{{$company->id}}" id=""
                                                {{ $joboffer->companies->id == $company->id ? 'selected' : '' }}

                                        >
                                            {!! $company->name !!}</option>
                                    @endforeach

                                </select>
                                <br>
                                <br>
                                <input type="submit" class="btn btn-success" value="update">

                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection





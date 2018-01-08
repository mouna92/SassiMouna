@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <table class="table">
            <thead>
            <tr>
                <th class="text-center"></th>
                <th>Company</th>
                <th>Joboffer</th>

            </tr>
            </thead>
            <tbody>
            @foreach($companies as $company)

            <tr>
                <td class="text-center">{{$company->id}}</td>
                <td>{{$company->name}}</td>
                <td> @foreach($joboffers as $joboffer)
                        @if($joboffer->company_id==$company->id)
                            <ul><li>{{$joboffer->title}}
                                    @if(Auth::user()->joboffers->contains($joboffer->id))
                                        <a href="{{route('removefavori', $joboffer->id)}}" class="btn btn-success">retirer favoris</a>
                                    @else
                                        <a href="{{route('addfavori', $joboffer->id)}}" class="btn btn-success">ajouter favoris</a>
                                    @endif
                                </li></ul>                      @endif  @endforeach </td>

                {{ csrf_field() }}




            </tr>
            @endforeach

            </tbody>
        </table>

    </div>
</div>
@endsection
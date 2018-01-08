@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th class="text-center">id</th>
                    <th>title</th>
                    <th>description</th>
                    <th>date</th>
                    <th>skills</th>
                    <th>company</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                @foreach($joboffers as $joboffer)

                    <tr>
                        <td class="text-center">{{$joboffer->id}}</td>
                        <td>{{ $joboffer->title }}</td>
                        <td>{{ $joboffer->description }} </td>
                        <td>{{ $joboffer->date}} </td>
                        <td>{{ $joboffer->skills }} </td>
                        <td>{{ $joboffer->companies->name }} </td>
                        <td class="td-actions text-right">
                            <form action="{{ route('joboffer.destroy', $joboffer) }}" method="post">
                            <a href="{{ route('joboffer.show', $joboffer->id) }}" class="btn btn-primary">Details</a><br>
                            <a href="{{ route('joboffer.edit', $joboffer) }}" class="btn btn-success">Update</a><br>

                                <input type="hidden" name="_method" value="DELETE">
                                {{ csrf_field() }}
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>



                        </td>




                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection
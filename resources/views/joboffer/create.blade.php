@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Creer un nouveau job</h3>
                </div>
                <div class="panel-body">
                    <form action="{{ route('joboffer.store') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title" class="col-sm-3 control-label">Title :</label>
                            <div class="col-sm-9">
                                <input name="title" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-3 control-label">Decription :</label>
                            <div class="col-sm-9">
                                <input name="description" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date" class="col-sm-3 control-label">Date :</label>
                            <div class="col-sm-9">
                                <input name="date" type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="skills" class="col-sm-3 control-label">Skills :</label>
                            <div class="col-sm-9">
                                <input name="skills" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company_id" class="col-sm-3 control-label">Company :</label>
                            <div class="col-sm-9">
                                <select name="company_id" id="company_id" class="form-control">
                                    @foreach($companies as $company)
                                        <option value="{{$company->id}}">{{$company->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-3">
                                <button class="btn btn-default" type="submit">Créer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
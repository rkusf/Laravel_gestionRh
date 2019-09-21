@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('biodata.update',$biodata->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-12">
          <strong>Nom :</strong>
          <input type="text" name="nom" class="form-control" value="{{$biodata->nom}}">
        </div>
        <div class="col-md-12">
          <strong>Prenom :</strong>
          <textarea class="form-control" name="prenom" rows="8" cols="80">{{$biodata->prenom}}</textarea>
        </div>
        <div class="col-md-12">
          <strong>Fonction :</strong>
          <textarea class="form-control" name="fonction" rows="8" cols="80">{{$biodata->fonction}}</textarea>
        </div>
        <div class="col-md-12">
          <strong>Attestation de travail:</strong>
          <textarea class="form-control" name="attestation_1" rows="8" cols="80">{{$biodata->attestation_1}}</textarea>
        </div>
        <div class="col-md-12">
          <strong>Attestation de transport :</strong>
          <textarea class="form-control" name="attestation_2" rows="8" cols="80">{{$biodata->prenom}}</textarea>
        </div>

        <div class="col-md-12">
          <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection

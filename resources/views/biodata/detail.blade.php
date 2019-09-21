@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail </h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Nom: </strong> {{$biodata->nom}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Prenom : </strong> {{$biodata->prenom}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Fonction : </strong> {{$biodata->fonction}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <a href= "{{$biodata->attestation_2}}">Attestation de travail</a>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
           <a href="{{$biodata->attestation_2}}">Attestation de transport</a>
        </div>
      </div>
      

      <div class="col-md-12">
        <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection

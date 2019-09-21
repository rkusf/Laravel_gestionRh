@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>New one</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there are some problems with your inputs.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('biodata.store')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <strong>Nom :</strong>
          <input type="text" name="nom" class="form-control" placeholder="Nom">
        </div>
        <div class="col-md-12">
          <strong>Prenom :</strong>
          <input type="text" name="prenom" class="form-control" placeholder="Prenom">
        </div>
        <div class="col-md-12">
          <strong>Fonction :</strong>
          <input type="text" name="fonction" class="form-control" placeholder="Fonction">
        </div>
        <div class="col-md-12">
          <strong>Attestation de travail :</strong>
          <input type="text" name="attestation_1" class="form-control" placeholder="Attestation de travail ">
        </div>
        <div class="col-md-12">
          <strong>Permission de transport :</strong>
          <input type="text" name="attestation_2" class="form-control" placeholder="Permission de transport">
        </div>
        

        <div class="col-md-12">
          <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection

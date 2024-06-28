@extends('layout.form')
@section('content')
<form id="quickForm" action="/createCast" method="post">
  @csrf
<div class="card-body">
    <div class="form-group">
      <label for="inputCast">Cast name</label>
      <input type="text" name="name" class="form-control" id="inputCast" placeholder="Enter Cast Name">
      <label for="inputBio">bio</label>
      <input type="text" name="bio" class="form-control" id="inputBio" placeholder="Enter Bio">
      <label for="inputUmur">Umur</label>
      <input type="integer" name="umur" class="form-control" id="inputUmur" placeholder="Enter Umur">
    </div>
  </div>

    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  @endsection
@extends('layouts.app')

@section('heading')
Suppliers
@endsection

@section('content')
<form>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan nama">
        
      </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan email">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="masukan password">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

    <a href="{{route('suppliers.edit')}}" class="btn btn-info">
      <i class="fa fa-pencil-alt"></i>
      </a>
      <form action="#" method="post" class="d-inline">
      @csrf
  @method('delete')
  <button class="btn btn-danger">
       <i class="fa fa-trash"></i>
  
  
@endsection

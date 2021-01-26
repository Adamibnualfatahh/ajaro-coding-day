@extends('layouts.app')

@section('heading')
Edit Category
@endsection

@section('content')
<form>
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
    <div class="mb-3">
        <button class="btn btn-secondary">Submit</button>
    </div>
</form>
@endsection

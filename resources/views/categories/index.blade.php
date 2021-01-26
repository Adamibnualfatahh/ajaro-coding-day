@extends('layouts.app')

@section('heading')
Categories
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>Judul kategori</td>
                    <td>
                        <a href="{{route('categories.edit')}}" class="btn btn-info">
                            <i class="fa fa-pencil-alt"></i>
                            </a>
                            <form action="#" method="post" class="d-inline">
                            @csrf
                        @method('delete')
                        <button class="btn btn-danger">
                             <i class="fa fa-trash">
                    </td>
                </tr>
        </tbody>
    </table>
@endsection

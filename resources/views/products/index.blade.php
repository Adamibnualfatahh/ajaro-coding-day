@extends('layouts.app')

@section('heading')
Products
<br>
<a href="" class="btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Gallery
</a>
@endsection


@section('content')

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Purchase Price</th>
                <th>Sale Price</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>1</td>
                    <td>NAMA BARANG</td>
                    <td>Barang Langka</td>
                    <td>$20</td>
                    <td>$50</td>
                    <td>10</td>
                    <td>
                        <a href="{{route('products.edit')}}" class="btn btn-info">
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

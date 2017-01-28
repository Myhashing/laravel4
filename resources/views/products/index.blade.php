@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Product
                </div>
            <div class="panel-body">
                <form action="/products" method="post" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="product-name" class="col-sm-3 control-label"> Product name</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" id="product-name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="product-web" class="col-sm-3 control-label"> Product Web</label>
                        <div class="col-sm-6">
                            <input type="text" name="web_link" id="product-web" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="supplier-name" class="col-sm-3" id="supplier-name">Suppler name</label>
                        <div class="col-sm-6">
                            <select name="supplier[]" multiple class="form-control" id="supplier-list">
                                @foreach($supplierList as $supplier)
                                    <option value="{{ $supplier['id'] }}" {{ $supplier['selected'] }}>{{ $supplier['name'] }}</option>
                                @endforeach
                            </select>                        </div>
                    </div>
                    <div>
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-plus"></i>Add product
                            </button>
                        </div>
                    </div>
                </form>
            </div>

                <div>
                    @if(count($productList)>0)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Current Product List
                            </div>
                        <div class="panel-body">
                            <table class="table table-striped product-table">
                                <thead>
                                <th>Product</th>
                                </thead>
                                <tbody>
                        @foreach($productList as $product)
                            <tr>
                                <!-- Product Name -->
                                <td class="table-text">
                                    <div>Product name : {{ $product->name }}</div>
                                </td>
                                <td class="table-text">
                                   Product Web:  {{ $product->web_link }}
                                </td>
                                <td class="table-text">
                                    @foreach($supplierList as $supplier)
                                        @if($supplier->id=== $product->supplier_id)
                                            supplier name:  {{ $supplier->name }}
                                            @endif
                                        @endforeach
                                </td>
                                <!-- Product show Button-->
                                <td>
                                    <form action="/products/{{ $product->id }}" method="get">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-info">
                                            <i class="fa fa-btn fa-box"></i>
                                            show Product</button>
                                    </form>
                                </td>
                                <!-- Product Delete Button-->
                                <td>
                                    <form action="/products/{{ $product->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i>
                                            Delete Product</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                                </tbody>
                    @else
                    <div>No resutls</div>
                    @endif
                    </table>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection
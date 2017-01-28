@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->
    <div class="container">

        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Current Product Profile
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped supplier-table">
                                <thead>
                                <th>Product</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <!-- Product Name -->
                                    <td class="table-text">
                                        <div>Product name : {{ $product->name }}</div>
                                    </td>
                                    <td class="table-text">
                                       <div> Product Web:  {{ $product->web_link }}</div>
                                    </td>
                                <!-- related products Show Button
                                <td>
                                    <form action="/suppliers/products/" method="post">

                                        <button type="submit" class="btn btn-info">

                                            show related products</button>
                                    </form>
                                </td> -->

                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
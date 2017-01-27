<html>
<head>
    <title>Suppliers</title>
</head>
<body>
<div class="panel panel-default">
    <form action="/suppliers" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="supplier-name" class="col-sm-3 control-label"> Supplier name</label>
            <div class="col-sm-6">
                <input type="text" name="name" id="supplier-name" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="supplier-web" class="col-sm-3 control-label"> Supplier Web</label>
            <div class="col-sm-6">
                <input type="text" name="web" id="supplier-web" class="form-control">
            </div>
        </div>
        <div>
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i>Add supplier
                </button>
            </div>
        </div>
    </form>
</div>

<div>
    @if(count($suppliers1)>0)
        @foreach($suppliers1 as $supplier)
            <tr>
                <!-- Supplier Name -->
                <td class="table-text">
                    <div>Supplier name : {{ $supplier->name }}</div>
                </td>
                <td class="table-text">
                   Supplier Web:  {{ $supplier->web }}
                </td>
                <td>
                    <form action="/suppliers/{{ $supplier->id }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button>Delete Supplier</button>
                    </form>
                </td>
            </tr>
        @endforeach
    @else
    <div>No resutls</div>
        @endif
</div>
</body>
</html>
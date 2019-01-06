<table class="table table-bordered">
    <thead>
        <tr>
            <td width="80">Action</td>
            <td>Name</td>
            <td>Model</td>
            <td>Price</td>
            <td>Stock</td>
        </tr>
    </thead>
    <tbody>
         
        @foreach($products as $product)

            <tr>
                <td>
                {!! Form::open(['method' => 'DELETE', 'route' => ['backend.products.destroy', $product->id]]) !!}
                    <a href="{{ route('backend.products.edit', $product->id) }}" class="btn btn-xs btn-default">
                        <i class="fa fa-edit"></i>
                    </a>
                    @if($product->id == 1000)
                        <button onclick="return false" type="submit" class="btn btn-xs btn-danger disabled">
                            <i class="fa fa-times"></i>
                        </button>
                    @else
                        <button onclick="return confirm('Are you sure?');" type="submit" class="btn btn-xs btn-danger">
                            <i class="fa fa-times"></i>
                        </button>
                    @endif
                {!! Form::close() !!}
                </td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->model }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
            </tr>

        @endforeach
    </tbody>
</table>

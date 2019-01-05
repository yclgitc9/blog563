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
                
                <td>{{ $product->name }}</td>
                <td>{{ $product->model }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
            </tr>

        @endforeach
    </tbody>
</table>

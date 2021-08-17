@extends('admin.layout.layout')

@section('content')
<div class="x_title">
            <h2>Product List</h2>
          
            <div class="clearfix"></div>
          </div>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>S.no</th>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Price</th>
             <th>Quantity</th>
            <th> Expiry Date</th>
           
            <th>Image</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $key=>$product )
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
           
            <td>{{ $product->price }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product-> expirydate}}</td>
            
        
            <td><img style="height: 80px;width:80px;" src="{{ asset('uploads/'.$product->image) }}" alt=""></td>
            <td>
                @if($product->status =='1')
                <a href="{{route('admin.product.list.status-update',$product->id) }}" class="btn btn-success">Active</a>
                @else
                <a href="{{route('admin.product.list.status-update',$product->id) }}" class="btn btn-danger">DeActive</a>
                @endif
            </td>

            <td>
                <a href="{{ route('admin.product.edit',$product->id) }}" style="font-size: 17px;padding:5px;" ><i class="fa fa-edit"></i></a>
                <a href="javascript:void(0)" data-id="{{ $product->id }}" class="delete" style="font-size: 17px;padding:5px;" ><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection

@push('footer-script')
    <script>
        $('.delete').on('click',function()
        {
            if(confirm('Are you want to delete this product?'))
            {
                var id=$(this).data('id');
                $.ajax({
                    url:'{{ route("admin.product.delete") }}',
                    method:'post',
                    data:{
                        _token:"{{ csrf_token() }}",
                        'id':id
                    },
                    success:function(data)
                    {
                        location.reload();
                    }
                });
            }
        });
    </script>
@endpush
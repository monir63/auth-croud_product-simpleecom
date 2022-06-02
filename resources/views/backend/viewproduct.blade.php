@extends('master')
@section('content')
<div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Product List</h5>
    </div><!-- sl-page-title -->
    <div class="card pd-20 pd-sm-40 mg-t-50">
      <div class="table-responsive">
        <table class="table table-bordered mg-b-0">
          <thead>
            <tr>
              <th>SL</th>
              <th>Name</th>
              <th>Description</th>
              <th>Price</th>
              <th>Image</th>>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($products as $key=>$item)
            <tr>
                <td>{{ $products -> firstItem() + $key }}</td>
                <td>{{ $item->name}}</td>
                <td>{{ $item->description}}</td>
                <td>{{ $item->price}}</td>
                <td><img width="90" src="{{ asset('/product/image/'.$item->image) }}" alt="{{ $item->name}}"></td>
                <td>
                    <a href="#" class="btn btn-outline-info">Edit</a>
                    <a href="#" class="btn btn-outline-danger">Delete</a>
                </td>
              </tr>
            @empty
            @endforelse
          </tbody>
        </table>
        {{$products->links()}}
      </div><!-- table-responsive -->
    </div><!-- card -->
</div>
@endsection

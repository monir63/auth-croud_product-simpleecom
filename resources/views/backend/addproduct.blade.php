@extends('master')
@section('content')
<div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Product Add</h5>
    </div><!-- sl-page-title -->
    <div class="row">
        <div class="col-md-7 col-12 ">
            <div class="card">
                <div class="card-body">
                    <form action={{route('addproduct')}} method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="name">Product Name</label>
                                    <input type="text" id="name" class="form-control" name="name" placeholder="Product Name" />
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                                    <label for="description">Product description</label>
                                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label for="price">Product price</label>
                                <input type="text" class="form-control" name="price" id="price" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                                <label for="image">Product Image</label>
                                    <input type="file" class="form-group" name="image" id="image">
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary me-1">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




</div>
@endsection

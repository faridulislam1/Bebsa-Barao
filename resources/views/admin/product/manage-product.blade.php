@extends('admin.master')
@section('body')
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-3">
                        <div class="card-header bg-danger">
                            <i class="fas fa-table me-1"></i>
                            <h3 class="text-center">Manage Business List</h3>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-hover table-bordered"  id="dataTableExample">
                                <thead>
                                <tr>
                                    <th>sl</th>
                                    <th>Name</th>
                                    <th>Category Name</th>
                                    <th>Business Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $i=1 @endphp
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->category_name}}</td>
                                        <td>{{$product->brand_name}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>
                                            <img src="{{ asset ($product->image)}}" class="img-fluid" style="width:80px;height:50px;border-radius:50%;" alt="">
                                        </td>
                                        <td>{{$product->status == 1 ? 'Published' : 'Unpublished'}}</td>

                                        <td  class="btn-group">
                                            <a href="{{route('edit.product',['id'=>$product->id]) }}" class="btn btn-primary btn-sm mx-md-2 "><i class="fas fa-edit"></i></a>

                                            @if($product->status == 1)
                                                <a href="{{route('status.product',['id'=>$product->id]) }}" class="btn btn-warning btn-sm mx-1">Unpublished</a>
                                            @else
                                                <a href="{{route('status.product',['id'=>$product->id]) }}" class="btn btn-success btn-sm mx-1">Published</a>
                                            @endif
                                            <form action="{{route('delete.product')}}" method="post">
                                                @csrf
                                                <input type="hidden" value="{{$product->id}}" name="id">
                                                <button type="submit" class="btn btn-danger btn-sm mx-lg-2" onclick="return confirm('Are you sure Delete this !!')"><i class="fas fa-trash"></i></button>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
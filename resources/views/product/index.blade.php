@extends('master')

@section('content-header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>product Page</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">product Page</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                  <a href="{{ route('product.create') }}" class="btn btn-sm btn-info">Add</a>
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>                  
                  <tr>
                    <th >#</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Category</th>
                    <th style="width: 40px">Tools</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;   
                  @endphp
                  @forelse ($product as $c)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $c->photo }}</td>
                        <td>{{ $c->name }}</td>
                        <td>{{ $c->description }}</td>
                        <td>{{ $c->price }}</td>
                        <td>{{ $c->stock }}</td>
                        <td>{{ $c->category_id }}</td>
                      <td>
                        <form action="{{route('product.destroy', $c->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('product.edit', $c->id) }}"
                               class="btn btn-sm btn-warning"><i class="fa fa-edit"></i>Edit</a>
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete</button>
                        </form>
                      </td>
                      </tr>
                  @empty
                      <tr>
                        <td colspan="8">Tidak ada data</td>
                      </tr>
                  @endforelse
                </tbody>
              </table>
            </div>  
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
@endsection
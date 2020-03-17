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
    @if ($message = Session::get('gagal'))
        <div class="alert alert-danger alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Form product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('category.store') }}" 
                        method="POST">
                        @csrf
                        @method('POST')
                          <div class="card-body">
                            <div class="form-group">
                                <label >Code</label>
                                <input type="text" name="code"
                                 class="form-control" 
                                 placeholder="Code">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Name</label>
                              <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Description</label>
                              <input type="text" name="description"  class="form-control" id="exampleInputPassword1" placeholder="Description">
                            </div>
                            <div class="form-group">
                                <label >Stock</label>
                                <input type="text" name="stock" class="form-control" placeholder="stock">
                            </div>
                            <div class="form-group">
                                <label >Price</label>
                                <input type="text" name="price" class="form-control" placeholder="Price">
                            </div>
                            <div class="form-group">
                                <label >category</label>
                                <select name="category_id" class="form-control" required>
                                    <option value="0">&mdash;</option>
                                    @foreach ($category as $c)
                                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Photo</label>
                                <input type="file" name="photo" required placeholder="Photo">
                            </div>
                            
                          </div>
                          <!-- /.card-body -->
          
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
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
			<div class= "row">
			<div class= "col-md-6">
				<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('product.store')}}" method="POST">
              	@csrf
              	@method('POST')
                <div class="card-body">
                  <div class="form-group">
                    <label>Code</label>
                    <input type="text"  name="name" class="form-control" id="exampleInputEmail1" placeholder="code">
                  </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text"  name="name" class="form-control" id="exampleInputEmail1" placeholder="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Stock</label>
                    <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Category</label>
                    <select name="category_id" class="from-control" required>
                      <option value="0">&mdash;</option>
                      @foreach ($category as $c)
                          <option value="{{ $c->id }}">{{ $c->name }}</option>
                          @endforeach
                          </select>
                          <div class="form-group">
                            <label for=""> Photo </label>
                            <input type="file" name="photo" required placeholder="photo">

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
@extends('master')

@section('content-header')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category Page</li>
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
              	<a href="{{route('category.create')}}" class ="btn btn-sm btn-info">add</a>
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>                  
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th style="width: 40px">Tools</th>
                  </tr>
                </thead>
                <tbody>
                	  @php
                    $no = 1;
                    @endphp
                    @forelse ($category as $c)
                    
                      <tr>
                        <td> {{ $no++ }}</td>
                    <td> {{ $c->name }}</td>
                    <td> {{ $c->description }}</td>
                    <td>
                        <form action="{{route ('category.destroy', $c->id)}}" method ="POST">
                          @csrf
                          @method('delete')
                          <a href="{{route('category.edit', $c->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i>EDIT</a>
                          <BUTTON type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>DELETE</BUTTON>
                        </form>
                    </td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="4">Tidak ada data</td>
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
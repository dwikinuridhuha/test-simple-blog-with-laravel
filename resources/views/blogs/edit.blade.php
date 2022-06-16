@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit blog</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('blogs.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())

        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif


    <form action="{{ route('blogs.update',$blog->id) }}" method="POST" enctype="multipart/form-data">

    	@csrf

        @method('PUT')


         <div class="row">

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="name" value="{{ $blog->name }}" class="form-control" placeholder="Name">
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Body:</strong>
		            <textarea class="form-control" style="height:150px" name="body" placeholder="Body">{{ $blog->body }}</textarea>
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Slug:</strong>
		            <input type="number" name="slug" value="{{ $blog->slug }}" class="form-control" placeholder="Slug">
		        </div>
		    </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>keywords:</strong>
                     <input type="number" name="keywords" value="{{ $blog->keywords }}" class="form-control" placeholder="keywords">
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>meta_desc:</strong>
                     <input type="number" name="meta_desc" value="{{ $blog->meta_desc }}" class="form-control" placeholder="meta_desc">
                 </div>
             </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		      <button type="submit" class="btn btn-primary">Submit</button>
		    </div>

		</div>

    </form>


@endsection
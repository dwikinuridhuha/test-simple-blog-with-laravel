@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>blogs</h2>
            </div>

            <div class="pull-right">
{{--                <a class="btn btn-primary" href="{{ URL::to('/allblog/pdf') }}">Export to PDF</a>--}}
                @can('blog-create')
                <a class="btn btn-success" href="{{ route('blogs.create') }}"> Create New blog</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Body</th>
            <th>Slug</th>
            <th>Keyword</th>
            <th>Meta_desc</th>
            <th width="280px">Action</th>
        </tr>

	    @foreach ($blogs as $blog)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $blog->name }}</td>
	        <td>{{ $blog->body }}</td>
	        <td>{{ $blog->slug }}</td>
	        <td>{{ $blog->keyword }}</td>
            <td>{{ $blog->meta_desc }}</td>
	        <td>
                <a class="btn btn-info" href="{{ route('blogs.show',$blog->id) }}">Show</a>
                @can('blog-edit')
                <a class="btn btn-primary" href="{{ route('blogs.edit',$blog->id) }}">Edit</a>
                @endcan

                @can('blog-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['blogs.destroy', $blog->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                @endcan
	        </td>
	    </tr>
	    @endforeach
    </table>

    {!! $blogs->links() !!}


@endsection

@extends('layouts.master')
@section('index')
    <div class="container mt-4">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                <p>send your post</p>
            </div>
            <div class="card-body">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('add-post')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" id="title" name="title" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">articles</label>
                        <textarea name="articles" class="form-control" required=""></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </body>
    </html>
@endsection

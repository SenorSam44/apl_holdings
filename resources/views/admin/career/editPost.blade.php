@extends('admin.admin_layout')

@section('admin_content')
    <h1>
        @if(isset($post))
            Edit
        @else
            Add
        @endif
        Post
    </h1>
    <hr>{{ Session::get('msg') }}

    <form class="form-horizontal"
          action="{{route('career.store')}}"
          method="POST"
          enctype="multipart/form-data" name="editForm">
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2" for="post_name">Post Title:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="post_name" name="post_name"
                       placeholder="Project title"
                       value="{{isset($post->post_name)? $post->post_name: ""}}" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="description">Post Description:</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" id="description"
                          rows="6"
                          placeholder="Project description"
                          name="description">{{isset($post->post_description)?$post->post_description: ""}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="deadline">Deadline:</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="deadline" name="deadline"
                       value="{{isset($post->deadline)?$post->deadline: null}}"
                       required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="publication_status">Publication Status:</label>
            <div class="col-sm-10">
                <select type="text" class="form-control" id="publication_status" name="publication_status">
                    <option selected disabled>Select Publication Status</option>
                    <option @if(isset($post->publication_status) && $post->publication_status==1)
                            selected
                            @endif value="1">Published
                    </option>
                    <option
                            @if(isset($post->publication_status) && $post->publication_status==0)
                            selected
                            @endif value="0">Unpublished
                    </option>
                </select>
            </div>
        </div>


        @if(isset($post->id))
            <input type="hidden" name="inputId" value="{{$post->id}}">
        @endif

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </div>
        </div>
    </form>


@endsection

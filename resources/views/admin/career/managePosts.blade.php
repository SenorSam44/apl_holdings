@extends('admin.admin_layout')

@section('admin_content')
    <h1>Manage Posts</h1>

    {{ Session::get('msg') }}

    <hr>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>SI</th>
            <th>Post Name</th>
            <th>Deadline</th>
            <th>Publication Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $i = 0;
        ?>
        @foreach($career as $post)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $post->post_name }}</td>
                <td>{{ $post->deadline}}</td>
                <td>{{ $post->publication_status}}</td>

                <td>
                    @if($post->publication_status == 1)
                        <a style="color: green">Acive</a>
                    @else
                        <a style="color: darkred">Deactive</a>
                    @endif
                </td>

                <td>
                    <form method="post"
                          action="{{URL::to('admin/activate-career')}}"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="inputId" value="{{$post->id}}">
                        <input type="hidden" name="publication_status" value="{{1- $post->publication_status}}">
                        @if($post->publication_status == 1)
                            <button style="color: red" class="glyphicon glyphicon-remove" type="submit"></button>
                        @else
                            <button style="color: green" class="glyphicon glyphicon-ok" type="submit"></button>
                        @endif
                    </form>


                    <form method="get" action="{{URL::to('admin/career/'.$post->id)}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="inputId" value="{{$post->id}}">
                        <button style="color: blue" class="glyphicon glyphicon-edit" type="submit"></button>
                    </form>

                    <form method="POST" action="{{route('career.destroy', $post->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="inputId" value="{{$post->id}}">
                        <button style="color: red" class="glyphicon glyphicon-trash" type="submit"
                                onclick="return confirm('Are you sure to delete it?')"></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection

@extends('admin.admin_layout')

@section('admin_content')
    <h1>Manage Office Locations</h1>

    {{ Session::get('msg') }}

    <hr>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>SI</th>
            <th>Office Name</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>Logo</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($offices as $key => $office)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $office->name }}</td>
                <td>{{ $office->latitude }}</td>
                <td>{{ $office->longitude }}</td>
                <td>
                    <img src="{{asset($office->logoUrl)}}" style="height: 70px; width: 100px">
                </td>
                <td>
                    <form method="get" action="{{URL::to('admin/office-location/'.$office->id)}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="inputId" value="{{$office->id}}">
                        <button style="color: blue" class="glyphicon glyphicon-edit" type="submit"></button>
                    </form> 

                    <form method="post" action="{{URL::to('admin/delete-office-location')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="inputId" value="{{$office->id}}">
                        <button style="color: red" class="glyphicon glyphicon-trash" type="submit" onclick="return confirm('Are you sure to delete it?')"></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>




@endsection

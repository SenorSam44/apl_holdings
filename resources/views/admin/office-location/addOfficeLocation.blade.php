@extends('admin.admin_layout')

@section('admin_content')
    <h1>{{!isset($office)? "Add": "Edit"}} Office Location</h1>

    <hr>
    {{ Session::get('msg') }}

    <hr>

    <form class="form-horizontal" action="{{route('office-location.store')}}" method="post"
          enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Office Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Enter Office Name"
                       value="{{$office->name ?? ""}}"
                       required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="latitude">Latitude:</label>
            <div class="col-sm-10">
                <input type="number" step="0.000000000000001" class="form-control" name="latitude" placeholder="Enter Latitude"
                       value="{{$office->latitude ?? ""}}"
                       required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="longitude">Longitude:</label>
            <div class="col-sm-10">
                <input type="number" step="0.000000000000001" class="form-control" name="longitude" placeholder="Enter Longitude"
                       value="{{$office->longitude ?? ""}}"
                       required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="image">Office Image:</label>
            <div class="col-sm-10">
                <img id="preview-image" src="{{isset($office->logoUrl)? asset($office->logoUrl): null}}" alt="office logo preview" style="max-width: 100px; height: 100px; margin: 10px 0;">
                <input type="file" class="form-control" id="image" name="image">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function (e) {
            if(!$('#preview-image').attr('src')){
                $('#preview-image').css("display", "none");
            }

            $('#image').change(function(){
                $('#preview-image').css("display", "block");

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });

    </script>
@endsection

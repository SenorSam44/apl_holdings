@extends('admin.admin_layout')

@section('admin_content')
    <h1>Edit Project</h1>
    <hr>{{ Session::get('msg') }}

    @foreach($edit_project as $project)
    <form class="form-horizontal" action="{{URL::to('admin/projects/'.$project->id)}}" method="post" enctype="multipart/form-data" name="editForm">
        {{csrf_field()}}
        <div class="form-group">
            <label class="control-label col-sm-2" for="project_title">Project Title:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="project_title" name="project_title" value="{{$project->project_title}}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="category_id">Category:</label>
            <div class="col-sm-10">

                <?php $categories = DB::table('categories')
                    ->where('publication_status',1)
                    ->get();
                ?>

                <select type="text" class="form-control" id="category_id" name="category_id" required>
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="project_description">Project Description:</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" id="project_description" name="project_description">{{$project->project_description}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="address">Address:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="address" name="address" value="{{$project->address}}" required>
            </div>

            <label class="control-label col-sm-2" for="land_area">Land Area:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="land_area" name="land_area" value="{{$project->land_area}}" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="occupation_type">Occupation Type:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="occupation_type" name="occupation_type" value="{{$project->occupation_type}}" required>
            </div>

            <label class="control-label col-sm-2" for="classification">Classification:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="classification" name="classification" value="{{$project->classification}}" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="no_of_stories">No. of Stories:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="no_of_stories" name="no_of_stories" value="{{$project->no_of_stories}}" required>
            </div>

            <label class="control-label col-sm-2" for="no_of_car_parking">No. of Car Parking:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="no_of_car_parking" name="no_of_car_parking" value="{{$project->no_of_car_parking}}" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="apartment_size">Apartment Size:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="apartment_size" name="apartment_size" value="{{$project->apartment_size}}" required>
            </div>

            <label class="control-label col-sm-2" for="no_of_apartment">No. of Apartment:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="no_of_apartment" name="no_of_apartment" value="{{$project->no_of_apartment}}" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="no_of_lifts">No. of Lifts:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="no_of_lifts" name="no_of_lifts" value="{{$project->no_of_lifts}}" required>
            </div>

            <label class="control-label col-sm-2" for="no_of_stairs">No. of Stairs:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="no_of_stairs" name="no_of_stairs" value="{{$project->no_of_stairs}}" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="no_of_generator">No. of Generator:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="no_of_generator" name="no_of_generator" value="{{$project->no_of_generator}}" required>
            </div>

            <label class="control-label col-sm-2" for="water_reserve">Water Reserve:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="water_reserve" name="water_reserve" value="{{$project->water_reserve}}" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="start_date">Start Date:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="start_date" name="start_date"  value="{{$project->start_date}}" >
            </div>

            <label class="control-label col-sm-2" for="end_date">End Date:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="end_date" name="end_date" value="{{$project->end_date}}" >
            </div>
        </div>

        <hr>

        <div class="form-group">
            <label class="control-label col-sm-2" for="project_image">All Pictures:</label>
            <div class="col-sm-10">
                <img src="{{asset($project->project_image1)}}" class="editable-image" />
                <img src="{{asset($project->project_image2)}}" class="editable-image" />
                <img src="{{asset($project->project_image3)}}" class="editable-image" />
                <img src="{{asset($project->project_image4)}}" class="editable-image" />
                <img src="{{asset($project->project_image5)}}" class="editable-image" />
                <img src="{{asset($project->project_image6)}}" class="editable-image" />
                <img src="{{asset($project->project_image7)}}" class="editable-image" />
                <img src="{{asset($project->project_image8)}}" class="editable-image" />
                <img src="{{asset($project->project_image9)}}" class="editable-image" />
                <img src="{{asset($project->project_image10)}}" class="editable-image" />
                <img src="{{asset($project->project_image11)}}" class="editable-image" />
                <img src="{{asset($project->project_image12)}}" class="editable-image" />
            </div>
        </div>
        

        <div class="form-group">
            <label class="control-label col-sm-2" for="project_image1">Picture 1:</label>
            <div class="col-sm-4">
                <input type="file" class="form-control" id="project_image1" name="project_image1">
            </div>

            <label class="control-label col-sm-2" for="project_image2">Picture 2:</label>
            <div class="col-sm-4">
                <input type="file" class="form-control" id="project_image2" name="project_image2">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="project_image3">Picture 3:</label>
            <div class="col-sm-4">
                <input type="file" class="form-control" id="project_image3" name="project_image3">
            </div>

            <label class="control-label col-sm-2" for="project_image4">Picture 4:</label>
            <div class="col-sm-4">
                <input type="file" class="form-control" id="project_image4" name="project_image4">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="project_image5">Picture 5:</label>
            <div class="col-sm-4">
                <input type="file" class="form-control" id="project_image5" name="project_image5">
            </div>

            <label class="control-label col-sm-2" for="project_image6">Picture 6:</label>
            <div class="col-sm-4">
                <input type="file" class="form-control" id="project_image6" name="project_image6">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="project_image7">Picture 7:</label>
            <div class="col-sm-4">
                <input type="file" class="form-control" id="project_image7" name="project_image7">
            </div>

            <label class="control-label col-sm-2" for="project_image8">Picture 8:</label>
            <div class="col-sm-4">
                <input type="file" class="form-control" id="project_image8" name="project_image8">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="project_image9">Picture 9:</label>
            <div class="col-sm-4">
                <input type="file" class="form-control" id="project_image9" name="project_image9">
            </div>

            <label class="control-label col-sm-2" for="project_image10">Picture 10:</label>
            <div class="col-sm-4">
                <input type="file" class="form-control" id="project_image10" name="project_image10">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="project_image11">Picture 11:</label>
            <div class="col-sm-4">
                <input type="file" class="form-control" id="project_image11" name="project_image11">
            </div>

            <label class="control-label col-sm-2" for="project_image12">Picture 12:</label>
            <div class="col-sm-4">
                <input type="file" class="form-control" id="project_image12" name="project_image12">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">360 degree Image:</label>
            @if(isset($project->image360))
                @foreach(unserialize($project->image360) as $image)
                    <div class="dynamic-gallery-image col-sm-10 row">
                        <img data-name="{{$image}}"
                             class="col-sm-12 preview-image"
                             src="{{asset($image)}}"
                             alt="office logo preview" style="max-width: 100px; height: 100px; margin: 10px 0;"/>

                        <div class="col-sm-10 text-right" style="padding: 0; margin: 4rem">
                            <button type="button" class="remove-gallery-btn btn btn-danger color-white">
                                Remove
                            </button>
                        </div>
                        <input type="file" class="form-control col-sm-10" name="image360[]"
                               value="{{$image}}">
                    </div>
                @endforeach
            @endif
            <div class="dynamic-gallery-image col-sm-10 row" style="margin-top: 1em; padding: 0">
{{--                <img class="col-sm-12 preview-image"--}}
{{--                     src=""--}}
{{--                     alt="office logo preview" style="max-width: 100px; height: 100px; margin: 10px 0;"/>--}}

                <div class="col-sm-12">
                    <div class="col-sm-10" style="margin-bottom: 5px; padding: 0">
                    </div>
                    <div class="col-sm-2 text-right">
                        <button type="button" class="add-gallery-btn btn btn-info color-white">
                            Add
                        </button>
                    </div>
                </div>

            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-sm-2" for="publication_status">Publication Status:</label>
            <div class="col-sm-10">
                <select type="text" class="form-control" id="publication_status" name="publication_status">
                    <option>Select Publication Status</option>
                    <option value="1">Published</option>
                    <option value="0">Unpublished</option>
                </select>
            </div>
        </div>


        <input type="hidden" name="inputId" value="{{$project->id}}">

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </div>
        </div>
    </form>



    <script>
        document.forms['editForm'].elements['category_id'].value={{ $project->category_id }}

        document.forms['editForm'].elements['publication_status'].value={{ $project->publication_status }}
    </script>
    @endforeach
    <style type="text/css">
        .editable-image{
            height: 60px;
            width: 60px;
        }

        @media (min-width: 729px) {
            .dynamic-gallery-image {
                margin-left: 12.5vw;
            }
        }
    </style>

    <script src="{{ asset('backend') }}/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">
        get_preview()
        remove_btn_listener();

        function remove_btn_listener() {
            document.querySelectorAll('.remove-gallery-btn').forEach((removeBtn) => {
                let parent_ele = removeBtn.parentElement.parentElement;
                let dataName = parent_ele.querySelector('img').getAttribute('data-name')
                removeBtn.addEventListener('click', () => {
                    parent_ele.remove();
                    $('form').append('<input type="hidden" ' +
                        'id="removed_file" name="removed_file[]" ' +
                        'value="'+dataName+'">');
                }, false)
            })
        }

        function preview_none() {
            document.querySelectorAll('.preview-image').forEach(preview => {
                if (!preview.getAttribute('src')) {
                    preview.style.display = 'none'
                }
            })
        }

        function get_preview() {
            $(document).on('change', '.image-input', (ele) => {
                var j = $(ele.target).parent().parent().find('.preview-image')
                j.attr('src', URL.createObjectURL(ele.target.files[0]));
                j.css('display', 'block')
            });
        }

        $(document).ready(function (e) {
            // get_preview();

            //    add 360 image
            let i = 0;
            $('.add-gallery-btn').click((ele) => {
                i++;

                $(ele.target).parent().parent().append('<div class="dynamic-gallery-image gallery-field col-sm-12 row" style="margin: 5px 0; padding: 0">' +
                    '               <div class="col-sm-12">' +
                    '               <img class="preview-image"\n' +
                    '                     src=""\n' +
                    '                     alt="office logo preview" style="max-width: 100px; height: 100px; margin: 10px 0;"/>' +
                    '               </div>' +
                    '               <div class="col-sm-10" style="padding: 0">\n' +
                    '                    <input type="file" class="image-input form-control" name="image360[]">\n' +
                    '                </div>' +
                    '                <div class="col-sm-2 text-right" style="padding: 0">\n' +
                    '                    <button type="button" class="remove-gallery-btn btn btn-danger color-white">\n' +
                    '                        Remove\n' +
                    '                    </button>\n' +
                    '                </div>\n' +
                    '               </div>')

                remove_btn_listener()
                preview_none()

            });

        });

    </script>
@endsection
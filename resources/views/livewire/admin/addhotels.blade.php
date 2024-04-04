
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Hotel Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Hotel</li>
                    </ol>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @if(session('message'))
                <div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
                    <i class="bi-check-circle-fill"></i>
                    <strong class="mx-2">Success!</strong> {{session('message')}}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger alert-dismissible d-flex align-items-center fade show">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">

                <!-- left column -->
                {{--Hotel Details Start--}}
                <div class="col-md-6">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Hotel Basic Details</h3>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="hotelname">Hotel Name</label>
                                    <input type="text" id="hotelname" name="hotelname" class="form-control" wire:model.defer="hotelname">
                                </div>
                                <div class="form-group">
                                    <label for="fb">Facebook Link</label>
                                    <input type="text" id="fb" name="fb" class="form-control" wire:model.defer="fb">
                                </div>
                                <div class="form-group">
                                    <label for="twitter">Twitter Link</label>
                                    <input type="text" id="twitter" name="twitter" class="form-control" wire:model.defer="twitter">
                                </div>
                                <div class="form-group">
                                    <label for="insta">Instagram Link</label>
                                    <input type="text" id="insta" name="insta" class="form-control" wire:model.defer="insta">
                                </div>
                            </form>

                        </div>
                        <!-- /.card-header -->
                    </div>
                </div>
                {{--Hotel Details End--}}

                {{--Hotel AboutUs Start--}}
                <div class="col-md-6">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">About Us</h3>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="heading">About Heading</label>
                                    <input type="text" id="heading" name="heading" class="form-control" wire:model.defer="heading">
                                </div>
                                <div class="form-group">
                                    <label for="aboutDescription">About Description</label>
                                    <textarea type="text" rows="4" id="aboutDescription" name="aboutDescription" class="form-control" wire:model.defer="aboutDescription"></textarea>
                                </div>
                                {{-- upload Image 1 Start--}}
                                <div class="form-group">
                                    <label for="sliderImage">About Image 1</label>
                                    <input class="form-control" type="file" id="aboutImage1" name="sliderImage" wire:model.defer="aboutImage1">
                                    {{--                                @if ($sliderImage)--}}
                                    {{--                                    Photo Preview:--}}
                                    {{--                                    <img src="{{ $sliderImage->temporaryUrl() }}">--}}
                                    {{--                                @endif--}}
                                </div>
                                {{-- upload Image 1 End--}}

                                {{-- upload Image 2 Start--}}
                                <div class="form-group">
                                    <label for="sliderImage">About Image 2</label>
                                    <input class="form-control" type="file" id="aboutImage2" name="sliderImage" wire:model.defer="aboutImage2">
                                    {{--                                @if ($sliderImage)--}}
                                    {{--                                    Photo Preview:--}}
                                    {{--                                    <img src="{{ $sliderImage->temporaryUrl() }}">--}}
                                    {{--                                @endif--}}
                                </div>
                                {{-- upload Image 2 End--}}
                            </form>

                        </div>
                        <!-- /.card-header -->
                    </div>
                </div>
                {{--Hotel AboutUs End--}}

                {{--Add Slider Start--}}
                <div class="col-md-6">

                    <!-- jquery validation -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Add Slider</h3>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="description">Slider Description</label>
                                    <input type="text" id="description" name="description" class="form-control" wire:model.defer="description">
                                </div>

                                <div class="form-group">
                                    <label for="sliderImage">Slider Image</label>
                                    <input class="form-control" type="file" id="sliderImage" multiple name="sliderImage" wire:model.defer="sliderImage">
                                    <br>
{{--                                    @if ($sliderImage)--}}
{{--                                        Photo Preview:--}}
{{--                                        @foreach($sliderImage as $image)--}}
{{--                                                <img src="{{ $image->temporaryUrl() }}" style="width: 100px; height: 100px" >--}}
{{--                                        @endforeach--}}
{{--                                    @endif--}}
                                </div>

                            </form>

                        </div>
                        <!-- /.card-header -->
                    </div>

                    <!-- /.card -->
                </div>
                {{--Add Slider End--}}
                    <div class="form-group">
                        <button type="button"  class="btn btn-success col fileinput-button dz-clickable" wire:click.prevent="addDetails">Submit</button>
                    </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


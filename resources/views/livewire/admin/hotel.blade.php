<div>

    <?php $increment = 1; ?>
    <?php $count = 0; ?>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Hotels </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="{{ route('addhotels') }}" class="btn btn-block btn-success"><span>Add New
                                    Hotel</span></a>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @if (session('message'))
                            <div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
                                <i class="bi-check-circle-fill"></i>
                                <strong class="mx-2">Success!</strong> {{ session('message') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible d-flex align-items-center fade show">
                                <i class="bi-check-circle-fill"></i>
                                <strong class="mx-2">Error!</strong> {{ session('error') }}
                            </div>
                        @endif

                        {{-- Edit Hotel Model Start --}}

                        <!-- Modal -->
                        <div wire:ignore.self class="modal fade" id="editHotelModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">

                                            <!-- left column -->
                                            {{-- Hotel Details Start --}}
                                            <div class="col-md-12">
                                                <div class="card card-warning">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Hotel Basic Details</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="hotelname">Hotel Name</label>
                                                                <input type="text" id="hotelname" name="hotelname"
                                                                    class="form-control" wire:model.defer="hotelname">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="fb">Facebook Link</label>
                                                                <input type="text" id="fb" name="fb"
                                                                    class="form-control" wire:model.defer="fb">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="twitter">Twitter Link</label>
                                                                <input type="text" id="twitter" name="twitter"
                                                                    class="form-control" wire:model.defer="twitter">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="insta">Instagram Link</label>
                                                                <input type="text" id="insta" name="insta"
                                                                    class="form-control" wire:model.defer="insta">
                                                            </div>
                                                        </form>

                                                    </div>
                                                    <!-- /.card-header -->
                                                </div>
                                            </div>
                                            {{-- Hotel Details End --}}

                                            {{-- Hotel AboutUs Start --}}
                                            <div class="col-md-12">
                                                <div class="card card-warning">
                                                    <div class="card-header">
                                                        <h3 class="card-title">About Us</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="heading">About Heading</label>
                                                                <input type="text" id="heading" name="heading"
                                                                    class="form-control" wire:model.defer="heading">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="aboutDescription">About Description</label>
                                                                <textarea type="text" rows="4" id="aboutDescription" name="aboutDescription" class="form-control"
                                                                    wire:model.defer="aboutDescription"></textarea>
                                                            </div>
                                                            {{-- upload Image 1 Start --}}
                                                            <div class="form-group">
                                                                <label for="sliderImage">About Image 1</label>
                                                                <input class="form-control" type="file"
                                                                    id="aboutImage1" name="sliderImage"
                                                                    wire:model.defer="aboutImage1">
                                                                {{--                                @if ($sliderImage) --}}
                                                                {{--                                    Photo Preview: --}}
                                                                {{--                                    <img src="{{ $sliderImage->temporaryUrl() }}"> --}}
                                                                {{--                                @endif --}}
                                                            </div>
                                                            {{-- upload Image 1 End --}}

                                                            {{-- upload Image 2 Start --}}
                                                            <div class="form-group">
                                                                <label for="sliderImage">About Image 2</label>
                                                                <input class="form-control" type="file"
                                                                    id="aboutImage2" name="sliderImage"
                                                                    wire:model.defer="aboutImage2">
                                                                {{--                                @if ($sliderImage) --}}
                                                                {{--                                    Photo Preview: --}}
                                                                {{--                                    <img src="{{ $sliderImage->temporaryUrl() }}"> --}}
                                                                {{--                                @endif --}}
                                                            </div>
                                                            {{-- upload Image 2 End --}}
                                                        </form>

                                                    </div>
                                                    <!-- /.card-header -->
                                                </div>
                                            </div>
                                            {{-- Hotel AboutUs End --}}

                                            {{-- Add Slider Start --}}
                                            <div class="col-md-12">

                                                <!-- jquery validation -->
                                                <div class="card card-warning">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Add Slider</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="description">Slider Description</label>
                                                                <input type="text" id="description"
                                                                    name="description" class="form-control"
                                                                    wire:model.defer="description">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="sliderImage">Slider Image</label>
                                                                <input class="form-control" type="file"
                                                                    id="sliderImage" multiple name="sliderImage"
                                                                    wire:model.defer="sliderImage">
                                                                <br>
                                                                {{--                                    @if ($sliderImage) --}}
                                                                {{--                                        Photo Preview: --}}
                                                                {{--                                        @foreach ($sliderImage as $image) --}}
                                                                {{--                                                <img src="{{ $image->temporaryUrl() }}" style="width: 100px; height: 100px" > --}}
                                                                {{--                                        @endforeach --}}
                                                                {{--                                    @endif --}}
                                                            </div>

                                                        </form>

                                                    </div>
                                                    <!-- /.card-header -->
                                                </div>

                                                <!-- /.card -->
                                            </div>
                                            {{-- Add Slider End --}}

                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary"
                                            wire:click.prevent="editHotelData">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--                            Edit Hotel Model End --}}


                        <!-- Modal -->
                        <div wire:ignore.self class="modal fade" id="editRoomModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add New Room</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <!-- left column -->
                                            {{-- Hotel Details Start --}}
                                            <div class="col-md-12">
                                                <div class="card card-warning">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Hotel Basic Details</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="hotelname">Room Type</label>
                                                                <select wire:model="room_type_id"
                                                                    class="form-control">
                                                                    <option value="" selected>Choose Room Type
                                                                    </option>
                                                                    @foreach ($room_types as $room_type)
                                                                        <option value="{{ $room_type->id }}">
                                                                            {{ $room_type->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="roomnumber">Room Number</label>
                                                                <input type="number" min="0" id="roomnumber"
                                                                    name="roomnumber" class="form-control"
                                                                    wire:model.defer="roomnumber">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="capacity">Capacity</label>
                                                                <input type="number" min="1" id="capacity"
                                                                    name="capacity" class="form-control"
                                                                    wire:model.defer="capacity">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="price">Price</label>
                                                                <input type="price" min="0" id="price"
                                                                    name="price" class="form-control"
                                                                    wire:model.defer="price">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="roomImage">Room Image</label>
                                                                <input class="form-control" type="file"
                                                                    id="roomImage" name="roomImage"
                                                                    wire:model.defer="roomImage">
                                                                {{--                                                                    @if ($sliderImage) --}}
                                                                {{--                                                                        Photo Preview: --}}
                                                                {{--                                                                        <img src="{{ $sliderImage->temporaryUrl() }}"> --}}
                                                                {{--                                                                    @endif --}}
                                                            </div>
                                                        </form>

                                                    </div>
                                                    <!-- /.card-header -->
                                                </div>
                                            </div>
                                            {{-- Hotel Details End --}}
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary"
                                            wire:click.prevent="addRoom">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Edit Hotel Model End --}}

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">All Hotels Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>N</th>
                                            <th>Hotel Name</th>
                                            <th>Social Links</th>
                                            <th>Slider Image</th>
                                            <th>Slider Desc</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($hotels as $hotel)
                                            <tr>
                                                <td>{{ $increment }}</td>
                                                <td><span
                                                        style="text-overflow: ellipsis; white-space: nowrap;  display: block;  overflow: hidden;  width: 9em;">{{ $hotel->name }}</span>
                                                </td>
                                                <td><span
                                                        style="text-overflow: ellipsis; white-space: nowrap;  display: block;  overflow: hidden;  width: 9em;">{{ $hotel->fb }}</span>
                                                    <span
                                                        style="text-overflow: ellipsis; white-space: nowrap;  display: block;  overflow: hidden;  width: 9em;">{{ $hotel->twitter }}</span>
                                                    <span
                                                        style="text-overflow: ellipsis; white-space: nowrap;  display: block;  overflow: hidden;  width: 9em;">{{ $hotel->insta }}</span>
                                                </td>
                                                @php
                                                    $sliderImage = str_replace(
                                                        'public/slider_images',
                                                        '',
                                                        json_decode($hotel->sliderImage),
                                                    );
                                                @endphp
                                                @foreach ($sliderImage as $sliderImage)
                                                    @php $count++ @endphp
                                                @endforeach
                                                <td>
                                                    <div style="display: flex; justify-content: space-between; ">
                                                        <img src="{{ asset('storage/slider_images/' . $sliderImage) }}"
                                                            style="height : 50px; width : 50px"
                                                            class="img-circle elevation-2" alt="User Image">
                                                        <h1>
                                                            {{ $count }}
                                                            @php $count = 0 @endphp
                                                        </h1>
                                                    </div>
                                                </td>
                                                <td><span
                                                        style="text-overflow: ellipsis; white-space: nowrap;  display: block;  overflow: hidden;  width: 5em;">{{ $hotel->sliderDesc }}</span>
                                                </td>


                                                <td>
                                                    @if ($hotel->status == '1')
                                                        <a wire:click.prevent="status({{ $hotel->id }},1)"
                                                            class="btn btn-block btn-success"><span>Active</span></a>
                                                    @else
                                                        <a wire:click.prevent="status({{ $hotel->id }},0), {{ $hotel->id }}"
                                                            class="btn btn-block btn-secondary"><span>Deactive</span></a>
                                                    @endif
                                                </td>

                                                <td>
                                                    <a wire:click.prevent="editHotel({{ $hotel->id }})"
                                                        class="btn btn-primary"><i
                                                            class="nav-icon fas fa-edit"></i></a>
                                                    <a wire:click.prevent="deleteHotel({{ $hotel->id }})"
                                                        class="btn btn-danger"><i
                                                            class="nav-icon fas fa-trash"></i></a>
                                                    <a wire:click.prevent="addNewRoom({{ $hotel->id }})"
                                                        class="btn btn-secondary"><i
                                                            class="fa-solid fa-person-booth"></i></a>
                                                </td>

                                                <?php $increment += 1; ?>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>N</th>
                                            <th>Hotel Name</th>
                                            <th>Social Links</th>
                                            <th>Slider Image</th>
                                            <th>Slider Desc</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div>
                                    {!! $hotels->links() !!}
                                </div>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@push('hotel-scripts')
    <script>
        window.addEventListener('showEditHotelModel', event => {
            $('#editHotelModal').modal('show');
        });

        window.addEventListener('hideEditHotelModel', event => {
            $('#editHotelModal').modal('hide');
        });
        window.addEventListener('showEditRoomModel', event => {
            $('#editRoomModal').modal('show');
        });

        window.addEventListener('hideEditRoomModel', event => {
            $('#editRoomModal').modal('hide');
        });
    </script>
@endpush

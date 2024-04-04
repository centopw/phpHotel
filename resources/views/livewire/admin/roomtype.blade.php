<div>
    <?php  $increment = 1 ?>
    <?php  $count = 0 ?>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Room Types</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a wire:click="addNewtype" class="btn btn-block btn-success"><span>Add Room Type</span></a>
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
                        @if(session('message'))
                            <div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
                                <i class="bi-check-circle-fill"></i>
                                <strong class="mx-2">Success!</strong> {{session('message')}}
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible d-flex align-items-center fade show">
                                <i class="bi-check-circle-fill"></i>
                                <strong class="mx-2">Error!</strong> {{session('error')}}
                            </div>
                        @endif

                        {{-- Edit Hotel Model Start--}}

                        <!-- Modal -->
                        <div wire:ignore.self class="modal fade" id="addRoomTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hotel Basic Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="row" >
                                            <div class="col-md-12">
                                                <div class="card card-warning">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="room_type">Room Type</label>
                                                            <input type="text" id="room_type" name="room_type" class="form-control" wire:model.defer="room_type">
                                                            @error('room_type') <div style="color: red"> {{$message}} </div> @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="room_info">Room Information</label>
                                                            <textarea type="text" id="room_info" name="room_info" class="form-control" wire:model.defer="room_info"></textarea>
                                                            @error('room_info') <div style="color: red"> {{$message}} </div> @enderror
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" wire:click.prevent="AddEditRoomType">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Edit Hotel Model End--}}

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Room Types</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Num.</th>
                                        <th>Room Type</th>
                                        <th>Information</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($room_types as $room_type)
                                        <tr>
                                            <td>{{$increment}}</td>
                                            <td>{{$room_type->name}}</td>
                                            <td>{{$room_type->information}}</td>
                                            <td>
                                                @if($room_type->status == '1')
                                                    <a wire:click.prevent="status({{$room_type->id}},1)" class="btn btn-block btn-success"><span>Active</span></a>
                                                @else
                                                    <a wire:click.prevent="status({{$room_type->id}},0), {{$room_type->id}}" class="btn btn-block btn-secondary"><span>Deactive</span></a>
                                                @endif
                                            </td>
                                            <td>
                                                <a wire:click.prevent="editRoomType({{$room_type->id}})" class="btn btn-primary"><i class="nav-icon fas fa-edit"></i></a>
                                                <a wire:click.prevent="deleteRoomType({{$room_type->id}})" class="btn btn-danger" ><i class="nav-icon fas fa-trash"></i></a>
                                            </td>
                                            <?php  $increment += 1 ?>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Num.</th>
                                        <th>Room Type</th>
                                        <th>Information</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <!-- /.card-body -->
                            <div style=" ">
                                {!! $room_types->links() !!}
                            </div>
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
    @push('hotel-scripts')
        <script>
            window.addEventListener('showAddRoomTypeModel', event=>{
                $('#addRoomTypeModal').modal('show');
            });

            window.addEventListener('hideAddRoomTypeModel', event=>{
                $('#addRoomTypeModal').modal('hide');
            });
        </script>
    @endpush
</div>




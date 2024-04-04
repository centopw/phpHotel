<div>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Rooms </h1>
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

                            @foreach($hotels as $hotel)
                                <?php  $increment = 1 ?>

                                <H1 style="display:flex; background: #fff; font-weight: 600; justify-content: center; align-items: center; padding: 1rem">{{($hotel->name)}}</H1>
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">All Hotels Details</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Num.</th>
                                                <th>Room Type</th>
                                                <th>Room Image</th>
                                                <th>Room Number</th>
                                                <th>Capacity</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($rooms as $room)
                                                <tr>
                                                    @if($hotel->id == $room->hotel_id)

                                                        <td>{{$increment}}</td>
                                                        <td>{{$room->room_type_id}}</td>
                                                        <td><img style="width: 50px; height: 50px; border-radius: 50%" src="{{asset('storage/room_image/'.$room->roomImage)}}" alt=""></td>
                                                        <td>{{$room->roomnumber}}</td>
                                                        <td>{{$room->capacity}}</td>
                                                        <td>{{$room->price}}</td>
                                                        <td>
                                                            @if($room->status == '1')
                                                                <a wire:click.prevent="status({{$room->id}},1)" class="btn btn-block btn-success"><span>Active</span></a>
                                                            @else
                                                                <a wire:click.prevent="status({{$room->id}},0)" class="btn btn-block btn-secondary"><span>Deactive</span></a>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a wire:click.prevent="editRoomType({{$room->id}})" class="btn btn-primary"><i class="nav-icon fas fa-edit"></i></a>
                                                            <a wire:click.prevent="deleteRoomType({{$room->id}})" class="btn btn-danger" ><i class="nav-icon fas fa-trash"></i></a>
                                                        </td>

                                                        <?php  $increment += 1 ?>
                                                </tr>
                                                    @endif
                                            @endforeach

                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Num.</th>
                                                <th>Room Type</th>
                                                <th>Room Image</th>
                                                <th>Room Number</th>
                                                <th>Capacity</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <div>
                                            {{--                                        {!! $hotels->links() !!}--}}
                                        </div>

                                    </div>
                                    <!-- /.card-body -->
                                </div>


                            @endforeach
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
            window.addEventListener('showEditRoomModel', event=>{
                $('#editRoomModal').modal('show');
            });

            window.addEventListener('hideEditRoomModel', event=>{
                $('#editRoomModal').modal('hide');
            });
        </script>
    @endpush
</div>




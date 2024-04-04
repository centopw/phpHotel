<div>

    <?php $increment = 1; ?>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Room Booking Requests</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Booking Requests</li>
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
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">All Booking Requests</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                {{-- <form method="GET" action="{{ route('booking.index') }}">
                                    <div class="form-row">
                                        <div class="col">
                                            <input type="text" class="form-control" name="username"
                                                placeholder="Username">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" name="email"
                                                placeholder="Email">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" name="phone_number"
                                                placeholder="Phone Number">
                                        </div>
                                        <div class="col">
                                            <select class="form-control" name="status">
                                                <option value="">All</option>
                                                <option value="0">Rejected</option>
                                                <option value="1">Pending</option>
                                                <option value="2">Accepted</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <button type="submit" class="btn btn-primary">Filter</button>
                                        </div>
                                    </div>
                                </form> --}}
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Num.</th>
                                            <th>Picture</th>
                                            <th>Username</th>
                                            <th>Booking Name</th>
                                            <th>Email</th>
                                            <th>Members</th>
                                            <th>Phone Number</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bookings as $booking)
                                            <tr>
                                                <td>{{ $increment }}</td>
                                                <td><img style="width: 60px; height: 60px; border-radius: 50%"
                                                        src="{{ $booking->user->profile_photo_url }}"
                                                        alt="Pofile Photo"></td>
                                                <td>{{ $booking->name }}</td>
                                                <td>{{ $booking->user->name }}</td>
                                                <td>{{ $booking->email }}</td>
                                                <td>{{ $booking->total_members }}</td>
                                                <td>{{ $booking->phone_number }}</td>
                                                <td>
                                                    @if ($booking->status == '1')
                                                        <a wire:click.prevent="status({{ $booking->id }},1)"
                                                            class="btn btn-block btn-secondary"><span>Pending</span></a>
                                                    @elseif($booking->status == '0')
                                                        <a wire:click.prevent="status({{ $booking->id }},0), {{ $booking->id }}"
                                                            class="btn btn-block btn-danger"><span>Rejected</span></a>
                                                    @else
                                                        <a wire:click.prevent="status({{ $booking->id }},2), {{ $booking->id }}"
                                                            class="btn btn-block btn-success"><span>Accpeted</span></a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a wire:click.prevent="deleterequest({{ $booking->id }})"
                                                        class="btn btn-danger"><i class="nav-icon fas fa-trash"></i></a>
                                                </td>

                                                <?php $increment += 1; ?>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Num.</th>
                                            <th>Picture</th>
                                            <th>Username</th>
                                            <th>Booking Name</th>
                                            <th>Email</th>
                                            <th>Members</th>
                                            <th>Phone Number</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div>
                                    {!! $bookings->links() !!}
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

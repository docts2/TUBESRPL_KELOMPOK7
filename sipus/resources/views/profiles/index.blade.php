@extends('template.template')

@section('content')

<br>
<br>
<section class="profile-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Profiles') }}</div>
                    <br>
                    <div class="card-body">
                        <a href="{{ route('profiles.create') }}" class="btn btn-primary mb-3">Create Profile</a>

                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($profiles as $profile)
                                    <tr>
                                        <td>{{ $profile->full_name }}</td>
                                        <td>{{ $profile->email }}</td>
                                        <td>{{ $profile->phone_number }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('profiles.show', $profile->id) }}"
                                                    class="btn btn-info mr-2">View</a>
                                                <a href="{{ route('profiles.edit', $profile->id) }}"
                                                    class="btn btn-warning mr-2">Edit</a>
                                                <form action="{{ route('profiles.destroy', $profile->id) }}"
                                                    method="POST" onsubmit="return confirmDelete()">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<br>



<script>
    function confirmDelete() {
        return confirm("Apakah anda yakin ingin menghapus data profil ini?");
    }
</script>

@endsection

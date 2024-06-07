@extends('template.template')

@section('content')

<br>
<br>
<section class="profile-details-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Profile Details') }}</div>
                    <div class="card-body">
                        <p><strong>Full Name:</strong> {{ $profile->full_name }}</p>
                        <p><strong>Email:</strong> {{ $profile->email }}</p>
                        <p><strong>Phone Number:</strong> {{ $profile->phone_number }}</p>
                        <p><strong>Address:</strong> {{ $profile->address }}</p>
                        <p><strong>Resume:</strong> <a href="{{ route('profiles.resume', $profile->id) }}"
                                class="btn btn-success">View Resume</a></p>
                        <br>
                        <br>
                        <a href="{{ route('profiles.index') }}" class="btn btn-primary">Back to Profiles</a>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
@endsection

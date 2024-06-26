@extends('layouts.app')

@section('content')
<div class="container">
    <h1>FAQ</h1>
    <div class="accordion" id="accordionExample">
        @foreach($faqs as $faq)
        <div class="card">
            <div class="card-header" id="heading{{ $faq->id }}">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{ $faq->id }}" aria-expanded="true" aria-controls="collapse{{ $faq->id }}">
                        {{ $faq->question }}
                    </button>
                </h5>
            </div>

            <div id="collapse{{ $faq->id }}" class="collapse" aria-labelledby="heading{{ $faq->id }}" data-parent="#accordionExample">
                <div class="card-body">
                    {{ $faq->answer }} 
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="card mt-3">
        <div class="card-body"> 
            <h5 class="card-title">Ask a Question</h5> 
            <form action="{{ route('faq.store') }}" method="POST">
                @csrf
                <div class="form-group"> 
                    <label for="question">Question</label>
                    <input type="text" class="form-control" id="question" name="question" required>
                </div>
                <div class="form-group">
                    <label for="answer">Answer</label>
                    <textarea class="form-control" id="answer" name="answer" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>@endsection
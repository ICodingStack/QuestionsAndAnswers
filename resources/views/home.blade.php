@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                  <div class="row">
                      <div class="col-md-9">
                          All Questions
                      </div>
                      <div class="col-md-3">
                          <a href="{{route('new-Question')}}" class="btn btn-outline-primary">Ask a question</a>
                      </div>
                  </div>

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @livewire('display-questions')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

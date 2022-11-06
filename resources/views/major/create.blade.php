@extends('layouts.app')

@section('content')
<div class="container">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h1">{{ __('Major') }}</h1>
                <a href="{{ route('major.index') }}" class="btn btn-warning">Back</a>
            </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('major.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Major's Keywords</strong>
                            <input type="text" name="code" class="form-control" placeholder="CS or DS">
                            @error('code')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Name</strong>
                            <input type="text" name="description" class="form-control" placeholder="Course name | Major name">
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="mt-3 btn btn-primary">Submit</button>
                    <button type="reset" class="mt-3 btn btn-danger">Cancel</button>
                </div>
            </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Major Infomation</h1> 
    <form method="POST" action="{{ route('major.update', $major['id']) }}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Major's Keywords </strong>
                    <input type="text" name="code" value="{{ $major['code']}}" class="form-control" >
                    @error('code')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="description" value="{{ $major['description']}}" class="form-control" >
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
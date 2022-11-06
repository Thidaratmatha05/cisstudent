@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Student Infomation</h1> 
    <form method="POST" action="{{ route('student.update', $student['id']) }}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Student-ID</strong>
                    <input type="text" name="stuid" value="{{ $student['stuid']}}" class="form-control" placeholder="63341xxxx-x" maxlength="11">
                    @error('stuid')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="name" value="{{ $student['name']}}" class="form-control" placeholder="Thidarat">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Lastname</strong>
                    <input type="text" name="lastname" value="{{ $student['lastname']}}" class="form-control" placeholder="Mata">
                    @error('lastname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Year</strong>
                    <input type="number" name="year" value="{{ $student['year']}}" class="form-control" placeholder="3">
                    @error('year')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Major-id</strong>
                    <input type="number" name="major_id" value="{{ $student['major_id']}}" class="form-control" placeholder="1">
                    @error('year')
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
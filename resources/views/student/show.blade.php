@extends('layouts.app')

@section('content')
<div class="container">
    <h1>View Student Infomation</h1> 
    <form method="POST" action="{{ route('student.show', $student['id']) }}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Student-ID</strong>
                    <input type="text" name="stuid" readonly="{{ $student['stuid']}}" class="form-control"  maxlength="11">
                    @error('stuid')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="name" readonly="{{ $student['name']}}" class="form-control" >
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Lastname</strong>
                    <input type="text" name="lastname" readonly="{{ $student['lastname']}}" class="form-control" >
                    @error('lastname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Year</strong>
                    <input type="number" name="year" readonly="{{ $student['year']}}" class="form-control" placeholder="3">
                    @error('year')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Major-id</strong>
                    <input type="number" name="major_id" readonly="{{ $student['major_id']}}" class="form-control" placeholder="1">
                    @error('year')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <a href="{{ route('student.index') }}" class="btn btn-primary">Back</a>
        </div>
    </form>
</div>
@endsection
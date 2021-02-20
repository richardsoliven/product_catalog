@extends('admin::base.index')
@section('content')
    <h1>Create User</h1>

    <a href="{{ route('user.index') }}">Back</a>
    <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="form-group">
            <label>First Name</label>
            <input class="form-control" type="text" name="first_name" value="{{ old('first_name') }}" />
            @error('first_name')
            <p style="color: red">{{ $errors->first('first_name') }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>Middle Name</label>
            <input class="form-control" type="text" name="middle_name" value="{{ old('middle_name') }}" />
            @error('middle_name')
            <p style="color: red">{{ $errors->first('middle_name') }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input class="form-control" type="text" name="last_name" value="{{ old('last_name') }}" />
            @error('last_name')
            <p style="color: red">{{ $errors->first('last_name') }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description">{{ old('description') }}</textarea>
            @error('description')
            <p style="color: red">{{ $errors->first('description') }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="email" name="email" value="{{ old('email') }}" />
            @error('email')
            <p style="color: red">{{ $errors->first('email') }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
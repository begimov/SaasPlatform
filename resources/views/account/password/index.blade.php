@extends('account.layouts.default')

@section('account.content')
    <div class="card card-default">
        <div class="card-body">
            <form action="{{ route('account.password.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="password_current" class="control-label">Current password</label>
                    <input type="password" name="password_current" id="password_current" 
                        class="form-control{{ $errors->has('password_current') ? ' is-invalid' : '' }}">
                    <div class="invalid-feedback">
                        {{ $errors->first('password_current') }}
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="control-label">New password</label>
                    <input type="password" name="password" id="password" 
                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="control-label">Password confirmation</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" 
                        class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}">
                    <div class="invalid-feedback">
                        {{ $errors->first('password_confirmation') }}
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
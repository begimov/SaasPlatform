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

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
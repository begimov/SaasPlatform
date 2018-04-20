@extends('account.layouts.default')

@section('account.content')
    <div class="card card-default">
        <div class="card-body">
            <form action="{{ route('account.profile.store') }}" method="POST">
                {{ csrf_field() }}
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
@endsection
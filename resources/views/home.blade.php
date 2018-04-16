@extends('layouts.app')

@section('content')
<h1>Home</h1>
    <p>HOLD ON FOR A REAL SITE SOON FUCKERS!</p>
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    You are logged in as <STRONG>USER</STRONG>!
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection
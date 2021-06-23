@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-header">Leads</div>

                <div class="card-body">
                    @if(isset($leads) && $leads->count())
                        <!-- do something -->
                    @else
                        <p>You currently have no leads.</p>
                    @endif
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    Templates
                    <a class="btn btn-sm btn-primary" href="/templates/create">New Template</a>
                </div>
                <div class="card-body">
                    @if(isset($templates) && $leads->count())
                        <!-- do something -->
                    @else
                        <p>You currently have no templates.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

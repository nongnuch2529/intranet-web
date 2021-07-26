@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ระบบแจ้งเตือน') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('รบกวนท่านผู้ใช้งาน รอการยืนยัน จากผู้ดูแลระบบ !!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

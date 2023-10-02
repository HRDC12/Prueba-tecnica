@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} No Asociado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} No Asociado</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('no-asociados.update', $noAsociado->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('no-asociado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

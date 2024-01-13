@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('template_title')
    {{ __('Update Label') }} 
@endsection

@section('content')

    {{-- Navbar template --}}
    @include('layouts.navbars.auth.topnav', ['title' => __('Label')])

    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Update Label') }} </span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('labels.index') }}"> {{__('Back')}}</a>
                        </div>
                    </div>

                    {{-- Separar card --}}
                    <span class="card-separator"></span>
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('labels.update', $label->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('label.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer template --}}
    @include('layouts.footers.auth.footer')

@endsection

@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('template_title')
    {{ $project->name ?? __('Show Project') }}
@endsection

@section('content')

    {{-- Navbar template --}}
    @include('layouts.navbars.auth.topnav', ['title' => __('Income')])

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show Project') }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('projects.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    {{-- Separar card --}}
                    <span class="card-separator"></span>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>{{ __('Show Name') }}:</strong>
                            {{ $project->name }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Show Description') }}:</strong>
                            {{ $project->description }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Show Created By') }}:</strong>
                            {{ $project->created_by }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- Footer template --}}
    @include('layouts.footers.auth.footer')

@endsection

@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('template_title')
    {{ __('Label') }}
@endsection

@section('content')

    {{-- Navbar template --}}
    @include('layouts.navbars.auth.topnav', ['title' => __('Label')])

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Label') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('labels.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>

                    {{-- Separar card --}}
                    <span class="card-separator"></span>

                    {{-- Plantilla mensajes--}}
                    @include('layouts.message')

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Color</th>
										<th>Description</th>
										<th>Created By</th>

                                        <th>{{ __('Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($labels as $label)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $label->name }}</td>
											<td>{{ $label->color }}</td>
											<td>{{ $label->description }}</td>
											<td>{{ $label->created_by }}</td>

                                            <td>
                                                <form action="{{ route('labels.destroy',$label->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('labels.show',$label->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('labels.edit',$label->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $labels->links() !!}
            </div>
        </div>
    </div>
    
    {{-- Footer template --}}
    @include('layouts.footers.auth.footer')
    
@endsection

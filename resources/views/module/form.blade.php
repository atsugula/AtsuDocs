<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            
        
        <div class="col-12 col-md-6">
            <div class="form-group">
                {{ Form::label('name', __('name')) }}
                {{ Form::text('name', $module->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div> 
        
        <div class="col-12 col-md-6">
            <div class="form-group">
                {{ Form::label('description', __('description')) }}
                {{ Form::text('description', $module->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
                {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div> 
        
        <div class="col-12 col-md-6">
            <div class="form-group">
                {{ Form::label('project_id', __('project_id')) }}
                {{ Form::text('project_id', $module->project_id, ['class' => 'form-control' . ($errors->has('project_id') ? ' is-invalid' : ''), 'placeholder' => 'Project Id']) }}
                {!! $errors->first('project_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div> 
        
        <div class="col-12 col-md-6">
            <div class="form-group">
                {{ Form::label('created_by', __('created_by')) }}
                {{ Form::text('created_by', $module->created_by, ['class' => 'form-control' . ($errors->has('created_by') ? ' is-invalid' : ''), 'placeholder' => 'Created By']) }}
                {!! $errors->first('created_by', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div> 

        </div>
    </div>

    {{-- Boton para todo --}}
    @include('layouts.btn-submit')
    
</div>
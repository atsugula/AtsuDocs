<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            
        
        <div class="col-12 col-md-6">
            <div class="form-group">
                {{ Form::label('file', __('file')) }}
                {{ Form::text('file', $note->file, ['class' => 'form-control' . ($errors->has('file') ? ' is-invalid' : ''), 'placeholder' => 'File']) }}
                {!! $errors->first('file', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div> 
        
        <div class="col-12 col-md-6">
            <div class="form-group">
                {{ Form::label('description', __('description')) }}
                {{ Form::text('description', $note->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
                {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div> 
        
        <div class="col-12 col-md-6">
            <div class="form-group">
                {{ Form::label('module_id', __('module_id')) }}
                {{ Form::text('module_id', $note->module_id, ['class' => 'form-control' . ($errors->has('module_id') ? ' is-invalid' : ''), 'placeholder' => 'Module Id']) }}
                {!! $errors->first('module_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div> 
        
        <div class="col-12 col-md-6">
            <div class="form-group">
                {{ Form::label('created_by', __('created_by')) }}
                {{ Form::text('created_by', $note->created_by, ['class' => 'form-control' . ($errors->has('created_by') ? ' is-invalid' : ''), 'placeholder' => 'Created By']) }}
                {!! $errors->first('created_by', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div> 

        </div>
    </div>

    {{-- Boton para todo --}}
    @include('layouts.btn-submit')
    
</div>
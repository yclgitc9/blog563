<div class="col-xs-9">
  <div class="box">
    <div class="box-body ">

        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
            {!! Form::label('name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}

            @if($errors->has('name'))
                <span class="help-block">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('model') ? 'has-error' : '' }}">
            {!! Form::label('model') !!}
            {!! Form::text('model', null, ['class' => 'form-control']) !!}

            @if($errors->has('model'))
                <span class="help-block">{{ $errors->first('model') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
            {!! Form::label('price') !!}
            {!! Form::text('price', null, ['class' => 'form-control']) !!}

            @if($errors->has('price'))
                <span class="help-block">{{ $errors->first('price') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('stock') ? 'has-error' : '' }}">
            {!! Form::label('stock') !!}
            {!! Form::text('stock', null, ['class' => 'form-control']) !!}

            @if($errors->has('price'))
                <span class="help-block">{{ $errors->first('stock') }}</span>
            @endif
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">{{ $product->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.products.index') }}" class="btn btn-default">Cancel</a>
    </div>
  </div>
  <!-- /.box -->
</div>
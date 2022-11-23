<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $purchase->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('product_id') }}
            {{ Form::text('product_id', $purchase->product_id, ['class' => 'form-control' . ($errors->has('product_id') ? ' is-invalid' : ''), 'placeholder' => 'Product Id']) }}
            {!! $errors->first('product_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cardNumber') }}
            {{ Form::text('cardNumber', $purchase->cardNumber, ['class' => 'form-control' . ($errors->has('cardNumber') ? ' is-invalid' : ''), 'placeholder' => 'Cardnumber']) }}
            {!! $errors->first('cardNumber', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cvc') }}
            {{ Form::text('cvc', $purchase->cvc, ['class' => 'form-control' . ($errors->has('cvc') ? ' is-invalid' : ''), 'placeholder' => 'Cvc']) }}
            {!! $errors->first('cvc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('expirationDate') }}
            {{ Form::text('expirationDate', $purchase->expirationDate, ['class' => 'form-control' . ($errors->has('expirationDate') ? ' is-invalid' : ''), 'placeholder' => 'Expirationdate']) }}
            {!! $errors->first('expirationDate', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
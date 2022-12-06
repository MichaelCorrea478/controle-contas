<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $transaction->user_id }}</p>
</div>

<!-- Category Id Field -->
<div class="col-sm-12">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{{ $transaction->category_id }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $transaction->description }}</p>
</div>

<!-- Value Field -->
<div class="col-sm-12">
    {!! Form::label('value', 'Value:') !!}
    <p>{{ $transaction->value }}</p>
</div>

<!-- Due Date Field -->
<div class="col-sm-12">
    {!! Form::label('due_date', 'Due Date:') !!}
    <p>{{ $transaction->due_date }}</p>
</div>

<!-- Installments Qty Field -->
<div class="col-sm-12">
    {!! Form::label('installments_qty', 'Installments Qty:') !!}
    <p>{{ $transaction->installments_qty }}</p>
</div>

<!-- Day Field -->
<div class="col-sm-12">
    {!! Form::label('day', 'Day:') !!}
    <p>{{ $transaction->day }}</p>
</div>

<!-- Month Field -->
<div class="col-sm-12">
    {!! Form::label('month', 'Month:') !!}
    <p>{{ $transaction->month }}</p>
</div>

<!-- Year Field -->
<div class="col-sm-12">
    {!! Form::label('year', 'Year:') !!}
    <p>{{ $transaction->year }}</p>
</div>

<!-- Recurrent Field -->
<div class="col-sm-12">
    {!! Form::label('recurrent', 'Recurrent:') !!}
    <p>{{ $transaction->recurrent }}</p>
</div>

<!-- Fixed Value Field -->
<div class="col-sm-12">
    {!! Form::label('fixed_value', 'Fixed Value:') !!}
    <p>{{ $transaction->fixed_value }}</p>
</div>

<!-- Paid Field -->
<div class="col-sm-12">
    {!! Form::label('paid', 'Paid:') !!}
    <p>{{ $transaction->paid }}</p>
</div>


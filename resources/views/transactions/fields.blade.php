<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category Id:') !!}
    {!! Form::number('category_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('value', 'Value:') !!}
    {!! Form::number('value', null, ['class' => 'form-control']) !!}
</div>

<!-- Due Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('due_date', 'Due Date:') !!}
    {!! Form::text('due_date', null, ['class' => 'form-control','id'=>'due_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#due_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Installments Qty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('installments_qty', 'Installments Qty:') !!}
    {!! Form::number('installments_qty', null, ['class' => 'form-control']) !!}
</div>

<!-- Day Field -->
<div class="form-group col-sm-6">
    {!! Form::label('day', 'Day:') !!}
    {!! Form::number('day', null, ['class' => 'form-control']) !!}
</div>

<!-- Month Field -->
<div class="form-group col-sm-6">
    {!! Form::label('month', 'Month:') !!}
    {!! Form::number('month', null, ['class' => 'form-control']) !!}
</div>

<!-- Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('year', 'Year:') !!}
    {!! Form::number('year', null, ['class' => 'form-control']) !!}
</div>

<!-- Recurrent Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('recurrent', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('recurrent', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('recurrent', 'Recurrent', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Fixed Value Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('fixed_value', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('fixed_value', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('fixed_value', 'Fixed Value', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Paid Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('paid', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('paid', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('paid', 'Paid', ['class' => 'form-check-label']) !!}
    </div>
</div>

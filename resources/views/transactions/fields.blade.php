<!-- Income Field -->
<div class="form-group col-sm-6">
    {!! Form::label('income', 'Tipo da transação:', ['class' => 'd-block']) !!}
    {!! Form::radio('income', '0', ['class' => 'form-control']) . ' Despesa' !!}
    <br />
    {!! Form::radio('income', '1', ['class' => 'form-control']) , ' Receita' !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Descrição:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Categoria:') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Selecionar categoria...']) !!}
</div>

<!-- Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('value', 'Valor:') !!}
    {!! Form::number('value', null, ['class' => 'form-control', 'min' => '0', 'step' => '0.01']) !!}
</div>

<!-- Due Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('due_date', 'Vencimento:') !!}
    {!! Form::date('due_date', $transaction->due_date ?? \Carbon\Carbon::now(), ['class' => 'form-control','id'=>'due_date']) !!}
</div>

<!-- Installments Qty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('installments_qty', 'Qtd parcelas:') !!}
    {!! Form::number('installments_qty', null, ['class' => 'form-control']) !!}
</div>

<!-- Recurrent Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('recurrent', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('recurrent', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('recurrent', 'Recorrente mensal', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Fixed Value Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('fixed_value', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('fixed_value', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('fixed_value', 'Valor fixo', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Paid Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('paid', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('paid', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('paid', 'Pago', ['class' => 'form-check-label']) !!}
    </div>
</div>

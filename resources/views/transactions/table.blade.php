<div class="table-responsive">
    <table class="table table-sm table-hover" id="transactions-table">
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Valor</th>
                <th>Vencimento</th>
                <th>Pago</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($transactions as $transaction)
            <tr class="{{ $transaction->income ? 'table-success' : 'table-danger' }}">
                <td>{{ $transaction->description }}</td>
                <td>{{ $transaction->category_name }}</td>
                <td>R$ {{ $transaction->value }}</td>
                <td>{{ $transaction->due_date_fmt }}</td>
                <td>{!! Form::checkbox('paid', true, ($transaction->paid) ? true : false, ['class' => 'check-paid', 'data-id' => $transaction->id]) !!}</td>
                <td width="120">
                    {!! Form::open(['route' => ['transactions.destroy', $transaction->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('transactions.edit', [$transaction->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@push('page_scripts')
<script>

$(function() {
    $('.check-paid').on('click', function() {
        let id = $(this).data('id');
        let checked = this.checked;
        alert('check paid id: ' + id + ' checked: ' + checked);
    });
});

</script>
@endpush

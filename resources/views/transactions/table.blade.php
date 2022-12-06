<div class="table-responsive">
    <table class="table" id="transactions-table">
        <thead>
        <tr>
            <th>User Id</th>
        <th>Category Id</th>
        <th>Description</th>
        <th>Value</th>
        <th>Due Date</th>
        <th>Installments Qty</th>
        <th>Day</th>
        <th>Month</th>
        <th>Year</th>
        <th>Recurrent</th>
        <th>Fixed Value</th>
        <th>Paid</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($transactions as $transaction)
            <tr>
                <td>{{ $transaction->user_id }}</td>
            <td>{{ $transaction->category_id }}</td>
            <td>{{ $transaction->description }}</td>
            <td>{{ $transaction->value }}</td>
            <td>{{ $transaction->due_date }}</td>
            <td>{{ $transaction->installments_qty }}</td>
            <td>{{ $transaction->day }}</td>
            <td>{{ $transaction->month }}</td>
            <td>{{ $transaction->year }}</td>
            <td>{{ $transaction->recurrent }}</td>
            <td>{{ $transaction->fixed_value }}</td>
            <td>{{ $transaction->paid }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['transactions.destroy', $transaction->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('transactions.show', [$transaction->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
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

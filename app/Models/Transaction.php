<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Transaction
 * @package App\Models
 * @version December 6, 2022, 1:10 am UTC
 *
 * @property integer $user_id
 * @property integer $category_id
 * @property string $description
 * @property number $value
 * @property string $due_date
 * @property integer $installments_qty
 * @property integer $day
 * @property integer $month
 * @property integer $year
 * @property boolean $recurrent
 * @property boolean $fixed_value
 * @property boolean $paid
 */
class Transaction extends Model
{

    use HasFactory;

    public $table = 'transactions';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'income',
        'user_id',
        'category_id',
        'description',
        'value',
        'due_date',
        'installments_qty',
        'day',
        'month',
        'year',
        'recurrent',
        'fixed_value',
        'paid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    /* protected $casts = [
        'id' => 'integer',
        'income' => 'boolean',
        'user_id' => 'integer',
        'category_id' => 'integer',
        'description' => 'string',
        'value' => 'decimal:2',
        'due_date' => 'date:d/m/Y',
        'installments_qty' => 'integer',
        'day' => 'integer',
        'month' => 'integer',
        'year' => 'integer',
        'recurrent' => 'boolean',
        'fixed_value' => 'boolean',
        'paid' => 'boolean'
    ]; */

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'income' => 'required|boolean',
        'category_id' => 'nullable|integer',
        'description' => 'required|string',
        'value' => 'required|numeric',
        'due_date' => 'required',
        'installments_qty' => 'nullable|integer',
        'day' => 'required|integer',
        'month' => 'required|integer',
        'year' => 'required|integer',
        'recurrent' => 'nullable|boolean',
        'fixed_value' => 'nullable|boolean',
        'paid' => 'nullable|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

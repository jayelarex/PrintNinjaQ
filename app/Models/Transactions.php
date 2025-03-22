<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transactions extends Model {

    public $timestamps = false;

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'transactions';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'Id';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
   * The attributes that should be visible in arrays.
   *
   * @var array
   */
  protected $visible = [
    'TransactionType',
    'PostDate',
    'Memo',
    'Bank'
  ];

    /**
     * Define a relationship to the Banks model.
     *
     * This method establishes a "belongs to" relationship between the Transactions model
     * and the Banks model. It links the 'BankId' column in the Transactions table
     * to the 'BankId' column in the Banks table.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Bank(): BelongsTo
    {
        return $this->belongsTo(Banks::class, 'BankId', 'BankId');
    }

}

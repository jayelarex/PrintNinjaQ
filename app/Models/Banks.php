<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banks extends Model {
    public $timestamps = false;

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'banks';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'BankId';

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
    'BankName',
  ];

}

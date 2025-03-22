<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class Example2Controller extends Controller {
    /**
         * Retrieves all transactions with their associated bank information
         * and returns the data as a JSON string in a pretty-printed format.
         *
         * @return string JSON-encoded string of transactions with bank details.
         */
    public function example2(): String {
        return Transactions::with('Bank')->get()->toJson(JSON_PRETTY_PRINT);
    }

}

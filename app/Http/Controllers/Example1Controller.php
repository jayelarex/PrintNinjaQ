<?php

namespace App\Http\Controllers;

use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class Example1Controller extends Controller {

    /**
 * Handles the example1a request and generates a list of column headings.
 *
 * This method retrieves a 'number' query parameter from the request, generates
 * a collection of column headings (e.g., "A", "B", "C", etc.) based on the number,
 * and passes the data to the 'example1' view.
 *
 * @param \Illuminate\Http\Request $request The incoming HTTP request instance.
 * @return \Illuminate\View\View The view containing the generated column headings.
 *
 * Query Parameters:
 * - number (int): The number of column headings to generate.
 *
 * View Data:
 * - columnHeadings (array): An array of generated column headings.
 * - finalColumnHeading (string|null): The last column heading in the list, or null if none.
 * - number (int): The input number used to generate the column headings.
 */
    public function example1a(Request $request): View {
        $columnHeadings = collect([]);

        $number = $request->query('number');
        $i = 1;
        while ($i <= $number) {
            $columnHeadings->push(Coordinate::stringFromColumnIndex($i));
            $i++;
        }

        return view('example1', [
            'columnHeadings' => $columnHeadings->all(),
            'finalColumnHeading' => $columnHeadings->last(),
            'number' => $number
        ]);
    }

    /**
         * Generates a collection of Excel column headings and passes them to the view.
         *
         * This method creates a collection of Excel-style column headings (e.g., A, B, C, ..., Z, AA, AB, etc.)
         * by iterating from 0 to a specified number ($n). It uses the `getExcelColumn` method to convert
         * numeric indices into their corresponding Excel column names. The resulting collection is then
         * passed to the 'example1' view.
         *
         * @return \Illuminate\View\View The view 'example1' with the generated column headings.
         */
    public function example1b(): View {
        $columnHeadings = collect([]);
        $number = $request->query('number');
        $i = 0;

    while ($i <= $n) {
        $columnHeadings->push($this->getExcelColumn($i));
        $i++;
    }

    return view('example1', [
        'columnHeadings' => $columnHeadings->all(),
        'finalColumnHeading' => $columnHeadings->last(),
        'number' => $number
    ]);
    }


    /**
         * Converts a given number into a string representation based on a 
         * custom base-26 encoding, where 'A' corresponds to 0, 'B' to 1, and so on.
         *
         * @param int $number The input number to be converted.
         * @return string The resulting string representation in base-26 encoding.
         */
    private function getExcelColumn($number): string {
        for($r = ""; $number >= 0; $number = intval($number / 26) - 1) {
            $r = chr($number%26 + 0x41) . $r;
        }
        return $r;
    }
}

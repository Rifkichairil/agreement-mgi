<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    //
    public function index() {

        /**
         * ambil data dari model dengan parameter id / uuid.
         * harap disesuaikan dengan data yang akan digunakan
         * ex : $member = Member::where($id)->first();
         */
        $pdf = Pdf::loadView('pdf.aggrement', ['data' => [
            'day'           => now()->isoFormat('dddd'),

            /**open contoh member
             * dan nanti yang di panggil dalam blade adalah $member['no_identitas']
            */
            //'member'          => $member,
            /**close contoh member */

            /**open contoh pricingDetails
             * dan nanti yang di panggil dalam blade adalah $pricingDetails['no_identitas']
            */
            //'pricingDetails'          => $pricingDetails,
            /**close contoh pricingDetails */
        ]]);


        /**
         * harap baca dokumentasi
         * https://github.com/barryvdh/laravel-dompdf
         */
        return $pdf->stream();
    }
}

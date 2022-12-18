<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RentalKaset;
use PDF;

class ViewMemberKasetpdf extends Controller
{
    //
    public function index()
    {
        $rk = RentalKaset::all();
        return view('laporan.v_rental_kaset', ['rentalkaset' => $rk]);
    }

    public function print()
    {
        $rk = RentalKaset::all();
        
        return view('laporan.v_pdf_rental_kaset', ['rentalkaset' => $rk]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\DonateCategory;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function getAllDonateCategories()
    {
        return
            response()->json(DonateCategory::all());
    }
}

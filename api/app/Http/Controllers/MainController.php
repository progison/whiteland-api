<?php

namespace App\Http\Controllers;

use App\Models\DonateCategory;
use App\Models\DonateLot;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function getAllDonateCategories()
    {
        return
            response()->json(DonateCategory::all());
    }
    function getAllDonateLots($donate_category_id)
    {
        return
            response()->json(DonateCategory::find($donate_category_id)->donateLots);
    }
}

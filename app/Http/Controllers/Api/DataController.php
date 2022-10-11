<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Ticket;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function getCategory()
    {
        $category = Category::get();

        return $category;
    }

    public function getTicket()
    {
        $ticket = Ticket::get();

        return $ticket;
    }
}

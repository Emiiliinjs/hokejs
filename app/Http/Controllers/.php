// app/Http/Controllers/HistoryController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        // You can pass any data you want to the Blade view here if needed.
        return view('history');
    }
}

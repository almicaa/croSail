<?php

namespace App\Http\Controllers;

use App\Models\Yacht;
use Illuminate\Http\Request;

class YachtController extends Controller
{
    public function index(Request $request)
    {
        $query = Yacht::query();
        
        if ($request->filled('destination')) {
            $query->where('location', 'like', '%' . $request->destination . '%');
        }
        
        if ($request->filled('guests')) {
            $query->where('max_guests', '>=', $request->guests);
        }
        
        if ($request->filled('price_min')) {
            $query->where('price_per_day', '>=', $request->price_min);
        }
        
        if ($request->filled('price_max')) {
            $query->where('price_per_day', '<=', $request->price_max);
        }
        
        if ($request->filled('length')) {
            switch ($request->length) {
                case 'small':
                    $query->where('length', '<=', 15);
                    break;
                case 'medium':
                    $query->whereBetween('length', [15, 20]);
                    break;
                case 'large':
                    $query->where('length', '>=', 20);
                    break;
            }
        }
        
        if ($request->filled('skipper')) {
            $query->where('has_skipper', true);
        }
        
        if ($request->filled('crew')) {
            $query->where('has_crew', true);
        }
        
        if ($request->filled('catering')) {
            $query->where('has_catering', true);
        }
        
        if ($request->filled('watersports')) {
            $query->where('has_watersports', true);
        }
        
        $sortBy = $request->get('sort', 'price-low');
        switch ($sortBy) {
            case 'price-high':
                $query->orderBy('price_per_day', 'desc');
                break;
            case 'rating':
                $query->orderBy('rating', 'desc');
                break;
            case 'size':
                $query->orderBy('length', 'desc');
                break;
            default:
                $query->orderBy('price_per_day', 'asc');
        }
        
        $yachts = $query->get();
        
        return view('yachts.index', compact('yachts'));
    }
    
    public function book(Yacht $yacht)
    {
        return redirect()->back()->with('success', 'Rezervacija jahte "' . $yacht->name . '" je pokrenuta!');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\View\View;

class DashboardController extends Controller
{
	public function index(): View
	{
		return view('user.worldwide', [
			'confirmed' => Country::sum('confirmed'),
			'recovered' => Country::sum('recovered'),
			'deaths'    => Country::sum('deaths'),
		]);
	}

	public function show(): View
	{
		return view('user.bycountry', [
			'countries' => Country::filter(request(['search', 'sort']))->get(),
		]);
	}
}

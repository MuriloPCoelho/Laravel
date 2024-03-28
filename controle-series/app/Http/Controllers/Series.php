<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;

	class Series extends Controller
	{
		public function index(Request $request): string
		{
			$series = [
				'Punisher',
				'Lost',
				'Breaking Bad',
				'The Walking Dead',
				'Gray\'s Anatomy',
				'Game of Thrones'
			];

			return view('listar-series', compact('series'));
		}
	}
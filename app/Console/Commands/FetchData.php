<?php

namespace App\Console\Commands;

use App\Models\Country;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchData extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'fetch:statistics';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Fetching data from Covid Statistics API';

	/**
	 * Execute the console command.
	 */
	public function handle(): void
	{
		$response = Http::get('https://devtest.ge/countries');

		foreach (json_decode($response) as $info)
		{
			$statistics = Http::post('https://devtest.ge/get-country-statistics', ['code' => $info->code]);

			Country::updateOrCreate(
				['code' => $info->code],
				[
					'name' => [
						'en' => $info->name->en,
						'ka' => $info->name->ka,
					],
					'confirmed' => json_decode($statistics)->confirmed,
					'recovered' => json_decode($statistics)->recovered,
					'deaths'    => json_decode($statistics)->deaths,
				]
			);
		}
	}
}

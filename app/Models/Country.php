<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Country extends Model
{
	use HasFactory, HasTranslations;

	protected $guarded = ['id'];

	public $translatable = ['name'];

	public function scopeFilter($query, array $filters)
	{
		$query->when($filters['search'] ?? false, fn ($query, $search) => $query->whereRaw('LOWER(`name`) like ?', ['%' . strtolower($search) . '%']));

		$query->when($filters['sort'] ?? false, fn ($query, $sort) => $sort == 'name' ? $query->orderBy($sort . '->' . app()->getLocale(), request('order')) :
							  $query->orderBy($sort, request('order')));
	}
}

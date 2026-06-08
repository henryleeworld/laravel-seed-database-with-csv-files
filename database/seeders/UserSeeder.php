<?php

namespace Database\Seeders;

use Flynsarmy\CsvSeeder\CsvSeeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends CsvSeeder
{
	public function __construct()
	{
		$this->table = 'users';
		$this->filename = base_path().'/database/seeders/csvs/users.csv';
        $this->should_trim = true;
	}

    /**
     * Run the database seeders.
     */
    public function run(): void
	{
		DB::disableQueryLog();
		DB::table($this->table)->truncate();
		parent::run();
	}
}

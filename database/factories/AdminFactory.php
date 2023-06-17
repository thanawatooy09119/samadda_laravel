<?php
use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AdminFactory extends Factory
{
	protected $model = Admin::class;

	public function definition()
	{
		return [
			'username' => $this->faker->userName,
			'password' => Hash::make('1234'),
			'name' => $this->faker->name,
			'status' => $this->faker->boolean,
			'address' => $this->faker->address,
			'tel' => $this->faker->phoneNumber,
			'role' => 'admin',
		];
	}
}
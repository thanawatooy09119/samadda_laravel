<?php
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class CustomerFactory extends Factory
{
	protected $model = Customer::class;

	public function definition()
	{
		return [
			'username' => $this->faker->userName,
			'password' => Hash::make('password'),
			// Change 'password' to the desired default password
			'name' => $this->faker->name,
			'status' => $this->faker->boolean,
			'address' => $this->faker->address,
			'tel' => $this->faker->phoneNumber,
			'role' => 'customer',
		];
	}
}
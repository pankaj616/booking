<?php

use App\Department;
use App\Role;
use App\User;
Use App\Address;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = Department::all();
        $roles = Role::all();

        if($departments->count() && $roles->count()){
            $employees =[
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'engineering')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'head')->pluck('id')->first(),
                    'joining_date'  => '2014-02-23',
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'engineering')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'deputy_head')->pluck('id')->first(),
                    'joining_date'  => '2018-02-23',
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 2 address_line_1",
                        'address_line_2' => "test 2 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'engineering')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'manager')->pluck('id')->first(),
                    'joining_date'  => '2018-02-23',
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 2 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'engineering')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'junior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'engineering')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'junior_member')->pluck('id')->first(),
                    'joining_date'  => '2020-02-23',
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'engineering')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'senior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'engineering')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'senior_member')->pluck('id')->first(),
                    'joining_date'  => '2019-10-02',
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'engineering')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'head')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],

                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'plumbing')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'head')->pluck('id')->first(),
                    'joining_date'  => '2018-02-23',
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'plumbing')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'deputy_head')->pluck('id')->first(),
                    'joining_date'  => '2012-02-23',
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 2 address_line_1",
                        'address_line_2' => "test 2 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'plumbing')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'manager')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 2 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'plumbing')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'junior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'plumbing')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'junior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'plumbing')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'senior_member')->pluck('id')->first(),
                    'joining_date'  => '2015-02-23',
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'plumbing')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'senior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'plumbing')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'head')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],

                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'roofing')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'head')->pluck('id')->first(),
                    'joining_date'  => '2017-02-23',
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'roofing')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'deputy_head')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 2 address_line_1",
                        'address_line_2' => "test 2 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'roofing')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'manager')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 2 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'roofing')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'junior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'roofing')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'junior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'roofing')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'senior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'roofing')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'senior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'roofing')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'head')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],

                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'carpentry')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'head')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'carpentry')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'deputy_head')->pluck('id')->first(),
                    'joining_date'  => '2014-02-01',
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 2 address_line_1",
                        'address_line_2' => "test 2 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'carpentry')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'manager')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 2 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'carpentry')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'junior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'carpentry')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'junior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'carpentry')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'senior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'carpentry')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'senior_member')->pluck('id')->first(),
                    'joining_date'  => '2014-02-01',
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'carpentry')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'head')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],

                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'bricklaying')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'head')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'bricklaying')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'deputy_head')->pluck('id')->first(),
                    'joining_date'  => '2014-02-01',
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 2 address_line_1",
                        'address_line_2' => "test 2 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'bricklaying')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'manager')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 2 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'bricklaying')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'junior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'bricklaying')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'junior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'bricklaying')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'senior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'bricklaying')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'senior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'bricklaying')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'head')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],

                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'finance')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'head')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'finance')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'deputy_head')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 2 address_line_1",
                        'address_line_2' => "test 2 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'finance')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'manager')->pluck('id')->first(),
                    'joining_date'  => '2014-02-15',
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 2 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'finance')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'junior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'finance')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'junior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'finance')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'senior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'finance')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'senior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'finance')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'head')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],

                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'personnel_Office')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'head')->pluck('id')->first(),
                    'joining_date'  => '2020-02-01',
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'personnel_Office')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'deputy_head')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 2 address_line_1",
                        'address_line_2' => "test 2 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'personnel_Office')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'manager')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 2 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'personnel_Office')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'junior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'personnel_Office')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'junior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'personnel_Office')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'senior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'personnel_Office')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'senior_member')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ],
                ["data"=> [
                    'first_name'    => Str::random(10), 
                    'last_name'     => Str::random(10),
                    'email'         => Str::random(10).'@gmail.com',
                    'mobile'        => rand(),
                    'department_id' => $departments->where('slug', 'personnel_Office')->pluck('id')->first(),
                    'role_id'       => $roles->where('slug', 'head')->pluck('id')->first(),
                    'joining_date'  => Carbon::now()->format('Y-m-d'),
                    'password'      => Hash::make('password'),
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    "address" =>[
                        'zip' => "123",
                        'address_line_1' => "test 1 address_line_1",
                        'address_line_2' => "test 1 address_line_2",
                        'city' => 'Alaska',
                        'state' => 'Alabama',
                        'country' => 'US'
                    ]
                ]
                    
            ];
            
            foreach($employees as $employee){
                $user = User::create($employee['data']);
                $employee['address']['employee_id'] = $user->id;
                Address::create($employee['address']);
            }
            
        }else{
            dd("Please run DepartmentSeeder and RoleSeeder first");
        }
    }
}

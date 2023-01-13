<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Faker\Generator;
use Illuminate\Container\Container;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserResource::collection(User::with('images')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $faker = Container::getInstance()->make(Generator::class);
        $request->validated($request->all());
        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'ip_address' => $request->ip_address,
            'referrer' => $faker->freeEmailDomain(),
            'user_agent' => $faker->userAgent()
        ]);
        return new UserResource($user);
    }

    /**
     * Display the specified resource.
     *
     * @param int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $id)
    {
        return new UserResource($id);
    }
}

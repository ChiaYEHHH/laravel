<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // echo "1234564";
        $data = [
            [
                'id' => '1',
                'name' => 'aaa',
            ],
            [
                'id' => '2',
                'name' => 'sss',
            ],
            [
                'id' => '3',
                'name' => 'www',
            ],
            [
                'id' => '4',
                'name' => 'eee'
            ],
            [
                'id' => '5',
                'name' => 'rrr'
            ]
        ];

        return view('dog.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // echo "Dog_create";
        return view('dog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo "dog_edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
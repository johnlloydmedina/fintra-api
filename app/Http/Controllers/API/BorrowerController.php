<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Borrower;
use Illuminate\Http\Request;

class BorrowerController extends Controller
{
    public function index()
    {
        $borrowers = Borrower::all();
        return response()->json(['message' => 'Borrowers retrieved successfully', 'data' => $borrowers]);
    }

    public function store(Request $request)
    {
        $borrower = Borrower::create($request->all());
        return response()->json(['message' => 'Borrower created successfully', 'data' => $borrower], 201);
    }

    public function show($id)
    {
        $borrower = Borrower::findOrFail($id);
        return response()->json(['message' => 'Borrower retrieved successfully', 'data' => $borrower]);
    }

    public function update(Request $request, $id)
    {
        $borrower = Borrower::findOrFail($id);
        $borrower->update($request->all());
        return response()->json(['message' => 'Borrower updated successfully', 'data' => $borrower], 200);
    }

    public function destroy($id)
    {
        $borrower = Borrower::findOrFail($id);
        $borrower->delete();
        return response()->json(['message' => 'Borrower deleted successfully']);
    }
}

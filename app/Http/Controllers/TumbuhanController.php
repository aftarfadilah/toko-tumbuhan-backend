<?php

namespace App\Http\Controllers;
use App\Tumbuhan;

use Illuminate\Http\Request;

class TumbuhanController extends Controller
{
    //
  public function index() {
    return Tumbuhan::all();
  }

  public function show($id) {
    return Tumbuhan::find($id);
  }

  public function store(Request $request) {
    $tumbuhan = Tumbuhan::create($request->all());

    return response()->json($article, 201);
  }

  public function update(Request $request, Tumbuhan $tumbuhan) {
    $tumbuhan->update($request->all());

    return response()->json($tumbuhan, 200);
  }

  public function delete(Tumbuhan $tumbuhan) {
    $tumbuhan->delete();

    return response()->json($tumbuhan, 204);
  }
}

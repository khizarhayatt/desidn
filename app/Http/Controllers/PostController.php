<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          // try {} 
          // catch (\Throwable $e) {  return redirect()->back()->with('error', $e->getMessage()); }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // try {} 
        //catch (\Throwable $e) {  return redirect()->back()->with('error', $e->getMessage()); }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //try {} 
          // catch (\Throwable $e) {  return redirect()->back()->with('error', $e->getMessage()); }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //try {} 
        //catch (\Throwable $e) {  return redirect()->back()->with('error', $e->getMessage()); }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         //try {} 
        //catch (\Throwable $e) {  return redirect()->back()->with('error', $e->getMessage()); }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         //try {} 
        //catch (\Throwable $e) {  return redirect()->back()->with('error', $e->getMessage()); }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         //try {} 
        //catch (\Throwable $e) {  return redirect()->back()->with('error', $e->getMessage()); }
    }
}

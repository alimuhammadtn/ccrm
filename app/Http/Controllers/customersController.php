<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\customer;

class customersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // Can do a basic all
        // $posts = Post::all();

        // Bringing in App/Post to use it's model!
        // $posts = Post::orderBy('title', 'desc')->get();

        // Can also limit
        // $posts = Post::orderBy('title', 'desc')->take(1)->get();

        // Could get just one
        // $post = Post::where('title', 'initial post')->get();
        // return $post;

        // Example with DB
        // $posts = DB::select('SELECT * FROM posts');

        $customers = customer::all();
        return view('customer.customers')->with('customers',$customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new customer;

        $customer->name = $request->input('name');

        $customer->address = $request->input('address');

        $customer->phone = $request->input('phone');

        $customer->save();

        return redirect('customer')->with('success','New Customer added');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = customer::find($id);
        return view('customer.edit')->with('customer',$customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = customer::find($id);

        $customer->name = $request->input('name');

        $customer->address = $request->input('address');

        $customer->phone = $request->input('phone');

        $customer->update();

        return redirect('customer')->with('success','Customer Updated');;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = customer::find($id);

        $record->delete();

        return redirect('customer')->with('error','Customer Deleted');
    }
}

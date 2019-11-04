<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salary_group;
use DB;
class SalaryController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'des' => 'required',
            'basic' => 'required',
            'fa' => 'required',
            'fd' => 'required',
            'va' => 'required',
            'vd' => 'required',

        ]);

        $salGroup = new Salary_group;

        $salGroup->name=$request->input('name');
        $salGroup->des=$request->input('des');
        $salGroup->basic=$request->input('basic');
        
            $sum=0;
            $all_fa=$request->fa;

        foreach($all_fa as $allow_select){
            $current_fa = DB::table('fixed-allowances')->where('id', $allow_select)->first();
            $sum=$sum+ ($current_fa->amount);
            

        }

        $salGroup->fa=$sum;

        $dedSum=0;
        $all_ded=$request->fd;

        foreach($all_ded as $ded_select){
            $current_fd = DB::table('fixed-deductions')->where('id', $ded_select)->first();
            $dedSum=$dedSum+ ($current_fd->amount);
            

        }

        $salGroup->fd=$dedSum;

        $salGroup->va=$request->input('va');
        $salGroup->vd=$request->input('vd');


        $salGroup->save();

        return back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

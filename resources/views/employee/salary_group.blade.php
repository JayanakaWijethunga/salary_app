@extends('layouts.salarygrp')

@section('home')
<a href="{{route('home')}}">
@endsection

@section('manageEmp')
<a href="{{route('manageemp')}}">
@endsection

@section('salary_grp')
<a href="{{route('salary_grp')}}">
@endsection

@section('salary_manage')
<a href="{{route('salary_manage')}}">
@endsection

@section('attendance')
<a href="{{route('attendance')}}">
@endsection

@section('core')

<div class="box">

    <div  style="padding:10px;">
    <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#salarygrp"><i class="fa fa-user"></i> Add Salary Group
    </button>
    </div>
    

        <div class="box-header">
          <h3 class="box-title">Salary Group List</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Description</th>
              <th>Basic Salary</th>
              <th>Fixed Allowance</th>
              <th>Fixed Deduction</th>
              <th>Variable Allowance</th>
              <th>Variable Deduction</th>
            </tr>
            </thead>
            <tbody>
            
                    @foreach ($salary_groups as $salary_group)
                
                    <tr>
                      <td>{{$salary_group->id}}</td>
                        <td>{{$salary_group->name}}</td>
                        <td>{{$salary_group->des}}</td>
                        <td>{{$salary_group->basic}}</td>
                        <td>{{$salary_group->fa}}</td>
                        <td>{{$salary_group->fd}}</td>
                        <td>{{$salary_group->va}}</td>
                        <td>{{$salary_group->vd}}</td>
                      </tr>
                    @endforeach
          

            
           
       
            
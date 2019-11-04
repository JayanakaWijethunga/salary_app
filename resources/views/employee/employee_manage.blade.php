@extends('layouts.employee_manage')

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
    <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#createEmp"><i class="fa fa-user"></i> Add Employee
    </button>
    </div>
    

        <div class="box-header">
          <h3 class="box-title">Employee List</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Department</th>
              <th>Designation</th>
              <th>Salary Group</th>
              <th>EPF NO</th>
            </tr>
            </thead>
            <tbody>
            
          @foreach ($employees as $employee)
                
          <tr>
            <td>{{$employee->id}}</td>
              <td>{{$employee->name}}</td>
              <td>{{$employee->email}}</td>
              <td>{{$employee->department}}</td>
              <td>{{$employee->designation}}</td>
              <td>{{$employee->sal_grp}}</td>
              <td>{{$employee->epf}}</td>
            </tr>
          @endforeach

            
           
       
            
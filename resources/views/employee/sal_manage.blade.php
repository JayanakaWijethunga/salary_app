@extends('layouts.salary_manage')

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
              <th>Email</th>
              <th>Salary_Group</th>
              <th>Calculated Salary</th>
              
            </tr>
            </thead>
            <tbody>
            
         
                @foreach ($users as $salary_group)
                
                    <tr>
                       
                        <td>{{$salary_group->email}}</td>
                        <td>{{$salary_group->name}}</td>
                        <td>{{$salary_group->basic + ($salary_group->fa - $salary_group->fd) + ($salary_group->va - $salary_group->vd)}}</td>
                        
                      
                      </tr>
                    @endforeach
            
           
       
            
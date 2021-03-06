@extends('app')
@section('page-custom-css')
    <link rel="stylesheet" href="{{ asset('assets/css/custom/c-compiler.css') }}">
@endsection
@section('title','Study')
@section('content')


<!-- box title bar-->
<div class="page-title">
    <!-- back button -->
    {{-- <a title="Back to 'some where'" class="page-back-arrow" href="#"><i class="fa fa-arrow-left"></i></a> --}}
    @include('includes.back')
    <!-- box title -->
    <a href="#">C Compiler</a>
</div>
<!-- box body -->
<div class="page-body">
    <textarea class="form-control text-left" id='code' cols="10" rows="10">#include<stdio.h>
void main()
{

}</textarea>

    <div class="btn btn-light-primary button-compiler-box">
        <button type="button" id="run_code" class="btn-compiler-compile"><i class="anticon anticon-caret-right"></i> চালান</button>
        <button class="btn-compiler-compile" id="compiler-output-toggle"><i class="fas fa-angle-down"></i> কন্সোল লুকান</button>
    </div>
    <textarea id="compiler-output" class="form-control text-left" cols="3" rows="3"></textarea>
</div>
@endsection
@section('page-custom-js')
<script src="{{ asset('assets') }}/js/custom/ccompiler.js?{{ time() }}"></script>
<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
@endsection


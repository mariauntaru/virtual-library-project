@extends('layouts.master')
@section('content')
<div class="frontpage">
    <p>If you have any problems or questions, don't hesitate to contact us. We will try to solve your problem in no time.</p>
    <p><img class="contact" src = "{{ URL::to("images/phone.png") }}"><span class="centered">  :   +40(762)040591</span></p>
    <p><img class="contact" src = "{{ URL::to("images/email.png") }}"><span class="centered">  :   vlibrary@vlibrary.com</span></p>
</div>
@endsection
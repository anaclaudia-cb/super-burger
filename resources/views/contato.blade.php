@extends('layouts.layout')

@section('conteudo')


<div class="p-3 bg-dark text-white text-center">
<h1>Hello World!</h1>
</div>

<div class="container">

    <table class="table">
    <td>📞 Telefone:</td>
    <td>00 00000-000</td>
    <td>00 00000-000</td>

</table>

<table class="table">
    <td>Localização:</td>
    <td>Rua: xxxxxx</td>
    <td>CEP: xxxxxx</td>
</table>


<div class="container">
<table class="table">
    <tr><td>Aberto:</td></tr>
    <tr><td>Terça a Quinta – 18h às 23h</td></tr>
    <tr><td>Sexta e Sábado – 18h às 23h </td></tr>
    <tr><td>Domingo – 18h às 23h </td></tr>
</table>
</div>
</div>

<div class="p-3 bg-dark text-white">
    <div>
<div class="wpb_map_wraper">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1297.489904733268!2d-47.22872922616833!3d-23.102379805510378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1633479929545!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" ></iframe>
   </div>
    </div>
</div>

@endsection

@extends('layouts.layout')

@section('conteudo')

    <div class="jumbotron" style="background-image: url(https://imgur.com/mGNBxfg.jpg); background-size: 100%;">
        <div class="container for-about">

            <img src="https://imgur.com/H7n1WC7.jpg" class=""
style=" visibility: visible; max-height: none; height:
                100%; width: 100%; overflow: hidden;">
        </div>
    </div>

    <blockquote class="blockquote text-center mt-2">
        <h1>O Super Burger</h1>
        <p class="mb-0">Venha conhecer nossa hamburgueria temática!</p>
    </blockquote>
    <table class="table">
        <thead>
            <tr>
                <th>
                    <img src="https://imgur.com/RUUsz0m.png" class="rounded float-left ml-5 mr-2 " style="visibility: visible;
          height: 200px;
          width: 200pxs;">
                </th>
                <th>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                        Integer posuere erat a
                        ante.</p>
                </th>
            </tr>

            <tr>
                <th>
                    <img src="https://imgur.com/RUUsz0m.png" class="rounded float-left ml-5 mr-2 " style="visibility: visible;
            height: 200px;
            width: 200pxs;">
                </th>
                <th>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                        ante.</p>
                </th>
            </tr>
        </thead>
    </table>


    <div class="card bg-dark text-white">
        <img class="card-img" src="https://imgur.com/YKcvFaj.png" alt="Imagem do card">
        <div class="card-img-overlay">
          <h5 class="card-title" style="color: #d38e40">Título do card</h5>
          <p class="card-text" style="color: #d38e40">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <p class="card-text" style="color: #d38e40">Integer posuere erat a ante.</p>
        </div>
      </div>
    </div>


    {{-- modo imagem como figura legenda embaixo da imagem

    <figure class="figure">
    <img src="https://imgur.com/gWnbRQ8.png" class="figure-img img-fluid rounded ml-5" style="visibility: visible;
    height: 200px;
    width: 200px;">
    <figcaption class="figure-caption text-right">Uma legenda para a imagem acima.</figcaption>
  </figure> --}}


@endsection

@section('rodape')
@endsection

@extends('layouts.layout')

@section('conteudo')

<div class="container for-about mt-2">

    <img src="https://imgur.com/8A30t77.png" class=""
style=" visibility: visible; max-height: none; height:
        100%; width: 100%; overflow: hidden;">
</div>

<blockquote class="blockquote text-center mt-2">
    <h1>Hello World!</h1>
</blockquote>
<p class="ml-2">
    <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis posuere mattis. Sed a turpis eros. Phasellus vulputate turpis erat, non fermentum purus placerat ac.
        Suspendisse nunc ligula, porttitor nec massa eget, finibus fringilla magna. Maecenas convallis tellus sapien, vel semper lectus aliquet eu.
        Quisque luctus congue euismod. Integer aliquet feugiat nisl.<br></strong>

    <strong><br>Nullam elementum, felis et venenatis ullamcorper, magna risus placerat mi, at rutrum ipsum lacus in nunc. Vivamus faucibus orci est, porta accumsan tellus vehicula sed. Vestibulum enim eros, finibus eget quam ac, ornare lobortis velit. Donec semper augue sapien, dictum feugiat lacus efficitur porttitor.
        Nam euismod auctor hendrerit. Quisque pretium massa velit, vel mollis sapien sodales sit amet. Vestibulum volutpat luctus est id consectetur. Vestibulum pretium metus nec elit suscipit, quis luctus nulla aliquam. Pellentesque laoreet rhoncus dapibus. Proin dapibus, lorem at pellentesque viverra, ipsum ante sagittis odio, vitae auctor urna leo sed sem. Nunc vitae ipsum in tellus fringilla rutrum sit amet ut magna.
    </strong>
</p>




<div class="rounded p-3 bg-dark text-white">
    <div class="ml-5 rounded ">
    <table class="table">
    <tr>
      <td><img  width="250" height="250" class=" rounded mt-2  ml-2"src='https://imgur.com/7b7vXeZ.jpg'/></td>
      <td><img  width="250" height="250" class=" rounded mt-2  ml-2"src='https://imgur.com/7b7vXeZ.jpg'/></td>
      <td><img  width="250" height="250" class=" rounded mt-2  ml-2"src='https://imgur.com/7b7vXeZ.jpg'/></td>
      <td><img  width="250" height="250" class=" rounded mt-2  ml-2"src='https://imgur.com/7b7vXeZ.jpg'/></td>


    </tr>

  </table>



  <table class="table">
    <tr>
      <td><img  width="250" height="250" class="mt-2  ml-2"src='https://imgur.com/HA2NQ96.jpg'/></td>

      <td> <img  width="250" height="250" class="mt-2  ml-2"src='https://imgur.com/HA2NQ96.jpg'/></td>

      <td> <img  width="250" height="250" class="mt-2  ml-2"src='https://imgur.com/HA2NQ96.jpg'/></td>
      <td> <img  width="250" height="250" class="mt-2  ml-2"src='https://imgur.com/HA2NQ96.jpg'/></td>
    </tr>

  </table>

  <table class="table">
    <tr>
      <td><img  width="250" height="250" class="mt-2  ml-2 mb-2 "src='https://imgur.com/PCsDeFJ.jpg'/></td>

      <td> <img  width="250" height="250" class="mt-2  ml-2 mb-2 "src='https://imgur.com/PCsDeFJ.jpg'/></td>

      <td> <img  width="250" height="250" class="mt-2  ml-2 mb-2"src='https://imgur.com/PCsDeFJ.jpg'/></td>
      <td> <img  width="250" height="250" class="mt-2  ml-2 mb-2"src='https://imgur.com/PCsDeFJ.jpg'/></td>
    </tr>

  </table>
    </div>
</div>

    {{-- carousel com controles

    <div class="jumbotron">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner active">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://imgur.com/7b7vXeZ.jpg" alt="Primeiro Slide">
      </div>
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://imgur.com/HA2NQ96.jpg" alt="Segundo Slide">
      </div>
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://imgur.com/PCsDeFJ.jpg" alt="Terceiro Slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>
</div> --}}

@endsection

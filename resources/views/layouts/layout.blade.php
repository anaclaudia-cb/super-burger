<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Burger</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
          <a class="navbar-brand" href="home">
            <img src="https://imgur.com/swOjBUo.png" alt="..." height="50">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="color: #d38e40" href="home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #d38e40" href="/sobre">O Super Burger</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #d38e40" href="/cardapio">Cardapio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #d38e40" href="/combos">Combos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #d38e40" href="/contato">Contato</a>
              </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
</body>
</html>

    @yield('conteudo')

@yield('rodape')
<div class="footer navbar-fixed-bottom">
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Informações sobre a Empresa</th>
            <th scope="col">Localização</th>
            <th scope="col">Redes Sociais</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Algumas informações<br>sobre a empresa</td>
            <td>Rua: xxxxxx<br>
            Cidade: xxxxxxxx<br>
            CEP: 000-000</td>
            <td><a href="#"><i class="fab fa-facebook-f ml-2"></i></a>
                <a href="#"><i class="fab fa-instagram ml-2"></i></a>
                <a href="#"><i class="fab fa-whatsapp ml-2"></i></a>
                <a href="#"><i class="fas fa-utensils ml-2"></i></a></td>
          </tr>
        </tbody>
      </table>
            </div>
        </footer>
    </body>
</nav>
</div>

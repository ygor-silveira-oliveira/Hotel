<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de hotel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    </head>
<body>
    <header id="topo">
        <h1>Reserva de Hotel</h1>
    </header>

    <form action="controller/reserva-controller.php" method="post">

    <input type="text" name="nome" placeholder="Nome: " class="campos">
    <input type="email"name="email" placeholder="Email: " class="campos">
    <input type="tel" name="telefone" placeholder="Telefone: " class="campos">
    <input type="number" name="rg" placeholder="Rg: " class="campos">

    <input type="number" name="quantidadeDiarias" placeholder="Quantidade de Diarias: " class="campos">

    <select name="nomeQuarto" id="seletor">
        <option value="Suite Double Master">Suite Double Master</option>
        <option value="Suite Familia">Suite Familia</option>
        <option value="Suite Single">Suite Single</option>
    </select>

        <section>
            <input type="submit" class="btn btn-primary btn-lg" value="reservar">
            <input type="reset" class="btn btn-secondary btn-lg">
        </section>

    </form>

    <footer>
        <p>Site criado por Ygor Silveira de Oliveira, apenas por diversão.</p>

        <ul>
            <a href="https://www.instagram.com/yg_silveira/" target="_blank">
                <li> <i id="insta" class="fa fa-instagram fa-lg"></i></li>
            </a>

            <a href="https://twitter.com/oygorsilveira" target="_blank">
                <li> <i id="tw" class="fa fa-twitter fa-lg"></i></li>
            </a>

            <a href="https://github.com/ygor-silveira-oliveira" target="_blank">
                <li> <i id="git" class="fa fa-github fa-lg"></i></li>
            </a>

            <a href="https://www.linkedin.com/in/ygor-silveira-de-oliveira-a6954b225/" target="_blank">
                <li> <i id="kedin" class="fa fa-linkedin fa-lg"></i></li>
            </a>
        </ul>
    </footer>
</body>
</html>
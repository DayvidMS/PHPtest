<?php
    switch ($_REQUEST){
        case 'requisicao':

            break;
        default:
            echo 'teste';
    }


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Principal</title>

    <!--        bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!--    CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<!-- JavaScript   -->
<script type="text/javascript" src="js/main.js"></script>
<body>
<div class="cepPage">

    <div class="content">
        <div class="col-md-4 container clearfix">
            <div class="row">
                <div class="col-md-12 configdiv" style="text-align:center">
                    <div class="col-md-12 configinput">
                        <!--cep-->
                        <label for="cep">CEP</label>
                        <input type="text" id="cep" onfocusout="buscaCep()">
                        <br>
                        <br>
                        <!--logradouro-->
                        <label for="logradouro">logradouro</label>
                        <input type="text" id="logradouro" >
                        <br>
                        <br>
                        <!--complemento-->
                        <label for="complemento">complemento</label>
                        <input type="text" id="complemento">
                        <br>
                        <br>
                        <!--bairro-->
                        <label for="bairro">bairro</label>
                        <input type="text" id="bairro">
                        <br>
                        <br>
                        <!--localidade-->
                        <label for="localidade">localidade</label>
                        <input type="text" id="localidade">
                        <br>
                        <br>
                        <!--uf-->
                        <label for="uf">UF</label>
                        <input type="text" id="uf">
                        <br>
                        <br>
                        <!--ibge-->
                        <label for="ibge">ibge</label>
                        <input type="text" id="ibge">
                        <br>
                        <br>
                        <!--ibge-->
                        <label for="gia">gia</label>
                        <input type="text" id="gia">
                        <br>
                        <br>
                        <!--ddd-->
                        <label for="ddd">ddd</label>
                        <input type="text" id="ddd">
                        <br>
                        <br>
                        <!--siafi-->
                        <label for="siafi">siafi</label>
                        <input type="text" id="siafi">


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>

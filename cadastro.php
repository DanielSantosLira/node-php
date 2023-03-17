<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mercado Preso</title>
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">

</head>

<body class="bg-dark">
    <div class="container bg-secondary">
        <div class="col-12 text-center my-5">
            <h1 class="display-4"><i class="fa fa-paper-plane text-primary" aria-hidden="true"></i>Cadastre-se</h1>
        </div>
        <div class="row justify-content-center mb-5">

            <div class="col-sm-12 col-md-10 col-lg-8">
                <form>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="inputNome">Nome</label>
                            <input type="text" class="form-control" id="inputNome" placeholder="Digite seu Nome" required>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="inputSobrenome">Sobrenome</label>
                            <input type="text" class="form-control" id="inputNome" placeholder="Digite seu Sobrenome" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-3">
                            <label for="inputRg">RG</label>
                            <input type="number" class="form-control" id="inputRg" placeholder="Digite seu RG" maxlength="13" required>

                        </div>
                        <div class="form-group col-sm-3">
                            <label for="inputCPF">CPF</label>
                            <input type="number" class="form-control" id="inputCPF" placeholder="Digite seu CPF" maxlength="13" required>

                        </div>
                        <div class="form-group col-sm-3">
                            <label for="inputDate">Data de Nacimento</label>
                            <input type="date" class="form-control" id="inputDate" placeholder="" required>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-sm-6">
                            <label for="inputEnd">Endereço</label>
                            <input type="text" class="form-control" id="inputEnd" placeholder="Digite seu Enderço" required>
                        </div>

                        <div class="form-group col-sm-2">
                            <label for="inputNum">Número</label>
                            <input type="number" class="form-control" id="inputNum" placeholder="Nº" required>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="inputEmail">E-mail</label>
                            <input type="text" class="form-control" id="inputEmail" placeholder="Digite seu E-mail" required>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="inputCof">Conferme E-mail</label>
                            <input type="text" class="form-control" id="inputEmail" placeholder="Comfirme seu E-mail" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-4">

                            <label for="inputTel">Telefone</label>
                            <input type="number" class="form-control" id="inputTel" placeholder="(xx) xxxx-xxxx" required>

                        </div>
                        <div class="form-group col-sm-4">

                            <label for="inputCel">Celular</label>
                            <input type="number" class="form-control" id="inputCel" placeholder="(xx) xxxxx-xxxx" required>

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-sm-3">
                            <label for="inputCidade">Cidade</label>
                            <input type="text" class="form-control" id="inputCidade" placeholder="Digite a Cidade" required>
                        </div>

                        <div class="for-group col-sm-3">
                            <label for="inputEst">Estado</label>
                            <select name="" id="inputEst" class="form-control">
                                <option value="" selected>Escolha</option>
                                <option value="SP">São paulo</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="MG">Minas Gereais</option>
                            </select>
                        </div>

                        <div class="for-group col-sm-3">

                            <label for="inputCEP">CEP</label>
                            <input type="text" class="form-control" id="inputCEP" placeholder="Digite seu CEP" required>

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="for-group col-sm-12  mt-2">

                            <div class="form-check ">

                                <label for="" class="form-check-label">
                                    <input type="checkbox" class="form-check-input"> Desejo receber novidades por e-mail
                                </label>

                            </div>

                        </div>

                    </div>

                    <div class="form-row">
                        <div class="for-group col-sm-12  mt-2">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <a tabindex="0" class="btn btn-secondary ml-2" role="button" data-toggle="popover" data-placement="right" trigger="focus" title="Precisa de ajuda" data-content=" O que podemos lhe ajudar">Ajuda</a>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>


    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script>
    $(function() {
      $('[data-toggle="popover"]').popover()

    });
  </script>


</body>

</html>
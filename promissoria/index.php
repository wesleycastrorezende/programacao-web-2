<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promissória</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="jumbotron">
        <p>Cabeçalho</p>
    </div>
    <div class="container-fluid"><!---->
        <div class="row">
            <div class="col-sm-4">
                <p>Menu</p>
            </div>

            <div class="col-sm-8">
                <!--action diz pra que pagina ele vai mandar as informaçoes do formulario e o # é para onde eu vou mandar as informacões-->
                <h1>Gerador de nota promissóraia</h1>
                <!-- o metodo POST envia os parametros no corpo da requisição -->
                <form action="Resultado.php" method="post">
                    <div class="form group">
                        <label for="nomedevedor" class="form-group">Nome devedor:</label>
                        <input name="nomedevedor" type="text" class="form-control" id="nomedevedor" placeholder="Digite nome Devedor">
                    </div>
                    <div class="form-group">
                        <label for="CPFdevedor" class="form-label">CPF Devedor:</label>
                        <input name="CPFdevedor"type="number" class="form-control" id="CPFdevedor" placeholder="Digite o CPF devedor">
                    </div>

                    <div class="form-group">
                        <label for="endereco" class="form-label">Endereço:</label>
                        <input name="endereco" type="text" class="form-control" id="endereco" placeholder="Informe o endereço">
                    </div>

                    <div class="form group">
                        <label for="nomecredor" class="form-group">Nome Credor:</label>
                        <input name="nomecredor" type="text" class="form-control" id="nomecredor" placeholder="Digite nome Credor">
                    </div>

                    <div class="form-group">
                        <label for="CPFcredor" class="form-label">CPF Devedor:</label>
                        <input pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" name="CPFcredor"type="number" class="form-control" id="CPFcredor" placeholder="Digite o CPF Credor">
                    </div>

                    <div class="form-group">
                        <label for="valordivida" class="form-label">Valor da divida:</label>
                        <input name="valordivida" type="number" step="0.01" min="0" class="form-control" id="valordivida" placeholder="Digite o valor da divída">
                    </div>

                    <div class="form-group">
                        <label for="datavencimento" class="form-label">Data de vencimento:</label>
                        <input name="datavencimento" type="date" class="form-control" id="datavencimento" placeholder="Digite o valor da divída">
                    </div>

                    <button type="submit" class="btn btn-primary" onclick="validar()">Enviar</button>
                </form>

            </div>
        </div>
    </div>

    <div class="jumbotron">
        <h1>Rodapé</h1>
    </div>
<script>
    function validar() {
        var nomedevedor = document.getElementById('nomedevedor');
        var cpfdevedor = document.getElementById('CPFdevedor');
        var endereco = document.getElementById('endereco');
        var nomecredor = document.getElementById('nomecredor');
        var cpfcredor = document.getElementById('CPFcredor');
        var valordivida = document.getElementById('valordivida');
        var datavencimento = document.getElementById('datavencimento');

        if(nomedevedor.value.length < 3){
            alert('Campo [Nome] incompleto !');
        }
        if (cpfdevedor.value.length < 11){
            alert('Campo [CPF] imcompleto !');
        }
        if(endereco.value.length < 11){
            alert('Campo [Telefone] incompleto !');
        }
        if(nomecredor.value.length < 3){
            alert('Campo [Endereço] incompleto !');
        }
        if(cpfcredor.value.length < 3){
            alert('Campo [E-mail] incompleto !');
        }
        if(nomecredor.value.length < 3){
            alert('Campo [Endereço] incompleto !');
        }
        if(cpfcredor.value.length < 3){
            alert('Campo [E-mail] incompleto !');
        }
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me Segue!</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="q5.css">
    <link rel="stylesheet" href="../geral.css">
 
</head>
<body>
<div class="bc-purple">
        <h1 class="tx-purple center">Me Segue!</h1>

        <div class="bc-white corpo vstack">
            <div class="center">
                <h4>Criar uma nova conta</h4>
                <p class="tx-grey">É rápido e fácil </p>
                <hr>
            </div>
            <div>
                <form action="#">
                    <div>
                        <input class="inp" type="text" placeholder="Nome">
                        <input class="inp" type="text" placeholder="Sobrenome">
                    </div>
                    <input class="inp" type="text" placeholder="Celular ou E-mail">
                    <input class="inp" type="password" placeholder="Senha" name="" id=""> <br>
                    <legend>Data de nascimento: </legend>
                    <select class="inp" name="dia" id="">
                        <?php
                     for($i=1; $i<=31; $i++){
                         echo "<option>$i</option>";
                     }
                         ?>                 
                     </select>
                    <select class="inp" name="mes" id="">
                        <option value="01">Janeiro</option>
                        <option value="02">Fevereiro</option>
                        <option value="03">Março</option>
                        <option value="04">Abril</option>
                        <option value="05">Maio</option>
                        <option value="06">Junho</option>
                        <option value="07">Julho</option>
                        <option value="08">Agosto</option>
                        <option value="09">Setembro</option>
                        <option value="10">Outubro</option>
                        <option value="11">Novembro</option>
                        <option value="12">Dezembro</option>
                    </select>
                    <select class="inp" name="ano" id="">
                        <?php
                        for($a=date("Y"); $a>=1900; $a--){
                            echo "<option>$a</option>";
                        }
                        ?>
                    </select>
                    <fieldset>
                        <legend>Genêro:</legend>
                        <label for="f">Feminino</label>
                        <input class="mr" type="radio" name="sexo" id="f">
                        <label for="m">Masculino</label>
                        <input class="mr" type="radio" name="sexo" id="m">
                        <label for="per">Não informar</label>
                        <input type="radio" name="sexo" id="per">
                    </fieldset>
                    <div class="vstack">
                    <small class="tx-grey">As pessoas que usam nosso serviço podem ter carregado suas informações de
                        contato no Me
                        segue. <a href="#">Saiba mais.</a></small>
                        <small class="tx-grey">
                        Ao clicar em cadatre-se, você concorda com nossos <a href="#">Termos</a>, <a href="#">Política
                            de privacidade</a> e
                        <a href="#">Política de Cookies</a>. Você poderá receber notificações por SMS e cancelar quando
                        quiser.
                        </small>
                        <br>
                    </div>
                    <div class="center vstack">
                        <button class="btn tx-white bc-green cad" type="submit">Cadastre-se</button> 
                        <button class="btn  bc-white tx-purple m1">Já tem uma conta?</button>
                    </div>
                </form>
            </div>
        </div>
        <br>
    </div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
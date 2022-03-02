@extends('layouts.wedding')

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        display: flex;
        align-items: center;
        justify-content: center;
        background:linear-gradient(0deg, rgba(0, 0, 0, 0.849), rgba(0, 0, 0, 0.52)), url('../img/jr4.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover; 
    }

    select, input{
        font-size: 16pt !important;
        /* font-weight: bold !important; */
        border-radius: 0 !important;
        border: 1px solid rgb(117, 91, 5) !important;
    }
    ul li{
        font-size: 14pt !important;
    }

    h3{
        font-weight: bold !important;
    }

    .card {
        /* height: 300px; */
        width: 1000px;
        max-height: 600px;
        max-width: 1000px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card-body{
        background: linear-gradient(0deg, rgb(255 255 255 / 0%), rgb(255 255 255)), url(https://img.freepik.com/free-vector/hand-painted-watercolor-floral-background_79603-1868.jpg);
        background-position: center; 
        background-repeat: no-repeat; 
        background-size: cover;
    }

    @media (min-width: 930px) and (max-width: 1250px) {

        .card,.card-body {
            /* min-height: 600px; */
            width: 900px;
        }
    }

    @media (min-width: 630px) and (max-width: 930px) {
        .card,.card-body {
            /* min-height: 600px; */
            max-width: 600px;
        }
    }

    @media screen and (max-width: 630px) {
        .card,.card-body {
            /* min-height: 600px; */
            width: 450px !important;
        }
    }

</style>
@section('content')
    <div class="card border-0 bg-transparent mb-3">
        <h1 class="display-4 wed-font-3 font-weight-bold wed-color mr-auto text-uppercase"
        style="text-shadow: 1px 1px 20px #00000021; color: rgb(255 157 95)">
            Lista de Presentes
        </h1>
        <p class="lead wed-font-2 text-left mr-auto text-light" style="font-size: 25pt;">
            Caso desejem nos presentear, escolha um dos items da lista abaixo:
        </p>
    </div>
    <div class="card rounded-0 p-0"> <!--style="border: 5px solid #af7b74 !important;"-->
        <div class="col-md-12 p-0">
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form">
                    <div class="category mb-3">
                        <h3 class="wed-font-1 wed-color">Selecione uma Categoria:</h3>
                        <select name="" id="" class="form-control" required>
                            <option value="">Selecione uma Opção</option>
                            <option value="">Cama, Mesa e Banho</option>
                            <option value="">Decoração</option>
                            <option value="">Eletrodomésticos</option>
                            <option value="">Outros</option>
                        </select>
                </div>
                <div class="category mb-3">
                        <h3 class="wed-font-1 wed-color">Selecione um item e a quantidade:</h3>
                        <div class="row">
                            <div class="col-md-8">
                                <select name="" id="" class="form-control" required>
                                    <option value="">Selecione uma Opção</option>
                                    <option value="">Jogo de Toalha (R$ 50.00)</option>
                                    <option value="">Seilá</option>
                                    <option value="">Outra Coisa</option>
                                    <option value="">Notebook</option>
                                </select>
                            </div>
                            <div class="col">
                                <input type="number" min="1" max="99" name="" id="" placeholder="0" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="p-2 pb-0 py-0 my-0">
                            <ul class="nav-link pl-4">
                                <li>Item Selecionado: Notebook</li>
                                <li>Quantidade: 1</li>
                                <li>Valor: R$ 1.9990,00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row border-top pt-4 p-2 justify-content-between">
                        <div class="col-md-7 col-sm-12">
                            <p class="lead">
                                <span class="font-weight-bold">Lembrete Importante:</span> Ao presentear este item, você entende que, estará sujeito a eventuais
                                cobranças no seu cartão de crédito, caso esta seja a sua opção de pagamento escolhida.
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-12" style="display: flex;align-items: self-start">
                            <button class="btn btn-lg btn-block bg-success wed-button d-block button-block wed-font-1" type="submit" style="font-weight: normal !important">Presentear</button>
                        </div>
                    </div>
                </form>
           </div>

        </div>
    </div>

    <div class="container">
        <a href="{{asset('/')}}" class="btn btn-link py-4 nav-link lead text-light">Voltar para o Início</a>
    </div>

@endsection
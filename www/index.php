<!doctype html>
<html>

<head>
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Lista de tarefas</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="fontawesome5/css/all.min.css" />
    <script src="dmxAppConnect/dmxBootstrap5Theme/dmxBootstrap5Theme.js" defer></script>
</head>

<body is="dmx-app" id="index" style="" class="style1">
    <div class="container mt-4">
        <div class="row align-items-center justify-content-center" style="height: 100vh;">

            <div class="align-self-center text-start col-12 col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <div class="input-group">
                                <input type="text" class="form-control" id="input1" name="input1" aria-describedby="input1_help" placeholder="Adiconar tarefa">
                                <span class="input-group-text"><i class="fa fa-plus"></i> </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive" style="border-radius: 12px;">
                            <table class="table table-striped table-bordered align-middle" style="">
                                <thead>
                                    <tr>
                                        <th scope="col" style="">Tarefa</th>
                                        <th scope="col" style="width: 30%;" class="text-center">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr dmx-repeat:repeat1="10">
                                        <td>Comprar leite</td>
                                        <td class="text-center">
                                            <button id="btn1" class="btn btn-secondary mb-2 mb-md-0"><i class="far fa-check-square"></i></button>
                                            <button id="btn3" class="btn btn-info mb-2 mb-md-0"><i class="far fa-edit"></i></button>
                                            <button id="btn2" class="btn btn-danger mb-sm-2 mb-md-0"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    </tr>
                                    <tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="align-self-center text-start col-12">
                        <div class="row">
                            <div class="col-12">
                                <p>Concluídas</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive" style="border-radius: 12px;">
                                    <table class="table table-striped table-bordered align-middle" style="">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="">Tarefa</th>
                                                <th scope="col" style="width: 30%;" class="text-center">Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr dmx-repeat:repeat1="10">
                                                <td class="text-outline">Comprar leite</td>
                                                <td class="text-center">
                                                    <button id="btn4" class="btn btn-success"><i class="fas fa-check"></i></button>
                                                    <button id="btn4" class="btn btn-info"><i class="far fa-edit"></i></button>
                                                    <button id="btn4" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                            </tr>
                                            <tr>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>
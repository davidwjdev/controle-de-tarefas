<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Tarefas</title>
</head>

<body>
    <div class="background">
        <header>
            <h1>Controle de Tarefas</h1>
            <nav>
                <li>
                    <ul><a class="button" href="/">Tarefas</a></ul>
                </li>
            </nav>
        </header>
        <div>
            <a class="button" href="/adicionar">Adicionar</a>
        </div>

        <div class="body">
            <div>
                <form method="POST">

                    <div>
                        <label for="nome">Nome da Tarefa: </label>
                        <input type="text" id="nome" name="nome">
                    </div>

                    <div>
                        <label for="prioridade_id">Prioridade: </label>
                        <select id="prioridade_id" name="prioridade_id">
                            <option>Selecione a prioridade</option>
                            <?php foreach ($prioridades as $key => $value) : ?>
                                <option value=" <?php $value['prioridade_id'] ?>"><?php echo $value['nome'] ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label for="status_id">Prioridade: </label>
                        <select id="status_id" name="status_id">
                            <option>Selecione a prioridade</option>
                            <?php foreach ($status as $key => $value) : ?>
                                <option value=" <?php $value['status_id'] ?>"><?php echo $value['nome'] ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label for="pessoa_id">Prioridade: </label>
                        <select id="pessoa_id" name="pessoa_id">
                            <option>Selecione a prioridade</option>
                            <?php foreach ($pessoas as $key => $value) : ?>
                                <option value=" <?php $value['pessoa_id'] ?>"><?php echo $value['nome'] ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <a href="#" class="button">Salvar</a>
                    <a href="/" class="button">Cancelar</a>
                </form>
            </div>

        </div>
    </div>
</body>

</html>
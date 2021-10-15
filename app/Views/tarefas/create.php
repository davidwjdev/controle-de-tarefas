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
                    <ul><a class="button" href="/">Criar Tarefa</a></ul>
                </li>
            </nav>
        </header>
        <div class="body">
            <div>
                <form method="POST" action="/adicionar">
                    <div>
                        <label for="nome">Nome da Tarefa: </label>
                        <input type="text" id="nome" name="nome" required>
                    </div>
                    <div>
                        <label for="prioridade_id">Prioridade: </label>
                        <select id="prioridade_id" name="prioridade_id" required>
                            <option>Selecione a prioridade</option>
                            <?php foreach ($prioridades['prioridades'] as $key => $value) : ?>
                                <option value="<?php echo $value['prioridade_id']; ?>"><?php echo $value['nome'] ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label for="status_id">Status: </label>
                        <select id="status_id" name="status_id" required>
                            <option>Selecione a prioridade</option>
                            <?php foreach ($status['status'] as $key => $value) : ?>
                                <option value="<?php echo $value['status_id']; ?>"><?php echo $value['nome'] ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label for="pessoa_id">Pessoa: </label>
                        <select id="pessoa_id" name="pessoa_id" required>
                            <option>Selecione a prioridade</option>
                            <?php foreach ($pessoas['pessoas'] as $key => $value) :
                                if ($value['valido'] == "Y") :  ?>
                                    <option value="<?php echo $value['pessoa_id']; ?>"><?php echo $value['nome'] ?> </option>
                            <?php endif;
                            endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="button">Salvar</button>
                    <a href="/" class="button">Cancelar</a>
                </form>
            </div>

        </div>
    </div>
</body>

</html>
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
                    <ul><a class="button" href="/">Editar Tarefa</a></ul>
                </li>
            </nav>
        </header>


        <?php // var_dump($tarefa['tarefa']['tarefa_id']);?>

        <div class="body">
            <div>
                <form method="POST" action="/editar">
                    <div>
                        <label for="nome">Nome da Tarefa: </label>
                        <input type="text" id="nome" name="nome" value="<?php  $tarefa['nome'];?>" >
                    </div>
                    <div>
                        <label for="prioridade_id">Prioridade: </label>
                        <select id="prioridade_id" name="prioridade_id">
                            <option>Selecione a prioridade</option>
                            <?php foreach ($prioridades['prioridades'] as $key => $value) : ?>
                                <option <?php if(isset($tarefa['prioridade_id']) && $tarefa['prioridade_id'] == $value['prioridade_id']): echo "selected"; endif; ?> value="<?php echo $value['prioridade_id']; ?>"><?php echo $value['nome'] ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label for="status_id">Status: </label>
                        <select id="status_id" name="status_id">
                            <option>Selecione a prioridade</option>
                            <?php foreach ($status['status'] as $key => $value) : ?>
                                <option <?php if(isset($tarefa)): echo "selected"; endif; ?> value="<?php echo $value['status_id']; ?>"><?php echo $value['nome'] ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label for="pessoa_id">Pessoa: </label>
                        <select id="pessoa_id" name="pessoa_id">
                            <option>Selecione a prioridade</option>
                            <?php foreach ($pessoas['pessoas'] as $key => $value) : ?>
                                <option <?php if(isset($tarefa)): echo "selected"; endif; ?> value="<?php echo $value['pessoa_id']; ?>"><?php echo $value['nome'] ?> </option>
                            <?php endforeach; ?>
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
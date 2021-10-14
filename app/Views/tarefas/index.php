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
            <a href="/adicionar">Adicionar</a>
        </div>

        <div class="body">
            <table>

                <thead>
                    <th>ID</th>
                    <th>Nome da Tarefa</th>
                    <th>Prioridade</th>
                    <th>Status</th>
                    <th colspan="2">Ações</th>
                </thead>
                <tbody>
                    <?php if(!isset($tarefas)) :
                        echo "<td colspan='6'>Não possui tarefas cadastradas!</td>";
                    else:   
                    foreach($tarefas as $key => $value) : ?>
                    <tr>
                        <td><?php echo $value['tarefa_id']; ?></td>
                        <td><?php echo $value['nome']; ?></td>
                        <td><?php echo $value['prioridade_id']; ?></td>
                        <td><?php echo $value['status_id']; ?></td>
                        <td><a href="#">Editar</a></td>
                        <td><a href="#">Apagar</a></td>

                    </tr>
                    <?php endforeach;
                    endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
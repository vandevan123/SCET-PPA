<?php
session_start(); 
include_once '../php/cad-usuario/alunoHelper.php'; 
include_once "../php/comp/tccHelper.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCC</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQ3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/coor-tcc.css">
    <link rel="shortcut icon" type="imagex/png" href="../img/logo-scet.jpg">
</head>

<body>
    <div class="barrinha">
        <div class="navegacao">
            <ul>
                <li class="list">
                    <a href="../html/usuario.php">
                        <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <span class="list">Usuario</span>
                    </a>
                </li>
                <li class="list">
                    <a href="../html/home_aluno.php">
                        <span class="icon"><ion-icon name="notifications-outline"></ion-icon></span>
                        <span class="list">Home</span>
                    </a>
                </li>
                <li class="list">
                    <a href="../html/mensagens_aluno.php">
                        <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                        <span class="list">Mensagens</span>
                    </a>
                </li>
                <li class="list">
                    <a href="../html/notificacoes_aluno.php">
                        <span class="icon"><ion-icon name="notifications-outline"></ion-icon></span>
                        <span class="list">Notificações</span>
                    </a>
                </li>
                <li class="list">
                    <a href="../html/prof-aluno.php">
                        <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                        <span class="list">Professores</span>
                    </a>
                </li>
                <li class="list">
                    <a href="../html/estagio_aluno.php">
                        <span class="icon"><ion-icon name="briefcase-outline"></ion-icon></span>
                        <span class="list">Estágio</span>
                    </a>
                </li>
                <li class="list">
                    <a href="../html/aluno-tcc.php">
                        <span class="icon"><ion-icon name="newspaper-outline"></ion-icon></span>
                        <span class="list">TCC</span>
                    </a>
                </li>
                <li class="list">
                    <a href="../html/pendente_aluno.php">
                        <span class="icon"><ion-icon name="alert-circle-outline"></ion-icon></span>
                        <span class="list">Pendentes</span>
                    </a>
                </li>
                <li class="list">
                    <a href="../php/usar/logout.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="list">Sair</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
   

    <div class="content">
        <div id="busca">
            <input type="text" id="txtBusca" placeholder="Pesquisar"/>
            <span class="icon"></span>
    </div>
       
        <fieldset>
            <legend>Informações sobre o Trabalho de Conclusão de Curso</legend>
            <table class="estudantes">
                <tr class="info">
                    <th>Aluno</th>
                    <th>Orientador</th>
                    <th>Tema</th>
                    <th>Situação</th>
                    <th>Data de iniciação</th>
                </tr>
    
                <tr>
                    <td>Ricardo de Carvalho Sena</td>
                    <td>Djalma Almeida Filho</td>
                    <td>Sistema de Controle de Estágio e TCC</td>
                    <td>Aprovado</td>
                    <td>22/12/2000</td>
                </tr>
            </table>
        </fieldset>
    
    
    </div>
   
    

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script>
        const list = document.querySelectorAll('.list');
        function activeLink(){
            list.forEach((item) =>
            item.classList.remove('active'));
            this.classList.add('active'); 
        }
            list.forEach((item) =>
            item.addEventListener('click', activeLink)); 
    
    </script>
</body>
</html>
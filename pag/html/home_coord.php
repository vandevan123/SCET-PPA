<?php
include_once "../php/cad-usuario/coordenadorHelper.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário: Coordenador</title>
    <link rel="stylesheet" type="text/css" href="../css/home_coord.css">
    <link rel="shortcut icon" type="imagex/png" href="../img/logo-scet.jpg">
</head>
<body>
    
    <div class="container">
        <div class="navegacao">
            <ul>
                <li class="list">
                    <a href="#">
                        <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <span class="list">Usuario</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon"><ion-icon name="notifications-outline"></ion-icon></span>
                        <span class="list">Home</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                        <span class="list">Mensagens</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon"><ion-icon name="notifications-outline"></ion-icon></span>
                        <span class="list">Notificações</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                        <span class="list">Professores</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon"><ion-icon name="briefcase-outline"></ion-icon></span>
                        <span class="list">Estágio</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon"><ion-icon name="newspaper-outline"></ion-icon></span>
                        <span class="list">TCC</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon"><ion-icon name="alert-circle-outline"></ion-icon></span>
                        <span class="list">Pendentes</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="list">Sair</span>
                    </a>
                </li>
            </ul>
        </div>
        </div>

        <div class="mover">
            <fieldset>
                <legend>Dados do(a) Coordenador(a)</legend>
                <table>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <!--<th>Foto</th>-->
                        </tr>
            
                    <tbody>
                    <?php
                        $coordenadores = getCoordenador();
                        foreach($coordenadores as $coordenador){
                            echo '<tr>';
                            echo '<td>'.$coordenador->id_coordenador.'</td>';
                            echo '<td>'.$coordenador->nome.'</td>';
                            echo '<td>'.$coordenador->email.'</td>';
                            //echo '<td>'<img src="../img/perfil.png" alt="Foto de Perfil">'</td>';
                            echo '</tr>';
                        }
                    ?>
                <table>
            </div>        
            <fieldset>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script>
            const list = document.querySelectorAll('.list');
            function activeLink() {
                list.forEach((item) =>
                    item.classList.remove('active'));
                this.classList.add('active');
            }
            list.forEach((item) =>
                item.addEventListener('click', activeLink));
        </script>

</body>
</html>
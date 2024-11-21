<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="site para veterinário de animais exóticos, coelhos, pássaros, tartarugas e etc" />
        <meta name="author" content="Emanuela Helena Machado Mayeda" />
        <title>Exo-Pets</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="icon" type="image" href="fonts/fontawesome"/>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Sistema de Controle Clínico</title>
   
</head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-dark fixed-top" id="mainNav" >
            <a class="navbar-brand" href="#page-top"><img src="assets/img/nav-logo3.png" alt="..." /></a>
            <div class="container">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0  ">
                    <li class="nav-item"><a class="nav-link" href="?page=index#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="?page=index#cadastro">Cadastro</a></li>
                    <li class="nav-item"><a class="nav-link" href="?page=index#cadastro">Listar</a></li>
                    <li class="nav-item"><a class="nav-link" href="?page=index#services">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="?page=index#portfolio">Portfólio</a></li>
                    <li class="nav-item"><a class="nav-link" href="?page=index#about">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="?page=index#team">Time</a></li>
                </ul>
            </div>
            </div>
        </nav>
<div class="container">
    <div class="row mt-5">
        <div class="col">
            <?php
                switch (@$_REQUEST['page']){
                    //Veterinário
                    case 'cadastrar-veterinario':
                        include('cadastrar-veterinario.php');
                        break;
                    case 'editar-veterinario':
                        include('editar-veterinario.php');
                        break;
                    case 'listar-veterinario':
                        include('listar-veterinario.php');
                        break;
                    case 'salvar-veterinario':
                        include('salvar-veterinario.php');
                        break;
                    //Tutor
                    case 'cadastrar-tutor':
                        include('cadastrar-tutor.php');
                        break;
                    case 'editar-tutor':
                        include('editar-tutor.php');
                        break;
                    case 'listar-tutor':
                        include('listar-tutor.php');
                        break;
                    case 'salvar-tutor':
                        include('salvar-tutor.php');
                        break;
                    //PET
                    case 'cadastrar-pet':
                        include('cadastrar-pet.php');
                        break;
                    case 'editar-pet':
                        include('editar-pet.php');
                        break;
                    case 'listar-pet':
                        include('listar-pet.php');
                        break;
                    case 'salvar-pet':
                        include('salvar-pet.php');
                        break;
                    //Consulta
                    case 'cadastrar-consulta':
                        include('cadastrar-consulta.php');
                        break;
                    case 'editar-consulta':
                        include('editar-consulta.php');
                        break;
                    case 'listar-consulta':
                        include('listar-consulta.php');
                        break;
                    case 'salvar-consulta':
                        include('salvar-consulta.php');
                        break;
                    default:
                        include('home.php');    
                }
            ?>
        </div>
    </div>
</div>      



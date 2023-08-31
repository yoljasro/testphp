<?php session_start();



if(!isset($_SESSION['UserData']['Username'])){

    header("location:login.php");

    exit;

    }

    ?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha256-Vzbj7sDDS/woiFS3uNKo8eIuni59rjyNGtXfstRzStA=" crossorigin="anonymous" />

    <link rel="stylesheet" href="../css/bootstrap-datetimepicker.css">

    <link rel="stylesheet" href="../css/styles.css" />

    <title>Админ панел</title>

    <script src="../tinymce/tinymce.min.js" referrerpolicy="origin"></script>

    <script>

        tinymce.init({

            selector: 'textareamce',  // change this value according to your HTML

            theme: "silver",

	height: 600,

	plugins: [

		"advlist autolink link image media filemanager code responsivefilemanager table image lists hr searchreplace wordcount"

	],

	toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",

	toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor | preview",

	image_advtab: true,

	external_filemanager_path: "/../assets/newsimg/filemanager/",

	filemanager_title: "Responsive Filemanager",

	external_plugins: {

		"responsivefilemanager": "plugins/responsivefilemanager/plugin.min.js",

        "filemanager": "/../assets/newsimg/filemanager/plugin.min.js"

	},

            

        });



    </script>

</head>



<body>

    <div class="d-flex toggled" id="wrapper">

        <!-- Sidebar -->

<div class="bg-white" id="sidebar-wrapper">

            <a href="../index.php" style="text-decoration: none !important"><div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i

                    class="fas fa-school me-2"></i>Админ</div></a>

            <div class="list-group list-group-flush my-3">

                <a href="../news.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold" id="item1"><i

                        class="fas fa-user-friends me-2"></i>Новости</a>

                <a href="../gallery.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold" id="item2"><i

                        class="fas fa-chart-line me-2"></i>Галерея</a>

                <a href="../feedbacks/" class="list-group-item list-group-item-action bg-transparent second-text fw-bold" id="item3"><i

                        class="fas fa-paperclip me-2"></i>Отзывы</a>

                <a href="../rukovodstvo/" class="list-group-item list-group-item-action bg-transparent second-text fw-bold" id="item4"><i

                        class="fas fa-shopping-cart me-2"></i>Руководство</a>

                <a href="../staff/" class="list-group-item list-group-item-action bg-transparent second-text fw-bold" id="item5"><i

                        class="fas fa-gift me-2"></i>Клуб</a>



                <a href="../staff2/" class="list-group-item list-group-item-action bg-transparent second-text fw-bold" id="item5"><i

                            class="fas fa-gift me-2"></i>Клуб 2</a>



                <a href="../products/" class="list-group-item list-group-item-action bg-transparent second-text fw-bold" id="item6"><i

                        class="fas fa-comment-dots me-2"></i>Продукты</a>

                <a href="../documents/" class="list-group-item list-group-item-action bg-transparent second-text fw-bold" id="item7"><i

                        class="fas fa-map-marker-alt me-2"></i>Документы</a>
		
		 <a href="../projects/" class="list-group-item list-group-item-action bg-transparent second-text fw-bold" id="item7"><i
                        class="fas fa-map-marker-alt me-2"></i>Проекты</a>

                <a href="../kurs/" class="list-group-item list-group-item-action bg-transparent second-text fw-bold" id="item8"><i

                        class="fas fa-paperclip me-2"></i>Курсы</a>

                <a href="../logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"  id="item9"><i

                        class="fas fa-power-off me-2"></i>Выход</a>

            </div>

        </div>



                <!-- /#sidebar-wrapper -->



        <!-- Page Content -->

        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">

                <div class="d-flex align-items-center">

                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>

                    <h2 class="fs-2 m-0">Главная страница</h2>

                </div>



                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"

                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"

                    aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>



                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"

                                role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                <i class="fas fa-user me-2"></i>Админ

                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" href="logout.php">Выход</a></li>

                            </ul>

                        </li>

                    </ul>

                </div>

            </nav>


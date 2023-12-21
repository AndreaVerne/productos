<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Venta</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon2.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles2.css" rel="stylesheet" />
</head>

 <!-- Navigation-->
 <nav class="navbar navbar-expand-lg navbar-light bg-pink fixed-top">
        <div class="container px-4 px-lg-5">
            <?php 
            if(basename($_SERVER["PHP_SELF"]=='ProductView.php')){
               echo '<a class="navbar-brand" href="#inicio">Andrea Verne</a>';
            }else{
                echo '<a class="navbar-brand" href="ProductView.php">Andrea Verne</a>';
            }
            ?>
        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorías</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">Todos</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <?php 
                            foreach($categorias as $categoria){
                            echo '<li><a class="dropdown-item" id='.$categoria["id"].'href="#!">'.$categoria["nombre"].'</a></li>';
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="admin.php" role="button">Admin</a>
                    </li>
                </ul>
                <!-- <form class="d-flex">
                    <button class="btn btn-outline-pink" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Carrito
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form> -->
            </div>
        </div>

    </nav>

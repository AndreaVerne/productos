<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Productos</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon2.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles2.css" rel="stylesheet" />
</head>

<body>
   
    <!-- Header-->
    <header class="bg-pink py-5 " id="pink">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Populares</h1>
                <p class="lead fw-normal text-white-50 mb-0">Todos los productos más vendidos en un solo lugar.</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <?php
                foreach ($productos as $producto) { ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Descuento-->
                            <?php if ($producto["descuento"] > 0) {
                                $precio = $producto["precio"] - ($producto["precio"] * $producto["descuento"]);
                                echo '<div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem"> -'.$producto["descuento"].'%</div>';
                            }
                            ?>
                            <!-- Imagen-->
                            <img class="card-img-top" src="<?php echo ($producto["imagen"]) ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo ($producto["nombre"]) ?></h5>
                                    <!-- Product reviews-->
                                    <!-- <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div> -->
                                    <!-- Product price-->
                                    <?php if ($producto["descuento"] > 0) {
                                        $precio = $producto["precio"] - ($producto["precio"] /$producto["descuento"]);
                                        echo '<span class="text-muted text-decoration-line-through"> $' . $producto["precio"] . '</span> $' . $precio;
                                    }else{
                                        echo '$'.$producto["precio"] ;
                                    }
                                    ?>

                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Consultar</a></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
   
</body>
<?php include 'footer.php' ?>
</html>
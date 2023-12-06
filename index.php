<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Carrito de Compras</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/techbocx.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/templatemo-tale-seo-agency.css">
</head>

<body>
    <a href="#" class="btn-flotante" id="btnCarrito">Carrito <span class="badge bg-success" id="carrito">0</span></a>
    <!-- Navigation-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">TechBox</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <a href="#" class="nav-link text-info" category="all">Todo</a>
                        <?php
                        $query = mysqli_query($conexion, "SELECT * FROM categorias");
                        while ($data = mysqli_fetch_assoc($query)) { ?>
                            <a href="#" class="nav-link" category="<?php echo $data['categoria']; ?>">
                                <?php echo $data['categoria']; ?>
                            </a>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Tienda Online</h1>
                <p class="lead fw-normal text-white-50 mb-0">"LAS TENDENCIAS DE LA TECNOLOGIA DEL MOMENTO"</p>
            </div>

        </div>
    </header>
    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <!-- IMPORTANTE SI AGREGAS CAMBIOS EN EL JS TIENES QUE BORRAR EL CACHE DEL NAVEGADOR YA LO SOLUCIONE AGREGANDO ESTO
             <script src="assets/js/scripts.js?v=<?= time() ?>"></script>  LINEA 115, EN EL JS SOLO BUSCA ESTO ":not(.homepage)" ESOS SON LOS CAMBISO QUE HICE
             -->
            <div class="homepage productos" category="Inicio" style="transform: scale(0); display: none;">

                <body>
                    <div class="services section" id="services">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="section-heading">
                                                <h2>
                                                    Brindamos <em>diferentes servicios</em> &amp;
                                                    <span>características </span> para su agencia
                                                </h2>
                                                <div class="line-dec"></div>
                                                <p>
                                                    Lo que nos permite establecer centros de control inteligente, monitoreando en tiempo real todos los sistemas existentes se obtienen mejores resultados.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="service-item">
                                                <div class="icon">
                                                    <img src="assets/img/servicio1.png" alt="discover SEO" class="templatemo-feature" />
                                                </div>
                                                <h4>Descubra más sobre las últimas tendencias de camaras</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="service-item">
                                                <div class="icon">
                                                    <img src="assets/img/servicio2.png" alt="data analysis" class="templatemo-feature" />
                                                </div>
                                                <h4>Análisis de tecnologia en tiempo real</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="service-item">
                                                <div class="icon">
                                                    <img src="assets/img/servicio3.png" alt="precise data" class="templatemo-feature" />
                                                </div>
                                                <h4>Análisis &amp;predicción de datos precisos </h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="service-item">
                                                <div class="icon">
                                                    <img src="assets/img/servicio4.png" alt="SEO marketing" class="templatemo-feature" />
                                                </div>
                                                <h4>Lo mas nuevo &amp;en tecnologia </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </body>

                <div class="infos section" id="infos">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-content">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="left-image">
                                                <img src="assets/img/left-promo.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="section-heading">
                                                <h2>Más sobre <em>Nosotros </em> &amp; que <span>Ofrecemos</span></h2>
                                                <div class="line-dec"></div>
                                                <p>TechBox SAC. Se ha establecido desde el 2014 y contamos con personal de mas
                                                    10 años en el mercado de la tecnologia. Hemos ayudado a centenares de empresas a
                                                    tener éxito con sus productos de calidad.</p>
                                            </div>
                                            <div class="skills">
                                                <div class="skill-slide marketing">
                                                    <div class="fill"></div>
                                                    <h6>Calidad</h6>
                                                    <span>99%</span>
                                                </div>
                                                <div class="skill-slide digital">
                                                    <div class="fill"></div>
                                                    <h6>Confianza</h6>
                                                    <span>99%</span>
                                                </div>
                                                <div class="skill-slide media">
                                                    <div class="fill"></div>
                                                    <h6>Colaboración</h6>
                                                    <span>95%</span>
                                                </div>
                                            </div>
                                            <p class="more-info">
                                                Destaca la excelencia en tus productos o servicios y cómo superas las expectativas de tus clientes,
                                                Construye la confianza al resaltar la experiencia de tu empresa, la trayectoria exitosa y las recomendaciones de clientes satisfechos.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <?php
                $query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria");
                $result = mysqli_num_rows($query);
                if ($result > 0) {
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <div class="col mb-5 productos" category="<?php echo $data['categoria']; ?>">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                    <?php echo ($data['precio_normal'] > $data['precio_rebajado']) ? 'Oferta' : ''; ?>
                                </div>
                                <!-- Product image-->
                                <img class="card-img-top" src="assets/img/<?php echo $data['imagen']; ?>" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">
                                            <?php echo $data['nombre'] ?>
                                        </h5>
                                        <p>
                                            <?php echo $data['descripcion']; ?>
                                        </p>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        <span class="text-muted text-decoration-line-through">
                                            <?php echo $data['precio_normal'] ?>
                                        </span>
                                        <?php echo $data['precio_rebajado'] ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto agregar" data-id="<?php echo $data['id']; ?>" href="#">Agregar</a></div>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>

            </div>
        </div>
    </section>

    <?php include("admin/includes/footer.php"); ?>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js?v=<?= time() ?>"></script>
</body>

</html>
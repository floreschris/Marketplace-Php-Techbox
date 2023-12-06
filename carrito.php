<?php require_once "config/conexion.php";
require_once "config/config.php";
?>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/button.css">
</head>

<body>
    <!-- Navigation-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="./">TechBox</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </div>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Carrito</h1>
                <p class="lead fw-normal text-white-50 mb-0">Tus Productos Agregados.</p>
            </div>
        </div>
    </header>
    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Sub Total</th>
                                </tr>
                            </thead>
                            <tbody id="tblCarrito">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-5 ms-auto">
                    <h4>Total a Pagar S/: <span id="total_pagar">0.00</span></h4>


                    <!--Boton-->
                    <div class="boton-modal">
                        <label for="btn-modal">
                            Pagar
                        </label>

                    </div>
                    <div class="d-grid gap-2">
                        <div id="paypal-button-container"></div>
                        <button class="btn btn-warning" type="button" id="btnVaciar">Vaciar Carrito</button>
                    </div>
                    <!--Fin de Boton-->
                    <!--Ventana Modal-->
                    <input type="checkbox" id="btn-modal">
                    <div class="container-modal">
                        <div class="content-modal">
                            <div class="col-md-8 order-md-1">
                                <h4 class="mb-3">Dirección de Envio</h4>
                                <form class="needs-validation" novalidate="">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="firstName">Nombre</label>
                                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="" />
                                            <div class="invalid-feedback">
                                                Se requiere un nombre válido.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="lastName">Apellido</label>
                                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="" />
                                            <div class="invalid-feedback">Se requiere un apellido válido.</div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="username">Nombre de usuario</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">@</span>
                                            </div>
                                            <input type="text" class="form-control" id="username" placeholder="Username" required="" />
                                            <div class="invalid-feedback" style="width: 100%">
                                                Su nombre de usuario es requerido.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email">Correo electrónico <span class="text-muted">(Optional)</span></label>
                                        <input type="email" class="form-control" id="email" placeholder="u21232728@utp.edu.pe" />
                                        <div class="invalid-feedback">
                                            Ingrese una dirección de correo electrónico válida para recibir actualizaciones de envío. </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 mb-3">
                                            <label for="country">Pais</label>
                                            <select class="custom-select d-block w-100" id="country" required="">
                                                <option value="">Elegir...</option>
                                                <option>Peru</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Seleccione un país válido.
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="state">Departamento</label>
                                            <select class="custom-select d-block w-100" id="state" required="">
                                                <option value="">Elegir...</option>
                                                <option>Lima</option>
                                                <option>Ayacucho</option>
                                                <option>Arequipa</option>
                                                <option>Ica</option>
                                                <option>Callao</option>
                                                <option>Arequipa</option>
                                                <option>Cajamarca</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Proporcione un estado válido.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="zip">Codigo Postal</label>
                                            <input type="text" class="form-control" id="zip" placeholder="" required="" />
                                            <div class="invalid-feedback">Se requiere código postal.</div>
                                        </div>
                                    </div>

                                    <hr class="mb-4" />
                                    <h4 class="mb-3">Pago</h4>
                                    <div class="d-block my-3">
                                        <div class="custom-control custom-radio">
                                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="" />
                                            <label class="custom-control-label" for="credit">Tarjeta de crédito</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="" />
                                            <label class="custom-control-label" for="debit">Tarjeta de débito</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="" />
                                            <label class="custom-control-label" for="paypal">PayPal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="cc-name">Nombre en la tarjeta</label>
                                            <input type="text" class="form-control" id="cc-name" placeholder="" required="" />
                                            <div class="invalid-feedback">Se requiere el nombre en la tarjeta</div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="cc-number">Número de Tarjeta de Crédito</label>
                                            <input type="text" class="form-control" id="cc-number" placeholder="" required="" />
                                            <div class="invalid-feedback">
                                                Se requiere número de tarjeta de crédito
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mb-4" />
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">
                                        Continuar a la comprobación
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <label for="btn-modal" class="cerrar-modal"></label>
            </div>
            <!--Fin de Ventana Modal-->

        </div>

        </div>
        </div>
    </section>
    <!-- Footer-->

    <?php include("admin/includes/footer.php"); ?>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=<?php echo CLIENT_ID; ?>&locale=<?php echo LOCALE; ?>"></script>
    <script src="assets/js/scripts.js"></script>
    <script>
        mostrarCarrito();

        function mostrarCarrito() {
            if (localStorage.getItem("productos") != null) {
                let array = JSON.parse(localStorage.getItem('productos'));
                if (array.length > 0) {
                    $.ajax({
                        url: 'ajax.php',
                        type: 'POST',
                        async: true,
                        data: {
                            action: 'buscar',
                            data: array
                        },
                        success: function(response) {
                            console.log(response);
                            const res = JSON.parse(response);
                            let html = '';
                            res.datos.forEach(element => {
                                html += `
                            <tr>
                                <td>${element.id}</td>
                                <td>${element.nombre}</td>
                                <td>${element.precio}</td>
                                <td>1</td>
                                <td>${element.precio}</td>
                            </tr>
                            `;
                            });
                            $('#tblCarrito').html(html);
                            $('#total_pagar').text(res.total);
                            paypal.Buttons({
                                style: {
                                    color: 'blue',
                                    shape: 'pill',
                                    label: 'pay'
                                },
                                createOrder: function(data, actions) {
                                    // This function sets up the details of the transaction, including the amount and line item details.
                                    return actions.order.create({
                                        purchase_units: [{
                                            amount: {
                                                value: res.total
                                            }
                                        }]
                                    });
                                },
                                onApprove: function(data, actions) {
                                    // This function captures the funds from the transaction.
                                    return actions.order.capture().then(function(details) {
                                        // This function shows a transaction success message to your buyer.
                                        alert('Transaction completed by ' + details.payer.name.given_name);
                                    });
                                }
                            }).render('#paypal-button-container');
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                }
            }
        }
    </script>
    <script src="assets/js/main.js"></script>


</body>


</html>
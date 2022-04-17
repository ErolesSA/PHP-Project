<?php include("./cabecera/head.php") ?>

    <section id="principal">
        <div id="contenedor">

            <h1>CRM BRAIN PROJECT</h1>


            <h2>LISTA DE ARTISTAS</h2>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>


            <div class="container">
                <div class="row">

                    <!--Datos de cliente-->
                    <div class="col">
                        1 of 2 <div class="card">
                            <div class="card-header">
                                CLIENTE
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Nombre:</h5>
                                <h5 class="card-title">Direccion:</h5>
                                <h5 class="card-title">Telefono:</h5>
                                <h5 class="card-title">Email:</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <!--Datos de servicio-->
                    <div class="col">
                        2 of 2 <div class="card">
                            <div class="card-header">
                                SERVICIOS
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Servicios:</h5>
                                <h5 class="card-title">Factura:</h5>
                                <h5 class="card-title">Visita Tecncica:</h5>
                                <h5 class="card-title">Estado:</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Alerta de cambios en el sistema-->
                <section>
                    <div class="alert alert-warning" role="alert">
                        A simple warning alert—check it out!
                    </div>
                </section>


            </div>

            <div class="container">
                <div class="row">

                    <!--Internet-->
                    <div class="col">
                        1 of 2 <div class="card">
                            <div class="card-header">
                                Internet
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Nombre:</h5>
                                <h5 class="card-title">MAC:</h5>
                                <h5 class="card-title">Ds:</h5>
                                <h5 class="card-title">Us:</h5>
                                <h5 class="card-title">Estado:</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <!--CATV-->
                    <div class="col">
                        2 of 2 <div class="card">
                            <div class="card-header">
                                SERVICIOS
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Servicios:</h5>
                                <h5 class="card-title">Factura:</h5>
                                <h5 class="card-title">Visita Tecncica:</h5>
                                <h5 class="card-title">Estado:</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Telefonia-->
                <div class="card">
                    <div class="card-header">
                        Telefonia
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Previlegios:</h5>
                        <h5 class="card-title">Numero:</h5>
                        <h5 class="card-title">Estado:</h5>

                    </div>
                </div>

                <!--Alerta de cambios en el sistema-->
                <section>
                    <br />
                    <div class="alert alert-primary" role="alert">
                        A simple warning alert—check it out!
                    </div>
                </section>


                <!--Registro de llamados-->
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>


            </div>

            <section>
                <div>
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-primary btn-lg btn-block">Cargar RT</button>

                        </div>

                        <div class="col">
                            <button type="button" class="btn btn-secondary btn-lg btn-block">Cargar RA</button>
                        </div>


                    </div>


                </div>
                <br/>
            </section>


            <?php include("./pie/footer.php") ?>
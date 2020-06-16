<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Page Title</title>
        <link
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous"
        > 
        <meta charset="utf-8">
        <meta name="viewport" content="with=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="jumbotron">
            <h1>Another page</h1>
            <p>
                ..The
                <a href="#">wrong encyclopedia</a>
                that
                <a href="#">nobody can edit</a>
            </p>
        </div>
        <?php include 'nav.php'; ?>
        <div class="container">
            <br>
            <div class="card">
                <div class="card-header">
                    Lorum
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
            <br>
            <button
                type="button"
                class="btn btn-primary"
                data-toggle="modal"
                data-target="#exampleModal"
            >
                Launch demo modal
            </button>
            <div
                class="modal fade"
                id="exampleModal"
                tabindex="-1"
                role="dialog"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button
                                type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close"
                            >
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            The modal works!
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <h2>List:</h2>
                    <br>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">I love co2714</li>
                        <li class="list-group-item list-group-item-primary">PHP is ace</li>
                        <li class="list-group-item list-group-item-danger">Jonathan is an idiot</li>
                        <li class="list-group-item list-group-item-success">Bootstrap is easy</li>
                        <li class="list-group-item list-group-item-warning">Warning</li>
                        <li class="list-group-item list-group-item-info">Info</li>
                    </ul>
                    <h2>Dropdown:</h2>
                    <br>
                    <div class="dropdown show">
                        <a
                            class="btn btn-secondary dropdown-toggle"
                            href="#"
                            role="button"
                            id="dropdownMenuLink"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            Dropdown link
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <h2>Form:</h2>
                    <br>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Username</label>
                            <input
                                type="test"
                                class="form-control"
                                id="exampleInputUsername1"
                                placeholder="Username"
                            >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input
                                type="password"
                                class="form-control"
                                id="exampleInputPassword1"
                                placeholder="Password"
                            >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input
                                type="email"
                                class="form-control"
                                id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                                placeholder="Enter email"
                            >
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <br>
                    </form>
                </div>
                <div class="col-5">
                    <h2>Table:</h2>
                    <br>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Slyvester</td>
                                <td>Cat</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Wiley</td>
                                <td>Coyote</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Daffy</td>
                                <td>Duck</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Mickey</td>
                                <td>Mouse</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Buggs</td>
                                <td>Bunny</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h2>Images:</h2>
                        </div>
                        <div class="card-body">
                            <img class="img-thumbnail" src="https://picsum.photos/150" alt="">
                            <img class="rounded" src="https://picsum.photos/150" alt="">
                            <img class="rounded-circle" src="https://picsum.photos/150" alt="">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h2>Buttons:</h2>
                    <br>
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-secondary">Secondary</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-light">Light</button>
                    <button type="button" class="btn btn-dark">Dark</button>
                    <br>
                    <br>
                    <button type="button" class="btn btn-primary btn-lg">Secondary</button>
                    <button type="button" class="btn btn-success btn-lg">Success</button>
                    <button type="button" class="btn btn-danger btn-lg">Danger</button>
                </div>
            </div>
        </div>
    </body>
</html>
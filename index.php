<!doctype html>
<html lang="nl">
    <head>
        <title>KiKaKankerVakantie</title>
        <meta charset="utf-8">
        <link rel="icon" type="image/x-icon" href="Logo.jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="StyleSheet.css">
    </head>
    <body>
        <div class="header">
            <a href="login.html" class="header-rechts">Login</a>
            <div class="header-links">
                <a href="dropdown.html">Dropdown</a>
                <a href="link.html">Link</a>
                <a class="active" href="index.html">Home</a>
            </div>
        </div>
    
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="links">
                <h3>Filteren op prijs</h3>
                <form>
                    <div class="form-group">
                        <label for="minPrice">Minimumprijs:</label>
                        <input type="number" class="form-control" id="minPrice" placeholder="Minimumprijs">
                    </div>
                    <div class="form-group">
                        <label for="maxPrice">Maximumprijs:</label>
                        <input type="number" class="form-control" id="maxPrice" placeholder="Maximumprijs">
                    </div>
                    <button type="submit" class="btn btn-primary">Filteren</button>
                </form>
                <h3>Rubrieken</h3>
                <ul class="list-group">
                    <li class="list-group-item"><a href="#">Concerten</a></li>
                    <li class="list-group-item"><a href="#">Auto's</a></li>
                    <li class="list-group-item"><a href="#">Tweedehands Kinderen</a></li>
                    <li class="list-group-item"><a href="#">Vakanties</a></li>
                    <li class="list-group-item"><a href="#">Dagjes uit</a></li>
                </ul>
            </div>
            </div>
            <div class="col-md-9">
            <h2>Veilingen</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="Train.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Train</h4>
                            <p class="card-text">Concert van Train in Amerika.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-sm btn-outline-secondary">$50</button>
                                <small class="text-muted">3 dagen</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="The Proclaimers.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">The Proclaimers</h4>
                            <p class="card-text">Concert van The Proclaimers in London.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-sm btn-outline-secondary">$75</button>
                                <small class="text-muted">5 dagen</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="Donnie.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Maradonnie</h4>
                            <p class="card-text">Een concert van Donnie in Arnhem.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-sm btn-outline-secondary">$100</button>
                                <small class="text-muted">7 dagen</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
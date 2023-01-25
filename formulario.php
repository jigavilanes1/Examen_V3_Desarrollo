<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
    <title>Usuarios</title>
  </head>

  <body onload="BuscarTodos();">
    <div class="container">
        <div class="row">
            <form onsubmit="return false;" class="row g-3">
                <div class="col-md-6">
                    <input type="hidden" id="id">
                    <label for="placa" class="form-label">Placa</label>
                    <input type="text" class="form-control" id="placa">
                </div>
                <div class="col-md-6">
                    <label for="marca" class="form-label">Marca</label>
                    <select id="marca" class="form-select">
                        <option selected>Seleccione...</option>
                        <option value="1">Chévrolet</option>
                        <option value="2">Fiat</option>
                        <option value="4">Great Wall</option>
                        <option value="5">Toyota</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="motor" class="form-label">Motor</label>
                    <input type="text" class="form-control" id="motor">
                </div>
                <div class="col-6">
                    <label for="chasis" class="form-label">Chasis</label>
                    <input type="text" class="form-control" id="chasis">
                </div>
                <div class="col-md-6">
                    <label for="combustible" class="form-label">Combustible</label>
                    <select id="combustible" class="form-select">
                        <option selected>Seleccione...</option>
                        <option value="Gasolina">Gasolina</option>
                        <option value="Diesel">Diesel</option>                        
                    </select>
                </div>
                <div class="col-6">
                    <label for="anio" class="form-label">Año</label>
                    <input type="number" class="form-control" id="anio">
                </div>  
                <div class="col-md-6">
                    <label for="color" class="form-label">Color</label>
                    <select id="color" class="form-select">
                        <option selected>Seleccione...</option>
                        <option value="2">Negro</option>
                        <option value="3">Rojo</option>
                        <option value="4">Azul</option>
                        <option value="5">Plomo</option>
                        <option value="6">Verde</option>                        
                        <option value="8">Plata</option>
                        <option value="9">Morado</option>
                        <option value="10">Naranja</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="avaluo" class="form-label">Avaluo</label>
                    <input type="number" class="form-control" id="avaluo">
                </div>
                <div class="col-6">
                    <button type="submit" class="btn btn-primary" onclick="GuardarActualizar();">Guardar</button>
                </div>
            </form>
        </div>
        <br>
        <div class="row">
            <div class="alert alert-success" role="alert" id="res">
                ...
            </div>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead align="center">
                    <tr>
                        <th>ID</th>
                        <th>PLACA</th>
                        <th>MARCA</th>
                        <th>MOTOR</th>
                        <th>CHASIS</th>
                        <th>COMBUSTIBLE</th>
                        <th>AÑO</th>
                        <th>COLOR</th>
                        <th>AVALUO</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="datos">
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

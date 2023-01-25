function GuardarActualizar() {
    let id = document.querySelector("#id").value;
    let placa = document.querySelector("#placa").value;
    let marca = document.querySelector("#marca").value;
    let motor = document.querySelector("#motor").value;
    let chasis = document.querySelector("#chasis").value;
    let combustible = document.querySelector("#combustible").value;
    let anio = document.querySelector("#anio").value;
    let color = document.querySelector("#color").value;
    let foto = document.querySelector("#foto").value;
    let avaluo = document.querySelector("#avaluo").value;
        
    let res = document.querySelector("#res");

    let xhr = new XMLHttpRequest();

    xhr.open("POST","Logica/Logica.php",true);

    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200) {
            res.innerHTML = this.responseText;
        }
    }
    
    let data = JSON.stringify({"id":id,"placa":placa,"marca":marca,"motor":motor,"chasis":chasis,"combustible":combustible,"anio":anio,"color":color,"foto":foto,"avaluo":avaluo,"operacion":"Guardar"});

    xhr.send(data);
    setInterval("location.reload()",800);
}

function BuscarTodos() {
    let datos = document.querySelector("#datos");
    let xhr = new XMLHttpRequest();
    xhr.open("POST","Logica/Logica.php",true);
    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200) {
            datos.innerHTML = this.responseText;
        }
    }
    let data = JSON.stringify({"operacion":"BuscarTodos"});

    xhr.send(data);
}

function Eliminar(id) {
    let res = document.querySelector("#res");
    let xhr = new XMLHttpRequest();
    xhr.open("POST","Logica/Logica.php",true);
    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200) {
            res.innerHTML = this.responseText;
        }
    }
    let data = JSON.stringify({"id":id,"operacion":"Eliminar"});

    xhr.send(data);
    setInterval("location.reload()",800);
}


function GuardarUsuario() {
  let usuario = document.querySelector("#usuario").value;
  let password = document.querySelector("#password").value;
  let res = document.querySelector("#res");

  let xhr = new XMLHttpRequest();

  xhr.open("POST", "Logica/Logica.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      window.alert("Usuario Creado");
    }
  };

  let data = JSON.stringify({
    usuario: usuario,
    password: password,
    operacion: "GuardarUsuario",
  });

  xhr.send(data);
  location.href = "index.php";
}

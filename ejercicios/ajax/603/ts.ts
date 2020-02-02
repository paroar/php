const cargarCatalogo = () => {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            cargarXML(this);
        }
    };
    xhr.open("GET", "catalogo.xml", true);
    xhr.send();
}

const cargarXML = (xml) => {
    var docXML = xml.responseXML;
    var tabla = "<tr><th>Artista</th><th>Titulo</th></tr>";
    var discos = docXML.getElementsByTagName("CD");
    [].forEach.call(discos ,element => {
        tabla += "<tr><td>";
        tabla += element.getElementsByTagName("ARTIST")[0].textContent;
        tabla += "</td><td>";
        tabla += element.getElementsByTagName("TITLE")[0].textContent;
        tabla += "</td></tr>";
    });
    document.getElementById("demo").innerHTML = tabla;
}

if (document.getElementById("cargaCatalogo")) {
    document
        .getElementById("cargaCatalogo")
        .addEventListener("click", cargarCatalogo);
}




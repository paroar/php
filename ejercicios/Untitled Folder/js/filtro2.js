window.addEventListener("load", load);
async function load(){
    const res = await fetch("http://localhost/php/ejercicios/Untitled%20Folder/php/ControladorFiltros.php?zonas=1");
    const zonas = await res.json();
    let options = "";
    for(let i = 0; i<zonas.length; i++){
        options += `
            <option value=${i+1}>${zonas[i]}</option>
        `;
    }
    document.getElementById("zonas").innerHTML = options;
}
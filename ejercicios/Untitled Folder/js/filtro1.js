window.addEventListener("load", load);

async function load(){
    const res = await fetch("http://localhost/php/ejercicios/Untitled%20Folder/php/ControladorFiltros.php?tipos=1");
    const tipos = await res.json();
    let options = "";
    for(let i = 0; i<tipos.length; i++){
        options += `
        <option value=${i+1}>${tipos[i]}</option>
    `;
    }
    document.getElementById("tipos").innerHTML = options;
}
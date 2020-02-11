window.addEventListener("load", load);
async function load(){
    const res = await fetch("http://localhost/php/ejercicios/Untitled%20Folder/php/ControladorFiltros.php?extras=1");
    let extras = await res.json();
    extras = extras.slice(0,-1);
    extras = extras.slice(5);

    let extra = "";
    extras.forEach(t => {
        extra += `
            <input type="checkbox" name=${t} value="si">${t}</input><br>
        `;
    });
    document.getElementById("extras").innerHTML = extra;
}
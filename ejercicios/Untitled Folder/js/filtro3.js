window.addEventListener("load", load);

async function load() {
  const res = await fetch(
    "http://localhost/php/ejercicios/Untitled%20Folder/php/ControladorFiltros.php?caracteristicas=1"
  );
  const caracteristicas = await res.json();
  let dorms = "";
  for (let i = 1; i <= caracteristicas[0]; i++) {
    dorms += `
            <input type="radio" name="dorms" value=${i} checked>${i}</option>
        `;
  }
  document.getElementById("dormitorios").innerHTML = dorms;
  let price = "";
  for (let i = 0; i < caracteristicas[1]; i+=50000) {
    price += `
            <input type="radio" name="price" value=${i} checked>${i}</option>
        `;
  }
  document.getElementById("precio").innerHTML = price;
}

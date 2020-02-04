window.onload = () => {
  if (document.getElementById("searchInputForm")) {
    document.getElementById("searchInputForm").addEventListener("keyup", search);
  }
};

async function search(e) {
  const res = await fetch(`src/php/index.php?search=${e.target.value}`);
  const text = await res.json();
  paint(text);
}

const paint = (obj) => {
  let child = "";
  obj.forEach(o => {
    child += `<table><th>${o.title}</th><tr><td>Id: ${o.id}</td></tr><tr><td>Author: ${o.author}</td></tr><tr><td>Price: ${o.price}</td></tr><tr><td>Stock: ${o.stock}</td></tr></table>`;
  });
  document.getElementById("books").innerHTML = child;
}
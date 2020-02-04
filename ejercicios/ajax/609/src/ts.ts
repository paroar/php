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
    child += `<table id=${o.id}><th colspan="2">${o.title}</th><tr><td>Author:</td> <td>${o.author}</td></tr><tr><td>Price:</td> <td>${o.price}</td></tr><tr><td>Stock:</td> <td>${o.stock}</td></tr></table>`;
  });
  document.getElementById("books").innerHTML = child;
}
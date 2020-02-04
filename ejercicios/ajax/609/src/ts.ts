//https://desarrolloweb.com/articulos/fetch-post-ajax-javascript.html

window.onload = () => {
  if (document.getElementById("searchForm")) {
    document.getElementById("searchForm").addEventListener("submit", search);
  }
};

async function search(e) {
  e.preventDefault();
  const idForm = document.getElementById('searchForm');
  //@ts-ignore
  const formData = new FormData(idForm);
  const res = await fetch("src/php/index.php", {method: "POST", body: formData});
  const text = await res.text();
  console.log("TEXT", text);
}
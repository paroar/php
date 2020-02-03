//https://desarrolloweb.com/articulos/fetch-post-ajax-javascript.html

window.onload = () => {
    if (document.getElementById("searchForm")) {
        document.getElementById("searchForm").addEventListener("submit", search)
    }
};

async function search(e) {
    console.log("SEARCH");
    e.preventDefault();
    const idForm = document.getElementById('searchForm');
    //@ts-ignore
    const data = new FormData(idForm);
    const res = await fetch("php/index.php", { 
        method: "POST", 
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' }, 
        body: data 
    });
    const text = await res.json();
    console.log("TEXT",text);

}
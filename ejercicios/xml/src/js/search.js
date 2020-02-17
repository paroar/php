document.getElementById("searchInput").addEventListener("keyup", searchMovie)

async function searchMovie() {

    const data = new FormData();
    data.append("search", "");
    const val = document.getElementById("searchInput").value;
    data.append("title", val);
    console.log(val);
    const res = await fetch("./src/php/index.php", {
        method: 'POST',
        body:data
    }
    )
    const text = await res.json();
    console.log(text);
}

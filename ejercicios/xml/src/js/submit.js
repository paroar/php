document.getElementById("submit").addEventListener("click", submitMovie)

async function submitMovie(e) {
    e.preventDefault();
    
    const form = document.getElementById("insertMovieForm");    
    const data = new FormData(form);
    data.append("submit","");
    const res = await fetch("./src/php/index.php", {
        method: 'POST',
        body:data
    }
    )
    const text = await res.json();
    console.log(text);
}


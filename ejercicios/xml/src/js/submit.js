document.getElementById("submit").addEventListener("click", submitMovie)
document.getElementById("edit").addEventListener("click", editMovie)
document.getElementById("delete").addEventListener("click", deleteMovie)

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


async function editMovie(e) {
    e.preventDefault();
    
    const form = document.getElementById("insertMovieForm");    
    const data = new FormData(form);
    data.append("edit","");
    const res = await fetch("./src/php/index.php", {
        method: 'POST',
        body:data
    }
    )
    const text = await res.text();
    console.log(text);
}

async function deleteMovie(e) {
    e.preventDefault();
    
    const form = document.getElementById("insertMovieForm");    
    const data = new FormData(form);
    data.append("delete","");
    const res = await fetch("./src/php/index.php", {
        method: 'POST',
        body:data
    }
    )
    const text = await res.text();
    console.log(text);
}
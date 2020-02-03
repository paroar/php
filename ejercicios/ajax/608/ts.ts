window.onload = () => {
    if (document.getElementById("show")) {
        document.getElementById("show").addEventListener("click", view);
    }
};

async function view() {
    const res = await fetch("php.php", {
        method: "POST", headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        }, body: "id=3"
    });
    const text = await res.text();
    console.log(text);

    // const parser = new DOMParser();
    // const xml = parser.parseFromString(text,"text/xml");
    // const cd = xml.getElementsByTagName("CD");
    // [].forEach.call(cd, cds => {
    //     const title = cds.getElementsByTagName("TITLE")[0].innerHTML;
    //     const p = document.createElement("p");
    //     p.innerText = title;
    //     document.getElementById("paragraph").appendChild(p);
    // })
}
const search = (e) => {
  const input = e.target.value;
  if (input.length === 0) {
    document.getElementById("sugerences").innerHTML = "";
    return;
  } else {
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        sugerences(this);
      }
    };
    xhr.open("POST", "ajax.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("name=" + input);
  }
};

const sugerences = xhttp => {
  document.getElementById("sugerences").innerHTML = xhttp.responseText;
};

if (document.getElementById("input")) {
  //@ts-ignore
  document.getElementById("input").addEventListener("keyup", search);
}

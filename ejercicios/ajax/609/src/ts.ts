window.onload = () => {
  if (document.getElementById("searchInputForm")) {
    document.getElementById("searchInputForm").addEventListener("keyup", search);
  }
};

function listeners() {
  let buttons = document.getElementsByTagName("button");
  [].forEach.call(buttons, b => {
    b.addEventListener("click", clickController, false);
  });
}

function clickController(e) {
  const action = e.target.innerHTML;
  const parentId = e.target.parentElement.parentElement.id;
  if (action === "update") {
    updateBook(parentId);
  } else if (action === "delete") {
    deleteBook(parentId);
  }
}

async function updateBook(id) {
  console.log("updating", id);
}

async function deleteBook(id) {
  if(confirm("Are you sure you want to delete this book?")){
    const res = await fetch(`src/php/index.php?delete=${id}`);
    const text = await res.text();
    if(text){
      document.getElementById(id).remove();
      alert("Book deleted");
    }
  }
}

async function search(e) {
  const res = await fetch(`src/php/index.php?search=${e.target.value}`);
  const text = await res.json();
  paint(text);
  listeners();
}

const paint = (obj) => {
  let child = `<table>
  <th>Title</th><th>Author</th><th>Stock</th><th>Price</th><th>Update</th><th>Delete</th>`;
  obj.forEach(o => {
    child += `
      <tr id="${o.id}">
        <td>${o.title}</td>
        <td>${o.author}</td>
        <td>${o.stock}</td>
        <td>${o.price}</td>
        <td><button>update</button></td>
        <td><button>delete</button></td>
      </tr>`;
  });
  child +=  "</table>";
  document.getElementById("books").innerHTML = child;
}
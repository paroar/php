window.onload = () => {
  if (document.getElementById("searchInputForm")) {
    document.getElementById("searchInputForm").addEventListener("keyup", search);
  }
  listeners();
};

function listeners() {
  let buttons = document.getElementsByTagName("button");
  [].forEach.call(buttons, b => {
    b.addEventListener("click", clickController, false);
  });
}

function clickController(e) {
  e.preventDefault();
  const action = e.target.innerHTML;
  const parentId = e.target.parentElement.parentElement.id;
  if (action === "update") {
    updateFetchBook(parentId);
  } else if (action === "delete") {
    deleteBook(parentId);
  } else if (action === "insert") {
    insertBook();
  }
}

async function updateFetchBook(id) {

  const res = await fetch(`src/php/index.php?book=${id}`);
  const book = await res.json();
  
  document.getElementById("body").innerHTML += `
  <div class="modal" id="modal">
    <div id="content" class="content">
      <form class="bookUpdateForm" id="bookUpdateForm" name="form">
        <input type="hidden" value="${book[0].id}" name="id">
        <input type="hidden" value="" name="update">
        <input type="text" value="${book[0].title}" name="title">
        <input type="text" value="${book[0].author}" name="author">
        <input type="text" value="${book[0].stock}" name="stock">
        <input type="text" value="${book[0].price}" name="price">
        <button id="modalBookUpdate">Update</button>
      </form>
    <div>
  </div>`;
  document.getElementById("modal").addEventListener("click", hideModal);
  document.getElementById("content").addEventListener("click", function(e){
    e.stopPropagation();
  });
  document.getElementById("modalBookUpdate").addEventListener("click", updateBook);
}

function hideModal(){
  document.getElementById("modal").remove();
  listeners();
}

async function updateBook(e){
  e.preventDefault();
  const form = document.getElementById("bookUpdateForm");
  const data = new FormData(form);
  data.append("update", "update");
  const res = await fetch(`src/php/index.php`,{method: "POST", body: data});
  const success = await res.text();

  if(success){
    const res = await fetch(`src/php/index.php?book=${success}`);
    const book = await res.json();
    document.getElementById(success).innerHTML = `
        <td>${book[0].title}</td>
        <td>${book[0].author}</td>
        <td>${book[0].stock}</td>
        <td>${book[0].price}</td>
        <td><button>update</button></td>
        <td><button>delete</button></td>
    `;
    document.getElementById("modal").remove();
    listeners();
  }
  
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
  let child = `<table id="table">
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

async function insertBook(){
  const form = document.getElementById('insert');
  const data = new FormData(form);
  data.append("insert","insert");
  const res = await fetch(`src/php/index.php`, {method: "POST", body:data});
  const text = await res.json();
  console.log("json",text);
  let child = "";
  child += `
      <tr id="${text[0].id}">
        <td>${text[0].title}</td>
        <td>${text[0].author}</td>
        <td>${text[0].stock}</td>
        <td>${text[0].price}</td>
        <td><button>update</button></td>
        <td><button>delete</button></td>
      </tr>`;
   document.getElementById("table").innerHTML += child;  
  listeners();
}
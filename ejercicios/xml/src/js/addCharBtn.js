window.onload = () => {
  addCharBtnListener();
};

const addCharBtnListener = () => {
  document.getElementById("addCharBtn").addEventListener("click", addInputs);
};

const addInputs = e => {
  e.preventDefault();
  document.getElementById("chars").innerHTML += `
    &nbsp;&nbsp;&nbsp;&nbsp;Character:
    <input type="text" placeholder="name" name="character[]"/>
    <input type="text" placeholder="actor" name="character[]"/><br />
    `;
   addCharBtnListener();
};

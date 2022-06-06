
function valName(){
    let nume = document.querySelector('#name')
    if(nume.value == ""){
      alert(' *Name* Camp obligatoriu')
    }
    if(nume.value.length < 3){
  alert('Numele trebuie sa contina minim 3 litere')
    }
    else {
        return true
    }
}
function valEmail(){
  const email = document.querySelector('#email')
  if(email.value == ""){
    alert(' *email* Camp obligatoriu')
  }
  if(email.value.endsWith('.ro')){
      return true
  }
  else {
alert("Domeniul email-ului trebuie sa fie .ro")
  }
}
function valNumar(){
  const telefon = document.querySelector('#pnumber')
  if(telefon.value == ""){
    alert(' *Phone number* Camp obligatoriu')
  }
  let pnumber = /^\d{10}$/;
  if(telefon.value.match(pnumber)){
      return true
  }
  else {
alert("Numarul de telefon trebuie sa contina 10 cifre")
  }
}

function valideazaFormular(event) {
    if (
      valName() 
      && valEmail()
      && valNumar()
      ) {
        alert("Va vom contacta pentru a finaliza programarea.\nVa multumim ca ati ales serviciile DENTALUX")
      }
    else event.preventDefault();
  }
  
  const myForm = document.querySelector('#validare')
  myForm.addEventListener('submit', valideazaFormular)
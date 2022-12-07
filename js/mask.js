const input = document.getElementById("cpf");

input.addEventListener("keypress", ()=>{
    let inputLength = input.value.length;
    
    if(inputLength === 3 || inputLength === 7){
        input.value += ".";
    }else if (inputLength === 11){
        input.value += "-"
    }

})

const inputCEP = document.getElementById("cep");
inputCEP.addEventListener("keypress", ()=>{
    let inputLength = inputCEP.value.length;
    if(inputLength === 6){
        inputCEP.value += "-";
    }
})





const handlePhone = (event) => {
    let input = event.target
    input.value = phoneMask(input.value)
}
  
    const phoneMask = (value) => {
        if (!value) return ""
        value = value.replace(/\D/g,'')
        value = value.replace(/(\d{2})(\d)/,"($1) $2")
        value = value.replace(/(\d)(\d{4})$/,"$1-$2")
        return value
    }
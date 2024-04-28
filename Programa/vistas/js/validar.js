//valida si cumple con as caracteristicas para iniciar secion 
function validar_usuario(){
    let user= $("#usuario").val()
    if (user !="") {
        let exp=/^[a-zA-Z0-9]*$/
        if(!exp.test(user)){
            $("#usuaio").parent().before('<h1>Error</h1>')
            return false
        }
    } 
    return true
    
}
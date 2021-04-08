/* const onSuccess = (response) =>{
    console.log(response.name)
} */
const onFail = (error) => {
 if(error.status === 401){
     console.log("No esta autorizado");
     return;
 }
 if(error.status === 404){
     console.log    ("No esta disponible")
     return;
 }
 console.log("ocurrio un error ")
}
const getPersonajeById = (id) => {
    return new Promise((resolve ,reject)=>{
        $.get( `https://swapi.dev/api/people/${id}`,
        (response)=>{
            resolve(response)
        })
        .fail(()=>{
            reject(id)
        });
    })
    
}
const response = getPersonajeById(1)
.then((response)=>{
    console.log(response)
    return getPersonajeById(2)
})
.then((response)=>{
    console.log(response)
    return getPersonajeById(6)
})
.then((response)=>{
    console.log(response)
    return "job"
})
.then((name)=>{
    console.log(name)
    return name
})
.catch((error)=>{
    console.error("EL PERSONAJE CON ID ",error ," NO EXISTE")
    return "error"
})
response.then((valor)=>{
    console.log(valor,"valor")
}).catch((e)=>{console.log(e)})


promesas sincronas

const isAdult = (edad)=>{
    return new Promise ((resolve , reject)=>{
        if(edad>=18){
            resolve("El man es mayor de edad")
        }else{
            reject("Vaya a dormir")
        }
    })
}

isAdult(1).then((res)=>{console.log(res)}).catch((err)=>{console.log(err)})
fetch("https://swapi.dev/api/people/1").then((response)=> {
debugger    
console.log(response)})
/* const getPersonajeById = (id ,onSuccess) => {
    $.get( `https://swapi.dev/api/people/${id}`,onSuccess)
    .fail(onFail);
} */

callback hell 
/* getPersonajeById(2,(response)=>{
    console.log(response.name)
    getPersonajeById(5,(response)=>{
        console.log(response.name)
        getPersonajeById(12,(response)=>{
            console.log(response)
            getPersonajeById(12,(response)=>{
                console.log(response)
                 getPersonajeById(12,(response)=>{
                    console.log(response)
                })
            })
        })
    })
})

 getPersonajeById(1,(response)=>{console.log(response)})
 getPersonajeById(2,(response)=>{console.log(response)})
 getPersonajeById(3,(response)=>{console.log(response)})
 getPersonajeById(4,(response)=>{console.log(response)}) */
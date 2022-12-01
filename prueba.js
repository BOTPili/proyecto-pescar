
  let colores = [
       {
           "color": "Rojo"
   }, 
       {
           "color": "Azul"
   }, 
       {
           "color": "Amarillo"
   }, 
       {
           "color": "Verde"
   }, 
       {
           "color": "Naranja"
   }, 
       {
           "color": "Violeta"
   }, 
       {
           "color": "Blanco"
   }, 
       {
           "color": "Negro"
   }
]
   


   let numeros = [
       {
           "numero": 1
       },
       {
           "numero": 2
       },
       {
           "numero": 3
       },
       {
           "numero": 4
       },
       {
           "numero": 5
       },
       {
           "numero": 6
       },
       {
           "numero": 7
       },
       {
           "numero": 8
       },
       {
           "numero": 9
       },
       {
           "numero": 0
       }
   ]

   
   
    let infantiles = [
       {
           "letra": "A",
           "en": "Ingles",
           "es": "Español"
       },

       {
           "letra": "B",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "C",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "D",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "E",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "F",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "G",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "H",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "I",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "J",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "K",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "L",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "M",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "N",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "Ñ",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "O",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "P",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "Q",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "R",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "S",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "T",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "U",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "W",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "X",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "Y",
           "en": "Ingles",
           "es": "Español"
       },
       {
           "letra": "Z",
           "en": "Ingles",
           "es": "Español"
       }
   ]





const carta = document.querySelector('.carta');

   infantiles.forEach(function(i){
      carta.innerHTML += `<div class="card my-2 mx-2" style="width: 12rem; height: 180px;">
      <h1 class="text-center mt-2">${i.letra} </h1>
     <div class="card-footer mt-5 d-flex justify-content-center">
        <a href="#" class="mx-1 btn btn-primary">${i.en} </a>
       <a href="#" class="mx-1 btn " style="background-color: #712cf9; color:white;">${i.es}</a>
     </div>
   </div>`

   });




const color = document.querySelector('.color');




   colores.forEach(function(c){
      color.innerHTML += `<div class="card my-2 mx-2" style="width: 12rem; height: 180px;">
      <h1 class="text-center mt-2">${c.color} </h1>
       <div class="card-footer mt-5 d-flex justify-content-center">
          <a href="#" class="mx-1 btn btn-primary">Es </a>
         <a href="#" class="mx-1 btn " style="background-color: #712cf9; color:white;">En</a>
       </div>
     </div>`
  
     });
  


const numero = document.querySelector('.numero');


   numeros.forEach(function(n){
      numero.innerHTML += `<div class="card my-2 mx-2" style="width: 12rem; height: 180px;">
      <h1 class="text-center mt-2">${n.numero} </h1>
       <div class="card-footer mt-5 d-flex justify-content-center">
          <a href="#" class="mx-1 btn btn-primary">Es </a>
         <a href="#" class="mx-1 btn " style="background-color: #712cf9; color:white;">En</a>
       </div>
     </div>`
  
     });
  



// dato.forEach(function(i){
//     console.log(i.letra);
//     carta.innerHTML += `<div class="card my-2 mx-2" style="width: 12rem; height: 180px;">
//     <h1 class="text-center mt-2">${i.letra} </h1>
//      <div class="card-footer mt-5 d-flex justify-content-center">
//         <a href="#" class="mx-1 btn btn-dark">${i.en} </a>
//        <a href="#" class="mx-1 btn btn-danger">${i.es}</a>
//      </div>
//    </div>`
// } );


const user = [
    {
        'nombre': 'Uriel Milgron',
        'nombreTwo': 'Uriel Milgron',
        'edad':'27 años',
        'descripcion': 'Estudiante de programación web fullstack, desarrollo de apps mobiles y diseño UX/UI',
        'img': '../images/uriel.jfif'
    },
    {
        'nombre': 'Cristian Jaimes',
        'nombreTwo': 'Cristian Jaimes',
        'edad':'21 años',
        'descripcion': 'Estudiante de programación web fullstack y diseño UX/UI Front-end/ Estudiante Universitario',
        'img': '../images/cris.jfif'
    },
    {
        'nombre': 'Dante Roldan',
        'nombreTwo': 'Dante Roldan',
        'edad':'21 años',
        'descripcion': 'Desarrollador Front-end/ Estudiante Universitario',
        'img': '../images/dante.jfif'
    },
    {
        'nombre': 'Maria del pilar Fernandez',
        'nombreTwo': 'Maria P. Fernandez',
        'edad':'28 años',
        'descripcion': 'Estudiante Desarrollo Web Full Stack y Aplicaciones Android - Kotlin ',
        'img': '../images/pili.jfif'
    }
]

const card = document.querySelector('.carta');
{/* <div style="background-image: url(${i.img}) ; background-size: cover; width: 170px; height: 172px; " class="mx-5 mt-4 img-user card-img-top rounded-circle" ></div> */}
user.forEach( (i) => {
    console.log(i.nombre);
    card.innerHTML += `   
    <div class="my-2 col-6 col-sm-3  " >
    <div class="card mx-sm-4 shadow col-12" style=" width: 17rem; height: 25rem ; ">
    <img class="img-user card-img-top mx-5 mt-4 rounded-circle" src="../images/${i.img}" alt="" >
    <div class="card-body text-center">
    <h5 class="card-title text-white d-none d-sm-block "> ${i.nombre} </h5>
    <h5 class="card-title text-white d-sm-none d-block "> ${i.nombreTwo} </h5>
    <p class="card-text"> ${i.edad} </p>
    <p class="card-text" style="height: 50px;"> ${i.descripcion} </p>
    <div>
    <a href="#" class="btn btn-primary mt-2">Linkedin</a>
    </div>
    </div>
    </div>
    </div> `
} )






//   <div class="mx-5 mt-4 img-user card-img-top rounded-circle" ></div>
//   <div class="card-body">
//       <h5 class="card-title">Card title</h5>
//       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
//       <a href="#" class="btn btn-primary">Go somewhere</a>
//   </div>
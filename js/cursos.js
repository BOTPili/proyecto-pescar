const cursosInfantiles = [
  {
    nombre: "Aprender el ABC ES/EN",
    descripcion: "Aprenderás  el abecedario en inglés y en español",
    imagen:
      "https://i.ytimg.com/vi/Pcnj1AHYSAs/maxresdefault.jpg",
    valoraciones: 4,
    masVisitado: true,
  },

  {
    nombre: "Aprender los números ES/EN",
    descripcion: "Aprenderás los números en inglés y en español",
    imagen: "https://i.ytimg.com/vi/WhXZaxeZ5sg/hqdefault.jpg",
    valoraciones: 5,
    masVisitado: true,
  },

  {
    nombre: "Aprender los colores ES/EN",
    descripcion: "Aprenderás los colores en inglés y en español",
    imagen:
      "https://www.proferecursos.com/wp-content/uploads/Aprender-los-colores.jpg",
    valoraciones: 4,
    masVisitado: false,
  },
];

const cursosAdolescentes = [
  {
    nombre: "Educación Sexual",
    descripcion:
      "Materiales, información y propuestas para trabajar en torno a los temas de la Ley N° 26.150 de Educación Sexual Integral en las escuelas y con las familias. ",
    imagen:
      "https://www.unesco.org/sites/default/files/educacionsexualintegral.jpg",
    valoraciones: 4,
    masVisitado: true,
  },
  {
    nombre: "Test vocacional",
    descripcion:
      "Descubrí tu vocación y qué estudiar con el mejor Test de Orientación Vocacional online y gratis del e-learning EducArte",
    imagen:
      "https://elcomercio.pe/resizer/4LtqMr5Cj2SPQh9161iz2u2pBmc=/580x330/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/AC2JUANBCBHNNA5TEXIBRQUQVE.jpg",
    valoraciones: 4,
    masVisitado: true,
  },
  {
    nombre: "Recursos para estudiar",
    descripcion:
      "En este curso aprenderas varias formas de estudiar que te ayudaran en el día a día escolar.",
    imagen:
      "https://www.mentesliberadas.com/wp-content/uploads/2012/08/estudiar-un-texto-1024x683.jpg",
    valoraciones: 5,
    masVisitado: false,
  },
];

const cursosAdultos = [
  {
    nombre: "Introducción a Gmail",
    descripcion:
      "Te daremos las herramientas básicas para poder usar gmail de manera satisfactoria",
    imagen:
      "https://i.blogs.es/16b956/gmail-nuevo-logo-google-workspace/1366_2000.jpg",
    valoraciones: 5,
    masVisitado: false,
  },
  {
    nombre: "Como armar un CV",
    descripcion: "Te traemos los mejores tips para armar un buen CV",
    imagen:
      "https://media.ambito.com/p/c2c0021fa22839bb29dc0feea4cc69d3/adjuntos/239/imagenes/040/055/0040055412/curriculum-vitaejpg.jpg",
    valoraciones: 4,
    masVisitado: true,
  },
  {
    nombre: "Como usar Linkedin",
    descripcion: "Te damos los pasos para tener un perfil estelar",
    imagen: "https://i.ytimg.com/vi/CmC2NVzoPsI/maxresdefault.jpg",
    contenido: "",
    video: "https://youtu.be/CmC2NVzoPsI",
    valoraciones: 5,
    masVisitado: false,
  },
];

const cursosMayores = [
  {
    nombre: "Creación de mail",
    descripcion: "Aprenderás a como crear un mail",
    imagen:
      "https://guadalinfoalgarrobo.com/wp-content/uploads/2022/01/ejercicios-practicos-correo-electronico.png",
    valoraciones: 5,
    masVisitado: false,
  },
  {
    nombre: "Aprender a usar un Celular",
    descripcion:
      "Aprenderás los aspectos fundamentales para utilizar un celular",
    imagen:
      "https://infochicos.com.ar/wp-content/uploads/2019/08/Facebook-1-22-770x578.png",
    valoraciones: 5,
    masVisitado: false,
  },
  {
    nombre: "Aprender a usar WhatsApp",
    descripcion: "Te traemos una guía completa para utilizar WhatsApp",
    imagen:
      "https://elcomercio.pe/resizer/tCHp5GNCWCE-LHeUkGbDkKel94M=/620x0/smart/filters:format(jpeg):quality(75)/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/CZOCRMX35RA2LOUVVDK4F24DEQ.jpg",
    valoraciones: 5,
    masVisitado: true,
  },
];

const card = document.querySelector(".cursos-container");
{
  /* <div style="background-image: url(${i.img}) ; background-size: cover; width: 170px; height: 172px; " class="mx-5 mt-4 img-user card-img-top rounded-circle" ></div> */
}
cursosInfantiles.forEach((i) => {
  console.log(i.nombre);
  card.innerHTML += `

  <article class="curso-card">
  <div class="curso-card-image-container"><img class="curso-card-image" src=${i.imagen} alt=""></div>
  <div class="curso-card-description-and-name-container">
      <h5 class="curso-card-name">${i.nombre}</h5>
      <p>${i.descripcion}</p>
  </div>
  <div class="curso-card-stars-container"><img src="https://www.pngall.com/wp-content/uploads/4/5-Star-Rating-PNG-High-Quality-Image.png" alt=""></div>
  <div class="curso-card-visited-container">
     
  ${i.masVisitado ? ' <div class="curso-card-visited"><h6 class="curso-card-visited-text">MÁS VISTADO</h6> </div>' : ''}    
     
  </div>
</article>
  `
});
/*
`   
   <div class=" col-6 col-sm-3" >
    <div class="card mx-sm-4 shadow col-12 d-flex flex-column justify-content-evenly" style=" width: 20rem; height: 28rem ; ">
    <img class="img-user card-img-top mx-6 mt-1" style="width: 19.8rem; " src="${
      i.imagen
    }" alt="" >
    <div class="card-body text-center  ">
    <h5 class="card-title text-black "> ${i.nombre} </h5>
    <p class="card-text text-black" style="height: 100px;"> ${i.descripcion} </p>
    <div class="d-flex align-items-center justify-content-center" style="height:45px;">
    ${
      i.masVisitado
        ? `<div class="btn btn-primary mt-2">Más visitado</div>`
        : ""
    }
    
    </div>
    </div>
    </div>
    </div>`;
*/
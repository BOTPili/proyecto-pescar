const cuestions = [
    {
        'resuelto': true ,
        'nombreUsuario': 'Latuy89',
        'imagenUsuario': 'https://cdn.icon-icons.com/icons2/1141/PNG/512/1486395884-account_80606.png',
        'pregunta': '¿Como chucha se hace para tener lvl astral en linkedin? no entiendo alguien me explica.',
        'cantRespuestas': '6',
        'categoria': 'ADULTOS',
        'ultimaActualizacion': '22/05/2022 14:34hs',
    },

    {
        'resuelto': false ,
        'nombreUsuario': 'Maca_Rena_Baila',
        'imagenUsuario': 'https://cdn.icon-icons.com/icons2/1141/PNG/512/1486395884-account_80606.png',
        'pregunta': '¿Como hago mi CV si no tengo experiensia?',
        'cantRespuestas': '3',
        'categoria': 'ADULTOS',
        'ultimaActualizacion': '15/06/2022 20:09hs',
    },

    {
        'resuelto': true ,
        'nombreUsuario': 'Manuelita_vivia_pehuajo',
        'imagenUsuario': 'https://cdn.icon-icons.com/icons2/1141/PNG/512/1486395884-account_80606.png',
        'pregunta': '¿Alguien me explica como puedo dscargar facebook?',
        'cantRespuestas': '2',
        'categoria': 'ADULTOS MAYORES',
        'ultimaActualizacion': '09/10/2022 10:12hs',
    },

    {
        'resuelto': false ,
        'nombreUsuario': 'Ricardo_Darin',
        'imagenUsuario': 'https://cdn.icon-icons.com/icons2/1141/PNG/512/1486395884-account_80606.png',
        'pregunta': 'Si estoy enamorado de alguien,¿Cómo se lo digo?',
        'cantRespuestas': '12',
        'categoria': 'ADOLESCENTES',
        'ultimaActualizacion': '28/11/2022 18:57hs',
    },

    {
        'resuelto': true ,
        'nombreUsuario': 'Ricky_Martin89',
        'imagenUsuario': 'https://cdn.icon-icons.com/icons2/1141/PNG/512/1486395884-account_80606.png',
        'pregunta': '¿Cómo se si lo que resumí está bien?',
        'cantRespuestas': '4',
        'categoria': 'ADOLESCENTES',
        'ultimaActualizacion': '09/10/2022 12:55hs',
    },
]
const iconResolved = `<svg xmlns="http://www.w3.org/2000/svg"
width="16" height="16" fill="currentColor" class="bi bi-check-circle"
viewBox="0 0 16 16">
<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
<path
    d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
</svg>`
const iconResolvednT = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
<path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
<path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
</svg>`
const card = document.querySelector(".foro-questions-container");
cuestions.forEach((i) => {
    card.innerHTML+= `
    <section class="foro-container-question">
    <article class="foro-question">
        <section class="foro-question-user-resolve">
            <div class="foro-question-check-icon-container ${i.resuelto? `foro-question-check-icon-container-resolved`: `foro-question-check-icon-container-warning`}">${i.resuelto? iconResolved : iconResolvednT}</div>
            <div class="foro-question-user"><img class="foro-question-user-image"
                    src="${i.imagenUsuario}"
                    alt="">
                <h3>${i.nombreUsuario}</h3>
            </div>
        </section>
        <section class="foro-question-container">
            <h5 class="foro-question-answer">${i.pregunta}</h5>
            <div class="foro-container-response-counter">
                <p class="foro-response-counter">${i.cantRespuestas} Respuestas</p>
            </div>
            <h6>Última actualización ${i.ultimaActualizacion}</h6>
        </section>
        <section class="foro-question-container-category">
            <h3 class="foro-question-container-category-text">CATEGORÍA</h3>
            <div class="foro-question-container-category-text-result">
                <h3 class="foro-question-category-text-result">${i.categoria}</h3>
            </div>
        </section>
    </article>
</section>

    `
})
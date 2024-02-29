async function gerarExercicios() {
    const response = await fetch ('./json/exercises.json')
    const listaExercicios= await response.json()

    const divLista = document.getElementById("div-lista")

    listaExercicios.forEach(exercicio => {
        divLista.innerHTML += `
        <li class="list-group-item d-flex justify-content-between align-items-start text-white" style="border: none; background-color: rgb(22, 22, 22);">  
            <div class="ms-2 me-auto">
            <div id="div-exercicio"></div>
        </li>
        `
        for (link of exercicio.links) {
            const divExercicio = document.getElementById("div-exercicio")
            divExercicio.innerHTML += `
                <a href="${link.link}" target="_blank" class="d-flex text-decoration-none flex-column">Exercício n°${exercicio.links.indexOf(link) + 1}</a>
            `
        }
    });
    gerarExercicios()
}
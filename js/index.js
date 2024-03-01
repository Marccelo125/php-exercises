
async function gerarExercicios() {
  try {
    const response = await axios.get(
      "./json/exercises.json"
    );
    const listaExercicios = response.data;

    const divLista = document.getElementById("div-lista");

    listaExercicios.forEach((exercicio, index) => {
      const divExercicio = document.createElement("div");
      divExercicio.id = `div-exercicio-${index}`;

      const li = document.createElement("li");
      li.className =
        "list-group-item d-flex justify-content-between align-items-start text-white";
      li.style.border = "none";
      li.style.backgroundColor = "rgb(22, 22, 22)";
      li.innerHTML = `
                <div class="ms-2 me-auto">
                    <div id="${divExercicio.id}"></div>
                </div>
            `;

      divLista.appendChild(li);

      exercicio.links.forEach((link, linkIndex) => {
        const divExercicioItem = document.getElementById(`${divExercicio.id}`);
        const anchor = document.createElement("a");
        anchor.href = link.link;
        anchor.target = "_blank";
        anchor.className = "d-flex text-decoration-none flex-column";
        anchor.innerText = `Exercício n°${linkIndex + 1}`;

        divExercicioItem.appendChild(anchor);
      });
    });
  } catch (error) {
    console.error("Erro ao obter os exercícios:", error);
  }
}

gerarExercicios();

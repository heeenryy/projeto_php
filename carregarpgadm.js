const cursos = [
   {
     nome: "PHP Profissional",
    descricao: "Aprenda a criar sistemas robustos com PHP e MySQL.",
    preco: "199,90",
    foto: "nvphp.png"
   },
   {
    nome: "JavaScript Moderno",
    descricao: "Domine o ES6+ e crie interatividade total.",
    preco: "149,00",
    foto: "nvjs.png"
   },
   {
    nome: "Desenvolvimento Kotlin",
    descricao: "Crie aplicativos nativos para Android.",
    preco: "250,00",
    foto: "kt.png"
   }
];

function carregarListaAdimin(){
    const container = document.getElementById("cursos")
    container.innerHTML = "";
    cursos.forEach(curso =>{

            const cardHTML = `<div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="${curso.foto}" class="card-img-top p-3" alt="${curso.nome}" style="height: 180px; object-fit: contain;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">${curso.nome}</h5>
                        <p class="card-text text-muted small">${curso.descricao}</p>
                        <div class="mt-auto">
                            <h4 class="text-primary mb-3">R$ ${curso.preco}</h4>
                            <button onclick="excluir_curso(${curso.id})" style="background: red; width: 40%; border-radius: 10%;">
          🗑️ Excluir
          </button>
                        </div>
                    </div>
                </div>
            </div>`; container.innerHTML += cardHTML
    })
}
function excluir_curso(id){



}
window.onload = function(){
carregarListaAdimin();
};
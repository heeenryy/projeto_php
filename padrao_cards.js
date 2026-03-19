
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

// 2. A Função que renderiza (desenha) os cards na tela

function carregarCursos(){
    const container = document.getElementById('container-cursos');
    container.innerHTML = ""; // Limpa o container antes de carregar

    cursos.forEach(curso => {

        // Criamos o HTML padronizado usando o "molde"
        const cardHTML = `<div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="${curso.foto}" class="card-img-top p-3" alt="${curso.nome}" style="height: 180px; object-fit: contain;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">${curso.nome}</h5>
                        <p class="card-text text-muted small">${curso.descricao}</p>
                        <div class="mt-auto">
                            <h4 class="text-primary mb-3">R$ ${curso.preco}</h4>
                            <a href="#" class="btn btn-primary w-100">Comprar Agora</a>
                        </div>
                    </div>
                </div>
            </div>`; container.innerHTML += cardHTML // Adiciona o card ao container
})
};

// Executa a função ao carregar a página

window.onload = function(){
carregarCursos();
};















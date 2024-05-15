
/*---------------TO TABELAS----------------*/


// Seleciona o link "Tabelas" na navbar
const linkTabelas = document.getElementById('link_tabelas');

// Adiciona um evento de clique ao link "Tabelas"
linkTabelas.addEventListener('click', () => {
    // Seleciona a seção das tabelas
    const tabelasSection = document.getElementById('tabelas_section');
    
    // Rola a página até a seção das tabelas
    tabelasSection.scrollIntoView({ behavior: 'smooth' });
});





/*---------------MODAL----------------*/





const btn_open_modal = document.getElementById("open_menu");
const modal = document.getElementById("modal");
const btn_close_modal = document.querySelector(".close");

btn_open_modal.addEventListener("click", Abrir_Modal);

btn_close_modal.addEventListener("click", Fechar_Modal);

window.addEventListener("click", function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
        document.body.classList.remove('open-modal');
    }
});


function Abrir_Modal() {
    modal.style.display = "block";
    document.body.classList.add('modal-open');
}

function Fechar_Modal() {
    modal.style.display = "none";
    document.body.classList.remove('open_modal');
}
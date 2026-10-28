const plantaSvg = document.getElementById('plantaSvg');
    const salas = [...plantaSvg.querySelectorAll('.sala')];
    let salaSelecionada = null;

    function darZoom(sala){
        if (salaSelecionada) {
            salaSelecionada.classList.remove('selecionada');
            
        }

        const area = sala.getBBox();
        const centroX = area.x + area.width / 2;
        const centroY = area.y + area.height / 2;

        sala.style.setProperty('--mover-x', `${250 - centroX}px`);
        sala.style.setProperty('--mover-y', `${250 - centroY}px`);

        plantaSvg.appendChild(sala);
        sala.classList.add('selecionada');
        salaSelecionada = sala; 
        document.getElementById('nomeSala').textContent = sala.id;
    }
    
    function carregarInfoSala(elemento) {
    const idSala = elemento.getAttribute('data-id');

    document.getElementById('nomeSala').textContent = elemento.id;

    if (!idSala) {
        document.getElementById('information_painel').innerHTML = 
            "<p>Esta sala ainda não está cadastrada no banco.</p>";
        return;
    }

    fetch('database_query.php?idSala=' + idSala)
        .then(function(response) {
            return response.text();
        })
        .then(function(html) {
            document.getElementById('information_painel').innerHTML = html;
        })
        .catch(function() {
            document.getElementById('information_painel').innerHTML = 
                "<p>Erro ao carregar as informações.</p>";
        });
}

    function resetarZoom() {
  if (salaSelecionada) {
    salaSelecionada.classList.remove('selecionada');
    salaSelecionada.style.removeProperty('--mover-x');
    salaSelecionada.style.removeProperty('--mover-y');
    salaSelecionada = null;
  }
  
  salas.forEach((sala) => plantaSvg.appendChild(sala));

  document.getElementById('nomeSala').textContent = 'Clique na sala';

  document.getElementById('information_painel').innerHTML = '';
}

function carregarDadosSala(sala) {
    const painel = document.getElementById('information_painel');

    painel.textContent = 'Carregando dados da sala...';

    fetch('database_query.php?idSala=' + encodeURIComponent(sala.id))
        .then(resposta => {
            if (!resposta.ok) {
                throw new Error('Erro ao consultar a sala.');
            }

            return resposta.text();
        })
        .then(html => {
            painel.innerHTML = html;
        })
        .catch(erro => {
            console.error(erro);
            painel.textContent = 'Não foi possível carregar os dados da sala.';
        });
}
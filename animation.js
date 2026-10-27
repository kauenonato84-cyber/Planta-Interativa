const plantaSvg = document.getElementById('plantaSvg');
    const salas = [...plantaSvg.querySelectorAll('.sala')];
    let salaSelecionada = null;

    function darZoom(sala){
        if (salaSelecionada) {
            salaSelecionada.classList.remove('selecionada');
            fetch('database_query.php?idSala=' + sala.id);
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

    function resetarZoom() {
      if (salaSelecionada) {
        salaSelecionada.classList.remove('selecionada');
        salaSelecionada.style.removeProperty('--mover-x');
        salaSelecionada.style.removeProperty('--mover-y');
        salaSelecionada = null;
      }
        salas.forEach((sala) => plantaSvg.appendChild(sala));
        document.getElementById('nomeSala').textContent = 'Clique na sala';
    }
    
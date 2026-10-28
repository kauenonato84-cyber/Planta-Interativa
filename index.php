<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planta da Escola</title>
    <link rel="stylesheet" href="style.css">
      
</head>
<body>
     <h1>Planta Baixa - IFBA Ilhéus</h1>
  <p>Clique na sala para dar zoom:</p>

  <div class="container">
    <svg id="plantaSvg" viewBox="0 0 500 500">
      <rect 
        id="Dg" 
        class="sala" 
        x="0" 
        y="400" 
        width="70" 
        height="40" 
        onclick="darZoom(this); carregarInfoSala(this)"
      />

        <rect 
        id="Gabinete" 
        class="sala" 
        x="0" 
        y="370" 
        width="70" 
        height="30" 
        onclick="darZoom(this); carregarInfoSala(this)"
      />
        <rect 
        id="direcaoAcademica" 
        class="sala" 
        x="0" 
        y="340" 
        width="70" 
        height="30" 
        onclick="darZoom(this); carregarInfoSala(this)"
      />
      
      <rect 
        id="copaMenor" 
        class="sala" 
        x="0" 
        y="320" 
        width="60" 
        height="20" 
        onclick="darZoom(this); carregarInfoSala(this)"
      />
      <rect 
        id="copaMaior" 
        class="sala" 
        x="0" 
        y="280" 
        width="70" 
        height="40" 
        onclick="darZoom(this); carregarInfoSala(this)"
      />
      <rect
      id="Banheiro"
      class="sala"
      x="100"
      y="240"
      width="70"
     height="30"
     onclick="darZoom(this); carregarInfoSala(this)"
/>
       <rect
      id="Cordenação"
      class="sala"
      x="100"
      y="180"
      width="70"
     height="60"
     onclick="darZoom(this); carregarInfoSala(this)"
/>
        <rect 
          id="sala13" 
          class="sala" 
          x="0" 
          y="240" 
          width="70" 
          height="40" 
          onclick="darZoom(this); carregarInfoSala(this)"
        />

      <rect 
        id="sala12" 
        class="sala" 
        x="0" 
        y="180" 
        width="70" 
        height="60" 
        onclick="darZoom(this); carregarInfoSala(this)"
      />
      <rect 
        id="sala11" 
        class="sala" 
        x="0" 
        y="150" 
        width="70" 
        height="30" 
        onclick="darZoom(this); carregarInfoSala(this)"
      />
      <rect 
        id="labInfo4" 
        class="sala" 
        x="0" 
        y="120" 
        width="70" 
        height="30" 
        onclick="darZoom(this); carregarInfoSala(this)"
      />
      <rect 
        id="cotepMaior" 
        class="sala" 
        x="0" 
        y="110" 
        width="70" 
        height="20" 
        onclick="darZoom(this); carregarInfoSala(this)"
      />
     <rect 
        id="cotepMenor" 
        class="sala" 
        x="0" 
        y="90" 
        width="70" 
        height="20" 
        onclick="darZoom(this); carregarInfoSala(this)"
      />

        <rect 
        id="Coresmenor" 
        class="sala" 
        x="110" 
        y="370" 
        width="50" 
        height="20" 
        onclick="darZoom(this); carregarInfoSala(this)"
      />
        <rect 
        id="SalaProfessor" 
        class="sala" 
        x="100" 
        y="130" 
        width="100" 
        height="50" 
        onclick="darZoom(this); carregarInfoSala(this)"
/>
        
        <rect 
        id="Coresmaior" 
        class="sala" 
        x="90" 
        y="390" 
        width="70" 
        height="50" 
        onclick="darZoom(this); carregarInfoSala(this)"
      />

      <rect 
        id="NEABI" 
        class="sala" 
        x="200" 
        y="130" 
        width="50" 
        height="50" 
        onclick="darZoom(this); carregarInfoSala(this)"
/>

      <rect
      id="COTEP"
      class="sala"
      x="100"
      y="270"
      width="70"
     height="40"
     onclick="darZoom(this); carregarInfoSala(this)"
/>
      <rect
      id="Protocolo"
      class="sala"
      x="100"
      y="310"
      width="70"
     height="30"
     onclick="darZoom(this); carregarInfoSala(this)"
/>
<rect 
        id="Banheiro" 
        class="sala" 
        x="300" 
        y="130" 
        width="70" 
        height="60" 
        onclick="darZoom(this); carregarInfoSala(this)"
/>
<rect 
        id="Sala14" 
        class="sala" 
        x="300" 
        y="190" 
        width="70" 
        height="100" 
        onclick="darZoom(this); carregarInfoSala(this)"
/>
<rect 
        id="HotelProjetos" 
        class="sala" 
        x="300" 
        y="290" 
        width="70" 
        height="40" 
        onclick="darZoom(this); carregarInfoSala(this)"
/>
<rect 
        id="Auditório" 
        class="sala" 
        x="300" 
        y="370" 
        width="210" 
        height="100" 
        onclick="darZoom(this); carregarInfoSala(this)"
/>
<rect 
        id="Audiovisual" 
        class="sala" 
        x="440"
        y="340"
        width="70"
        height="30"
        onclick="darZoom(this); carregarInfoSala(this)"
/>
<rect 
        id="DOF" 
        class="sala" 
        x="440"
        y="295"
        width="70"
        height="45"
        onclick="darZoom(this); carregarInfoSala(this)"
/>
<rect 
        id="Cordenação de Estágio" 
        class="sala" 
        x="440"
        y="270"
        width="70"
        height="32"
        onclick="darZoom(this); carregarInfoSala(this)"
/>
<rect 
        id="GGP" 
        class="sala" 
        x="440"
        y="238"
        width="70"
        height="31"
        onclick="darZoom(this); carregarInfoSala(this)"
/>
<rect 
        id="DAP" 
        class="sala" 
        x="440"
        y="198"
        width="70"
        height="40"
        onclick="darZoom(this); carregarInfoSala(this)"
/>
<rect 
        id="CGTI1" 
        class="sala" 
        x="440"
        y="168"
        width="70"
        height="31"
        onclick="darZoom(this); carregarInfoSala(this)"
/>
<rect 
        id="CGTI2" 
        class="sala" 
        x="440"
        y="138"
        width="70"
        height="31"
        onclick="darZoom(this); carregarInfoSala(this)"
/>
<rect 
        id="CGTI3" 
        class="sala" 
        x="440"
        y="108"
        width="70"
        height="31"
        onclick="darZoom(this); carregarInfoSala(this)"
/>
<rect 
        id="Arquivo Morto" 
        class="sala" 
        x="440"
        y="62"
        width="70"
        height="45"
        onclick="darZoom(this); carregarInfoSala(this)"
/>

    </svg>

    <!-- Painel Lateral Simples -->
    <div id="painel">
      <h2 id="nomeSala">Clique na sala</h2>
      <br>
      <button onclick="resetarZoom()">Visão Geral</button>

      <!-- Div única para o painel de informações -->
      <div id="information_painel"></div>
    </div>
  </div>

    
</div>
  </div>
  
  <script src="animation.js"></script>
   <div id="information_painel">
    <?php
      include "database_query.php";
    ?>
  </div>
</body>
</html>
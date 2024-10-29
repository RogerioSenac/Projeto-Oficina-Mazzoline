<?php
include("../Projeto-Oficina-Mazzoline/includes/header.php")
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina Mazzoline</title>
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <link rel="shortcut icon" href="" type="image/png">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
</head>

<body>
    <section class="container-video-apresenta">
        <h1>Oficina Mazzoline, sinonimo de Qualidade!</h1>
        <article class="apresenta">
            <video id="meuVideo" width="640" height="460" controls autoplay muted>
                <source src="./assets/video/video_01.mp4" type="video/mp4">
                Seu navegador não suporta o elemento de vídeo.
            </video>
        </article>
    </section>

    <section class="container-servico">
        <article class="servico">
            <p class="servico-texto">
                Aqui você encotra os melhores serviços.<br>
                Saiba Mais.
            </p>
            <div class="row botoes-servico">
                <div class="col-3">
                    <img src="./Assets/img/foto_especializada.jpeg" class="servico-imagem" onclick="mostrarTexto('Manutenção preventiva e revisão de todos os itens de uso constante, como o sistema de arrefecimento, que é importante para evitar o superaquecimento do motor')" alt="Manutenção_Preventiva">
                </div>
                <div class="col-3">
                    <img src="./Assets/img/oleo.jpg" class="servico-imagem" onclick="mostrarTexto('Trocar o óleo regularmente ajuda a garantir que as partes móveis do motor sejam lubrificadas adequadamente, o que prolonga a vida útil dele e também ajuda a remover impurezas e resíduos que se acumulam no motor.')" alt="Troca_Oleo">
                </div>
                <div class="col-3">
                    <img src="./Assets/img/freio.jpg" class="servico-imagem" onclick="mostrarTexto('A manutenção preventiva dos freios ajuda a prolongar a vida útil dos componentes do sistema. Substituir as pastilhas de freio desgastadas antes que elas se desgastem completamente, por exemplo, pode evitar danos aos discos de freio.')" alt="Freio">
                </div>
                <div class="col-3">
                    <img src="./Assets/img/suspenção.jpg" class="servico-imagem" onclick="mostrarTexto('Um sistema de suspensão desgastado ou danificado pode comprometer a dirigibilidade, aumentar a distância de frenagem, causar desgaste irregular dos pneus e afetar a estabilidade em curvas, colocando em risco a segurança dos ocupantes e de outros usuários da via.')" alt="Suspensao">
                </div>
                <!-- <div class="col-4">
                    <img src="./Assets/imagem/natacao_geral.jpg" class="servico-imagem" onclick="mostrarTexto('Natação Geral')" alt="Natação Geral">
                </div>
                <div class="col-4">
                    <img src="./Assets/imagem/avaliacao_fisica.jpg" class="servico-imagem" onclick="mostrarTexto('Avaliação Física')" alt="Avaliação Física">
                </div> -->
            </div>

            <div id="texto-explativo" class="texto-zoom" style="display:none;">
                <span id="texto"></span>
                <button onclick="fecharTexto()">Fechar</button>
            </div>

            <p class="servico-texto">
                Venha nos visitar e fazer uma avaliação sem custo!
            </p>
        </article>
    </section>

    <section id="mapa" class="d-flex flex-column align-items-center">
        <div class="content text-center">
            <h4>Encontre-nos no Mapa</h4>
            <div id="map" style="height: 350px; width: 100%;"></div>
            <div class="card bg-transparent">
                <div class="card-mapa">
                    <button id="tracarRota" class="btn btn-dark">Traçar Rota</button>
                </div>
            </div>
        </div> <!-- Fechamento da div content -->
    </section>

    <?php
    include("./includes/footer.php")
    ?>


    <script>
        document.getElementById('meuVideo').addEventListener('ended', function() {
            window.location.href = 'index.php';
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const links = document.querySelectorAll('a[href^="#"]');
            links.forEach(link => {
                link.addEventListener('click', (event) => {
                    event.preventDefault();
                    const target = document.querySelector(link.getAttribute('href'));
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>

    <script>
        function mostrarTexto(servico) {
            document.getElementById('texto').innerText = 'Informação : ' + servico;
            document.getElementById('texto-explativo').style.display = 'block';
        }

        function fecharTexto() {
            document.getElementById('texto-explativo').style.display = 'none';
        }
    </script>


    <!-- Leaflet.js (Mapas) -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([-24.722824671393322, -48.10356176470575], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-24.722824671393322, -48.10356176470575]).addTo(map)
            .bindPopup('Mecanica Mazzoline - Cajati <br>Rua Pernambuco, 185 - Jardim Central, Cajati - SP')
            .openPopup();

        document.getElementById('tracarRota').addEventListener('click', function() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var lat = position.coords.latitude;
                    var lon = position.coords.longitude;
                    var destination = "-24.722824671393322, -48.10356176470575";
                    var url =
                        `https://www.google.com/maps/dir/?api=1&origin=${lat},${lon}&destination=${destination}&travelmode=driving`;
                    window.open(url, '_blank');
                }, function() {
                    alert(
                        "Não foi possível acessar a localização. Verifique suas permissões de geolocalização.");
                });
            } else {
                alert("Geolocalização não é suportada pelo seu navegador.");
            }
        });
    </script>
</body>

</html>
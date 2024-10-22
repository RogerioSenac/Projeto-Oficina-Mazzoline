<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina Mazzoline</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <header>
        <div class="container-logo">
            <img src="./assets/img/logo_oficina-black-removebg-preview.png" alt="logo_oficina-black">
            <h1 class="escrita_logo">Oficina Mecanica Mazzoline</h1>
        </div>
        <nav>
            <a href="#">Início</a>
            <a href="#">Sobre nós</a>
            <a href="#">Serviços</a>
            <a href="https://www.facebook.com/mecanicamazzoline/photos_by" target="_blank">Galeria</a>
        </nav>
    </header>

    <section class="container-video-apresenta">
        <article class="apresenta">
            <h1>Prazer, somos a Mecânica Mazzoline!</h1>
            <video id="meuVideo" width="240" height="260" controls autoplay muted>
                <source src="./assets/video/video_01.mp4" type="video/mp4">
                Seu navegador não suporta o elemento de vídeo.
            </video>
        </article>
    </section>

    <section id=servico>
        <div class="social">
            <img src="./assets/img/foto_1.jpg" alt="foto_1">
        </div>
        <div class="social">
            <img src="./assets/img/foto_2.jpg" alt="foto_2">
        </div>
        <div class="social">
            <img src="./assets/img/foto_3.jpg" alt="foto_3">
        </div>
        <div class="social">
            <img src="./assets/img/selo_garantia.jpeg" alt="foto_3">
        </div>
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


    <script>
        document.getElementById('meuVideo').addEventListener('ended', function () {
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

    <!-- Leaflet.js (Mapas) -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([-24.722822235031202, -48.10355908249671], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-24.722822235031202, -48.10355908249671]).addTo(map)
            .bindPopup('Mecanica Mazzoline<br>Rua Pernambuco, 158 - Jardim Central, Cajati - SP')
            .openPopup();

        document.getElementById('tracarRota').addEventListener('click', function () {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var lat = position.coords.latitude;
                    var lon = position.coords.longitude;
                    var destination = "-24.722822235031202, -48.10355908249671";
                    var url =
                        `https://www.google.com/maps/dir/?api=1&origin=${lat},${lon}&destination=${destination}&travelmode=driving`;
                    window.open(url, '_blank');
                }, function () {
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
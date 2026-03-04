<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eduardo Verastegui Lazarte Abogados & Asociados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <meta name="description" content="Firma jurídica especializada en Derecho Civil, Penal, Laboral y Corporativo en Huánuco - Perú.">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<!-- ================= HEADER ================= -->
<header class="header">
    <div class="container header-container">
        <div class="logo">
            <h1>EDUARDO VERASTEGUI LAZARTE</h1>
            <span>ABOGADOS & ASOCIADOS</span>
        </div>

        <nav class="nav">
            <a href="#inicio">Inicio</a>
            <a href="#nosotros">Firma</a>
            <a href="#servicios">Servicios</a>
            <a href="#equipo">Equipo</a>
            <a href="#contacto">Contacto</a>
        </nav>
    </div>
</header>

<!-- ================= HERO ================= -->
<section id="inicio" class="hero">
    <div class="overlay"></div>
    <div class="hero-content">
        <h2>Excelencia Jurídica con Compromiso y Ética</h2>
        <p>Protegemos sus derechos con asesoría estratégica y resultados sólidos.</p>
        <a href="#contacto" class="btn-primary">Solicitar Consulta</a>
    </div>
</section>

<!-- ================= ESTADÍSTICAS ================= -->
<section class="stats">
    <div class="container stats-grid">
        <div class="stat">
            <i class="fas fa-briefcase"></i>
            <h3>+250</h3>
            <p>Casos Atendidos</p>
        </div>

        <div class="stat">
            <i class="fas fa-scale-balanced"></i>
            <h3>+15 Años</h3>
            <p>Experiencia Profesional</p>
        </div>

        <div class="stat">
            <i class="fas fa-chart-line"></i>
            <h3>95%</h3>
            <p>Casos Exitosos</p>
        </div>
    </div>
</section>

<!-- ================= NOSOTROS ================= -->
<section id="nosotros" class="section">
    <div class="container">
        <h2>Nuestra Firma</h2>
        <p>
            Eduardo Verastegui Lazarte Abogados & Asociados es una firma jurídica 
            comprometida con la defensa integral de los derechos de nuestros clientes. 
            Actuamos con ética, confidencialidad y excelencia profesional.
        </p>
    </div>
</section>

<!-- ================= SERVICIOS ================= -->
<section id="servicios" class="section bg-light">
    <div class="container">
        <h2>Áreas de Asesoramiento</h2>

        <div class="cards">
            <div class="card">
                <i class="fas fa-gavel"></i>
                <h3>Derecho Civil</h3>
                <p>Contratos, sucesiones, obligaciones y litigios civiles.</p>
            </div>

            <div class="card">
                <i class="fas fa-user-shield"></i>
                <h3>Derecho Penal</h3>
                <p>Defensa especializada en procesos penales complejos.</p>
            </div>

            <div class="card">
                <i class="fas fa-building"></i>
                <h3>Derecho Laboral</h3>
                <p>Representación en conflictos laborales y asesoría preventiva.</p>
            </div>

            <div class="card">
                <i class="fas fa-handshake"></i>
                <h3>Asesoría Corporativa</h3>
                <p>Consultoría legal estratégica para empresas.</p>
            </div>
        </div>
    </div>
</section>

<!-- ================= POR QUÉ ELEGIRNOS ================= -->
<section class="section">
    <div class="container">
        <h2>¿Por Qué Elegirnos?</h2>

        <div class="cards">
            <div class="card">
                <h3>Confidencialidad Absoluta</h3>
                <p>Manejamos cada caso con estricta reserva profesional.</p>
            </div>

            <div class="card">
                <h3>Atención Personalizada</h3>
                <p>Soluciones jurídicas adaptadas a cada cliente.</p>
            </div>

            <div class="card">
                <h3>Compromiso Total</h3>
                <p>Defendemos sus intereses con responsabilidad y estrategia.</p>
            </div>
        </div>
    </div>
</section>

<!-- ================= EQUIPO ================= -->
<section id="equipo" class="section bg-light">
    <div class="container">
        <h2>Nuestro Equipo</h2>

        <div class="team-grid">
            <div class="team-card">
                <h3>Dr. Eduardo Verastegui Lazarte</h3>
                <p>Socio Fundador – Especialista en Derecho Civil y Penal.</p>
            </div>

            <div class="team-card">
                <h3>Abogado Asociado</h3>
                <p>Especialista en Derecho Laboral y Corporativo.</p>
            </div>
        </div>
    </div>
</section>

<!-- ================= CTA ================= -->
<section class="cta">
    <div class="container">
        <h2>¿Necesita asesoría legal inmediata?</h2>
        <p>Estamos preparados para atender su caso con profesionalismo.</p>
        <a href="#contacto" class="btn-primary">Contáctenos Hoy</a>
    </div>
</section>

<!-- ================= CONTACTO ================= -->
<section id="contacto" class="section">
    <div class="container contacto-grid">
        
        <div class="contact-info">
            <h2>Contáctenos</h2>
            <p><i class="fas fa-phone"></i> +51 963 694 971</p>
            <p><i class="fas fa-envelope"></i> evlabogados.sac@gmail.com</p>
            <p><i class="fas fa-location-dot"></i> Jr. Pedro Puelles 507 - Huánuco - Perú</p>
        </div>

        <form action="guardar_contacto.php" method="POST" class="form">
            <input type="text" name="nombre" placeholder="Nombre completo" required>
            <input type="email" name="correo" placeholder="Correo electrónico" required>
            <input type="text" name="telefono" placeholder="Teléfono">
            <textarea name="mensaje" placeholder="Escriba su consulta..." required></textarea>
            <button type="submit">Enviar Mensaje</button>
        </form>

    </div>
</section>

<!-- ================= WHATSAPP FLOAT ================= -->
<a href="https://wa.me/51963694971" class="whatsapp" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<!-- ================= FOOTER ================= -->
<footer class="footer">
    <div class="container footer-content">
        <div>
            <h3>Eduardo Verastegui Lazarte</h3>
            <p>Abogados & Asociados</p>
        </div>

        <div>
            <p>Huánuco - Perú</p>
            <p>© 2026 Todos los derechos reservados</p>
        </div>
    </div>
</footer>

</body>
</html>
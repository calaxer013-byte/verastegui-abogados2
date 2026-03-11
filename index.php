```php
<?php
// archivo principal del sitio
?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<title>Eduardo Verastegui Lazarte Abogados & Asociados</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="Firma jurídica especializada en Derecho Civil, Penal, Laboral y Corporativo en Huánuco - Perú.">

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

/* ===== GENERAL ===== */

*{
margin:0;
padding:0;
box-sizing:border-box;
scroll-behavior:smooth;
}

body{
font-family:'Poppins',sans-serif;
background:#f4f6f9;
color:#1a1a1a;
}

.container{
width:90%;
max-width:1200px;
margin:auto;
}

/* ===== HEADER ===== */

.header{
position:fixed;
width:100%;
top:0;
background:#0d1b2a;
color:white;
display:flex;
justify-content:center;
z-index:1000;
box-shadow:0 5px 20px rgba(0,0,0,0.3);
}

.header-container{
display:flex;
justify-content:space-between;
align-items:center;
padding:15px 0;
width:90%;
max-width:1200px;
}

.logo h1{
font-family:'Playfair Display',serif;
font-size:20px;
letter-spacing:2px;
}

.logo span{
font-size:12px;
color:#d4af37;
}

.nav a{
color:white;
margin-left:20px;
text-decoration:none;
font-weight:500;
transition:.3s;
}

.nav a:hover{
color:#d4af37;
}

/* ===== HERO ===== */

.hero{
height:90vh;
background:
linear-gradient(rgba(10,20,35,.85),rgba(10,20,35,.9)),
url("https://images.unsplash.com/photo-1589391886645-d51941baf7fb");
background-size:cover;
background-position:center;
display:flex;
align-items:center;
justify-content:center;
text-align:center;
color:white;
margin-top:70px;
}

.hero-content{
max-width:700px;
}

.hero h2{
font-family:'Playfair Display',serif;
font-size:42px;
margin-bottom:10px;
}

.hero p{
font-size:18px;
}

.btn-primary{
display:inline-block;
margin-top:20px;
background:#d4af37;
padding:13px 30px;
color:#0d1b2a;
text-decoration:none;
font-weight:600;
border-radius:6px;
}

/* ===== SECCIONES ===== */

.section{
padding:90px 0;
text-align:center;
}

.bg-light{
background:white;
}

/* ===== CARDS ===== */

.cards{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:30px;
margin-top:40px;
}

.card{
background:white;
padding:35px;
border-radius:10px;
box-shadow:0 10px 25px rgba(0,0,0,0.1);
transition:.3s;
}

.card i{
font-size:35px;
color:#d4af37;
margin-bottom:10px;
}

.card:hover{
transform:translateY(-8px);
}

/* ===== STATS ===== */

.stats{
background:#0d1b2a;
color:white;
padding:70px 0;
}

.stats-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
gap:30px;
text-align:center;
}

.stats i{
font-size:40px;
color:#d4af37;
margin-bottom:10px;
}

/* ===== TEAM ===== */

.team-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:25px;
margin-top:40px;
}

.team-card{
background:white;
padding:30px;
border-radius:8px;
box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

/* ===== CONTACTO ===== */

.contacto-grid{
display:grid;
grid-template-columns:1fr 1fr;
gap:40px;
}

.form input,
.form textarea{
width:100%;
padding:12px;
margin-bottom:15px;
border:1px solid #ccc;
border-radius:5px;
}

.form button{
background:#0d1b2a;
color:white;
border:none;
padding:12px;
width:100%;
cursor:pointer;
}

/* ===== FOOTER ===== */

.footer{
background:#0d1b2a;
color:white;
padding:30px;
text-align:center;
}

/* ===== WHATSAPP ===== */

.whatsapp-btn{
position:fixed;
bottom:25px;
right:25px;
width:60px;
height:60px;
background:#25D366;
color:white;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
font-size:30px;
box-shadow:0 8px 25px rgba(0,0,0,0.25);
animation:pulse 2s infinite;
}

@keyframes pulse{
0%{box-shadow:0 0 0 0 rgba(37,211,102,.7);}
70%{box-shadow:0 0 0 15px rgba(37,211,102,0);}
100%{box-shadow:0 0 0 0 rgba(37,211,102,0);}
}

@media(max-width:768px){

.contacto-grid{
grid-template-columns:1fr;
}

.hero h2{
font-size:28px;
}

}

</style>

</head>

<body>

<header class="header">

<div class="header-container">

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


<section id="inicio" class="hero">

<div class="hero-content">

<h2>Excelencia Jurídica con Compromiso y Ética</h2>

<p>Protegemos sus derechos con asesoría estratégica y resultados sólidos.</p>

<a href="#contacto" class="btn-primary">Solicitar Consulta</a>

</div>

</section>


<section class="stats">

<div class="container stats-grid">

<div>
<i class="fas fa-briefcase"></i>
<h3>+250</h3>
<p>Casos Atendidos</p>
</div>

<div>
<i class="fas fa-scale-balanced"></i>
<h3>+15 Años</h3>
<p>Experiencia Profesional</p>
</div>

<div>
<i class="fas fa-chart-line"></i>
<h3>95%</h3>
<p>Casos Exitosos</p>
</div>

</div>

</section>


<section id="servicios" class="section bg-light">

<div class="container">

<h2>Áreas de Asesoramiento</h2>

<div class="cards">

<div class="card">
<i class="fas fa-gavel"></i>
<h3>Derecho Civil</h3>
<p>Contratos, sucesiones y litigios civiles.</p>
</div>

<div class="card">
<i class="fas fa-user-shield"></i>
<h3>Derecho Penal</h3>
<p>Defensa especializada en procesos penales.</p>
</div>

<div class="card">
<i class="fas fa-building"></i>
<h3>Derecho Laboral</h3>
<p>Conflictos laborales y asesoría preventiva.</p>
</div>

<div class="card">
<i class="fas fa-handshake"></i>
<h3>Asesoría Corporativa</h3>
<p>Consultoría legal estratégica para empresas.</p>
</div>

</div>

</div>

</section>


<section id="contacto" class="section">

<div class="container contacto-grid">

<div>

<h2>Contáctenos</h2>

<p><i class="fas fa-phone"></i> +51 963 694 971</p>

<p><i class="fas fa-envelope"></i> evlabogados.sac@gmail.com</p>

<p><i class="fas fa-location-dot"></i> Jr. Pedro Puelles 507 - Huánuco</p>

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


<a href="https://wa.me/51963694971" class="whatsapp-btn" target="_blank">
<i class="fab fa-whatsapp"></i>
</a>


<footer class="footer">

<h3>Eduardo Verastegui Lazarte</h3>

<p>Abogados & Asociados</p>

<p>Huánuco - Perú</p>

<p>© 2026 Todos los derechos reservados</p>

</footer>

</body>

</html>
```

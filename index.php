<?php
// Página principal del estudio jurídico
?>
<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Eduardo Verastegui Lazarte | Abogados & Asociados</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
background:#f4f6f9;
color:#333;
}

/* HEADER */

header{
background:#0d1b2a;
color:white;
padding:15px 40px;
position:fixed;
width:100%;
top:0;
z-index:1000;
}

nav{
display:flex;
justify-content:space-between;
align-items:center;
flex-wrap:wrap;
}

nav h2{
color:#d4af37;
}

nav a{
color:white;
margin-left:20px;
text-decoration:none;
font-size:15px;
}

/* HERO */

.hero{
height:90vh;
background:linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,.7)),
url("https://images.unsplash.com/photo-1589829545856-d10d557cf95f");
background-size:cover;
background-position:center;
display:flex;
align-items:center;
justify-content:center;
text-align:center;
color:white;
padding:20px;
}

.hero h1{
font-size:45px;
margin-bottom:10px;
}

.hero p{
font-size:20px;
}

/* ESTADISTICAS */

.estadisticas{
display:flex;
justify-content:space-around;
text-align:center;
padding:60px 10%;
background:#0d1b2a;
color:white;
}

.estadisticas h3{
font-size:36px;
color:#d4af37;
}

/* SECCIONES */

section{
padding:80px 10%;
}

h2{
text-align:center;
margin-bottom:40px;
color:#0d1b2a;
}

/* SERVICIOS */

.servicios{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:30px;
}

.card{
background:white;
padding:25px;
border-radius:8px;
box-shadow:0 5px 15px rgba(0,0,0,0.1);
transition:0.3s;
}

.card:hover{
transform:translateY(-5px);
}

.card i{
font-size:30px;
color:#d4af37;
margin-bottom:10px;
}

/* PROCESO */

.proceso{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:30px;
}

.paso{
background:white;
padding:20px;
border-left:5px solid #d4af37;
box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

/* CASOS */

.casos{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:30px;
}

.caso{
background:white;
padding:25px;
border-radius:8px;
box-shadow:0 5px 15px rgba(0,0,0,0.1);
border-top:4px solid #d4af37;
}

/* TESTIMONIOS */

.testimonio{
background:white;
padding:25px;
border-radius:8px;
box-shadow:0 5px 15px rgba(0,0,0,0.1);
font-style:italic;
}

/* CONTACTO */

.contacto{
display:grid;
grid-template-columns:1fr 1fr;
gap:40px;
}

form input,form textarea{
width:100%;
padding:12px;
margin-bottom:12px;
border:1px solid #ccc;
border-radius:6px;
font-size:14px;
}

button{
background:#0d1b2a;
color:white;
border:none;
padding:12px;
width:100%;
cursor:pointer;
border-radius:6px;
transition:0.3s;
}

button:hover{
background:#1b2f47;
}

/* MAPA */

iframe{
width:100%;
height:300px;
border:0;
border-radius:10px;
}

/* FOOTER */

footer{
background:#0d1b2a;
color:white;
text-align:center;
padding:20px;
margin-top:40px;
}

/* WHATSAPP */

.whatsapp{
position:fixed;
bottom:20px;
right:20px;
background:#25D366;
color:white;
width:60px;
height:60px;
display:flex;
justify-content:center;
align-items:center;
border-radius:50%;
font-size:28px;
box-shadow:0 5px 20px rgba(0,0,0,0.3);
z-index:1000;
}

/* RESPONSIVE */

@media(max-width:900px){
.contacto{
grid-template-columns:1fr;
}
}

@media(max-width:768px){

nav{
flex-direction:column;
align-items:flex-start;
}

nav div{
margin-top:10px;
}

nav a{
margin-left:0;
margin-right:15px;
}

.hero h1{
font-size:32px;
}

.hero p{
font-size:18px;
}

section{
padding:70px 6%;
}

}

</style>

</head>

<body>

<header>

<nav>

<h2>EVL Abogados</h2>

<div>
<a href="#inicio">Inicio</a>
<a href="#servicios">Servicios</a>
<a href="#casos">Casos</a>
<a href="#contacto">Contacto</a>
</div>

</nav>

</header>

<!-- HERO -->

<section class="hero" id="inicio">

<div>

<h1>Eduardo Verastegui Lazarte</h1>
<p>Abogados & Asociados</p>
<p>Defensa jurídica profesional y estratégica</p>

</div>

</section>

<!-- ESTADISTICAS -->

<section class="estadisticas">

<div>
<h3 class="contador">250</h3>
<p>Casos Atendidos</p>
</div>

<div>
<h3 class="contador">95</h3>
<p>% Casos Exitosos</p>
</div>

<div>
<h3 class="contador">15</h3>
<p>Años de Experiencia</p>
</div>

</section>

<!-- SERVICIOS -->

<section id="servicios">

<h2>Servicios Jurídicos</h2>

<div class="servicios">

<div class="card">
<i class="fas fa-scale-balanced"></i>
<h3>Derecho Civil</h3>
<p>Contratos, sucesiones, propiedad y conflictos civiles.</p>
</div>

<div class="card">
<i class="fas fa-gavel"></i>
<h3>Derecho Penal</h3>
<p>Defensa penal especializada en procesos judiciales.</p>
</div>

<div class="card">
<i class="fas fa-briefcase"></i>
<h3>Derecho Laboral</h3>
<p>Defensa en despidos y conflictos laborales.</p>
</div>

<div class="card">
<i class="fas fa-building"></i>
<h3>Asesoría Empresarial</h3>
<p>Consultoría jurídica preventiva empresarial.</p>
</div>

</div>

</section>

<!-- CASOS -->

<section id="casos">

<h2>Casos de Éxito</h2>

<div class="casos">

<div class="caso">
<h3>Indemnización laboral ganada</h3>
<p>Se obtuvo pago completo de beneficios sociales para el trabajador.</p>
</div>

<div class="caso">
<h3>Archivo de investigación penal</h3>
<p>Se logró archivo fiscal por falta de pruebas.</p>
</div>

<div class="caso">
<h3>Conflicto de propiedad resuelto</h3>
<p>Sentencia favorable en proceso civil inmobiliario.</p>
</div>

</div>

</section>

<!-- TESTIMONIOS -->

<section>

<h2>Testimonios</h2>

<div class="casos">

<div class="testimonio">
“Excelente defensa legal durante todo el proceso.”
</div>

<div class="testimonio">
“Asesoría jurídica clara y profesional.”
</div>

</div>

</section>

<!-- CONTACTO -->

<section id="contacto">

<h2>Contacto</h2>

<div class="contacto">

<div>

<p><i class="fas fa-phone"></i> +51 963 694 971</p>
<p><i class="fas fa-envelope"></i> evlabogados.sac@gmail.com</p>
<p><i class="fas fa-location-dot"></i> Jr. Pedro Puelles 507 - Huánuco</p>

<br>

<iframe src="https://www.google.com/maps?q=Jr.%20Pedro%20Puelles%20507%20Huanuco&output=embed"></iframe>

</div>

<form action="guardar_contacto.php" method="POST">

<input type="text" name="nombre" placeholder="Nombre completo" required>
<input type="email" name="correo" placeholder="Correo electrónico" required>
<input type="text" name="telefono" placeholder="Teléfono">
<textarea name="mensaje" placeholder="Consulta..." required></textarea>

<button type="submit">Enviar Mensaje</button>

</form>

</div>

</section>

<a class="whatsapp" href="https://wa.me/51963694971">
<i class="fab fa-whatsapp"></i>
</a>

<footer>
<p>© 2026 Eduardo Verastegui Lazarte - Abogados & Asociados</p>
</footer>

<script>

/* contador animado */

const counters=document.querySelectorAll(".contador");

counters.forEach(counter=>{
counter.innerText='0';

const updateCounter=()=>{
const target=+counter.getAttribute("data-target")||counter.innerText;
const c=+counter.innerText;

const increment=target/100;

if(c<target){
counter.innerText=`${Math.ceil(c+increment)}`;
setTimeout(updateCounter,30);
}else{
counter.innerText=target;
}
};

updateCounter();
});

</script>

</body>
</html>

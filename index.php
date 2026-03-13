<?php
$mensaje_exito = false;
if(isset($_GET['success'])){
    $mensaje_exito = true;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Eduardo Verastegui Lazarte | Abogados & Asociados</title>

<meta name="description" content="Estudio jurídico Eduardo Verastegui Lazarte especializado en derecho penal, civil y laboral en Huánuco. Defensa legal profesional.">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}

body{
background:#f4f6f9;
color:#333;
}

/* LOADER */

#loader{
position:fixed;
width:100%;
height:100%;
background:white;
display:flex;
align-items:center;
justify-content:center;
z-index:9999;
}

.spinner{
width:50px;
height:50px;
border:5px solid #eee;
border-top:5px solid #d4af37;
border-radius:50%;
animation:spin 1s linear infinite;
}

@keyframes spin{
0%{transform:rotate(0)}
100%{transform:rotate(360deg)}
}

/* TOPBAR */

.topbar{
background:#08121c;
color:white;
padding:6px 40px;
display:flex;
justify-content:space-between;
font-size:13px;
}

/* HEADER */

header{
background:#0d1b2a;
color:white;
padding:15px 40px;
position:fixed;
width:100%;
top:30px;
z-index:1000;
}

nav{
display:flex;
justify-content:space-between;
align-items:center;
}

nav h2{
color:#d4af37;
}

nav a{
color:white;
margin-left:20px;
text-decoration:none;
}

/* MENU MOVIL */

#menu-btn{
display:none;
font-size:22px;
cursor:pointer;
}

/* HERO */

.hero{
height:90vh;
background:linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,.7)),
url("https://images.unsplash.com/photo-1589829545856-d10d557cf95f");
background-size:cover;
display:flex;
align-items:center;
justify-content:center;
text-align:center;
color:white;
padding:20px;
}

.hero h1{font-size:45px;margin-bottom:10px;}

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

/* STATS */

.stats{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
gap:30px;
text-align:center;
}

.stat{
background:white;
padding:30px;
border-radius:8px;
box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

.stat h3{
font-size:35px;
color:#d4af37;
}

/* PROCESO */

.proceso{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:30px;
}

.paso{
background:white;
padding:25px;
border-left:5px solid #d4af37;
box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

/* TESTIMONIOS */

.testimonios{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:30px;
}

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
}

button{
background:#0d1b2a;
color:white;
border:none;
padding:12px;
width:100%;
border-radius:6px;
cursor:pointer;
}

button:hover{
background:#1b2f47;
}

iframe{
width:100%;
height:300px;
border:0;
border-radius:10px;
}

.alert{
background:#28a745;
color:white;
padding:15px;
text-align:center;
margin-top:100px;
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
}

/* MOBILE */

@media(max-width:900px){

.contacto{
grid-template-columns:1fr;
}

#menu{
display:none;
flex-direction:column;
background:#0d1b2a;
position:absolute;
right:20px;
top:70px;
padding:20px;
border-radius:8px;
}

#menu a{
margin:10px 0;
display:block;
}

#menu-btn{
display:block;
}

}

</style>

</head>

<body>

<div id="loader">
<div class="spinner"></div>
</div>

<div class="topbar">
<span><i class="fas fa-phone"></i> +51 963 694 971</span>
<span><i class="fas fa-envelope"></i> evlabogados.sac@gmail.com</span>
</div>

<?php if($mensaje_exito): ?>
<div class="alert">Mensaje enviado correctamente. Nos comunicaremos con usted.</div>
<?php endif; ?>

<header>

<nav>

<h2>EVL Abogados</h2>

<i class="fas fa-bars" id="menu-btn"></i>

<div id="menu">
<a href="#inicio">Inicio</a>
<a href="#sobre">Abogado</a>
<a href="#especialidades">Especialidades</a>
<a href="#proceso">Proceso</a>
<a href="#contacto">Contacto</a>
</div>

</nav>

</header>

<section class="hero" id="inicio">

<div>
<h1>Eduardo Verastegui Lazarte</h1>
<p>Abogados & Asociados</p>
<p>Defensa jurídica profesional y estratégica</p>
</div>

</section>

<section id="sobre">

<h2>Sobre el Abogado</h2>

<p style="text-align:center;max-width:900px;margin:auto;line-height:1.8;">
El Dr. Eduardo Verastegui Lazarte es abogado con sólida experiencia en litigación y asesoría legal.
</p>

</section>

<section>

<h2>Nuestros Resultados</h2>

<div class="stats">

<div class="stat">
<h3 class="contador" data-target="300">0</h3>
<p>Casos atendidos</p>
</div>

<div class="stat">
<h3 class="contador" data-target="92">0</h3>
<p>Resultados favorables</p>
</div>

<div class="stat">
<h3 class="contador" data-target="15">0</h3>
<p>Años de experiencia</p>
</div>

<div class="stat">
<h3 class="contador" data-target="200">0</h3>
<p>Clientes asesorados</p>
</div>

</div>

</section>

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
<textarea name="mensaje" placeholder="Escriba su consulta..." required></textarea>

<button type="submit">Enviar Mensaje</button>

</form>

</div>

</section>

<a class="whatsapp" href="https://wa.me/51963694971?text=Hola%20deseo%20realizar%20una%20consulta%20legal">
<i class="fab fa-whatsapp"></i>
</a>

<footer>
<p>© 2026 Eduardo Verastegui Lazarte - Abogados & Asociados</p>
</footer>

<script>

/* LOADER */

window.addEventListener("load",()=>{
document.getElementById("loader").style.display="none";
});

/* MENU MOVIL */

const menuBtn=document.getElementById("menu-btn");
const menu=document.getElementById("menu");

menuBtn.onclick=()=>{
menu.style.display=menu.style.display==="flex"?"none":"flex";
};

/* CONTADORES */

const counters=document.querySelectorAll(".contador");

counters.forEach(counter=>{

const update=()=>{

const target=+counter.getAttribute("data-target");
const current=+counter.innerText;

const increment=target/100;

if(current<target){

counter.innerText=Math.ceil(current+increment);
setTimeout(update,20);

}else{

counter.innerText=target+"+";

}

};

update();

});

/* ANIMACIONES SCROLL */

const observer=new IntersectionObserver(entries=>{
entries.forEach(entry=>{
if(entry.isIntersecting){
entry.target.style.opacity=1;
entry.target.style.transform="translateY(0)";
}
});
});

document.querySelectorAll("section,.card,.stat,.paso,.testimonio").forEach(el=>{
el.style.opacity=0;
el.style.transform="translateY(40px)";
el.style.transition="all .8s ease";
observer.observe(el);
});

</script>

</body>
</html>

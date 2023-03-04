
$(document).ready(function() {
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll('a');
    const menuLength = menuItem.length
    for (let i = 0; i < menuLength; i++) {
        if (menuItem[i].href === currentLocation) {
            menuItem[i].className = 'active'
        }
    }
    InsertarImagenes('logo-cadbury.svg','Yahoo-logo-2019.svg');
    
});

var contador  = 0;
 




function InsertarImagenes(img1,img2){
    var Img1 =document.getElementById('Img1');
    var Img2 =document.getElementById('Img2');
    Img1.innerHTML = "<img src='Img/"+img1+"' width='40%' ></img>";
    Img2.innerHTML = "<img src='Img/"+img2+"' width='40%'></img>";
}


function llamaNombres(nombre,id){
    var idColumna = document.getElementById(id);
    let Titulos = document.getElementById('TituloTextos').textContent;
         
    document.getElementById('TituloTextos').innerHTML = Titulos +" - " + nombre;
}

function Salir(nombre,id){
    if (confirm("¿Desea salir de aqui?")) {
        window.location.href = 'Salida.php'
      } else {
        window.location.href = 'index.php'
      }
}

function Mas(){
    contador = contador + 1;
    if(contador === 4 || contador == 4){
        alert('No Abuses 7-7');
        document.getElementById('BtonMas').innerText = 'No hay mas contenidos';
        document.getElementById('BtonMas').setAttribute("class" , "btn btn-danger")
    }else{
        let contenidos = document.getElementById('Contenidos').textContent;
        var Loremadd = '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor, omnis. Vel asperiores, fugiat est saepe tempora consequatur ratione suscipit laboriosam deleniti accusantium voluptates mollitia, non magnam autem dolorum illum excepturi?</p>    <br>';         
        document.getElementById('Contenidos').innerHTML = contenidos +" - " + Loremadd ;
    
    
    }
    
}


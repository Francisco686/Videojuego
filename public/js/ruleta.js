let angulo = 0;
const numSectores = 4;
const anguloPorSector = 360 / numSectores;

function girarRuleta() {
    const rotacionExtra = Math.floor(Math.random() * 360 + 720);
    angulo += rotacionExtra;
    document.getElementById("ruleta").style.transform = `rotate(${angulo}deg)`;

    setTimeout(() => {
        const anguloFinal = angulo % 360;
        const sectorSeleccionado = Math.floor((360 - anguloFinal) / anguloPorSector) % numSectores;
        mostrarInformacionPlaneta(sectorSeleccionado + 1); 
    }, 2000); 
}

function mostrarInformacionPlaneta(id) {
    fetch(`/planeta/${id}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById("nombrePlaneta").textContent = data.nombre;
            document.getElementById("imagenPlaneta").src = `http://localhost:8000/storage/planetas/venus.jpg`; 
            document.getElementById("descripcionPlaneta").textContent = data.descripcion;
            document.getElementById("ventanaEmergente").style.display = "block";
        })
        .catch(error => console.error('Error:', error));
}


function cerrarVentana() {
    document.getElementById("ventanaEmergente").style.display = "none";
}

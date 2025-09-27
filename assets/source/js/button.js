const toggleSidebar = () =>{
  const sidebar = document.getElementById("side-bar");
  sidebar.classList.toggle("active");
}  

const getTeamId=() =>{
    let teamName = document.getElementById('btnUsa');
    alert("El equipo seleccionado es: " + teamName.id);
}
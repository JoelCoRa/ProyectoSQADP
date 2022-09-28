

document.addEventListener('DOMContentLoaded',function(){
    darkMode();
})

function darkMode(){

    const preferenciaModoVista = window.matchMedia('(prefers-color-scheme: dark)');

    
    

    // console.log(preferenciaModoVista.matches);

    if(preferenciaModoVista.matches){
        document.body.classList.add('dark-mode');
    }else{
        document.body.classList.remove('dropdown-menu-dark');

    }
    const boton = document.querySelector('.btn-dark-mode');


    

    boton.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');  
        // document.body.classList.toggle('dark-mode');  
    });
}
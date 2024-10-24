var btn = document.querySelector('.btnLoading');
var btnlbl = btn.textContent;

btn.addEventListener('click', function(e) {
    e.preventDefault();
            
    // deshabilita el botón y previene un doble clic
    this.disabled = true;
            
    // simula el proceso y reactiva el clic despues de 3 segundos
    setTimeout(function(){ 
        btn.disabled=false; 
        btn.textContent = btnlbl; 
        const form = $('form');
        form.submit();
    }, 1000);
});
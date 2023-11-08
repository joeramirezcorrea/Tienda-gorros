function calculateTotal() {
    // Obtén el valor de la cantidad ingresada por el usuario
    const quantity = parseInt(document.getElementById("quantity").value, 10);
    
    // Precio unitario del producto (actualiza este valor según tus necesidades)
    const unitPrice = 129.92;
    
    // Calcula el importe total
    const total = quantity * unitPrice;
    
    // Actualiza el elemento HTML con el resultado
    document.getElementById("total").textContent = total.toFixed(2);
    
    // Cuando la página se desplaza, mostrar u ocultar la flecha
window.addEventListener("scroll", function() {
    var scrollToTop = document.getElementById("scrollToTop");
    if (document.documentElement.scrollTop > 100) {
        scrollToTop.style.display = "block";
    } else {
        scrollToTop.style.display = "none";
    }
});

// Volver al inicio cuando se hace clic en la flecha
document.getElementById("scrollToTop").addEventListener("click", function() {
    window.scrollTo({
        top: 0,
        behavior: "smooth" // Opcional: desplazamiento suave
    });
});
}

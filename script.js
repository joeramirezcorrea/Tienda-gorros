function calculateTotal() {
    // Obtén el valor de la cantidad ingresada por el usuario
    const quantity = parseInt(document.getElementById("quantity").value, 10);
    
    // Precio unitario del producto (actualiza este valor según tus necesidades)
    const unitPrice = 129.92;
    
    // Calcula el importe total
    const total = quantity * unitPrice;
    
    // Actualiza el elemento HTML con el resultado
    document.getElementById("total").textContent = total.toFixed(2);
}
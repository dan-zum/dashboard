document.addEventListener('DOMContentLoaded', function(){
    const activa_ubicacion = document.querySelector('.activa_ubicacion');
    const nuevoP = document.querySelector('.nuevoP');
    const historialP = document.querySelector('.historialP');
    const span = document.createElement('span');
  
    const url = window.location.href;
    const partes = url.split('/');
    //Sacamos la ultima parte de la url 
    if(partes[4] === 'index.php'){
        span.textContent = 'Inicio';
        activa_ubicacion.appendChild(span);
    }else if(partes[4] === 'nuevo_pedido.php'){
        nuevoP.classList.add('current-page');
        span.textContent = 'Nuevo Pedido';
        activa_ubicacion.appendChild(span);
    }else if(partes[4] === 'historial_pedidos.php'){
        historialP.classList.add('current-page');
        span.textContent = 'Historial de pedidos';
        activa_ubicacion.appendChild(span);
    }else if(partes[4] === 'comprar_stock.php'){
        historialP.classList.add('current-page');
        span.textContent = 'Comprar stock';
        activa_ubicacion.appendChild(span);
    }else if(partes[4] === 'my_stock.php'){
        historialP.classList.add('current-page');
        span.textContent = 'My stock';
        activa_ubicacion.appendChild(span);
    }
})

document.addEventListener('DOMContentLoaded', () => {
	const txtInfoProducto = document.getElementById('txtMessage');

	const nombreProducto = localStorage.getItem('nombreProducto');

	txtInfoProducto.value = `Quiero realizar la cotización de este producto ${nombreProducto}`;
});

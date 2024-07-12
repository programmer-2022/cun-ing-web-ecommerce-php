document.addEventListener('DOMContentLoaded', () => {
	const cotizarButtons = document.querySelectorAll('.cotizar-btn');

	cotizarButtons.forEach((button) => {
		button.addEventListener('click', () => {
			const nombre = button.getAttribute('data-nombre');
			localStorage.setItem('nombreProducto', nombre);
			window.location.href = 'contact.php';
		});
	});
});

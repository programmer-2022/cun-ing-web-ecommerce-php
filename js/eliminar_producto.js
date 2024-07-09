document.addEventListener('DOMContentLoaded', () => {
	const btnDelete = document.querySelectorAll('.btn-delete');

	btnDelete.forEach((button) => {
		button.addEventListener('click', () => {
			const productoId = parseInt(button.getAttribute('data-id'));

			if (!productoId) {
				console.error('No se obtuvo el ID del producto');
				return;
			}

			const confirmacion = confirm(
				'¿Está seguro de que desea eliminar este producto?'
			);

			if (confirmacion) {
				const basePath = window.location.origin;
				const url = `${basePath}/ecommerce/eliminar_producto.php`;

				fetch(url, {
					method: 'POST',
					headers: {
						'Content-Type': 'application/json',
					},
					body: JSON.stringify({ id: productoId }),
				})
					.then((response) => {
						if (!response.ok) {
							throw new Error(
								'Ocurrió un problema al eliminar el producto.'
							);
						}
						return response.json();
					})
					.then((data) => {
						alert(data.message);
						window.location.reload();
					})
					.catch((error) => {
						alert('Error en la solicitud: ' + error.message);
					});
			}
		});
	});
});

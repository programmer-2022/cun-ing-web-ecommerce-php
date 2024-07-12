document.addEventListener('DOMContentLoaded', () => {
	const btnDelete = document.querySelectorAll('.btn-delete');

	btnDelete.forEach((button) => {
		button.addEventListener('click', () => {
			const contactId = parseInt(button.getAttribute('data-id'));

			if (!contactId) {
				console.error('No se obtuvo el ID del cliente');
				return;
			}

			const confirmacion = confirm(
				'¿Está seguro de que desea eliminar este registro?'
			);

			if (confirmacion) {
				const basePath = window.location.origin;
				const url = `${basePath}/ecommerce/delete_customer.php`;

				fetch(url, {
					method: 'POST',
					headers: {
						'Content-Type': 'application/json',
					},
					body: JSON.stringify({ id: contactId }),
				})
					.then((response) => {
						if (!response.ok) {
							throw new Error(
								'Ocurrió un problema al eliminar el registro.'
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

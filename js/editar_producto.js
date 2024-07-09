document.addEventListener('DOMContentLoaded', () => {
	const formModal = document.getElementById('editProductForm');

	formModal.addEventListener('submit', function (event) {
		event.preventDefault();

		const formData = new FormData(this);
		const jsonData = {};

		formData.forEach((value, key) => {
			jsonData[key] = value;
		});

		const basePath = window.location.origin;
		const url = `${basePath}/ecommerce/editar_producto.php`;

		fetch(url, {
			method: 'POST',
			headers: {
				'Content-Type': 'application/json',
			},
			body: JSON.stringify(jsonData),
		})
			.then((response) => {
				if (!response.ok) {
					throw new Error(
						'Ocurrió un problema al editar un producto.'
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
	});
});

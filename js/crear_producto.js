document.addEventListener('DOMContentLoaded', () => {
	const formModal = document.getElementById('createProductForm');

	formModal.addEventListener('submit', function (event) {
		event.preventDefault();

		const formData = new FormData(event.target);
		const files = document.querySelector('[type=file]').files;

		if (files.length === 0) {
			alert('El producto debe tener una imagen');
			return;
		}

		const basePath = window.location.origin;
		const url = `${basePath}/ecommerce/crear_producto.php`;

		fetch(url, {
			method: 'POST',
			body: formData,
		})
			.then((response) => {
				if (!response.ok) {
					alert('Ocurrió un problema al crear un producto.');
					return;
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

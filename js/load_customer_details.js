document.addEventListener('DOMContentLoaded', () => {
	const customerData = localStorage.getItem('customer-data');

	if (customerData) {
		const { id, name, email, subject, message, createdAt } =
			JSON.parse(customerData);

		if (id && name && email && subject && message) {
			document.getElementById('contact-id').textContent = id;
			document.getElementById('contact-name').textContent = name;
			document.getElementById('contact-email').textContent = email;
			document.getElementById('contact-subject').textContent = subject;
			document.getElementById('contact-message').textContent = message;
			document.getElementById('contact-createdAt').textContent =
				createdAt;
		} else {
			console.error('Los datos del cliente no están completos.');
		}
	} else {
		console.error('No se encontraron datos en localStorage.');
	}
});

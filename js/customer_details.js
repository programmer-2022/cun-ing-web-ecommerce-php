document.addEventListener('DOMContentLoaded', () => {
	const btnDetails = document.querySelectorAll('.btn-details');
	localStorage.clear();

	btnDetails.forEach((button) => {
		button.addEventListener('click', (event) =>
			saveData2LocalStorage(event)
		);
	});

	const saveData2LocalStorage = async (event) => {
		const button = event.currentTarget;
		const id = button.getAttribute('data-id');
		const name = button
			.closest('tr')
			.querySelector('.contact-name').textContent;
		const email = button
			.closest('tr')
			.querySelector('.contact-email').textContent;
		const subject = button
			.closest('tr')
			.querySelector('.contact-subject').textContent;
		const message = button
			.closest('tr')
			.querySelector('.contact-message').textContent;
		const createdAt = button
			.closest('tr')
			.querySelector('.contact-createdAt').textContent;

		const customerInformation = {
			id,
			name,
			email,
			subject,
			message,
			createdAt,
		};

		localStorage.setItem(
			'customer-data',
			JSON.stringify(customerInformation)
		);

		window.location.href = 'customer_details.php';
	};
});

document.addEventListener('DOMContentLoaded', () => {
	const editButtons = document.querySelectorAll('.btn-edit');

	editButtons.forEach((button) => {
		button.addEventListener('click', () => {
			const productId = button.getAttribute('data-id');
			const productName = button
				.closest('tr')
				.querySelector('.product-name').textContent;
			const productDescription = button
				.closest('tr')
				.querySelector('.product-description').textContent;
			const productCategory = button
				.closest('tr')
				.querySelector('.product-category').textContent;
			const productPrice = button
				.closest('tr')
				.querySelector('.product-price').textContent;

			document.getElementById('txtProductId').value = productId;
			document.getElementById('txtProductName').value = productName;
			document.getElementById('txtDescription').value =
				productDescription;
			//document.getElementById('txtImage').value = productImage;
			document.getElementById('txtCategory').value = productCategory;
			document.getElementById('txtPrice').value = productPrice;

			const editModal = new bootstrap.Modal(
				document.getElementById('editModal')
			);
			editModal.show();
		});
	});
});

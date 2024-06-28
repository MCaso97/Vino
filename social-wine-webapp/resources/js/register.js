document.addEventListener('DOMContentLoaded', function () {
    const accountType = document.getElementById('account_type');
    const surnameField = document.getElementById('surname_field');
    const vatField = document.getElementById('vat_field');
    const addressField = document.getElementById('address_field');
    const isAlsoSupplierField = document.getElementById('is_also_supplier_field');
    const isAlsoWineryField = document.getElementById('is_also_winery_field');
  
    accountType.addEventListener('change', function () {
      const selectedValue = accountType.value;
      
      surnameField.style.display = 'none';
      vatField.style.display = 'none';
      addressField.style.display = 'none';
      isAlsoSupplierField.style.display = 'none';
      isAlsoWineryField.style.display = 'none';
  
      if (selectedValue === 'user') {
        surnameField.style.display = 'block';
      } else if (selectedValue === 'winery') {
        vatField.style.display = 'block';
        addressField.style.display = 'block';
        isAlsoSupplierField.style.display = 'block';
      } else if (selectedValue === 'supplier') {
        vatField.style.display = 'block';
        addressField.style.display = 'block';
        isAlsoWineryField.style.display = 'block';
      }
    });
  
    const form = document.getElementById('registerForm');
    form.addEventListener('submit', function (event) {
      event.preventDefault();
      
      const formData = new FormData(form);
  
      fetch('{{ route(',register,')}}', {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': formData.get('_token'),
        },
        body: formData,
      })
      .then(response => response.json())
      .then(data => {
        console.log(data);
        // Gestisci la risposta dal backend
      })
      .catch(error => {
        console.error('Error:', error);
        // Gestisci gli errori di invio al backend
      });
    });
  });
  
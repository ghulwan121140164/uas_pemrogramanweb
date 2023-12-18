document.addEventListener('DOMContentLoaded', function () {
    const forms = document.querySelectorAll('form');

    forms.forEach(form => {
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            if (validateForm(form)) {
                form.submit();
            }
        });
    });

    function validateForm(form) {
        let isValid = true;

        const inputs = form.querySelectorAll('input[type="text"], input[type="number"]');
        
        inputs.forEach(input => {
            if (input.value.trim() === '') {
                setError(input, 'Field is required');
                isValid = false;
            } else {
                setSuccess(input);
            }
        });

        return isValid;
    }

    function setError(element, message) {
        const inputControl = element.parentElement;
        const errorDisplay = inputControl.querySelector('.error');

        errorDisplay.innerText = message;
        inputControl.classList.add('input-error');
        inputControl.classList.remove('input-success');
    }

    function setSuccess(element) {
        const inputControl = element.parentElement;
        const errorDisplay = inputControl.querySelector('.error');

        errorDisplay.innerText = '';
        inputControl.classList.add('input-success');
        inputControl.classList.remove('input-error');
    }
});
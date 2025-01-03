const phoneInput = document.getElementById('input-tel');

        const maskOptions = {
            mask: '+{38}(\\000) 000-00-00',
            // lazy: false,  // Маска відображається одразу
            // placeholderChar: '_'  // Символ-заповнювач
            
        };

        const mask = IMask(phoneInput, maskOptions);

        // Автоматично виправляє, якщо користувач вводить некоректну цифру після (0
        phoneInput.addEventListener('input', function () {
            const value = phoneInput.value;
        

            // Перевіряємо, чи перша цифра після (0 є некоректною
            if (!/^\+38\(0[0-9]/.test(value)) {
                phoneInput.value = value.replace(/^\+38\(0[^0-9]/, '+38(0');
            }
        });

  
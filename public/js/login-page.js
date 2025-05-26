document.addEventListener('DOMContentLoaded', function() {
    // Находим элементы
    const authScreen = document.querySelector('#auth-screen');
    const regScreen = document.querySelector('#reg-screen');

    // Функция для очистки полей формы
    function clearFormFields(formSelector) {
        const form = document.querySelector(formSelector);
        const inputs = form.querySelectorAll('input');
        inputs.forEach(input => {
            if(input.type === 'checkbox') {
                input.checked = false;
            } else {
                input.value = '';
            }
        });
    }
    
    // Добавляем обработчики кликов
     authScreen.addEventListener('click', function() {
        regScreen.classList.remove('slide-right');
        authScreen.classList.add('slide-left');
        
        setTimeout(() => {
            document.querySelector('.reg.side').style.display = 'block';
            clearFormFields('.auth.side form'); // Очищаем поля формы авторизации
        }, 300);
    });

    regScreen.addEventListener('click', function() {
        authScreen.classList.remove('slide-left');
        regScreen.classList.add('slide-right');
        
        setTimeout(() => {
            document.querySelector('.auth.side').style.display = 'block';
            clearFormFields('.reg.side form'); // Очищаем поля формы регистрации
        }, 300);
    });

    // Добавляем обработчики для ссылок
    document.querySelector('.register-link').addEventListener('click', function(e) {
        e.preventDefault();
        authScreen.click();
    });

    document.querySelector('.forgot-password').addEventListener('click', function(e) {
        if(this.textContent === 'Уже зарегистрированы?') {
            e.preventDefault();
            regScreen.click();
        }
    });
});
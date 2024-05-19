document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault(); 

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;


    if (username === 'usuario' && password === 'senha') {
        alert('Login bem-sucedido! Redirecionando...');
        // Redirecionamento do usuário após login bem-sucedido
        window.location.href = 'biografia/index.html';
    } else {
        alert('Nome de usuário ou senha incorretos. Tente novamente.');
    }
});
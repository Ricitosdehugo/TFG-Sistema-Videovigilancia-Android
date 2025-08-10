<style>
body {
    font-family: Arial, sans-serif;
    background-image: url('fotos/background-dashboard.jpeg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    background-color: #f0f0f0;
    min-height: 100vh;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 40px;
}

.bienvenida-container {
    background: rgba(255, 255, 255, 0.92);
    border-radius: 15px;
    box-shadow: 0 4px 32px rgba(0, 0, 0, 0.15);
    padding: 15px 20px;
    flex-direction: column;
    align-items: center;
    margin-top: 10px;
    color: green;
}

.main-wrapper {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: flex-start;
    gap: 40px;
}

.left-panel, .right-panel {
    display: flex;
    flex-direction: column;
    gap: 40px;
    align-items: center;
}

.panel-container,
.acciones-container,
.cerrar-container {
    background: rgba(255,255,255,0.92);
    border-radius: 15px;
    box-shadow: 0 4px 32px rgba(0,0,0,0.15);
    display: flex;
    flex-direction: column;
    align-items: center;
}

.panel-container,
.acciones-container {
    padding: 15px 15px;
    max-width: 600px;
    width: 100%;
}

.cerrar-container {
    padding: 30px 25px;
    max-width: 280px;
    width: 100%;
}

.botones {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 42px;
    margin-top: 30px;
}

.acciones-container .botones {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px;
}

.acciones-superior, .acciones-inferior {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 15px;
}

button {
    padding: 10px 25px;
    font-size: 20px;
    cursor: pointer;
    border-radius: 8px;
    border: 1px solid #ccc;
    transition: background 0.2s;
}

.verde { background-color: #d4edda; color: #155724; }
.verde:hover { background-color: #c3e6cb; }

.azul { background-color: #cce5ff; color: #004085; }
.azul:hover { background-color: #b8daff; }

.rojo { background-color: #f8d7da; color: #721c24; }
.rojo:hover { background-color: #f5c6cb; }

a {
    display: block;
    color: #3366cc;
    text-decoration: none;
    font-weight: bold;
}

a:hover {
    text-decoration: underline;
}

p {
    color: grey;
}

h2 {
    margin-bottom: 0;
}

</style>
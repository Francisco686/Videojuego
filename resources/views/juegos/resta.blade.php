<!-- resources/views/juegos/resta.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">¡Hurón y las Sandías!</h1>
    <p class="text-center">Ayuda al hurón a comer sandías mientras restas puntos.</p>

    <div class="game-container mt-4 text-center">
        <div id="gameArea" class="game-area">
            <img id="huron" src="{{ asset('img/huron.png') }}" class="huron" alt="Hurón">
        </div>
        <p class="mt-3">Puntuación: <span id="score">0</span></p>
        <button class="btn btn-primary mt-3" onclick="startGame()">Iniciar Juego</button>
    </div>
</div>

<style>
    .game-container {
        background-color: #FFFAE3;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .game-area {
        background-color: #B3E5FC;
        position: relative;
        height: 500px;
        border-radius: 10px;
        overflow: hidden;
    }

    .huron {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        height: 100px;
    }

    .sandia {
        position: absolute;
        height: 50px;
    }

    .text-danger {
        color: #FF6347;
        font-weight: bold;
    }
</style>

<script>
    let score = 0;
    let gameInterval;
    const huron = document.getElementById('huron');

    function startGame() {
        score = 0;
        document.getElementById('score').textContent = score;

        gameInterval = setInterval(createSandia, 1000);

        document.addEventListener('keydown', moveHuron);
    }

    function moveHuron(event) {
        const leftLimit = 0;
        const rightLimit = document.getElementById('gameArea').offsetWidth - huron.offsetWidth;
        let huronLeft = huron.offsetLeft;

        const moveDistance = 30; // Aumenta el valor para moverse más rápido

        if (event.key === 'ArrowLeft' && huronLeft > leftLimit) {
            huron.style.left = huronLeft - moveDistance + 'px';
        } else if (event.key === 'ArrowRight' && huronLeft < rightLimit) {
            huron.style.left = huronLeft + moveDistance + 'px';
        }
    }

    function createSandia() {
        const gameArea = document.getElementById('gameArea');
        const sandia = document.createElement('img');
        sandia.src = "{{ asset('img/sandia.png') }}";
        sandia.classList.add('sandia');

        sandia.style.left = Math.floor(Math.random() * (gameArea.offsetWidth - 50)) + 'px';
        sandia.style.top = '0px';

        gameArea.appendChild(sandia);

        const fallInterval = setInterval(() => {
            if (parseInt(sandia.style.top) >= gameArea.offsetHeight - 50) {
                const huronLeft = huron.offsetLeft;
                const sandiaLeft = parseInt(sandia.style.left);

                if (sandiaLeft >= huronLeft && sandiaLeft <= huronLeft + huron.offsetWidth) {
                    score -= 5;
                    document.getElementById('score').textContent = score;
                }

                gameArea.removeChild(sandia);
                clearInterval(fallInterval);
            } else {
                sandia.style.top = parseInt(sandia.style.top) + 5 + 'px';
            }
        }, 50);
    }
</script>
@endsection



<!-- resources/views/juegos/suma.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">¡Recoge los Bloques y Suma!</h1>
    <p class="text-center">Mueve el personaje para recoger los bloques con números y suma puntos.</p>

    <div class="game-container mt-4 text-center">
        <canvas id="gameCanvas" width="800" height="600" style="background-color: #B2EBF2; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);"></canvas>
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
        display: inline-block;
    }
</style>

<script>
    const canvas = document.getElementById('gameCanvas');
    const ctx = canvas.getContext('2d');
    const player = {
        x: canvas.width / 2 - 20,
        y: canvas.height - 40,
        width: 40,
        height: 40,
        speed: 5,
        dx: 0,
    };
    const blocks = [];
    let score = 0;
    let gameInterval;

    function drawPlayer() {
        ctx.fillStyle = '#32CD32';
        ctx.fillRect(player.x, player.y, player.width, player.height);
    }

    function drawBlock(block) {
        ctx.fillStyle = '#FFD700';
        ctx.fillRect(block.x, block.y, block.size, block.size);
        ctx.fillStyle = '#333';
        ctx.font = '20px Comic Sans MS';
        ctx.fillText(block.value, block.x + 10, block.y + 25);
    }

    function createBlock() {
        const size = 40;
        const x = Math.floor(Math.random() * (canvas.width - size));
        const value = Math.floor(Math.random() * 10) + 1;
        blocks.push({ x, y: -size, size, value });
    }

    function drawBlocks() {
        blocks.forEach(drawBlock);
    }

    function moveBlocks() {
        blocks.forEach((block, index) => {
            block.y += 2;
            if (block.y + block.size > canvas.height) {
                blocks.splice(index, 1);
            }
        });
    }

    function checkCollision() {
        blocks.forEach((block, index) => {
            if (
                player.x < block.x + block.size &&
                player.x + player.width > block.x &&
                player.y < block.y + block.size &&
                player.y + player.height > block.y
            ) {
                score += block.value;
                document.getElementById('score').textContent = score;
                blocks.splice(index, 1);
            }
        });
    }

    function update() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        drawPlayer();
        drawBlocks();
        moveBlocks();
        checkCollision();
    }

    function moveRight() {
        player.dx = player.speed;
    }

    function moveLeft() {
        player.dx = -player.speed;
    }

    function stopPlayer() {
        player.dx = 0;
    }

    function updatePlayerPosition() {
        player.x += player.dx;
        if (player.x < 0) player.x = 0;
        if (player.x + player.width > canvas.width) player.x = canvas.width - player.width;
    }

    function gameLoop() {
        updatePlayerPosition();
        update();
        if (Math.random() < 0.05) createBlock();
    }

    function startGame() {
        clearInterval(gameInterval);
        score = 0;
        document.getElementById('score').textContent = score;
        blocks.length = 0;
        gameInterval = setInterval(gameLoop, 20);
    }

    document.addEventListener('keydown', (event) => {
        if (event.key === 'ArrowRight') moveRight();
        if (event.key === 'ArrowLeft') moveLeft();
    });

    document.addEventListener('keyup', stopPlayer);
</script>
@endsection



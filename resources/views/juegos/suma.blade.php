@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="text-center">
        <h1 class="text-center">¡Recoge los Números en Orden y aprende a contar!</h1>
        <p class="text-center">Mueve la estrella para recoger los números en orden y mejorar tu conteo.</p>

        <div class="game-container mt-4 text-center">
            <canvas id="gameCanvas" width="800" height="600" style="background-color: #B2EBF2; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);"></canvas>
            <p class="mt-3">Puntuación: <span id="score">0</span></p>
            <button class="btn btn-primary mt-3" onclick="startGame()">Iniciar Juego</button>
        </div>
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
        x: canvas.width / 2 - 35,
        y: canvas.height - 70,
        size: 70,
        speed: 5,
        dx: 0,
    };
    let blocks = [];
    let score = 0;
    let nextNumber = 1;
    let gameInterval;

    function drawPlayer() {
        ctx.fillStyle = '#FF0000';
        ctx.beginPath();
        const halfSize = player.size / 2;
        ctx.moveTo(player.x + halfSize, player.y);
        ctx.lineTo(player.x + player.size * 0.6, player.y + player.size * 0.8);
        ctx.lineTo(player.x, player.y + player.size * 0.3);
        ctx.lineTo(player.x + player.size, player.y + player.size * 0.3);
        ctx.lineTo(player.x + player.size * 0.4, player.y + player.size * 0.8);
        ctx.closePath();
        ctx.fill();
    }

    function drawBlock(block) {
        ctx.fillStyle = '#FFD700';
        ctx.fillRect(block.x, block.y, block.size, block.size);
        ctx.fillStyle = '#333';
        ctx.font = '20px Comic Sans MS';
        ctx.fillText(block.value, block.x + 10, block.y + 25);
    }

    function createBlock() {
        if (blocks.length === 0) {
            const size = 40;
            const x = Math.floor(Math.random() * (canvas.width - size));
            blocks.push({ x, y: -size, size, value: nextNumber });
        }
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
                player.x + player.size > block.x &&
                player.y < block.y + block.size &&
                player.y + player.size > block.y &&
                block.value === nextNumber
            ) {
                score += block.value;
                document.getElementById('score').textContent = score;
                blocks.splice(index, 1);
                nextNumber++;
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
        if (player.x + player.size > canvas.width) player.x = canvas.width - player.size;
    }

    function gameLoop() {
        updatePlayerPosition();
        update();
        createBlock();
    }

    function startGame() {
        clearInterval(gameInterval);
        score = 0;
        nextNumber = 1;
        document.getElementById('score').textContent = score;
        blocks = [];
        gameInterval = setInterval(gameLoop, 20);
    }

    document.addEventListener('keydown', (event) => {
        if (event.key === 'ArrowRight') moveRight();
        if (event.key === 'ArrowLeft') moveLeft();
    });

    document.addEventListener('keyup', stopPlayer);
</script>
@endsection

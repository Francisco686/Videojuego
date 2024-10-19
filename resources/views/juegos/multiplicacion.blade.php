<!-- resources/views/juegos/multiplicacion.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">¡Juego de Multiplicación!</h1>
    <p class="text-center">Multiplica los números y comprueba tu respuesta.</p>

    <div class="game-container mt-4 text-center">
        <div id="question" class="question-box">
            <h3 class="question-text">¿Cuánto es <span id="num1"></span> × <span id="num2"></span>?</h3>
            <input type="number" id="answer" class="form-control mx-auto" style="width: 200px;" placeholder="Escribe tu respuesta" autocomplete="off">
            <button class="btn btn-primary mt-3" onclick="checkAnswer()">Verificar</button>
        </div>

        <div id="feedback" class="feedback mt-3"></div>
    </div>
</div>

<style>
    .game-container {
        background-color: #FFFAE3;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .question-box {
        background-color: #87CEEB; 
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .question-box:hover {
        transform: scale(1.05);
    }

    .feedback {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .text-success {
        color: #32CD32;
        animation: bounce 0.5s ease;
    }

    .text-danger {
        color: #FF6347;
        animation: shake 0.5s ease;
    }
</style>

<script>
   
    let num1 = Math.floor(Math.random() * 5) + 1;
    let num2 = Math.floor(Math.random() * 5) + 1;
    document.getElementById('num1').textContent = num1;
    document.getElementById('num2').textContent = num2;

  
    function checkAnswer() {
        const userAnswer = parseInt(document.getElementById('answer').value);
        const correctAnswer = num1 * num2;
        const feedbackElement = document.getElementById('feedback');

        if (userAnswer === correctAnswer) {
            feedbackElement.innerHTML = '<p class="text-success">¡Correcto! 🎉 ¡Sigue así!</p>';
        } else {
            feedbackElement.innerHTML = '<p class="text-danger">Oops, incorrecto. La respuesta correcta era ' + correctAnswer + '.</p>';
        }

        de verificar
        num1 = Math.floor(Math.random() * 5) + 1;
        num2 = Math.floor(Math.random() * 5) + 1;
        document.getElementById('num1').textContent = num1;
        document.getElementById('num2').textContent = num2;
        document.getElementById('answer').value = ''; 
</script>
@endsection

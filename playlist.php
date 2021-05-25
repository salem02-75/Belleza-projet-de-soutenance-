<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <title>Document</title>
</head>
<body>
<div class="myimages">
    <div class="first-column"> <a href="https://youtu.be/Jq3htwznGJk"><img src="images/zen1.jpg" alt="image"></a> <a href="https://youtu.be/H_nYLZ6D4_M"><img src="images/zen2.jpg" alt="image"></a> <a href="https://youtu.be/H_nYLZ6D4_M"><img src="images/zen3.jpg" alt="image"></a> <a href="https://youtu.be/t9hpS3HbpDc"><img src="images/zen4.jpg" alt="image"></a> </div>
    <div class="first-column"> <a href="https://youtu.be/Jq3htwznGJk"><img src="images/zen1.jpg" alt="image"></a> <a href="https://youtu.be/H_nYLZ6D4_M"><img src="images/zen2.jpg" alt="image"></a> <a href="https://youtu.be/H_nYLZ6D4_M"><img src="images/zen3.jpg" alt="image"></a> <a href="https://youtu.be/t9hpS3HbpDc"><img src="images/zen4.jpg" alt="image"></a> </div>
    <div class="first-column"> <a href="https://youtu.be/Jq3htwznGJk"><img src="images/zen1.jpg" alt="image"></a> <a href="https://youtu.be/H_nYLZ6D4_M"><img src="images/zen2.jpg" alt="image"></a> <a href="https://youtu.be/H_nYLZ6D4_M"><img src="images/zen3.jpg" alt="image"></a> <a href="https://youtu.be/t9hpS3HbpDc"><img src="images/zen4.jpg" alt="image"></a> </div>
    <div class="first-column"> <a href="https://youtu.be/Jq3htwznGJk"><img src="images/zen1.jpg" alt="image"></a> <a href="https://youtu.be/H_nYLZ6D4_M"><img src="images/zen2.jpg" alt="image"></a> <a href="https://youtu.be/H_nYLZ6D4_M"><img src="images/zen3.jpg" alt="image"></a> <a href="https://youtu.be/t9hpS3HbpDc"><img src="images/zen4.jpg" alt="image"></a> </div>
    <div class="first-column"> <a href="https://youtu.be/Jq3htwznGJk"><img src="images/zen1.jpg" alt="image"></a> <a href="https://youtu.be/H_nYLZ6D4_M"><img src="images/zen2.jpg" alt="image"></a> <a href="https://youtu.be/H_nYLZ6D4_M"><img src="images/zen3.jpg" alt="image"></a> <a href="https://youtu.be/t9hpS3HbpDc"><img src="images/zen4.jpg" alt="image"></a> </div>
    <div class="first-column"> <a href="https://youtu.be/Jq3htwznGJk"><img src="images/zen1.jpg" alt="image"></a> <a href="https://youtu.be/H_nYLZ6D4_M"><img src="images/zen2.jpg" alt="image"></a> <a href="https://youtu.be/H_nYLZ6D4_M"><img src="images/zen3.jpg" alt="image"></a> <a href="https://youtu.be/t9hpS3HbpDc"><img src="images/zen4.jpg" alt="image"></a> </div>
    <div class="first-column"> <a href="https://youtu.be/Jq3htwznGJk"><img src="images/zen1.jpg" alt="image"></a> <a href="https://youtu.be/H_nYLZ6D4_M"><img src="images/zen2.jpg" alt="image"></a> <a href="https://youtu.be/H_nYLZ6D4_M"><img src="images/zen3.jpg" alt="image"></a> <a href="https://youtu.be/t9hpS3HbpDc"><img src="images/zen4.jpg" alt="image"></a> </div>

</div>



</body>
</html>

<style>
 body {
     margin: 0;
     padding: 0;
     min-height: 100vh;
     display: grid;
     place-items: center
 }

 .myimages {
     display: flex;
     overflow: hidden;
     height: 50vw;
     background: #333
 }

 .myimages img {
     max-width: 100%;
     vertical-align: middle;
     border: 2px solid white;
     box-sizing: border-box;
     transition: opacity .2s
 }

 .myimages:hover img {
     opacity: 0.5
 }

 .myimages img:hover {
     opacity: 1
 }

 .first-column {
     animation: var(--animation, none) 16s infinite linear
 }

 .first-column:hover {
     animation-play-state: paused
 }

 .first-column:nth-of-type(odd) {
     align-self: flex-end;
     --direction: 50%
 }

 @keyframes slide {
     to {
         -webkit-transform: translateY(var(--direction, -50%));
         transform: translateY(var(--direction, -50%))
     }
 }
</style>

<script>
$(document).ready(function(){

[...document.querySelectorAll('.first-column')].map(column => {
column.style.setProperty('--animation', 'slide');
column.style.setProperty('height', '200%');
column.innerHTML = column.innerHTML + column.innerHTML;
});

});
</script>
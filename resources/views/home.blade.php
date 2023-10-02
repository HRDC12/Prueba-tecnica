@extends('layouts.app')

@section('content')

<a href="/asociados"><button class="btn btn-primary">
    ir a asociados</button></a>

<a href="/productos"><button class="btn btn-primary">
        ir a productos</button></a>

 <a href="/ventas"><button class="btn btn-primary">
        ir a venta</button></a>

<a href="/es-asociados"><button class="btn btn-primary">
         ir a Es_Asociado</button></a>

<a href="/no-asociados"><button class="btn btn-primary">
         ir a No_Asociado</button></a>  
         
<a href="/tipo-productos"><button class="btn btn-primary">
            ir a tipo_producto</button></a>


 <style> 
            *{
    margin: o;
    padding: 0;
    box-sizing: border-box;

   }
   body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: white;
    font-family: 'Releway', sans-serif;
    font-weight: bold;
   }
   a{
    position: relative;
    display: inline-block;
    padding: 25px 30px;
    margin: 40px 0;
    color: #4ae664;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.5s;
    letter-spacing: 4px;
    overflow: hidden;
    
   }
   a:hover {
    background: #4ae664;
    color: black;
    box-shadow: 0 0 5px #4ae664,
                0 0 25px #4ae664,
                0 0 50px #4ae664,
                0 0 200px #4ae664;

   }
   a span {
    position: absolute;

   }
   a span:nth-child(1){
    top: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg,transparent,#4ae664);
    animation: animate1 1s linear infinite;

   }
   @keyframes animate1 {
    0%{
        left: -100%;

    }
    50%,100% {
          left: 100%;

    }
   }
   a span:nth-child(2){
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg,transparent,#4ae664);
    animation: animate2 1s linear infinite;
    animation-delay: 0.25s;

   }
   @keyframes animate2 {
    0%{
        top: -100%;

    }
    50%,100% {
        top: 100%;

    }
   }
   a span:nth-child(3){
    bottom: 0;
    right: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg,transparent,#4ae664);
    animation: animate3 1s linear infinite;
    animation-delay: 0.50s;
   }
   @keyframes animate3{
    0%{
        right: -100%;

    }
    50%,100%{
        right: 100%;

    }
   }
   a span:nth-child(4){
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg,transparent,#4ae664);
    animation: animate4 1s linear infinite;
    animation-delay: 0.75s;

   }
   @keyframes animate4{
    0%{
        bottom: -100%;

    }
    50%,100%{
        bottom: 100%;
        
    }
   }
      </style>





@endsection
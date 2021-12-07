@extends('layouts.app')

@section('content')

<style>
  .button {
  border: none;
  color: white;
  padding: 30px 35px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 7px 9px;
  cursor: pointer;
  }

  .button1 {background-color: #CD0046;} 
  
  .container1 { 
  height: 500px;
  position: relative; 
  }

  .center {
   margin: 0;
   position: absolute;
   top: 50%;
   left: 50%;
   -ms-transform: translate(-50%, -50%);
   transform: translate(-50%, -50%);
  }

</style>
<body>
<div class="container">
<div class="container1" style="border:3px solid black;">
 <br>
    <button class="button button1">BLOK A</a></button>
    <button class="button button1">BLOK C</a></button>
    <button class="button button1">BLOK F</a></button>
    <button class="button button1">DATARAN DINAMIS</a></button>
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
  </div>
</div>
</div>
</body>
@endsection

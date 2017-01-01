@extends('layouts.app')

@section('title')
	<title>Music Planet</title>
@endsection



@section('slideshow')

<img class="mySlides" src="/images/background_music.png">
<img class="mySlides" src="/images/maxresdefault.jpg">
<img class="mySlides" src="/images/teste.png">

<br>	
<script>
	var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
@endsection


@section('content')
<h1>Bem vindo a Music Planet</h1>



@endsection
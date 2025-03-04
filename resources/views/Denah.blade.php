<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('forcss/css/two.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/@webcomponents/webcomponentsjs@2.1.3/webcomponents-loader.js"></script> 

    <!--  OPTIONAL: Intersection Observer polyfill for better performance in Safari and IE11 -->
   <script src="https://unpkg.com/intersection-observer@0.5.1/intersection-observer.js"></script>
   <!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="magnific-popup/magnific-popup.css">

<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Magnific Popup core JS file -->
<script src="magnific-popup/jquery.magnific-popup.js"></script>


    <!--  OPTIONAL: Resize Observer polyfill improves resize behavior in non-Chrome browsers -->
 <script src="https://unpkg.com/resize-observer-polyfill@1.5.0/dist/ResizeObserver.js"></script> 
    
    <!--  OPTIONAL: The :focus-visible polyfill removes the focus ring for some input types -->

   <script src="https://unpkg.com/focus-visible@5.0.2/dist/focus-visible.js" defer></script>
    <title>Denah</title>
</head>
<body>
    <div class="sub">
        <img src="{{ asset('forcss/img/logo-tb.png') }}">
        <p> SMK TARUNA BHAKTI</p>
    </div>
    <div class="nav">
        <div class="nao">
            <h1>Gedung Teori</h1>
            @foreach ($dtgedunglab as $item)
        {{-- <h2>{{ $item->lantai->lantai }}</h2> --}}
        <a href="{{ 'denah1/'.$item->ruang->ruang }}" class="a6"><button>{{ $item->ruang->ruang }}</button></a>
        @endforeach
            <h1>Gedung Lab</h1>
            <h1>Gedung RPS</h1>
        </div>
    </div>  
    <div class="sda"></div>

    <div class="asd">
        <p>Lab Cobaan</p>
            <div class="sad">
                <model-viewer src="{{ asset('forcss/3d/Lantai1.gltf') }}" alt="Denah" shadow-intensity="2" camera-controls auto-rotate ar>
                    <button id="hotspotButton"                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
=======
                    {{-- <button id="hotspotButton"
>>>>>>> edac823c80a7e04b128dbfff52fe921d10800f05
                    slot="hotspot-one"
                    data-position="0.16 0.1 0.17" data-normal="-0.07 0.97 0.23">OOMaga</button> --}}
                </model-viewer>
    </div>
    </div>
    <div class="minimap">
      
	<div class="section full-height">
        <input class="modal-btn" type="checkbox" id="modal-btn" name="modal-btn"/>
        <label for="modal-btn">Open Modal <i class="uil uil-expand-arrows"></i></label> 		
        <div class="modal">		
            <div class="modal-wrap">
                <p class="ons">Ruang 25</p>
                <hr>
                <b></b>
              <img src="{{ asset('forcss/img/1.jpeg') }}" alt="">	
                <p class="ons2">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>	          		
            </div>			          		
        </div>	


          <img src="{{ asset('forcss/img/1.jpeg') }}" alt="">

  </div>
        <div class="sdaa"></div>   
    </div>
    <div class="bawah">
        <p>{{ $item->ruang->ruang }}</p>
        <br>
    </div>
    <div class="bawah2">
        
        <p>Jam Belajar</p>
        <br>
        <p></p>
    </div>
    <div class="bawah3">
        <p>Jurusan</p>
        <br>
        <p></p>
    </div>
    
    <script type="module"
    src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js">
	  </script>

	<!-- Loads <model-viewer> for old browsers like IE11: -->
	<script nomodule
      src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js">
	</script>

<script>
    hotspotButton.addEventListener('click', () => {
      if (modelViewer.paused) {
        modelViewer.play();
      } else {
        modelViewer.pause();
      }
    });
    </script>
zz
<script type="module">
    const modelViewer = document.querySelector("model-viewer"); window.switchSrc = (element, name) => { const base = "../Assets/Models/" + name; modelViewer.src = base + '.glb'; const size = document.querySelectorAll(".size"); size.forEach((element) => {element.classList.remove("selected");
    var colors = document.getElementById("variant"); var colorButton = colors.firstChild; while( colorButton ) { colors.removeChild( colorButton ); colorButton = colors.firstChild; }}); element.classList.add("selected"); }; document.querySelector(".sizebuttons").addEventListener('beforexrselect',
    (ev) => { ev.preventDefault(); });
  </script>
  
  <!-- Color Script -->
  <script type="module">
    const modelViewerVariants = document.querySelector("model-viewer"); const select = document.querySelector('#variant'); modelViewerVariants.addEventListener('load', () => { const names = modelViewerVariants.availableVariants; for (const name of names)
    { const color = document.createElement('button'); color.value = name; color.textContent = name; select.appendChild(color); } }); document.getElementById('variant').addEventListener('click', (event) => { modelViewerVariants.variantName = event.target.value;
    });
  </script>
</body> 
</html>
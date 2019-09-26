<!DOCTYPE html>  
<html>  
 <head>  
  <title>WebVR UP Cebu</title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
     
  <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
   <script src="https://unpkg.com/aframe-proxy-event-component@2.1.0/dist/aframe-proxy-event-component.min.js"></script>
    
    <script src="https://unpkg.com/aframe-event-set-component@5/dist/aframe-event-set-component.min.js"></script>
    <script src="https://unpkg.com/aframe-layout-component@5.3.0/dist/aframe-layout-component.min.js"></script>
    <script src="https://unpkg.com/aframe-template-component@3.2.1/dist/aframe-template-component.min.js"></script>

</head>  
 <body> 
  <a-scene>
        <a-assets>
             <img id="point1" src="source.php?id=1"/>
             <img id="point2" src="source.php?id=2"/>
        </a-assets>
       <a-sky id="skybox" src="#point2"></a-sky>

	</a-scene>

 </body>  
</html>
 
<script>  


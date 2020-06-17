<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
    <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
</head>
<body>
    <a-scene embedded arjs>
        <a-entity scale=".2 .2 2">
            <a-entity gltf-model="model.gltf" scale="6 6 6">
            </a-entity>
            <a-marker-camera preset='hiro'></a-marker-camera>
        </a-entity>
    </a-scene>
    
</body>
</html>
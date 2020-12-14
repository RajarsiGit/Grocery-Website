let camera, scene, renderer;
let geometry, material, mesh;

init();
animate();

function init() {
    camera = new THREE.PerspectiveCamera(70, window.innerWidth/window.innerHeight, 0.01, 10);
    camera.position.z = 1;

    scene = new THREE.Scene();
    scene.background = new THREE.Color(0xffffff);

    geometry = new THREE.BoxGeometry(0.1, 0.1, 0.1);
    material = new THREE.MeshPhongMaterial({color: 0x84c639});

    mesh = new THREE.Mesh(geometry, material);
    scene.add(mesh);

    var light = new THREE.PointLight(0xFFFFFF);
    light.position.set(-10, 15, 50);
    scene.add(light);

    renderer = new THREE.WebGLRenderer({antialias: true});
    renderer.setSize( window.innerWidth, window.innerHeight);
    document.getElementsByClassName("loader_container")[0].appendChild(renderer.domElement)
}

function animate() {
    requestAnimationFrame(animate);

    mesh.rotation.x += 0.08;
    mesh.rotation.y += 0.09;

    renderer.render(scene, camera);
}
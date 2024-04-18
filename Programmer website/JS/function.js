import * as THREE from 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.module.js';
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
const renderer = new THREE.WebGLRenderer();
const geometry = new THREE.BoxGeometry(2, 2, 2);
const material = new THREE.MeshPhongMaterial({color: 'purple'});
const cube = new THREE.Mesh(geometry, material);

main();
function main() {
    document.querySelector('canvas').remove();
    scene.background = new THREE.Color('#161718');
    renderer.setSize(window.innerWidth, window.innerHeight);
    document.body.appendChild(renderer.domElement);
    camera.position.set(0, 0, 5);
    const light = new THREE.HemisphereLight('#FFFFFF', '#757575', 1.7);
    scene.add(light);
    cube.position.set(0, 0, 0);
    cube.rotation.set(0.5, 0 , 0);
    scene.add(cube);
    renderer.render(scene, camera);
}


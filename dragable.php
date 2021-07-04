<!DOCTYPE HTML>
<html>
<head>
<style>
#div1, #div2, #div3, #div4 {
  float: left;
  width: 100px;
  height: 100px;
  margin: 10px;
  padding: 10px;
  border: 1px solid black;
}
</style>
<script>
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}
</script>
</head>
<body>

<h2>Drag and Drop</h2>
<p>Drag the image back and forth between the two div elements.</p>

<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
  <img src="images/shakeel.png" draggable="true" ondragstart="drag(event)" id="drag1" width="100" height="100">
</div>

<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

<div id="div3" ondrop="drop(event)" ondragover="allowDrop(event)">
<img src="images/adnan.jpg" draggable="true" ondragstart="drag(event)" id="drag2" width="100" height="100">
</div>

<div id="div4" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

</body>
</html>

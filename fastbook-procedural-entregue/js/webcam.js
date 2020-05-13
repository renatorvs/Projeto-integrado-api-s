 var player = document.getElementById('player');
  var snapshotCanvas = document.getElementById('snapshot');
  var captureButton = document.getElementById('capture');
  var handleSuccess = function(stream) {
    videoTracks = stream.getVideoTracks();
    player.srcObject = stream;
  };

  captureButton.addEventListener('click', function() {
    var context = snapshot.getContext('2d');
    // Draw the video frame to the canvas.

    context.drawImage(player, 0, 0, snapshotCanvas.width,
        snapshotCanvas.height);
  });
    console.log(snapshot.value);


function download_image(){
  var canvas = document.getElementById("snapshot");
  image = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
  var link = document.createElement('a');
  link.download = "perfil.png";
  link.href = image;
  link.click();
}

  navigator.mediaDevices.getUserMedia({video: true})
      .then(handleSuccess);

       var player = document.getElementById('player');
  var snapshotCanvas = document.getElementById('snapshot');
  var captureButton = document.getElementById('capture');
  var handleSuccess = function(stream) {
    videoTracks = stream.getVideoTracks();
    player.srcObject = stream;
  };

  captureButton.addEventListener('click', function() {
    var context = snapshot.getContext('2d');
    // Draw the video frame to the canvas.

    context.drawImage(player, 0, 0, snapshotCanvas.width,
        snapshotCanvas.height);
  });
    console.log(snapshot.value);


function download_image(){
  var canvas = document.getElementById("snapshot");
  image = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
  var link = document.createElement('a');
  link.download = "perfil.png";
  link.href = image;
  link.click();
}

  navigator.mediaDevices.getUserMedia({video: true})
      .then(handleSuccess);
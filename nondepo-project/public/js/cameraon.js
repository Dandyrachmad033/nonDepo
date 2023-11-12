    document.getElementById('cancel-button').addEventListener('click', stopCamera);
    document.getElementById('camera-button').addEventListener('click', startCamera);
    document.getElementById('x-button').addEventListener('click', stopCamera);
    document.getElementById('camera-button2').addEventListener('click', startCamera);
    const captureButton = document.getElementById('camera-capture');
    captureButton.addEventListener('click', takeSnapshot);
   const snapshotElement = document.getElementById('snapshot');
   
    const capturedImages = [];
  async function startCamera() {
    try {
      // Meminta izin pengguna untuk mengakses kamera
      const stream = await navigator.mediaDevices.getUserMedia({
        video: true
      });

      // Menampilkan video dari kamera di elemen HTML
      const videoElement = document.getElementById('video');
      videoElement.srcObject = stream;
      videoElement.play();
    } catch (error) {
      console.error('Gagal mengakses kamera:', error);
    }
  }

  // Menambahkan event listener ke tombol "Start Camera" untuk memanggil fungsi

  function stopCamera() {
    const videoElement = document.getElementById('video');
    if (videoElement.srcObject) {
      const stream = videoElement.srcObject;
      const tracks = stream.getTracks();
      tracks.forEach((track) => track.stop());
      videoElement.srcObject = null;
    }
  }

  function takeSnapshot() {
  const videoElement = document.getElementById('video');
  const canvas = document.createElement('canvas');
  canvas.width = videoElement.videoWidth;
  canvas.height = videoElement.videoHeight;
  const context = canvas.getContext('2d');
  context.drawImage(videoElement, 0, 0, canvas.width, canvas.height);
  
  const imageData = canvas.toDataURL('image/jpeg');
  snapshotElement.src = imageData;
  snapshotElement.style.display = 'block';
  snapshotElement.classList.add('border', 'border-warning');
  
} 



  // Menambahkan event listener ke tombol "Cancel" untuk memanggil fungsi



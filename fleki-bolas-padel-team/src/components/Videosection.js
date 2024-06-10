import React, { useState, useRef } from 'react';
import videoSrc from '../assets/video/JUAMPIV2.mp4';
import '../assets/css/VideoSection.css';

const VideoSection = () => {
  const [isPlaying, setIsPlaying] = useState(true); // Estado para controlar la reproducción del video
  const [isMuted, setIsMuted] = useState(false); // Estado para controlar el sonido del video
  const videoRef = useRef(null); // Referencia al elemento de vídeo

  const togglePlayPause = () => {
    if (videoRef.current.paused) {
      videoRef.current.play(); // Si está pausado, lo reproducimos
    } else {
      videoRef.current.pause(); // Si está reproduciendo, lo pausamos
    }
    setIsPlaying(!isPlaying); // Cambiamos el estado de reproducción
  };

  const toggleMuteUnmute = () => {
    videoRef.current.muted = !videoRef.current.muted; // Cambiamos el estado de sonido
    setIsMuted(!isMuted); // Cambiamos el estado de silencio
  };

  return (
    <div className="section video-container">
      <video
        ref={videoRef}
        autoPlay
        loop
        muted={isMuted}
        className="video"
      >
        <source src={videoSrc} type="video/mp4" />
        Tu navegador no soporta la etiqueta de video.
      </video>
      <div className="video-controls">
        <button onClick={togglePlayPause}>{isPlaying ? 'Pausar' : 'Reproducir'}</button>
        <button onClick={toggleMuteUnmute}>{isMuted ? 'Activar Sonido' : 'Desactivar Sonido'}</button>
      </div>
    </div>
  );
};

export default VideoSection;

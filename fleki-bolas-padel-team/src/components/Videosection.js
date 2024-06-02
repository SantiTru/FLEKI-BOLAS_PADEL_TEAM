import React from 'react';
import videoSrc from '../assets/video/JUAMPIV2.mp4';
import './VideoSection.css';

const VideoSection = () => {
  return (
    <div className="video-container">
      <video autoPlay loop muted className="video">
        <source src={videoSrc} type="video/mp4" />
        Tu navegador no soporta la etiqueta de video.
      </video>
    </div>
  );
};

export default VideoSection;

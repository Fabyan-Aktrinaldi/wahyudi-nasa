import React from 'react';
import ApodCard from '../../components/ui/ApodCard';

export default function ApodView() {
  return (
    <section style={{padding: '1rem'}}>
      <h2>APOD (Astronomy Picture of the Day)</h2>
      <ApodCard title="Contoh APOD" explanation="Penjelasan singkat APOD" />
    </section>
  );
}

import React, { useState, useMemo } from 'react';
import hero from '../../assets/hero.svg';

export default function ArtikelList() {
  const [query, setQuery] = useState('');

  const articles = useMemo(() => [
    { id: 1, title: 'Misteri Lubang Hitam', excerpt: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus euismod.' },
    { id: 2, title: 'Eksplorasi Mars', excerpt: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac ligula.' },
    { id: 3, title: 'Rasi Bintang dan Cerita Rakyat', excerpt: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae.' },
    { id: 4, title: 'Nebula: Pabrik Bintang', excerpt: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.' },
    { id: 5, title: 'Keajaiban Galaksi Andromeda', excerpt: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna.' },
    { id: 6, title: 'Misi Luar Angkasa Masa Depan', excerpt: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo.' },
  ], []);

  const filtered = articles.filter(a =>
    a.title.toLowerCase().includes(query.trim().toLowerCase()) ||
    a.excerpt.toLowerCase().includes(query.trim().toLowerCase())
  );

  return (
    <section className="container-fluid py-5 px-3 px-lg-5 bg-dark text-white" style={{ minHeight: '100vh', width: '100%' }}>
      <header className="d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between mb-5 gap-3">
        <div className="me-lg-4 flex-grow-1">
          <h1 className="display-6 mb-2">Edukasi Astronomi</h1>
          <p className="text-muted mb-0">Kumpulan artikel singkat dan informatif seputar astronomi, dibuat untuk tampil penuh pada layar desktop dan responsif di mobile.</p>
        </div>

        <form className="w-100" onSubmit={(e) => e.preventDefault()} style={{ maxWidth: 520 }}>
          <div className="input-group">
            <input
              type="search"
              className="form-control"
              placeholder="Cari artikel..."
              aria-label="Cari artikel"
              value={query}
              onChange={(e) => setQuery(e.target.value)}
            />
            <button className="btn btn-outline-light" type="button" onClick={() => setQuery('')}>Clear</button>
          </div>
        </form>
      </header>

      <div className="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
        {filtered.length === 0 && (
          <div className="col-12">
            <div className="alert alert-secondary text-white" role="alert">Tidak ada artikel ditemukan.</div>
          </div>
        )}

        {filtered.map(article => (
          <div key={article.id} className="col d-flex">
            <div className="card bg-secondary text-white h-100 shadow-sm w-100">
              <div className="ratio ratio-16x9">
                <img src={hero} className="card-img-top img-fluid rounded-top" alt={article.title} style={{ objectFit: 'cover' }} />
              </div>
              <div className="card-body d-flex flex-column">
                <h5 className="card-title">{article.title}</h5>
                <p className="card-text text-white-50">{article.excerpt}</p>
                <div className="mt-auto">
                  <button className="btn btn-outline-light btn-sm">Baca Selengkapnya</button>
                </div>
              </div>
            </div>
          </div>
        ))}
      </div>
    </section>
  );
}

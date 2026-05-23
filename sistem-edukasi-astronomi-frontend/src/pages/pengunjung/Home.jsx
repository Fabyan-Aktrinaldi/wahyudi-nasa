import React from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';

const artikelContoh = [
  {
    id: 1,
    title: 'Menjelajah Galaksi Jauh',
    subtitle: 'Teori, fakta, dan visualisasi jalur antar bintang.',
  },
  {
    id: 2,
    title: 'Fenomena Cahaya Aurora',
    subtitle: 'Mengapa langit utara menari dengan warna-warni.',
  },
  {
    id: 3,
    title: 'Misteri Lubang Hitam',
    subtitle: 'Apa yang terjadi saat ruang dan waktu tertekuk.',
  },
  {
    id: 4,
    title: 'Planet-planet Sistem Tata Surya',
    subtitle: 'Ringkasan cepat tentang dunia terdekat kita.',
  },
  {
    id: 5,
    title: 'Konstelasi Musim Ini',
    subtitle: 'Panduan mudah membaca tata bintang malam.',
  },
  {
    id: 6,
    title: 'Astrofotografi untuk Pemula',
    subtitle: 'Tips memotret langit malam dengan ponsel atau kamera.',
  },
];

const StarBadge = () => (
  <span className="badge-icon d-inline-flex align-items-center justify-content-center me-2">
    <svg width="18" height="18" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path d="M8 0l2.45 5.57L16 6.45l-4 3.9.95 5.55L8 12.9 3.05 15.9 4 9.85 0 5.9l5.55-.88L8 0z" />
    </svg>
  </span>
);

export default function Home() {
  return (
    <section
      className="min-vh-100 vw-100 m-0 p-0"
      style={{
        background: 'radial-gradient(circle at top left, rgba(0, 195, 255, 0.08), transparent 26%), radial-gradient(circle at bottom right, rgba(3, 45, 99, 0.18), transparent 30%), #000',
      }}
    >
      <div className="container-fluid px-5 py-5">
        <div className="row justify-content-center">
          <div className="col-12 col-xl-10">
            <div className="pb-4 mb-4 border-bottom border-2 border-primary border-opacity-25">
              <div className="d-flex align-items-center text-primary mb-2">
                <StarBadge />
                <span className="text-uppercase small letter-spacing-2">Daftar Artikel</span>
              </div>
              <h1 className="display-5 fw-bold text-white" style={{ letterSpacing: '0.28em' }}>
                Koleksi Artikel Astronomi
              </h1>
              <p className="text-white-50 mb-0" style={{ maxWidth: '760px' }}>
                Jelajahi artikel edukatif dengan gaya modern, garis neon, dan struktur yang jelas.
              </p>
            </div>

            <div className="row justify-content-center mb-5">
              <div className="col-12 col-md-7">
                <div className="input-group bg-black rounded-0 border border-2 border-primary p-1 shadow-sm">
                  <input
                    type="search"
                    className="form-control rounded-0 bg-transparent border-0 text-white"
                    placeholder="Cari artikel astronomi..."
                    aria-label="Cari artikel"
                    style={{ minHeight: '56px' }}
                  />
                  <button className="btn btn-outline-neon rounded-0 px-4" type="button">
                    Cari
                  </button>
                </div>
              </div>
            </div>

            <div className="row g-4">
              {artikelContoh.map((artikel) => (
                <div className="col-12 col-md-6 col-lg-4" key={artikel.id}>
                  <div className="article-card h-100 p-4 bg-black text-white rounded-0 border border-1 border-secondary">
                    <div className="d-flex align-items-center mb-3 text-primary">
                      <StarBadge />
                      <h3 className="h5 mb-0 fw-semibold">{artikel.title}</h3>
                    </div>
                    <p className="text-white-50 mb-4">{artikel.subtitle}</p>
                    <div className="mt-auto">
                      <a href="/artikel" className="btn btn-outline-neon btn-sm rounded-0 px-4">
                        Baca Selengkapnya
                      </a>
                    </div>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>

      <style>{`
        .letter-spacing-2 {
          letter-spacing: 0.30em;
        }

        .badge-icon {
          width: 32px;
          height: 32px;
          border-radius: 50%;
          border: 1px solid rgba(0, 195, 255, 0.35);
          color: #09f;
          background: rgba(0, 195, 255, 0.08);
        }

        .btn-outline-neon {
          color: #ffffff;
          border: 1px solid rgba(255, 255, 255, 0.22);
          background: rgba(255, 255, 255, 0.02);
          transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
        }

        .btn-outline-neon:hover {
          background: rgba(255, 255, 255, 0.10);
          box-shadow: 0 0 12px rgba(255, 255, 255, 0.12);
          transform: translateY(-2px);
          color: #ffffff;
        }

        .article-card {
          background: #07101b;
          border-color: rgba(255, 255, 255, 0.12);
          transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
        }

        .article-card:hover {
          transform: translateY(-4px);
          border-color: rgba(255, 255, 255, 0.35);
          box-shadow: 0 0 14px rgba(255, 255, 255, 0.10);
        }
      `}</style>
    </section>
  );
}

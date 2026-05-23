import React from 'react';
import { Link } from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.min.css';

export default function Login() {
  return (
    <section
      className="min-vh-100 vw-100 m-0 p-0 d-flex justify-content-center align-items-center"
      style={{
        background: 'radial-gradient(circle at top, rgba(255,255,255,0.08), transparent 20%), linear-gradient(180deg, #020305 0%, #000 100%)',
      }}
    >
      <div className="container-fluid px-5">
        <div className="d-flex justify-content-center align-items-center min-vh-100 py-5">
          <div
            className="card bg-dark text-white shadow-sm"
            style={{
              maxWidth: '420px',
              border: '1px solid rgba(255, 255, 255, 0.16)',
              boxShadow: '0 18px 34px rgba(255, 255, 255, 0.06)',
              background: 'rgba(10, 14, 24, 0.96)',
            }}
          >
            <div className="card-body p-4">
              <h2 className="card-title text-center fw-bold mb-3" style={{ letterSpacing: '0.20em', color: '#ffffff' }}>
                LOGIN
              </h2>
              <p className="text-center text-white-50 mb-4">
                Masuk untuk mengakses konten edukasi atau mengelola artikel.
              </p>
              <form>
                <div className="mb-3">
                  <label htmlFor="email" className="form-label text-white">
                    Username / Email
                  </label>
                  <input
                    type="text"
                    className="form-control bg-white bg-opacity-10 border border-white border-opacity-10 text-white rounded-0"
                    id="email"
                    placeholder="Masukkan username atau email"
                  />
                </div>
                <div className="mb-4">
                  <label htmlFor="password" className="form-label text-white">
                    Password
                  </label>
                  <input
                    type="password"
                    className="form-control bg-white bg-opacity-10 border border-white border-opacity-10 text-white rounded-0"
                    id="password"
                    placeholder="Masukkan password"
                  />
                </div>
                <button type="submit" className="btn btn-light w-100 mb-3 rounded-0" style={{ color: '#02030c' }}>
                  Masuk
                </button>
                <Link to="/artikel" className="btn btn-outline-light w-100 mb-3 rounded-0">
                  Masuk sebagai Pengunjung
                </Link>
                <div className="text-center text-white-50 small">
                  Belum punya akun? <Link to="/" className="text-white text-decoration-underline">Kembali ke Beranda</Link>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}

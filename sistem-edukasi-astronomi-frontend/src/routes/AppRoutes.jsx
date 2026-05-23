import React from 'react';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Home from '../pages/pengunjung/Home';
import LandingPage from '../pages/pengunjung/LandingPage';
import ArtikelList from '../pages/pengunjung/ArtikelList';
import ArtikelDetail from '../pages/pengunjung/ArtikelDetail';
import ApodView from '../pages/pengunjung/ApodView';
import Login from '../pages/auth/Login';
import Dashboard from '../pages/admin/Dashboard';

export default function AppRoutes() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<LandingPage />} />
        <Route path="/home" element={<Home />} />
        <Route path="/artikel" element={<ArtikelList />} />
        <Route path="/artikel/:id" element={<ArtikelDetail />} />
        <Route path="/apod" element={<ApodView />} />
        <Route path="/login" element={<Login />} />
        <Route path="/admin" element={<Dashboard />} />
      </Routes>
    </BrowserRouter>
  );
}

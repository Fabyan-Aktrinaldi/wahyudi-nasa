import React from 'react';
import { Navigate } from 'react-router-dom';

export default function ProtectedRoute({ children }) {
  const isAdmin = false; // TODO: implement auth check
  if (!isAdmin) return <Navigate to="/login" replace />;
  return children;
}

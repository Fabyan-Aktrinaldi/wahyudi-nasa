const NASA_BASE = 'https://api.nasa.gov/planetary';

export async function fetchApod(apiKey) {
  const key = apiKey || import.meta.env.VITE_NASA_KEY || 'DEMO_KEY';
  const res = await fetch(`${NASA_BASE}/apod?api_key=${key}`);
  if (!res.ok) throw new Error('Failed to fetch APOD');
  return res.json();
}
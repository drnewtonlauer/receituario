import { Metadata } from 'next';

export const metadata: Metadata = {
  title: 'Atestados - Med Lauer',
  description: 'Emissão de atestados médicos',
};

export default function AtestadoPage() {
  return (
    <div className="container mx-auto px-4 py-8">
      <h1 className="text-3xl font-bold text-gray-900 mb-6">Atestados Médicos</h1>
      <p className="text-gray-600">Sistema de emissão de atestados médicos em desenvolvimento.</p>
    </div>
  )
}
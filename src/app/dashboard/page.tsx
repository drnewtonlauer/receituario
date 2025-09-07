import { Metadata } from 'next';

export const metadata: Metadata = {
  title: 'Dashboard - Med Lauer',
  description: 'Painel de controle do sistema Med Lauer',
};

export default function DashboardPage() {
  return (
    <div className="container mx-auto px-4 py-8">
      <h1 className="text-3xl font-bold text-gray-900 mb-6">Dashboard</h1>
      <p className="text-gray-600">Painel de controle do sistema Med Lauer em desenvolvimento.</p>
    </div>
  )
}
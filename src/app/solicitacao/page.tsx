import { Metadata } from 'next';

export const metadata: Metadata = {
  title: 'Solicitações - Med Lauer',
  description: 'Sistema de solicitações médicas',
};

export default function SolicitacaoPage() {
  return (
    <div className="container mx-auto px-4 py-8">
      <h1 className="text-3xl font-bold text-gray-900 mb-6">Solicitações Médicas</h1>
      <p className="text-gray-600">Sistema de solicitações médicas em desenvolvimento.</p>
    </div>
  )
}
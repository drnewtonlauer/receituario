import { Metadata } from 'next';

export const metadata: Metadata = {
  title: 'Receituário - Med Lauer',
  description: 'Sistema de prescrição médica digital',
};

export default function ReceituarioPage() {
  return (
    <div className="container mx-auto px-4 py-8">
      <h1 className="text-3xl font-bold text-gray-900 mb-6">Receituário</h1>
      <p className="text-gray-600">Sistema de prescrição médica digital em desenvolvimento.</p>
    </div>
  )
}
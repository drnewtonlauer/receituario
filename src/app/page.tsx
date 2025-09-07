import type { Metadata } from 'next';

// Force static generation for better performance
export const dynamic = 'force-static'

export const metadata: Metadata = {
  title: 'Med Lauer - Sistema de Prescrição Médica',
  description: 'Sistema moderno de prescrição médica para profissionais de saúde',
};

export default function Page() {
  return (
    <main className="min-h-screen bg-gradient-to-br from-medical-light to-white">
      <div className="container mx-auto px-4 py-16">
        <div className="text-center max-w-4xl mx-auto">
          <div className="w-20 h-20 bg-medical-blue rounded-full flex items-center justify-center mx-auto mb-8">
            <span className="text-white font-bold text-3xl">M</span>
          </div>
          
          <h1 className="text-5xl font-bold text-gray-900 mb-6">
            Med Lauer
          </h1>
          
          <p className="text-xl text-gray-600 mb-8 leading-relaxed">
            Sistema moderno de prescrição médica para profissionais de saúde
          </p>
          
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
            <div className="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
              <div className="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                <span className="text-primary-600 font-semibold">📋</span>
              </div>
              <h3 className="text-lg font-semibold text-gray-900 mb-2">Receituário Digital</h3>
              <p className="text-gray-600">Criação de receitas médicas com modelos personalizáveis</p>
            </div>
            
            <div className="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
              <div className="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                <span className="text-primary-600 font-semibold">🧒</span>
              </div>
              <h3 className="text-lg font-semibold text-gray-900 mb-2">Receituário Pediátrico</h3>
              <p className="text-gray-600">Cálculos automáticos baseados no peso do paciente</p>
            </div>
            
            <div className="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
              <div className="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                <span className="text-primary-600 font-semibold">📄</span>
              </div>
              <h3 className="text-lg font-semibold text-gray-900 mb-2">Atestados</h3>
              <p className="text-gray-600">Emissão de atestados e declarações médicas</p>
            </div>
          </div>
        </div>
      </div>
    </main>
  );
}

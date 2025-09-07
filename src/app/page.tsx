import Link from 'next/link'
import { Button } from '@/components/ui/Button'
import { 
  FileText, 
  Pill, 
  ClipboardList, 
  Award,
  Users,
  Shield,
  Clock,
  CheckCircle
} from 'lucide-react'

export default function HomePage() {
  const features = [
    {
      icon: FileText,
      title: 'Receituário Digital',
      description: 'Crie receitas médicas de forma rápida e segura com modelos personalizáveis.'
    },
    {
      icon: Pill,
      title: 'Medicamentos Pediátricos',
      description: 'Cálculos automáticos de dosagem baseados no peso do paciente.'
    },
    {
      icon: ClipboardList,
      title: 'Solicitações Médicas',
      description: 'Gere solicitações de exames e procedimentos com facilidade.'
    },
    {
      icon: Award,
      title: 'Atestados Médicos',
      description: 'Emita atestados médicos e de comparecimento profissionais.'
    }
  ]

  const benefits = [
    {
      icon: Users,
      title: 'Fácil de Usar',
      description: 'Interface intuitiva desenvolvida especialmente para profissionais de saúde.'
    },
    {
      icon: Shield,
      title: 'Seguro e Confiável',
      description: 'Dados protegidos com criptografia e backup automático.'
    },
    {
      icon: Clock,
      title: 'Economize Tempo',
      description: 'Modelos pré-definidos e cálculos automáticos aceleram seu trabalho.'
    },
    {
      icon: CheckCircle,
      title: 'Sempre Atualizado',
      description: 'Sistema em nuvem com atualizações automáticas e novos recursos.'
    }
  ]

  return (
    <div className="bg-white">
      {/* Hero Section */}
      <section className="relative bg-gradient-to-br from-medical-blue to-primary-700 text-white">
        <div className="container py-24 lg:py-32">
          <div className="max-w-4xl mx-auto text-center">
            <h1 className="text-4xl lg:text-6xl font-bold mb-6">
              Sistema Moderno de
              <span className="block text-blue-200">Prescrição Médica</span>
            </h1>
            <p className="text-xl lg:text-2xl mb-8 text-blue-100">
              Simplifique sua prática médica com receituários digitais, 
              cálculos automáticos e gestão completa de documentos médicos.
            </p>
            <div className="flex flex-col sm:flex-row gap-4 justify-center">
              <Link href="/login">
                <Button size="lg" className="bg-white text-medical-blue hover:bg-gray-100">
                  Começar Agora
                </Button>
              </Link>
              <Link href="#features">
                <Button size="lg" variant="outline" className="border-white text-white hover:bg-white/10">
                  Saiba Mais
                </Button>
              </Link>
            </div>
          </div>
        </div>
        
        {/* Background decoration */}
        <div className="absolute inset-0 bg-grid-white/[0.05] bg-[size:60px_60px]" />
        <div className="absolute inset-0 bg-gradient-to-t from-medical-blue/50" />
      </section>

      {/* Features Section */}
      <section id="features" className="py-24 bg-gray-50">
        <div className="container">
          <div className="text-center mb-16">
            <h2 className="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
              Funcionalidades Principais
            </h2>
            <p className="text-xl text-gray-600 max-w-2xl mx-auto">
              Tudo que você precisa para uma prática médica moderna e eficiente
            </p>
          </div>
          
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            {features.map((feature, index) => (
              <div key={index} className="card text-center hover:shadow-lg transition-shadow">
                <div className="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                  <feature.icon className="w-6 h-6 text-primary-600" />
                </div>
                <h3 className="text-xl font-semibold text-gray-900 mb-2">
                  {feature.title}
                </h3>
                <p className="text-gray-600">
                  {feature.description}
                </p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Benefits Section */}
      <section className="py-24">
        <div className="container">
          <div className="text-center mb-16">
            <h2 className="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
              Por que escolher o Med Lauer?
            </h2>
            <p className="text-xl text-gray-600 max-w-2xl mx-auto">
              Desenvolvido por médicos, para médicos, com foco na praticidade e segurança
            </p>
          </div>
          
          <div className="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div className="space-y-8">
              {benefits.map((benefit, index) => (
                <div key={index} className="flex items-start space-x-4">
                  <div className="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <benefit.icon className="w-5 h-5 text-primary-600" />
                  </div>
                  <div>
                    <h3 className="text-lg font-semibold text-gray-900 mb-2">
                      {benefit.title}
                    </h3>
                    <p className="text-gray-600">
                      {benefit.description}
                    </p>
                  </div>
                </div>
              ))}
            </div>
            
            <div className="relative">
              <div className="aspect-square bg-gradient-to-br from-primary-100 to-primary-200 rounded-2xl flex items-center justify-center">
                <div className="text-center">
                  <FileText className="w-24 h-24 text-primary-600 mx-auto mb-4" />
                  <p className="text-primary-700 font-medium">
                    Interface Moderna e Intuitiva
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="py-24 bg-medical-blue text-white">
        <div className="container text-center">
          <h2 className="text-3xl lg:text-4xl font-bold mb-4">
            Pronto para modernizar sua prática médica?
          </h2>
          <p className="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Junte-se a centenas de profissionais que já utilizam o Med Lauer 
            para otimizar seu tempo e melhorar o atendimento aos pacientes.
          </p>
          <Link href="/login">
            <Button size="lg" className="bg-white text-medical-blue hover:bg-gray-100">
              Começar Gratuitamente
            </Button>
          </Link>
        </div>
      </section>
    </div>
  )
}
'use client'

import { useState, useEffect } from 'react'
import { useRouter } from 'next/navigation'
import Link from 'next/link'
import { Button } from '@/components/ui/Button'
import { Input } from '@/components/ui/Input'
import { authService } from '@/lib/auth'
import { 
  FileText, 
  Pill, 
  ClipboardList, 
  Award,
  User,
  Settings,
  Search,
  Plus
} from 'lucide-react'

export default function DashboardPage() {
  const router = useRouter()
  const [user, setUser] = useState<any>(null)
  const [patientName, setPatientName] = useState('')
  const [isLoading, setIsLoading] = useState(true)

  useEffect(() => {
    const checkAuth = async () => {
      try {
        const currentUser = await authService.getCurrentUser()
        if (!currentUser) {
          router.push('/login')
          return
        }
        setUser(currentUser)
      } catch (error) {
        router.push('/login')
      } finally {
        setIsLoading(false)
      }
    }

    checkAuth()
  }, [router])

  const quickActions = [
    {
      title: 'Receituário',
      description: 'Criar nova receita médica',
      icon: FileText,
      href: '/receituario',
      color: 'bg-blue-500'
    },
    {
      title: 'Receituário Pediátrico',
      description: 'Receitas com cálculo automático',
      icon: Pill,
      href: '/receituario-pediatrico',
      color: 'bg-green-500'
    },
    {
      title: 'Solicitação',
      description: 'Solicitar exames e procedimentos',
      icon: ClipboardList,
      href: '/solicitacao',
      color: 'bg-purple-500'
    },
    {
      title: 'Atestado',
      description: 'Emitir atestados médicos',
      icon: Award,
      href: '/atestado',
      color: 'bg-orange-500'
    }
  ]

  const recentTemplates = [
    { name: 'Receita Hipertensão', type: 'Receituário', lastUsed: '2 dias atrás' },
    { name: 'Exames Rotina', type: 'Solicitação', lastUsed: '3 dias atrás' },
    { name: 'Atestado Padrão', type: 'Atestado', lastUsed: '1 semana atrás' },
  ]

  if (isLoading) {
    return (
      <div className="min-h-screen flex items-center justify-center">
        <div className="animate-spin rounded-full h-32 w-32 border-b-2 border-primary-600"></div>
      </div>
    )
  }

  return (
    <div className="container py-8">
      {/* Header */}
      <div className="mb-8">
        <div className="flex items-center justify-between">
          <div>
            <h1 className="text-3xl font-bold text-gray-900">
              Bem-vindo, Dr(a). {user?.user_metadata?.nome || 'Usuário'}
            </h1>
            <p className="text-gray-600 mt-1">
              {user?.user_metadata?.especialidade || 'Especialidade'} - CRM: {user?.user_metadata?.crm || 'N/A'}
            </p>
          </div>
          <div className="flex items-center space-x-4">
            <Button variant="outline" size="sm">
              <Settings className="w-4 h-4 mr-2" />
              Configurações
            </Button>
          </div>
        </div>
      </div>

      {/* Patient Search */}
      <div className="card mb-8">
        <div className="flex items-center space-x-4">
          <div className="flex-1">
            <div className="relative">
              <Input
                placeholder="Nome do paciente..."
                value={patientName}
                onChange={(e) => setPatientName(e.target.value)}
                className="pl-10"
              />
              <Search className="w-5 h-5 text-gray-400 absolute left-3 top-3" />
            </div>
          </div>
          <Button>
            <User className="w-4 h-4 mr-2" />
            Selecionar Paciente
          </Button>
        </div>
        {patientName && (
          <div className="mt-4 p-3 bg-blue-50 rounded-lg">
            <p className="text-sm text-blue-700">
              <strong>Paciente selecionado:</strong> {patientName}
            </p>
          </div>
        )}
      </div>

      {/* Quick Actions */}
      <div className="mb-8">
        <h2 className="text-xl font-semibold text-gray-900 mb-4">Ações Rápidas</h2>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          {quickActions.map((action, index) => (
            <Link key={index} href={action.href}>
              <div className="card hover:shadow-lg transition-shadow cursor-pointer group">
                <div className={`w-12 h-12 ${action.color} rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform`}>
                  <action.icon className="w-6 h-6 text-white" />
                </div>
                <h3 className="font-semibold text-gray-900 mb-2">{action.title}</h3>
                <p className="text-sm text-gray-600">{action.description}</p>
              </div>
            </Link>
          ))}
        </div>
      </div>

      {/* Recent Activity */}
      <div className="grid grid-cols-1 lg:grid-cols-2 gap-8">
        {/* Recent Templates */}
        <div className="card">
          <div className="flex items-center justify-between mb-4">
            <h3 className="text-lg font-semibold text-gray-900">Modelos Recentes</h3>
            <Button variant="ghost" size="sm">
              <Plus className="w-4 h-4 mr-2" />
              Novo Modelo
            </Button>
          </div>
          <div className="space-y-3">
            {recentTemplates.map((template, index) => (
              <div key={index} className="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                <div>
                  <p className="font-medium text-gray-900">{template.name}</p>
                  <p className="text-sm text-gray-600">{template.type}</p>
                </div>
                <span className="text-xs text-gray-500">{template.lastUsed}</span>
              </div>
            ))}
          </div>
        </div>

        {/* Statistics */}
        <div className="card">
          <h3 className="text-lg font-semibold text-gray-900 mb-4">Estatísticas do Mês</h3>
          <div className="space-y-4">
            <div className="flex items-center justify-between">
              <span className="text-gray-600">Receitas emitidas</span>
              <span className="font-semibold text-gray-900">24</span>
            </div>
            <div className="flex items-center justify-between">
              <span className="text-gray-600">Solicitações criadas</span>
              <span className="font-semibold text-gray-900">12</span>
            </div>
            <div className="flex items-center justify-between">
              <span className="text-gray-600">Atestados emitidos</span>
              <span className="font-semibold text-gray-900">8</span>
            </div>
            <div className="flex items-center justify-between">
              <span className="text-gray-600">Modelos salvos</span>
              <span className="font-semibold text-gray-900">15</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}
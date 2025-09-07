'use client'

import { useState } from 'react'
import { Button } from '@/components/ui/Button'
import { Input } from '@/components/ui/Input'
import { 
  Printer,
  FileText,
  Calendar,
  User
} from 'lucide-react'

export default function AtestadoPage() {
  const [patientName, setPatientName] = useState('')
  const [attestationType, setAttestationType] = useState('medical')
  const [customText, setCustomText] = useState('')
  const [restDays, setRestDays] = useState('1')
  const [accompaniedBy, setAccompaniedBy] = useState('')

  const generateAttestation = () => {
    console.log('Generating attestation:', {
      patientName,
      attestationType,
      customText,
      restDays,
      accompaniedBy
    })
    alert('Funcionalidade de impressão será implementada em breve!')
  }

  const getAttestationText = () => {
    const currentDate = new Date().toLocaleDateString('pt-BR')
    
    switch (attestationType) {
      case 'medical':
        return `Atesto para os devidos fins que o(a) Sr(a). ${patientName || '[Nome do Paciente]'}, paciente sob meus cuidados, foi atendido(a) no dia ${currentDate} e necessita de ${restDays} dia(s) de repouso.`
      
      case 'attendance':
        return `Atesto para os devidos fins que ${patientName || '[Nome do Paciente]'}, compareceu a este consultório e foi por mim avaliado e atendido na presente data.`
      
      case 'companion':
        return `Atesto para os devidos fins, a pedido, que o(a) Sr(a). ${patientName || '[Nome do Paciente]'}, paciente sob meus cuidados, foi atendido(a) no dia ${currentDate}, tendo sido acompanhada pelo(a) Sr(a). ${accompaniedBy || '[Nome do Acompanhante]'}.`
      
      case 'custom':
        return customText || 'Digite o texto do atestado...'
      
      default:
        return ''
    }
  }

  return (
    <div className="container py-8">
      <div className="max-w-4xl mx-auto">
        {/* Header */}
        <div className="flex items-center justify-between mb-8">
          <div>
            <h1 className="text-3xl font-bold text-gray-900">Atestado Médico</h1>
            <p className="text-gray-600 mt-1">Emita atestados médicos e de comparecimento</p>
          </div>
          <Button onClick={generateAttestation} disabled={!patientName}>
            <Printer className="w-4 h-4 mr-2" />
            Gerar Atestado
          </Button>
        </div>

        <div className="grid grid-cols-1 lg:grid-cols-2 gap-8">
          {/* Form */}
          <div className="space-y-6">
            {/* Patient Info */}
            <div className="card">
              <h2 className="text-lg font-semibold text-gray-900 mb-4">Informações do Paciente</h2>
              <Input
                label="Nome do Paciente"
                value={patientName}
                onChange={(e) => setPatientName(e.target.value)}
                placeholder="Digite o nome do paciente"
                required
              />
            </div>

            {/* Attestation Type */}
            <div className="card">
              <h2 className="text-lg font-semibold text-gray-900 mb-4">Tipo de Atestado</h2>
              <div className="space-y-3">
                <label className="flex items-center space-x-3 cursor-pointer">
                  <input
                    type="radio"
                    name="attestationType"
                    value="medical"
                    checked={attestationType === 'medical'}
                    onChange={(e) => setAttestationType(e.target.value)}
                    className="w-4 h-4 text-primary-600 focus:ring-primary-500"
                  />
                  <div>
                    <span className="font-medium text-gray-900">Atestado Médico</span>
                    <p className="text-sm text-gray-600">Para justificar ausência por motivo de saúde</p>
                  </div>
                </label>

                <label className="flex items-center space-x-3 cursor-pointer">
                  <input
                    type="radio"
                    name="attestationType"
                    value="attendance"
                    checked={attestationType === 'attendance'}
                    onChange={(e) => setAttestationType(e.target.value)}
                    className="w-4 h-4 text-primary-600 focus:ring-primary-500"
                  />
                  <div>
                    <span className="font-medium text-gray-900">Atestado de Comparecimento</span>
                    <p className="text-sm text-gray-600">Para comprovar comparecimento à consulta</p>
                  </div>
                </label>

                <label className="flex items-center space-x-3 cursor-pointer">
                  <input
                    type="radio"
                    name="attestationType"
                    value="companion"
                    checked={attestationType === 'companion'}
                    onChange={(e) => setAttestationType(e.target.value)}
                    className="w-4 h-4 text-primary-600 focus:ring-primary-500"
                  />
                  <div>
                    <span className="font-medium text-gray-900">Atestado de Acompanhante</span>
                    <p className="text-sm text-gray-600">Para acompanhante de paciente</p>
                  </div>
                </label>

                <label className="flex items-center space-x-3 cursor-pointer">
                  <input
                    type="radio"
                    name="attestationType"
                    value="custom"
                    checked={attestationType === 'custom'}
                    onChange={(e) => setAttestationType(e.target.value)}
                    className="w-4 h-4 text-primary-600 focus:ring-primary-500"
                  />
                  <div>
                    <span className="font-medium text-gray-900">Personalizado</span>
                    <p className="text-sm text-gray-600">Texto personalizado</p>
                  </div>
                </label>
              </div>
            </div>

            {/* Additional Fields */}
            <div className="card">
              <h2 className="text-lg font-semibold text-gray-900 mb-4">Informações Adicionais</h2>
              
              {attestationType === 'medical' && (
                <Input
                  label="Dias de Repouso"
                  type="number"
                  value={restDays}
                  onChange={(e) => setRestDays(e.target.value)}
                  min="1"
                  max="30"
                />
              )}

              {attestationType === 'companion' && (
                <Input
                  label="Nome do Acompanhante"
                  value={accompaniedBy}
                  onChange={(e) => setAccompaniedBy(e.target.value)}
                  placeholder="Digite o nome do acompanhante"
                />
              )}

              {attestationType === 'custom' && (
                <div>
                  <label className="block text-sm font-medium text-gray-700 mb-2">
                    Texto do Atestado
                  </label>
                  <textarea
                    className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500"
                    rows={4}
                    value={customText}
                    onChange={(e) => setCustomText(e.target.value)}
                    placeholder="Digite o texto personalizado do atestado..."
                  />
                </div>
              )}
            </div>
          </div>

          {/* Preview */}
          <div className="card">
            <h2 className="text-lg font-semibold text-gray-900 mb-4 flex items-center">
              <FileText className="w-5 h-5 mr-2" />
              Pré-visualização
            </h2>
            
            <div className="bg-white border-2 border-gray-200 rounded-lg p-8 min-h-[400px]">
              <div className="text-center mb-8">
                <h3 className="text-xl font-bold text-gray-900">
                  {attestationType === 'medical' && 'Atestado Médico'}
                  {attestationType === 'attendance' && 'Atestado de Comparecimento'}
                  {attestationType === 'companion' && 'Atestado Médico'}
                  {attestationType === 'custom' && 'Atestado'}
                </h3>
              </div>

              <div className="text-justify leading-relaxed text-gray-800 mb-8">
                {getAttestationText()}
              </div>

              <div className="mt-16 text-center">
                <div className="border-t border-gray-300 w-64 mx-auto mb-2"></div>
                <p className="text-sm text-gray-600">
                  Dr(a). [Nome do Médico]<br />
                  [Especialidade]<br />
                  CRM: [Número do CRM]
                </p>
              </div>

              <div className="mt-8 text-center">
                <p className="text-sm text-gray-600">
                  Data: {new Date().toLocaleDateString('pt-BR')}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}
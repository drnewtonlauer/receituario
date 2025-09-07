'use client'

import { useState } from 'react'
import { Button } from '@/components/ui/Button'
import { Input } from '@/components/ui/Input'
import { 
  Plus, 
  Trash2, 
  Printer,
  Save,
  Star,
  StarOff
} from 'lucide-react'

interface SolicitationItem {
  id: string
  description: string
}

export default function SolicitacaoPage() {
  const [patientName, setPatientName] = useState('')
  const [items, setItems] = useState<SolicitationItem[]>([])
  const [newItem, setNewItem] = useState('')
  const [isAddingItem, setIsAddingItem] = useState(false)

  const addItem = () => {
    if (newItem.trim()) {
      const item: SolicitationItem = {
        id: Date.now().toString(),
        description: newItem.trim()
      }
      
      setItems([...items, item])
      setNewItem('')
      setIsAddingItem(false)
    }
  }

  const removeItem = (id: string) => {
    setItems(items.filter(item => item.id !== id))
  }

  const clearAll = () => {
    setItems([])
    setPatientName('')
  }

  const generateSolicitation = () => {
    console.log('Generating solicitation for:', patientName, items)
    alert('Funcionalidade de impressão será implementada em breve!')
  }

  const commonExams = [
    'Hemograma completo',
    'Glicemia de jejum',
    'Colesterol total e frações',
    'Triglicerídeos',
    'Creatinina',
    'Ureia',
    'TGO/TGP',
    'TSH',
    'Raio-X de tórax',
    'Eletrocardiograma',
    'Ultrassom abdominal',
    'Ecocardiograma'
  ]

  return (
    <div className="container py-8">
      <div className="max-w-4xl mx-auto">
        {/* Header */}
        <div className="flex items-center justify-between mb-8">
          <div>
            <h1 className="text-3xl font-bold text-gray-900">Solicitação</h1>
            <p className="text-gray-600 mt-1">Solicite exames e procedimentos</p>
          </div>
          <div className="flex items-center space-x-4">
            <Button variant="outline" onClick={clearAll}>
              Limpar
            </Button>
            <Button onClick={generateSolicitation} disabled={items.length === 0}>
              <Printer className="w-4 h-4 mr-2" />
              Gerar Requisição
            </Button>
          </div>
        </div>

        {/* Patient Info */}
        <div className="card mb-6">
          <h2 className="text-lg font-semibold text-gray-900 mb-4">Informações do Paciente</h2>
          <Input
            label="Nome do Paciente"
            value={patientName}
            onChange={(e) => setPatientName(e.target.value)}
            placeholder="Digite o nome do paciente"
          />
        </div>

        {/* Items List */}
        <div className="card mb-6">
          <div className="flex items-center justify-between mb-4">
            <h2 className="text-lg font-semibold text-gray-900">Itens Solicitados</h2>
            <Button onClick={() => setIsAddingItem(true)}>
              <Plus className="w-4 h-4 mr-2" />
              Adicionar Item
            </Button>
          </div>

          {/* Add Item Form */}
          {isAddingItem && (
            <div className="bg-gray-50 p-4 rounded-lg mb-4">
              <div className="mb-4">
                <label className="block text-sm font-medium text-gray-700 mb-2">
                  Descrição do Item
                </label>
                <textarea
                  className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500"
                  rows={3}
                  value={newItem}
                  onChange={(e) => setNewItem(e.target.value)}
                  placeholder="Ex: Hemograma completo com contagem de plaquetas"
                />
              </div>
              <div className="flex justify-end space-x-2">
                <Button variant="outline" onClick={() => setIsAddingItem(false)}>
                  Cancelar
                </Button>
                <Button onClick={addItem}>
                  Adicionar
                </Button>
              </div>
            </div>
          )}

          {/* Items List */}
          {items.length === 0 ? (
            <div className="text-center py-8 text-gray-500">
              <p>Nenhum item adicionado</p>
              <p className="text-sm">Clique em "Adicionar Item" para começar</p>
            </div>
          ) : (
            <div className="space-y-3">
              {items.map((item, index) => (
                <div key={item.id} className="flex items-start justify-between p-3 bg-gray-50 rounded-lg">
                  <div className="flex-1">
                    <span className="font-medium text-gray-900">
                      {index + 1}. {item.description}
                    </span>
                  </div>
                  <Button 
                    variant="ghost" 
                    size="sm" 
                    onClick={() => removeItem(item.id)}
                    className="text-red-600 hover:text-red-700 ml-4"
                  >
                    <Trash2 className="w-4 h-4" />
                  </Button>
                </div>
              ))}
            </div>
          )}
        </div>

        {/* Common Exams */}
        <div className="card mb-6">
          <h2 className="text-lg font-semibold text-gray-900 mb-4">Exames Comuns</h2>
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
            {commonExams.map((exam, index) => (
              <Button
                key={index}
                variant="outline"
                size="sm"
                onClick={() => {
                  const item: SolicitationItem = {
                    id: Date.now().toString() + index,
                    description: exam
                  }
                  setItems([...items, item])
                }}
                className="justify-start text-left h-auto py-2"
              >
                {exam}
              </Button>
            ))}
          </div>
        </div>

        {/* Templates Section */}
        <div className="card">
          <div className="flex items-center justify-between mb-4">
            <h2 className="text-lg font-semibold text-gray-900">Modelos Salvos</h2>
            <Button variant="outline" size="sm">
              <Save className="w-4 h-4 mr-2" />
              Salvar como Modelo
            </Button>
          </div>
          
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            {/* Example templates */}
            <div className="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow cursor-pointer">
              <div className="flex items-center justify-between mb-2">
                <h3 className="font-medium text-gray-900">Check-up Básico</h3>
                <Star className="w-4 h-4 text-yellow-500" />
              </div>
              <p className="text-sm text-gray-600">Exames de rotina para check-up</p>
            </div>
            
            <div className="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow cursor-pointer">
              <div className="flex items-center justify-between mb-2">
                <h3 className="font-medium text-gray-900">Pré-operatório</h3>
                <StarOff className="w-4 h-4 text-gray-400" />
              </div>
              <p className="text-sm text-gray-600">Exames para avaliação pré-operatória</p>
            </div>
            
            <div className="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow cursor-pointer">
              <div className="flex items-center justify-between mb-2">
                <h3 className="font-medium text-gray-900">Cardiológico</h3>
                <StarOff className="w-4 h-4 text-gray-400" />
              </div>
              <p className="text-sm text-gray-600">Avaliação cardiológica completa</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}
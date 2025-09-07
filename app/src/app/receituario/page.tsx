'use client'

import { useState, useEffect } from 'react'
import { Button } from '@/components/ui/Button'
import { Input } from '@/components/ui/Input'
import { 
  Plus, 
  Search, 
  Trash2, 
  Edit, 
  Save, 
  Printer,
  Star,
  StarOff
} from 'lucide-react'

interface Medication {
  id: string
  name: string
  quantity: string
  instructions: string
}

export default function ReceituarioPage() {
  const [patientName, setPatientName] = useState('')
  const [medications, setMedications] = useState<Medication[]>([])
  const [searchTerm, setSearchTerm] = useState('')
  const [newMedication, setNewMedication] = useState({
    name: '',
    quantity: '',
    instructions: ''
  })
  const [isAddingMedication, setIsAddingMedication] = useState(false)

  const addMedication = () => {
    if (newMedication.name && newMedication.quantity && newMedication.instructions) {
      const medication: Medication = {
        id: Date.now().toString(),
        name: newMedication.name,
        quantity: newMedication.quantity,
        instructions: newMedication.instructions
      }
      
      setMedications([...medications, medication])
      setNewMedication({ name: '', quantity: '', instructions: '' })
      setIsAddingMedication(false)
    }
  }

  const removeMedication = (id: string) => {
    setMedications(medications.filter(med => med.id !== id))
  }

  const clearAll = () => {
    setMedications([])
    setPatientName('')
  }

  const generatePrescription = () => {
    // Aqui seria implementada a lógica para gerar o PDF
    console.log('Generating prescription for:', patientName, medications)
    alert('Funcionalidade de impressão será implementada em breve!')
  }

  return (
    <div className="container py-8">
      <div className="max-w-4xl mx-auto">
        {/* Header */}
        <div className="flex items-center justify-between mb-8">
          <div>
            <h1 className="text-3xl font-bold text-gray-900">Receituário</h1>
            <p className="text-gray-600 mt-1">Crie receitas médicas digitais</p>
          </div>
          <div className="flex items-center space-x-4">
            <Button variant="outline" onClick={clearAll}>
              Limpar
            </Button>
            <Button onClick={generatePrescription} disabled={medications.length === 0}>
              <Printer className="w-4 h-4 mr-2" />
              Gerar Receituário
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

        {/* Medications List */}
        <div className="card mb-6">
          <div className="flex items-center justify-between mb-4">
            <h2 className="text-lg font-semibold text-gray-900">Medicamentos</h2>
            <Button onClick={() => setIsAddingMedication(true)}>
              <Plus className="w-4 h-4 mr-2" />
              Adicionar Medicamento
            </Button>
          </div>

          {/* Add Medication Form */}
          {isAddingMedication && (
            <div className="bg-gray-50 p-4 rounded-lg mb-4">
              <div className="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <Input
                  label="Medicamento"
                  value={newMedication.name}
                  onChange={(e) => setNewMedication({...newMedication, name: e.target.value})}
                  placeholder="Ex: Dipirona 500mg"
                />
                <Input
                  label="Quantidade"
                  value={newMedication.quantity}
                  onChange={(e) => setNewMedication({...newMedication, quantity: e.target.value})}
                  placeholder="Ex: 2 caixas"
                />
              </div>
              <div className="mb-4">
                <label className="block text-sm font-medium text-gray-700 mb-2">
                  Posologia
                </label>
                <textarea
                  className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500"
                  rows={3}
                  value={newMedication.instructions}
                  onChange={(e) => setNewMedication({...newMedication, instructions: e.target.value})}
                  placeholder="Ex: Tomar 1 comprimido de 6 em 6 horas"
                />
              </div>
              <div className="flex justify-end space-x-2">
                <Button variant="outline" onClick={() => setIsAddingMedication(false)}>
                  Cancelar
                </Button>
                <Button onClick={addMedication}>
                  Adicionar
                </Button>
              </div>
            </div>
          )}

          {/* Medications List */}
          {medications.length === 0 ? (
            <div className="text-center py-8 text-gray-500">
              <p>Nenhum medicamento adicionado</p>
              <p className="text-sm">Clique em "Adicionar Medicamento" para começar</p>
            </div>
          ) : (
            <div className="space-y-4">
              {medications.map((medication, index) => (
                <div key={medication.id} className="border border-gray-200 rounded-lg p-4">
                  <div className="flex items-start justify-between">
                    <div className="flex-1">
                      <div className="flex items-center space-x-2 mb-2">
                        <span className="font-semibold text-gray-900">
                          {index + 1}. {medication.name}
                        </span>
                        <span className="text-gray-600">- {medication.quantity}</span>
                      </div>
                      <p className="text-gray-700 text-sm">{medication.instructions}</p>
                    </div>
                    <div className="flex items-center space-x-2 ml-4">
                      <Button variant="ghost" size="sm">
                        <Edit className="w-4 h-4" />
                      </Button>
                      <Button 
                        variant="ghost" 
                        size="sm" 
                        onClick={() => removeMedication(medication.id)}
                        className="text-red-600 hover:text-red-700"
                      >
                        <Trash2 className="w-4 h-4" />
                      </Button>
                    </div>
                  </div>
                </div>
              ))}
            </div>
          )}
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
                <h3 className="font-medium text-gray-900">Hipertensão</h3>
                <Star className="w-4 h-4 text-yellow-500" />
              </div>
              <p className="text-sm text-gray-600">Tratamento padrão para hipertensão</p>
            </div>
            
            <div className="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow cursor-pointer">
              <div className="flex items-center justify-between mb-2">
                <h3 className="font-medium text-gray-900">Diabetes</h3>
                <StarOff className="w-4 h-4 text-gray-400" />
              </div>
              <p className="text-sm text-gray-600">Controle glicêmico básico</p>
            </div>
            
            <div className="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow cursor-pointer">
              <div className="flex items-center justify-between mb-2">
                <h3 className="font-medium text-gray-900">Gripe</h3>
                <StarOff className="w-4 h-4 text-gray-400" />
              </div>
              <p className="text-sm text-gray-600">Sintomáticos para gripe</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}
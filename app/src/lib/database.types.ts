export type Json =
  | string
  | number
  | boolean
  | null
  | { [key: string]: Json | undefined }
  | Json[]

export interface Database {
  public: {
    Tables: {
      clinicas: {
        Row: {
          idclin: number
          nome: string
          endereco: string | null
          telefone: string | null
          ativo: number
          procedimentos: string | null
          email: string | null
          logo: string | null
          created_at?: string
          updated_at?: string
        }
        Insert: {
          nome: string
          endereco?: string | null
          telefone?: string | null
          ativo: number
          procedimentos?: string | null
          email?: string | null
          logo?: string | null
        }
        Update: {
          nome?: string
          endereco?: string | null
          telefone?: string | null
          ativo?: number
          procedimentos?: string | null
          email?: string | null
          logo?: string | null
          updated_at?: string
        }
      }
      medicamentos: {
        Row: {
          id: number
          nome: string | null
          medicamento: Json | null
          created_at?: string
          updated_at?: string
        }
        Insert: {
          nome?: string | null
          medicamento?: Json | null
        }
        Update: {
          nome?: string | null
          medicamento?: Json | null
          updated_at?: string
        }
      }
      medicamentos_ped: {
        Row: {
          id: number
          nome: string
          medicamento: Json
          calc: number
          created_at?: string
          updated_at?: string
        }
        Insert: {
          nome: string
          medicamento: Json
          calc: number
        }
        Update: {
          nome?: string
          medicamento?: Json
          calc?: number
          updated_at?: string
        }
      }
      medicamentos_ped_ev: {
        Row: {
          id: number
          nome: string
          medicamento: Json
          calc: number
          created_at?: string
          updated_at?: string
        }
        Insert: {
          nome: string
          medicamento: Json
          calc: number
        }
        Update: {
          nome?: string
          medicamento?: Json
          calc?: number
          updated_at?: string
        }
      }
      modelos: {
        Row: {
          id: number
          nome: string
          modelo: Json
          fav: number
          idmd: number
          created_at?: string
          updated_at?: string
        }
        Insert: {
          nome: string
          modelo: Json
          fav?: number
          idmd: number
        }
        Update: {
          nome?: string
          modelo?: Json
          fav?: number
          idmd?: number
          updated_at?: string
        }
      }
      modelos_ped: {
        Row: {
          id: number
          nome: string
          modelo: Json
          fav: number
          idmd: number
          created_at?: string
          updated_at?: string
        }
        Insert: {
          nome: string
          modelo: Json
          fav?: number
          idmd: number
        }
        Update: {
          nome?: string
          modelo?: Json
          fav?: number
          idmd?: number
          updated_at?: string
        }
      }
      solicitacoes: {
        Row: {
          id: number
          nome: string
          created_at?: string
          updated_at?: string
        }
        Insert: {
          nome: string
        }
        Update: {
          nome?: string
          updated_at?: string
        }
      }
      usuarios: {
        Row: {
          id: number
          nome: string
          usuario: string
          senha: string
          crm: string
          especialidade: string
          created_at?: string
          updated_at?: string
        }
        Insert: {
          nome: string
          usuario: string
          senha: string
          crm: string
          especialidade: string
        }
        Update: {
          nome?: string
          usuario?: string
          senha?: string
          crm?: string
          especialidade?: string
          updated_at?: string
        }
      }
    }
    Views: {
      [_ in never]: never
    }
    Functions: {
      [_ in never]: never
    }
    Enums: {
      [_ in never]: never
    }
  }
}
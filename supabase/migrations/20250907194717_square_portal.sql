/*
  # Criar tabela de medicamentos pediátricos EV

  1. Nova Tabela
    - `medicamentos_ped_ev`
      - `id` (uuid, primary key)
      - `nome` (text, required)
      - `medicamento` (jsonb, required) - dados serializados
      - `calc` (numeric, required) - fator de cálculo por peso
      - `user_id` (uuid, foreign key)
      - `created_at` (timestamp)
      - `updated_at` (timestamp)

  2. Segurança
    - Habilitar RLS na tabela `medicamentos_ped_ev`
    - Políticas baseadas no user_id
*/

CREATE TABLE IF NOT EXISTS medicamentos_ped_ev (
  id uuid PRIMARY KEY DEFAULT gen_random_uuid(),
  nome text NOT NULL,
  medicamento jsonb NOT NULL,
  calc numeric NOT NULL,
  user_id uuid REFERENCES auth.users(id) ON DELETE CASCADE,
  created_at timestamptz DEFAULT now(),
  updated_at timestamptz DEFAULT now()
);

-- Habilitar RLS
ALTER TABLE medicamentos_ped_ev ENABLE ROW LEVEL SECURITY;

-- Políticas de acesso
CREATE POLICY "Users can read own medicamentos_ped_ev"
  ON medicamentos_ped_ev
  FOR SELECT
  TO authenticated
  USING (auth.uid() = user_id);

CREATE POLICY "Users can insert own medicamentos_ped_ev"
  ON medicamentos_ped_ev
  FOR INSERT
  TO authenticated
  WITH CHECK (auth.uid() = user_id);

CREATE POLICY "Users can update own medicamentos_ped_ev"
  ON medicamentos_ped_ev
  FOR UPDATE
  TO authenticated
  USING (auth.uid() = user_id);

CREATE POLICY "Users can delete own medicamentos_ped_ev"
  ON medicamentos_ped_ev
  FOR DELETE
  TO authenticated
  USING (auth.uid() = user_id);

-- Trigger para updated_at
CREATE TRIGGER update_medicamentos_ped_ev_updated_at
  BEFORE UPDATE ON medicamentos_ped_ev
  FOR EACH ROW
  EXECUTE FUNCTION update_updated_at_column();

-- Índices para performance
CREATE INDEX IF NOT EXISTS idx_medicamentos_ped_ev_user_id ON medicamentos_ped_ev(user_id);
CREATE INDEX IF NOT EXISTS idx_medicamentos_ped_ev_nome ON medicamentos_ped_ev USING gin(to_tsvector('portuguese', nome));
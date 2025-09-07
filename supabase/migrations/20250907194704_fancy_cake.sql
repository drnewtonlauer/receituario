/*
  # Criar tabela de medicamentos

  1. Nova Tabela
    - `medicamentos`
      - `id` (uuid, primary key)
      - `nome` (text)
      - `medicamento` (jsonb) - dados serializados do medicamento
      - `user_id` (uuid, foreign key para auth.users)
      - `created_at` (timestamp)
      - `updated_at` (timestamp)

  2. Segurança
    - Habilitar RLS na tabela `medicamentos`
    - Políticas baseadas no user_id
*/

CREATE TABLE IF NOT EXISTS medicamentos (
  id uuid PRIMARY KEY DEFAULT gen_random_uuid(),
  nome text,
  medicamento jsonb,
  user_id uuid REFERENCES auth.users(id) ON DELETE CASCADE,
  created_at timestamptz DEFAULT now(),
  updated_at timestamptz DEFAULT now()
);

-- Habilitar RLS
ALTER TABLE medicamentos ENABLE ROW LEVEL SECURITY;

-- Políticas de acesso
CREATE POLICY "Users can read own medicamentos"
  ON medicamentos
  FOR SELECT
  TO authenticated
  USING (auth.uid() = user_id);

CREATE POLICY "Users can insert own medicamentos"
  ON medicamentos
  FOR INSERT
  TO authenticated
  WITH CHECK (auth.uid() = user_id);

CREATE POLICY "Users can update own medicamentos"
  ON medicamentos
  FOR UPDATE
  TO authenticated
  USING (auth.uid() = user_id);

CREATE POLICY "Users can delete own medicamentos"
  ON medicamentos
  FOR DELETE
  TO authenticated
  USING (auth.uid() = user_id);

-- Trigger para updated_at
CREATE TRIGGER update_medicamentos_updated_at
  BEFORE UPDATE ON medicamentos
  FOR EACH ROW
  EXECUTE FUNCTION update_updated_at_column();

-- Índices para performance
CREATE INDEX IF NOT EXISTS idx_medicamentos_user_id ON medicamentos(user_id);
CREATE INDEX IF NOT EXISTS idx_medicamentos_nome ON medicamentos USING gin(to_tsvector('portuguese', nome));
/*
  # Criar tabela de pacientes

  1. Nova Tabela
    - `pacientes`
      - `id` (uuid, primary key)
      - `nome` (text, required)
      - `endereco` (text)
      - `telefone` (text)
      - `data_nascimento` (date)
      - `sexo` (text)
      - `cpf` (text)
      - `cns` (text) - Cartão Nacional de Saúde
      - `nome_mae` (text)
      - `user_id` (uuid, foreign key)
      - `created_at` (timestamp)
      - `updated_at` (timestamp)

  2. Segurança
    - Habilitar RLS na tabela `pacientes`
    - Políticas baseadas no user_id
*/

CREATE TABLE IF NOT EXISTS pacientes (
  id uuid PRIMARY KEY DEFAULT gen_random_uuid(),
  nome text NOT NULL,
  endereco text,
  telefone text,
  data_nascimento date,
  sexo text CHECK (sexo IN ('M', 'F', 'Masculino', 'Feminino')),
  cpf text,
  cns text,
  nome_mae text,
  user_id uuid REFERENCES auth.users(id) ON DELETE CASCADE,
  created_at timestamptz DEFAULT now(),
  updated_at timestamptz DEFAULT now()
);

-- Habilitar RLS
ALTER TABLE pacientes ENABLE ROW LEVEL SECURITY;

-- Políticas de acesso
CREATE POLICY "Users can read own pacientes"
  ON pacientes
  FOR SELECT
  TO authenticated
  USING (auth.uid() = user_id);

CREATE POLICY "Users can insert own pacientes"
  ON pacientes
  FOR INSERT
  TO authenticated
  WITH CHECK (auth.uid() = user_id);

CREATE POLICY "Users can update own pacientes"
  ON pacientes
  FOR UPDATE
  TO authenticated
  USING (auth.uid() = user_id);

CREATE POLICY "Users can delete own pacientes"
  ON pacientes
  FOR DELETE
  TO authenticated
  USING (auth.uid() = user_id);

-- Trigger para updated_at
CREATE TRIGGER update_pacientes_updated_at
  BEFORE UPDATE ON pacientes
  FOR EACH ROW
  EXECUTE FUNCTION update_updated_at_column();

-- Índices para performance
CREATE INDEX IF NOT EXISTS idx_pacientes_user_id ON pacientes(user_id);
CREATE INDEX IF NOT EXISTS idx_pacientes_nome ON pacientes USING gin(to_tsvector('portuguese', nome));
CREATE INDEX IF NOT EXISTS idx_pacientes_cpf ON pacientes(cpf) WHERE cpf IS NOT NULL;
CREATE INDEX IF NOT EXISTS idx_pacientes_cns ON pacientes(cns) WHERE cns IS NOT NULL;
/*
  # Criar tabela de solicitações

  1. Nova Tabela
    - `solicitacoes`
      - `id` (uuid, primary key)
      - `nome` (text, required)
      - `user_id` (uuid, foreign key)
      - `created_at` (timestamp)
      - `updated_at` (timestamp)

  2. Segurança
    - Habilitar RLS na tabela `solicitacoes`
    - Políticas baseadas no user_id
*/

CREATE TABLE IF NOT EXISTS solicitacoes (
  id uuid PRIMARY KEY DEFAULT gen_random_uuid(),
  nome text NOT NULL,
  user_id uuid REFERENCES auth.users(id) ON DELETE CASCADE,
  created_at timestamptz DEFAULT now(),
  updated_at timestamptz DEFAULT now()
);

-- Habilitar RLS
ALTER TABLE solicitacoes ENABLE ROW LEVEL SECURITY;

-- Políticas de acesso
CREATE POLICY "Users can read own solicitacoes"
  ON solicitacoes
  FOR SELECT
  TO authenticated
  USING (auth.uid() = user_id);

CREATE POLICY "Users can insert own solicitacoes"
  ON solicitacoes
  FOR INSERT
  TO authenticated
  WITH CHECK (auth.uid() = user_id);

CREATE POLICY "Users can update own solicitacoes"
  ON solicitacoes
  FOR UPDATE
  TO authenticated
  USING (auth.uid() = user_id);

CREATE POLICY "Users can delete own solicitacoes"
  ON solicitacoes
  FOR DELETE
  TO authenticated
  USING (auth.uid() = user_id);

-- Trigger para updated_at
CREATE TRIGGER update_solicitacoes_updated_at
  BEFORE UPDATE ON solicitacoes
  FOR EACH ROW
  EXECUTE FUNCTION update_updated_at_column();

-- Índices para performance
CREATE INDEX IF NOT EXISTS idx_solicitacoes_user_id ON solicitacoes(user_id);
CREATE INDEX IF NOT EXISTS idx_solicitacoes_nome ON solicitacoes USING gin(to_tsvector('portuguese', nome));

-- Inserir dados de exemplo de solicitações comuns
INSERT INTO solicitacoes (nome, user_id) VALUES
('Hemograma completo', (SELECT id FROM auth.users LIMIT 1)),
('Glicemia de jejum', (SELECT id FROM auth.users LIMIT 1)),
('Colesterol total e frações', (SELECT id FROM auth.users LIMIT 1)),
('Triglicerídeos', (SELECT id FROM auth.users LIMIT 1)),
('Creatinina', (SELECT id FROM auth.users LIMIT 1)),
('Ureia', (SELECT id FROM auth.users LIMIT 1)),
('TGO/TGP', (SELECT id FROM auth.users LIMIT 1)),
('TSH', (SELECT id FROM auth.users LIMIT 1)),
('Raio-X de tórax', (SELECT id FROM auth.users LIMIT 1)),
('Eletrocardiograma', (SELECT id FROM auth.users LIMIT 1)),
('Ultrassom abdominal', (SELECT id FROM auth.users LIMIT 1)),
('Ecocardiograma', (SELECT id FROM auth.users LIMIT 1));
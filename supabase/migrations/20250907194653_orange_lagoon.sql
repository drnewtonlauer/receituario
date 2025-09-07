/*
  # Criar tabela de clínicas

  1. Nova Tabela
    - `clinicas`
      - `id` (uuid, primary key)
      - `nome` (text, required)
      - `endereco` (text)
      - `telefone` (text)
      - `ativo` (boolean, default true)
      - `procedimentos` (text)
      - `email` (text)
      - `logo` (text)
      - `created_at` (timestamp)
      - `updated_at` (timestamp)

  2. Segurança
    - Habilitar RLS na tabela `clinicas`
    - Adicionar políticas para usuários autenticados
*/

CREATE TABLE IF NOT EXISTS clinicas (
  id uuid PRIMARY KEY DEFAULT gen_random_uuid(),
  nome text NOT NULL,
  endereco text,
  telefone text,
  ativo boolean NOT NULL DEFAULT true,
  procedimentos text,
  email text,
  logo text,
  created_at timestamptz DEFAULT now(),
  updated_at timestamptz DEFAULT now()
);

-- Habilitar RLS
ALTER TABLE clinicas ENABLE ROW LEVEL SECURITY;

-- Políticas de acesso
CREATE POLICY "Users can read clinicas"
  ON clinicas
  FOR SELECT
  TO authenticated
  USING (true);

CREATE POLICY "Users can insert clinicas"
  ON clinicas
  FOR INSERT
  TO authenticated
  WITH CHECK (true);

CREATE POLICY "Users can update clinicas"
  ON clinicas
  FOR UPDATE
  TO authenticated
  USING (true);

-- Trigger para updated_at
CREATE OR REPLACE FUNCTION update_updated_at_column()
RETURNS TRIGGER AS $$
BEGIN
  NEW.updated_at = now();
  RETURN NEW;
END;
$$ language 'plpgsql';

CREATE TRIGGER update_clinicas_updated_at
  BEFORE UPDATE ON clinicas
  FOR EACH ROW
  EXECUTE FUNCTION update_updated_at_column();

-- Inserir dados de exemplo
INSERT INTO clinicas (nome, endereco, telefone, email) VALUES
('Hospital Municipal de Santarém', 'Av. Mendonça Furtado, 2411', '(93) 3523-2000', 'contato@hms.pa.gov.br'),
('Clínica Med Lauer', 'Rua dos Médicos, 123', '(93) 99220-1155', 'contato@medlauer.com.br'),
('UPA 24h Santarém', 'Av. São Sebastião, 1500', '(93) 3523-1500', 'upa@santarem.pa.gov.br');
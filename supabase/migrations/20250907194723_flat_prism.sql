/*
  # Criar tabela de modelos

  1. Nova Tabela
    - `modelos`
      - `id` (uuid, primary key)
      - `nome` (text, required)
      - `modelo` (jsonb, required) - dados serializados do modelo
      - `fav` (boolean, default false) - favorito
      - `user_id` (uuid, foreign key)
      - `created_at` (timestamp)
      - `updated_at` (timestamp)

  2. Segurança
    - Habilitar RLS na tabela `modelos`
    - Políticas baseadas no user_id
*/

CREATE TABLE IF NOT EXISTS modelos (
  id uuid PRIMARY KEY DEFAULT gen_random_uuid(),
  nome text NOT NULL,
  modelo jsonb NOT NULL,
  fav boolean DEFAULT false,
  user_id uuid REFERENCES auth.users(id) ON DELETE CASCADE,
  created_at timestamptz DEFAULT now(),
  updated_at timestamptz DEFAULT now()
);

-- Habilitar RLS
ALTER TABLE modelos ENABLE ROW LEVEL SECURITY;

-- Políticas de acesso
CREATE POLICY "Users can read own modelos"
  ON modelos
  FOR SELECT
  TO authenticated
  USING (auth.uid() = user_id);

CREATE POLICY "Users can insert own modelos"
  ON modelos
  FOR INSERT
  TO authenticated
  WITH CHECK (auth.uid() = user_id);

CREATE POLICY "Users can update own modelos"
  ON modelos
  FOR UPDATE
  TO authenticated
  USING (auth.uid() = user_id);

CREATE POLICY "Users can delete own modelos"
  ON modelos
  FOR DELETE
  TO authenticated
  USING (auth.uid() = user_id);

-- Trigger para updated_at
CREATE TRIGGER update_modelos_updated_at
  BEFORE UPDATE ON modelos
  FOR EACH ROW
  EXECUTE FUNCTION update_updated_at_column();

-- Índices para performance
CREATE INDEX IF NOT EXISTS idx_modelos_user_id ON modelos(user_id);
CREATE INDEX IF NOT EXISTS idx_modelos_fav ON modelos(fav) WHERE fav = true;
CREATE INDEX IF NOT EXISTS idx_modelos_nome ON modelos USING gin(to_tsvector('portuguese', nome));
/*
  # Criar tabela de modelos pediátricos

  1. Nova Tabela
    - `modelos_ped`
      - `id` (uuid, primary key)
      - `nome` (text, required)
      - `modelo` (jsonb, required) - dados serializados do modelo
      - `fav` (boolean, default false) - favorito
      - `user_id` (uuid, foreign key)
      - `created_at` (timestamp)
      - `updated_at` (timestamp)

  2. Segurança
    - Habilitar RLS na tabela `modelos_ped`
    - Políticas baseadas no user_id
*/

CREATE TABLE IF NOT EXISTS modelos_ped (
  id uuid PRIMARY KEY DEFAULT gen_random_uuid(),
  nome text NOT NULL,
  modelo jsonb NOT NULL,
  fav boolean DEFAULT false,
  user_id uuid REFERENCES auth.users(id) ON DELETE CASCADE,
  created_at timestamptz DEFAULT now(),
  updated_at timestamptz DEFAULT now()
);

-- Habilitar RLS
ALTER TABLE modelos_ped ENABLE ROW LEVEL SECURITY;

-- Políticas de acesso
CREATE POLICY "Users can read own modelos_ped"
  ON modelos_ped
  FOR SELECT
  TO authenticated
  USING (auth.uid() = user_id);

CREATE POLICY "Users can insert own modelos_ped"
  ON modelos_ped
  FOR INSERT
  TO authenticated
  WITH CHECK (auth.uid() = user_id);

CREATE POLICY "Users can update own modelos_ped"
  ON modelos_ped
  FOR UPDATE
  TO authenticated
  USING (auth.uid() = user_id);

CREATE POLICY "Users can delete own modelos_ped"
  ON modelos_ped
  FOR DELETE
  TO authenticated
  USING (auth.uid() = user_id);

-- Trigger para updated_at
CREATE TRIGGER update_modelos_ped_updated_at
  BEFORE UPDATE ON modelos_ped
  FOR EACH ROW
  EXECUTE FUNCTION update_updated_at_column();

-- Índices para performance
CREATE INDEX IF NOT EXISTS idx_modelos_ped_user_id ON modelos_ped(user_id);
CREATE INDEX IF NOT EXISTS idx_modelos_ped_fav ON modelos_ped(fav) WHERE fav = true;
CREATE INDEX IF NOT EXISTS idx_modelos_ped_nome ON modelos_ped USING gin(to_tsvector('portuguese', nome));
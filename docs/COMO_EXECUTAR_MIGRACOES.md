# Como Executar as Migrações no Supabase

## 📋 Passo a Passo

### 1. Acesse o Painel do Supabase
- Vá para [supabase.com](https://supabase.com)
- Faça login na sua conta
- Selecione o projeto: `cnofjlswbgiajllyqtxl`

### 2. Abra o SQL Editor
- No menu lateral, clique em **"SQL Editor"**
- Clique em **"New query"**

### 3. Execute as Migrações na Ordem

Execute cada arquivo SQL na seguinte ordem:

#### 3.1 Tabela de Clínicas
```sql
-- Copie e cole o conteúdo de: supabase/migrations/create_clinicas_table.sql
```

#### 3.2 Tabela de Medicamentos
```sql
-- Copie e cole o conteúdo de: supabase/migrations/create_medicamentos_table.sql
```

#### 3.3 Tabela de Medicamentos Pediátricos
```sql
-- Copie e cole o conteúdo de: supabase/migrations/create_medicamentos_ped_table.sql
```

#### 3.4 Tabela de Medicamentos Pediátricos EV
```sql
-- Copie e cole o conteúdo de: supabase/migrations/create_medicamentos_ped_ev_table.sql
```

#### 3.5 Tabela de Modelos
```sql
-- Copie e cole o conteúdo de: supabase/migrations/create_modelos_table.sql
```

#### 3.6 Tabela de Modelos Pediátricos
```sql
-- Copie e cole o conteúdo de: supabase/migrations/create_modelos_ped_table.sql
```

#### 3.7 Tabela de Solicitações
```sql
-- Copie e cole o conteúdo de: supabase/migrations/create_solicitacoes_table.sql
```

#### 3.8 Tabela de Perfis de Usuários
```sql
-- Copie e cole o conteúdo de: supabase/migrations/create_user_profiles_table.sql
```

#### 3.9 Dados de Exemplo (Opcional)
```sql
-- Copie e cole o conteúdo de: supabase/migrations/insert_sample_data.sql
```

### 4. Verificar se Tudo Foi Criado

No **Table Editor** do Supabase, você deve ver:
- ✅ `clinicas`
- ✅ `medicamentos`
- ✅ `medicamentos_ped`
- ✅ `medicamentos_ped_ev`
- ✅ `modelos`
- ✅ `modelos_ped`
- ✅ `solicitacoes`
- ✅ `user_profiles`
- ✅ `pacientes`

### 5. Configurar Autenticação

No painel **Authentication > Settings**:
- ✅ Confirme que **"Enable email confirmations"** está **DESABILITADO**
- ✅ Configure **"Site URL"** para `http://localhost:3000`

### 🚨 Importante

- Execute as migrações **na ordem** listada acima
- Cada migração deve ser executada **separadamente**
- Se houver erro, verifique se a migração anterior foi executada com sucesso
- Os dados de exemplo são opcionais e podem ser removidos depois

### ✅ Teste Final

Após executar todas as migrações:
1. Acesse `http://localhost:3000`
2. Vá para `/register` e crie uma conta
3. Faça login em `/login`
4. Acesse o `/dashboard` para ver o teste de conexão

**Status esperado:** "Conexão Supabase: SUCESSO! ✅"
# Med Lauer - Sistema de Prescrição Médica

Sistema moderno de prescrição médica desenvolvido com Next.js, TypeScript, TailwindCSS e Supabase.

## 🚀 Tecnologias

- **Next.js 14** - Framework React com App Router
- **TypeScript** - Tipagem estática
- **TailwindCSS** - Framework CSS utilitário
- **Supabase** - Backend como serviço (Auth, Database, Storage)
- **Lucide React** - Ícones modernos

## 📋 Funcionalidades

- ✅ **Autenticação completa** - Login, registro e recuperação de senha
- ✅ **Receituário digital** - Criação de receitas médicas com modelos
- ✅ **Receituário pediátrico** - Cálculos automáticos baseados no peso
- ✅ **Solicitações médicas** - Requisições de exames e procedimentos
- ✅ **Atestados médicos** - Emissão de atestados e comparecimentos
- ✅ **Dashboard intuitivo** - Painel de controle com estatísticas
- ✅ **Modelos salvos** - Templates personalizáveis para agilizar o trabalho
- ✅ **Design responsivo** - Funciona em desktop, tablet e mobile
- ✅ **Acessibilidade WCAG AA** - Interface acessível para todos
- ✅ **SEO otimizado** - Metadados, sitemap e robots.txt

## 🛠️ Instalação

### Pré-requisitos

- Node.js 18+ 
- npm ou yarn
- Conta no Supabase

### 1. Clone e instale dependências

```bash
cd app
npm install
```

### 2. Configure o Supabase

1. Crie um projeto no [Supabase](https://supabase.com)
2. Copie as credenciais do projeto
3. Crie o arquivo `.env.local` baseado no `.env.example`:

```bash
cp .env.example .env.local
```

4. Preencha as variáveis no `.env.local`:

```env
NEXT_PUBLIC_SUPABASE_URL=sua_url_do_supabase
NEXT_PUBLIC_SUPABASE_ANON_KEY=sua_chave_anonima_do_supabase
```

### 3. Configure o banco de dados

Execute as migrações SQL no Supabase para criar as tabelas necessárias:

```sql
-- Criar tabelas baseadas no esquema legacy
-- Ver: /docs/esquema_mysql_resumo.md para referência

-- Tabela de clínicas
CREATE TABLE clinicas (
  idclin SERIAL PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  endereco TEXT,
  telefone VARCHAR(30),
  ativo INTEGER NOT NULL DEFAULT 1,
  procedimentos TEXT,
  email TEXT,
  logo VARCHAR(50),
  created_at TIMESTAMP DEFAULT NOW(),
  updated_at TIMESTAMP DEFAULT NOW()
);

-- Tabela de medicamentos
CREATE TABLE medicamentos (
  id SERIAL PRIMARY KEY,
  nome TEXT,
  medicamento JSONB,
  created_at TIMESTAMP DEFAULT NOW(),
  updated_at TIMESTAMP DEFAULT NOW()
);

-- Tabela de medicamentos pediátricos
CREATE TABLE medicamentos_ped (
  id SERIAL PRIMARY KEY,
  nome TEXT NOT NULL,
  medicamento JSONB NOT NULL,
  calc FLOAT NOT NULL,
  created_at TIMESTAMP DEFAULT NOW(),
  updated_at TIMESTAMP DEFAULT NOW()
);

-- Tabela de medicamentos pediátricos EV
CREATE TABLE medicamentos_ped_ev (
  id SERIAL PRIMARY KEY,
  nome TEXT NOT NULL,
  medicamento JSONB NOT NULL,
  calc FLOAT NOT NULL,
  created_at TIMESTAMP DEFAULT NOW(),
  updated_at TIMESTAMP DEFAULT NOW()
);

-- Tabela de modelos
CREATE TABLE modelos (
  id SERIAL PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  modelo JSONB NOT NULL,
  fav INTEGER DEFAULT 0,
  idmd INTEGER NOT NULL,
  created_at TIMESTAMP DEFAULT NOW(),
  updated_at TIMESTAMP DEFAULT NOW()
);

-- Tabela de modelos pediátricos
CREATE TABLE modelos_ped (
  id SERIAL PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  modelo JSONB NOT NULL,
  fav INTEGER DEFAULT 0,
  idmd INTEGER NOT NULL,
  created_at TIMESTAMP DEFAULT NOW(),
  updated_at TIMESTAMP DEFAULT NOW()
);

-- Tabela de solicitações
CREATE TABLE solicitacoes (
  id SERIAL PRIMARY KEY,
  nome TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT NOW(),
  updated_at TIMESTAMP DEFAULT NOW()
);

-- Habilitar RLS (Row Level Security)
ALTER TABLE clinicas ENABLE ROW LEVEL SECURITY;
ALTER TABLE medicamentos ENABLE ROW LEVEL SECURITY;
ALTER TABLE medicamentos_ped ENABLE ROW LEVEL SECURITY;
ALTER TABLE medicamentos_ped_ev ENABLE ROW LEVEL SECURITY;
ALTER TABLE modelos ENABLE ROW LEVEL SECURITY;
ALTER TABLE modelos_ped ENABLE ROW LEVEL SECURITY;
ALTER TABLE solicitacoes ENABLE ROW LEVEL SECURITY;

-- Políticas básicas (ajustar conforme necessário)
CREATE POLICY "Users can read own data" ON medicamentos FOR SELECT TO authenticated USING (true);
CREATE POLICY "Users can insert own data" ON medicamentos FOR INSERT TO authenticated WITH CHECK (true);
CREATE POLICY "Users can update own data" ON medicamentos FOR UPDATE TO authenticated USING (true);
CREATE POLICY "Users can delete own data" ON medicamentos FOR DELETE TO authenticated USING (true);

-- Repetir políticas similares para outras tabelas...
```

### 4. Execute o projeto

```bash
npm run dev
```

Acesse [http://localhost:3000](http://localhost:3000) para ver a aplicação.

## 📁 Estrutura do Projeto

```
app/
├── src/
│   ├── app/                    # App Router (Next.js 13+)
│   │   ├── (auth)/            # Grupo de rotas de autenticação
│   │   │   ├── login/         # Página de login
│   │   │   └── register/      # Página de registro
│   │   ├── dashboard/         # Dashboard principal
│   │   ├── receituario/       # Receituário médico
│   │   ├── solicitacao/       # Solicitações médicas
│   │   ├── atestado/          # Atestados médicos
│   │   ├── globals.css        # Estilos globais
│   │   ├── layout.tsx         # Layout principal
│   │   ├── page.tsx           # Página inicial
│   │   ├── sitemap.ts         # Sitemap para SEO
│   │   └── robots.ts          # Robots.txt para SEO
│   ├── components/            # Componentes reutilizáveis
│   │   ├── ui/               # Componentes de interface
│   │   └── layout/           # Componentes de layout
│   └── lib/                  # Utilitários e configurações
│       ├── supabase.ts       # Cliente Supabase
│       ├── auth.ts           # Serviços de autenticação
│       ├── database.types.ts # Tipos do banco de dados
│       └── utils.ts          # Funções utilitárias
├── .env.example              # Exemplo de variáveis de ambiente
├── .env.local               # Variáveis de ambiente (não commitado)
├── next.config.js           # Configuração do Next.js
├── tailwind.config.js       # Configuração do Tailwind
├── tsconfig.json           # Configuração do TypeScript
└── package.json            # Dependências e scripts
```

## 🔧 Scripts Disponíveis

```bash
# Desenvolvimento
npm run dev

# Build para produção
npm run build

# Iniciar em produção
npm run start

# Linting
npm run lint

# Verificação de tipos
npm run type-check
```

## 🎨 Personalização

### Cores e Tema

Edite `tailwind.config.js` para personalizar as cores:

```js
theme: {
  extend: {
    colors: {
      primary: {
        50: '#eff6ff',
        500: '#3b82f6',
        600: '#2563eb',
        // ...
      },
      medical: {
        blue: '#0c6af2',
        light: '#f8fafb',
      }
    }
  }
}
```

### Componentes

Os componentes estão em `src/components/ui/` e podem ser personalizados conforme necessário.

## 🚀 Deploy

### Vercel (Recomendado)

1. Conecte seu repositório ao Vercel
2. Configure as variáveis de ambiente
3. Deploy automático a cada push

### Outras plataformas

O projeto é compatível com qualquer plataforma que suporte Next.js:
- Netlify
- Railway
- DigitalOcean App Platform
- AWS Amplify

## 📝 Migração do Sistema Legacy

Este projeto substitui o sistema PHP legacy localizado em `/legacy`. As principais melhorias incluem:

- **Arquitetura moderna** - De PHP procedural para Next.js/React
- **Banco de dados** - De MySQL para PostgreSQL (Supabase)
- **Autenticação** - Sistema seguro com Supabase Auth
- **Interface** - Design moderno e responsivo
- **Performance** - Carregamento rápido e otimizado
- **Manutenibilidade** - Código TypeScript bem estruturado

## 🤝 Contribuição

1. Fork o projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo `LICENSE` para mais detalhes.

## 👥 Autores

- **Newton Lauer** - Desenvolvedor principal
- **Anísio Neto** - Colaborador

## 📞 Suporte

Para suporte, entre em contato através do email ou abra uma issue no GitHub.

---

**Med Lauer** - Modernizando a prática médica com tecnologia 🏥✨
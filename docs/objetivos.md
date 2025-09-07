# Objetivos da migração

## Meta principal
Reescrever o sistema legado que está em **legacy/** usando uma stack moderna, organizada e conectada ao Supabase.

## Tecnologias alvo
- **Front-end**: Next.js (App Router) + TailwindCSS
- **Banco de dados**: Supabase (Postgres)
- **Autenticação**: Supabase Auth
- **Armazenamento de arquivos**: Supabase Storage
- **Estilo e responsividade**: TailwindCSS
- **Controle de estado**: Supabase-js (client-side) / server components

## Regras de negócio
- Preservar as rotas e funcionalidades principais listadas em `legacy/` e no schema `docs/esquema_mysql_resumo.md`.
- Migrar as tabelas e dados do MySQL (`db/mysql/`) para o Supabase (Postgres).
- Reimplementar formulários e cadastros usando Supabase (CRUD completo).
- Manter **usuários** e autenticação centralizada no Supabase.
- Melhorar acessibilidade (WCAG AA) e SEO básico (metatags, sitemap, robots.txt).

## Estrutura do projeto (esperada)
- `legacy/` → código antigo (apenas referência)
- `app/` → aplicação nova (Next.js + Tailwind + Supabase)
- `db/` → arquivos relacionados ao banco (MySQL dump + futura versão em Postgres)
- `docs/` → documentação auxiliar (objetivos, esquema de tabelas, anotações de migração)

## Variáveis de ambiente
- Tudo deve ser configurado em `.env` (exemplo em `.env.example`).
- Nunca expor chaves privadas no repositório.

## Entregáveis esperados
- Projeto rodando em `/app` com conexão ao Supabase.
- Autenticação funcionando (login, cadastro, recuperação de senha).
- Telas principais recriadas em Next.js/Tailwind.
- Banco migrado e testado no Supabase.
- README atualizado com instruções de execução.

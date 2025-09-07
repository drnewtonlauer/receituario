/*
  # Inserir dados de exemplo

  1. Dados de Exemplo
    - Medicamentos comuns
    - Medicamentos pediátricos
    - Solicitações padrão
    - Modelos de receita

  2. Observações
    - Dados serão associados ao primeiro usuário criado
    - Podem ser removidos após testes
*/

-- Inserir medicamentos comuns de exemplo
INSERT INTO medicamentos (nome, medicamento, user_id) VALUES
('Dipirona 500mg', '{"med": "Dipirona 500mg", "qtd": "1 caixa", "pos": "Tomar 1 comprimido de 6 em 6 horas se dor ou febre"}', (SELECT id FROM auth.users LIMIT 1)),
('Paracetamol 750mg', '{"med": "Paracetamol 750mg", "qtd": "1 caixa", "pos": "Tomar 1 comprimido de 8 em 8 horas se dor ou febre"}', (SELECT id FROM auth.users LIMIT 1)),
('Omeprazol 20mg', '{"med": "Omeprazol 20mg", "qtd": "1 caixa", "pos": "Tomar 1 cápsula pela manhã em jejum"}', (SELECT id FROM auth.users LIMIT 1)),
('Losartana 50mg', '{"med": "Losartana 50mg", "qtd": "1 caixa", "pos": "Tomar 1 comprimido pela manhã"}', (SELECT id FROM auth.users LIMIT 1)),
('Sinvastatina 20mg', '{"med": "Sinvastatina 20mg", "qtd": "1 caixa", "pos": "Tomar 1 comprimido à noite"}', (SELECT id FROM auth.users LIMIT 1));

-- Inserir medicamentos pediátricos de exemplo
INSERT INTO medicamentos_ped (nome, medicamento, calc, user_id) VALUES
('Dipirona Gotas', '{"med": "Dipirona Gotas", "qtd": "1 frasco", "pos": "gotas de 6 em 6 horas se dor ou febre"}', 1.5, (SELECT id FROM auth.users LIMIT 1)),
('Paracetamol Gotas', '{"med": "Paracetamol Gotas", "qtd": "1 frasco", "pos": "gotas de 6 em 6 horas se dor ou febre"}', 2.0, (SELECT id FROM auth.users LIMIT 1)),
('Amoxicilina Suspensão', '{"med": "Amoxicilina Suspensão", "qtd": "1 frasco", "pos": "ml de 8 em 8 horas por 7 dias"}', 15.0, (SELECT id FROM auth.users LIMIT 1)),
('Prednisolona Gotas', '{"med": "Prednisolona Gotas", "qtd": "1 frasco", "pos": "gotas de 12 em 12 horas por 5 dias"}', 0.5, (SELECT id FROM auth.users LIMIT 1));

-- Inserir medicamentos pediátricos EV de exemplo
INSERT INTO medicamentos_ped_ev (nome, medicamento, calc, user_id) VALUES
('Dipirona EV', '{"med": "Dipirona EV", "pos": "mg EV de 6 em 6 horas"}', 15.0, (SELECT id FROM auth.users LIMIT 1)),
('Paracetamol EV', '{"med": "Paracetamol EV", "pos": "mg EV de 6 em 6 horas"}', 15.0, (SELECT id FROM auth.users LIMIT 1)),
('Dexametasona EV', '{"med": "Dexametasona EV", "pos": "mg EV de 12 em 12 horas"}', 0.6, (SELECT id FROM auth.users LIMIT 1)),
('Furosemida EV', '{"med": "Furosemida EV", "pos": "mg EV se necessário"}', 1.0, (SELECT id FROM auth.users LIMIT 1));

-- Inserir modelos de receita de exemplo
INSERT INTO modelos (nome, modelo, fav, user_id) VALUES
('Hipertensão Básica', '{"receita": [{"med": "Losartana 50mg", "qtd": "1 caixa", "pos": "Tomar 1 comprimido pela manhã"}, {"med": "Hidroclorotiazida 25mg", "qtd": "1 caixa", "pos": "Tomar 1 comprimido pela manhã"}]}', true, (SELECT id FROM auth.users LIMIT 1)),
('Diabetes Tipo 2', '{"receita": [{"med": "Metformina 850mg", "qtd": "1 caixa", "pos": "Tomar 1 comprimido de 12 em 12 horas"}, {"med": "Glibenclamida 5mg", "qtd": "1 caixa", "pos": "Tomar 1 comprimido antes do café da manhã"}]}', true, (SELECT id FROM auth.users LIMIT 1)),
('Gripe e Resfriado', '{"receita": [{"med": "Paracetamol 750mg", "qtd": "1 caixa", "pos": "Tomar 1 comprimido de 8 em 8 horas se febre"}, {"med": "Loratadina 10mg", "qtd": "1 caixa", "pos": "Tomar 1 comprimido à noite"}]}', false, (SELECT id FROM auth.users LIMIT 1));

-- Inserir modelos pediátricos de exemplo
INSERT INTO modelos_ped (nome, modelo, fav, user_id) VALUES
('Febre Infantil', '{"receita": [{"med": "Dipirona Gotas", "qtd": "1 frasco", "pos": "gotas de 6 em 6 horas se febre", "calc": 1.5}, {"med": "Paracetamol Gotas", "qtd": "1 frasco", "pos": "gotas de 6 em 6 horas (alternado com dipirona)", "calc": 2.0}]}', true, (SELECT id FROM auth.users LIMIT 1)),
('Infecção Respiratória', '{"receita": [{"med": "Amoxicilina Suspensão", "qtd": "1 frasco", "pos": "ml de 8 em 8 horas por 7 dias", "calc": 15.0}, {"med": "Prednisolona Gotas", "qtd": "1 frasco", "pos": "gotas de 12 em 12 horas por 5 dias", "calc": 0.5}]}', true, (SELECT id FROM auth.users LIMIT 1));
# Sistema de Registro de Atividades

Este projeto foi desenvolvido durante meu **estágio na Prefeitura**, como parte de um desafio prático proposto por **Pedro Kislansky**, com o objetivo de aprimorar minhas habilidades em **Laravel 11** e **PHP 8.2**. O sistema foi projetado para permitir que funcionários registrem suas atividades diárias, garantindo controle, rastreabilidade e segurança das informações.

## Funcionalidades Principais

- **Cadastro de Atividades**: Funcionários podem registrar suas atividades diárias, incluindo horário de início e término.
- **Gerenciamento de Atividades**: Possibilidade de listar, editar e excluir atividades de acordo com o nível de permissão do usuário.
- **Controle de Acesso**: Diferentes níveis de usuários (Administrador Geral, Administrador do Órgão, Leitor) garantindo que cada perfil tenha acesso adequado às informações.
- **Validações**:
  - A inserção de atividades é limitada ao dia corrente.
  - As atividades não podem ter horários sobrepostos.
  - A exclusão de atividades é lógica, garantindo rastreabilidade.
- **Filtro por Órgão**: Administradores podem visualizar atividades conforme sua permissão.

## Estrutura do Banco de Dados

O sistema conta com duas tabelas principais:

1. **Usuários**:
   - CPF (chave primária)
   - Nome, E-mail, Celular
   - Perfil e Órgão de vinculação

2. **Atividades**:
   - Data, Horário de início e término
   - Categoria (pré-definida)
   - Descrição opcional
   - Relacionamento com usuário e órgão responsável

## Perfis de Usuários

- **Administrador Geral (AG)**: Controle total sobre todas as atividades e usuários.
- **Administrador do Órgão (AO)**: Pode gerenciar atividades dentro de seu órgão específico.
- **Leitor (LE)**: Acesso apenas para consulta das atividades permitidas.

## 🛠 Tecnologias Utilizadas

- **Backend**: Laravel 11 (PHP 8.2)
- **Banco de Dados**: MySQL
- **Frontend**: Blade, Bootstrap (ou outra tecnologia utilizada)
- **Autenticação**: Implementação baseada em login de usuários

##  Como Executar o Projeto

1. Clone este repositório:
   ```bash
   git clone https://github.com/seu-usuario/seu-repositorio.git
   ```
2. Instale as dependências:
   ```bash
   composer install
   ```
3. Configure o arquivo `.env` com suas credenciais do banco de dados.
4. Execute as migrations:
   ```bash
   php artisan migrate
   ```
5. Inicie o servidor:
   ```bash
   php artisan serve
   ```

Agora, acesse `http://localhost:8000` e comece a utilizar o sistema!

